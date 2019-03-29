<template>
    <input id="date" type="text" class="form-control" :value="value" :name="name" @input="updateValue($event.target.value)"/>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    export default {
        name: 'input-date',
        components: {
          Datepicker
        },
        props  : {
            value: {required: true},
            name : {required: true},
        },
        data() {
            return {}
        },
        mounted () {
            window.$(this.$el).datepicker();
        },
        beforeDestroy (){
            window.$(this.$el).datepicker('hide').datepicker('destroy');
        },
        methods: {
            updateValue(value) {
                this.$emit('input', value);
            },
        }
    }
</script>