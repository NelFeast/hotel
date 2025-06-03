<script setup>
import { IconEyeOff } from '@tabler/icons-vue';
</script>

<template>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-1">Login</h4>
                        <p class="mb-4">Masukkan email dan kata sandi Anda untuk melanjutkan.</p>
                        <form
                            id="formAuthentication"
                            class="mb-4"
                            action="index.html"
                            method="GET"
                        >
                            <div class="mb-4 form-control-validation">
                                <label for="email" class="form-label"
                                    >Email or Username</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email-username"
                                    placeholder="Enter your email or username"
                                    autofocus
                                />
                            </div>
                            <div
                                class="mb-4 form-password-toggle form-control-validation"
                            >
                                <label class="form-label" for="password"
                                    >Password</label
                                >
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span
                                        class="input-group-text cursor-pointer"
                                    >
                                        <IconEyeOff class="icon-base" />
                                    </span>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check mb-0 ms-2">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="remember-me"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="remember-me"
                                        >
                                            Remember Me
                                        </label>
                                    </div>
                                    <a href="auth-forgot-password-basic.html">
                                        <p class="mb-0">Forgot Password?</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-4">
                                <button
                                    class="btn btn-primary d-grid w-100"
                                    type="submit"
                                >
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
