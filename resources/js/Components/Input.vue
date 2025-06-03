<script setup>
const model = defineModel({
    type: null,
    required: true,
});

defineProps({
    label: String,
    type: {
        type: String,
        default: 'text'
    },
    isTextarea: {
        type: Boolean,
        default: false,
    },
    errorMessage: {
        type: String,
        default: "",
    },
    placeholder: {
        type: String,
        default: "This field is required",
    },
});
</script>

<template>
    <label for="form-input" class="form-label">{{ label }}</label>
    <textarea
        rows="5"
        v-if="isTextarea"
        v-model="model"
        class="form-control"
        :class="{ 'is-invalid': errorMessage }"
        placeholder="Descriptions">
    </textarea>
    <input
        v-else
        :type="type"
        id="form-input"
        v-model="model"
        class="form-control"
        :placeholder="placeholder"
        :class="{ 'is-invalid': errorMessage }"
    />
    <div class="invalid-feedback">{{ errorMessage }}</div>
</template>
