<script setup>
import { useForm } from "@inertiajs/vue3";
import Input from "@/Components/Input.vue";
import Button from "@/Components/Button.vue";

const form = useForm({
    email: null,
});

const submit = () => {
    form.post(route("password.email"), {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <Head title="Lupa kata sandi" />
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body p-1">
                        <h4 class="mb-1 fw-bold">Lupa kata sandi?</h4>
                        <p class="mb-4">
                            Harap masukkan alamat email Anda untuk meminta reset
                            kata sandi.
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
                            <div class="mb-4">
                                <Button
                                    title="Kirim reset link"
                                    btnClass="btn btn-primary w-100"
                                    :isLoading="form.processing"
                                />
                            </div>
                        </form>
                        <p class="text-center">
                            <span>Ingat akun Anda? </span>
                            <Link :href="route('login')">
                                <span>Masuk</span>
                            </Link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
