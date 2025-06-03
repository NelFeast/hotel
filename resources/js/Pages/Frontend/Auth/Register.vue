<script setup>
import Input from "@/Components/Input.vue";
import SocialLogin from "./SocialLogin.vue";
import Button from "@/Components/Button.vue";
import { useForm } from "@inertiajs/vue3";
import {
    IconEyeOff,
    IconBrandGoogleFilled,
    IconBrandFacebookFilled,
} from "@tabler/icons-vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
});

const submit = () => {
    form.post(route("register.store"), {
        onError: () => {
            form.reset("password");
        },
        onSuccess: () => {
            form.reset();
        },
    });
};

const togglePassword = () => {
    alert()
};
</script>

<template>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-1 fw-bold">Buat Akun</h4>
                        <p class="mb-4">
                            Masukkan detail Anda di bawah ini untuk membuat akun
                            Anda.
                        </p>
                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <Input
                                    type="text"
                                    label="Nama Lengkap"
                                    v-model="form.name"
                                    :errorMessage="form.errors.name"
                                    placeholder="John Doe"
                                />
                            </div>
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
                                        @click="togglePassword"
                                        class="input-group-text cursor-pointer"
                                    >
                                        <IconEyeOff class="icon-base" />
                                    </span>
                                </div>
                                <div class="invalid-feedback">
                                    {{ form.errors.password }}
                                </div>
                            </div>
                            <div class="mb-4">
                                <Button title="Daftar" btnClass="btn btn-primary w-100" :isLoading="form.processing"  />
                            </div>
                        </form>
                        <p class="text-center">
                            <span>Sudah punya akun? </span>
                            <Link :href="route('login')">
                                <span>Masuk</span>
                            </Link>
                        </p>
                        <div class="divider my-4">
                            <div class="divider-text">atau daftar dengan</div>
                        </div>
                        <SocialLogin />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
