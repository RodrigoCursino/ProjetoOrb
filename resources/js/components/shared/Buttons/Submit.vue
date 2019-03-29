<template>
    <button type="submit" :class="classes" :disabled="disabled">
        <slot></slot>
        <span v-if="! hasDefaultSlot">Salvar</span>
    </button>
</template>

<script>
    import ButtonMixin from '../Mixins/Button';
    export default {
        mixins: [ButtonMixin],
        computed: {
            hasDefaultSlot() {
                return !!this.$slots.default;
            },
            defaultColor() {
                return this.color ? this.color : 'primary';
            }
        }
    }
</script>