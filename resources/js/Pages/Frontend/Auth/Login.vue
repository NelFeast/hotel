<script setup>
import Input from "@/Components/Input.vue";
import SocialLogin from "./SocialLogin.vue";
import Button from "@/Components/Button.vue";
import { useForm } from "@inertiajs/vue3";
import {
    IconEyeOff,
} from "@tabler/icons-vue";

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const submit = () => {
    form.post(route("login.store"), {
        onError: () => {
            form.reset("password");
        },
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-1 fw-bold">Masuk</h4>
                        <p class="mb-4">
                            Masukkan email dan kata sandi Anda di bawah ini
                            untuk masuk.
                        </p>
                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <Input
                                    type="email"
                                    label="Email"
                                    v-model="form.email"
                                    :errorMessage="form.errors.email"
                                    placeholder="john.doe@example.com"
                                />
                            </div>
                            <div class="mb-4 form-password-toggle">
                                <label class="form-label" for="password"
                                    >Password</label
                                >
                                <div class="input-group input-group-merge">
                                    <input
                                        v-model="form.password"
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        :class="{
                                            'is-invalid': form.errors.password,
                                        }"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span
                                        class="input-group-text cursor-pointer"
                                    >
                                        <IconEyeOff class="icon-base" />
                                    </span>
                                </div>
                                <div class="invalid-feedback">
                                    {{ form.errors.password }}
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check mb-0 ms-2">
                                        <input
                                            v-model="form.remember"
                                            class="form-check-input"
                                            type="checkbox"
                                            id="remember-me"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="remember-me"
                                        >
                                            Ingat saya
                                        </label>
                                    </div>
                                    <Link :href="route('password.request')">
                                        <p class="mb-0">Lupa kata sandi?</p>
                                    </Link>
                                </div>
                            </div>
                            <div class="mb-4">
                                <Button title="Masuk" btnClass="btn btn-primary w-100" :isLoading="form.processing"  />
                            </div>
                        </form>
                        <p class="text-center">
                            <span>Belum punya akun? </span>
                            <Link :href="route('register')">
                                <span>Buat akun</span>
                            </Link>
                        </p>
                        <div class="divider my-4">
                            <div class="divider-text">atau masuk dengan</div>
                        </div>
                        <SocialLogin />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
