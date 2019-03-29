/**
 * Created by Terminal on 30/05/2018.
 */
// ------------------------------------------------------------------------
// Forms
Vue.component('form-group', require('./Forms/FormGroup'));
Vue.component('form-submit', require('./Forms/FormSubmit'));

// ------------------------------------------------------------------------
// Modals
Vue.component('modal', require('./Modals/Modal'));
Vue.component('modal-header', require('./Modals/ModalHeader'));
Vue.component('modal-body', require('./Modals/ModalBody'));
Vue.component('modal-footer', require('./Modals/ModalFooter'));

// ------------------------------------------------------------------------
// Input
Vue.component('input-date', require('./Input/InputDate'));
Vue.component('input-text', require('./Input/InputText'));
Vue.component('input-label', require('./Input/InputLabel'));
Vue.component('text-area',require('./Input/TextArea'));

// ------------------------------------------------------------------------
// Buttons
Vue.component('btn-submit', require('./Buttons/Submit'));
Vue.component('btn-danger', require('./Buttons/Danger'));
Vue.component('btn-success', require('./Buttons/Success'));
Vue.component('btn-default', require('./Buttons/Default'));
Vue.component('btn-cancel', require('./Buttons/Cancel'));

//Notification
Vue.component('notification', require('./Notification'));

//alert window
Vue.component('alert-window', require('./Alerts/alert-window'));