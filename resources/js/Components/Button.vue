<script setup>
defineProps({
    icon: Object,
    iconPosition: {
        type: String,
        default: "left",
        validator: (val) => ["left", "right"].includes(val),
    },
    title: {
        type: String,
        default: "Submit",
    },
    btnClass: {
        type: String,
    },
    isDisabled: {
        type: Boolean,
        default: false,
    },
    isLoading: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <button
        :class="btnClass"
        :disabled="isLoading || isDisabled"
    >
        <template v-if="isLoading">
            <span
                class="spinner-border spinner-border-sm me-2"
                role="status"
                aria-hidden="true"
            ></span>
            <span>Memuat...</span>
        </template>
        <template v-else>
            <component
                v-if="icon && iconPosition === 'left'"
                :is="icon"
                class="align-middle me-1 fs-18"
            />
            <span>{{ title }}</span>
            <component
                v-if="icon && iconPosition === 'right'"
                :is="icon"
                class="align-middle me-1 fs-18"
            />
        </template>
    </button>
</template>

<style scoped>
.icon {
    width: 18px;
    height: 18px;
}
</style>
