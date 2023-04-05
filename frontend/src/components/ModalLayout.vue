<template>
    <div class="modal fade reset-password-modal login-page-modal" :class="typeClass" tabindex="-1" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="resetPasswordModalLabel">{{ title }}</h4>
                    <button type="button" class="btn-close btn-close-round" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const {title} = defineProps({
    title: {
        type: String,
        required: true,
        default: 'Modal title'
    }
})
/*export default {
    name: "ModalLayout"
}*/
</script>

<style scoped>
</style>
