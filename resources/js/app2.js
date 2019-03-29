require('./vendor');
import Utils from './commons/utils';
import Layout from './commons/layout';
import Laroute from './commons/laroute';
import axios from 'axios';
import Vue from 'vue';
import Moment from 'moment';
import MomentTZ from 'moment-timezone';
import Echo from "laravel-echo";


window.moment   = Moment;
window.momentTZ = MomentTZ;
window.Utils    = Utils();
window.Layout   = Layout();
window.laroute  = Laroute;
window.Vue      = Vue;


require('./filters/bootstrap');
require('./directives/bootstrap');
require('./components/bootstrap');
require('./filters/bootstrap');
require('./vue/bootstrap');

window.Pusher = require('pusher-js');
Pusher.logToConsole = true;
console.log('Slc', window.Slc);
if (window.Slc.pusher) {
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key        : window.Slc.pusher,
        cluster    : 'us2',
    });
}

window.EventBus = window.Bus = new Vue();


import VueTheMask from 'vue-the-mask';
Vue.use(VueTheMask);

import VCalendar from 'v-calendar'
Vue.use(VCalendar, {
    formats: {
        title: 'MMMM YYYY',
        locale: 'pt-BR',
        weekdays: 'W',
        navMonths: 'MMM',
        input: ['L', 'YYYY-MM-DD', 'YYYY/MM/DD'],
        dayPopover: 'L',
    }
});

window.App = new Vue({
    el: '#app',
    data() {
        return {
            user         : 'Slc' in window ? window.Slc.user : null,
            settings     : 'Slc' in window ? window.Slc.settings : null,
            context      : 'Slc' in window ? window.Slc : null,
            pageHeading  : null,
            isMenuVisible: true
        }
    },

    created() {
        console.log("App Created");
        window.Layout.init();
        let self = this;

        EventBus.$on(['loadCurrentUser', 'userUpdated'], () => {
            axios.get(laroute.route('api.current.user'))
                .then(response => {
                    self.user = response.data;
                });
        });

        EventBus.$on('settingsUpdated', () => {
            axios.get(laroute.route('api.current.settings'))
                .then(response => {
                    self.user = response.data;
                });
        });

        if (window.Slc.pusher && this.user) {
            window.Echo.private(`App.User.${this.user.id}`)
                .listen('ConsultaStatusChanged', (e) =>
                {
                    EventBus.$emit('statusChanged', e);
                })
                .listen('ConsultaNew', (e) =>
                    {
                        EventBus.$emit('consultaCreated', e);
                    }
                );
        }

        if(window.Slc.pusher) {
            window.Echo.channel(`paciente-atendido`)
                .listen('PacienteAtendido', (e) => {
                    EventBus.$emit('pacienteAtendido', e);
                })
        }
    },
});

