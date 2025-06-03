<script setup>
import { useForm } from "@inertiajs/vue3";
import XevInput from "@/Components/Input.vue";
import Button from "@/Components/Button.vue";

const form = useForm({
    email: null,
    token: null,
    password: null,
    password_confirmation: null,
});
const urlParams = new URLSearchParams(window.location.search);
form.email = urlParams.get('email');
form.token = urlParams.get('token');
const submit = () => {
    form.post(route("password.reset"), {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <Head title="Login" />
    <h4 class="fw-semibold mb-2">Reset Your Password</h4>
    <p class="text-muted mb-4">Please create your new password.</p>
    <form @submit.prevent="submit" class="text-start mb-3">
        <XevInput
            type="password"
            label="Create New Password"
            v-model="form.password"
            :errorMessage="form.errors.password"
            placeholder="New Password"
        />
        <XevInput
            type="password"
            label="Confirm New Password"
            v-model="form.password_confirmation"
            :errorMessage="form.errors.password_confirmation"
            placeholder="Confirm New Password"
        />
        <div class="d-grid mt-2">
            <XevButton title="Reset Password" btnClass="btn btn-primary" :isLoading="form.processing"  />
        </div>
    </form>
    <p class="text-danger fs-14 mb-4">Back to
        <Link :href="route('login')" class="fw-semibold text-dark ms-1">
            Login!
        </Link>
    </p>
</template>
