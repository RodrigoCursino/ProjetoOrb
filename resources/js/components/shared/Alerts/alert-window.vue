<template>
    <div>
        <div v-show="showAlert">
            <div :class="result.class">
                <button
                   type="button"
                   class="close"
                   @click="closeAlert"
                >×
                </button>
                <h4>
                  <i :class="result.icon">
                  </i> {{result.title}} </h4>
                  <p>{{description}}</p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'alert-window',
        components: {},
        props: {
        },
        data() {
            return {
                showAlert: false,
                failAlert: {
                    title: 'Alerta!!',
                    class: 'alert alert-danger alert-dismissible',
                    icon : 'icon fa fa-ban'
                },
                successAlert: {
                    title: 'Sucesso!!',
                    class: 'alert alert-success alert-dismissible',
                    icon : 'icon fa fa-check'
                },
                result : {},
                description: ''
            }
        },
        computed: {
        },
        created() {
          this.result = this.successAlert;
        },
        mounted() {

        },
        methods: {
          showAlertMessage(error, description){
            this.showAlert = true;
            this.description = description;
            if (error) {
                return this.result = this.failAlert;
            } else  {
                return this.result = this.successAlert;
            }
          },
          closeAlert(){
            this.showAlert = false;
          }
        }
    }
</script>
<style scoped>

</style>