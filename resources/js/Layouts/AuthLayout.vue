<script setup>
import { watch } from 'vue';
import { toast } from "vue-sonner";
import { usePage } from '@inertiajs/vue3';
import XevImage from '../Components/XevImage.vue';
import { Icon123, IconBrandFacebook, IconBrandGoogle } from "@tabler/icons-vue";

const page = usePage();
defineProps({
    withSocial: {
        type: Boolean,
        default: true
    }
});

watch(
    () => page.props.flash,
    (flash) => {
        if (flash.success) {
            toast.success("Success", { description: flash.success });
        }
        if (flash.error) {
            toast.error("Error", { description: flash.error });
        }
    },
    { immediate: true }
);
</script>

<template>
    <Toaster
        expand
        closeButton
        :visibleToasts="3"
        class="mb-0 me-4"
        position="bottom-right"
    />
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                    <Link :href="route('dashboard')" class="auth-brand d-flex justify-content-center align-items-center mb-3">
                        <XevImage path="images/logo-icon.svg" className="logo-dark" alt="dark logo" />
                        <strong class="h3 ms-2 m-0 text-dark bold">XEVBOTS</strong>
                    </Link>
                    <slot />
                    <template v-if="withSocial && page.props.setting.facebook_oauth || withSocial && page.props.setting.google_oauth">
                        <p class="fs-13 fw-semibold">Or Login with Social</p>
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <a v-if="page.props.setting.facebook_oauth" :href="route('auth.social.redirect', 'facebook')" class="btn btn-soft-info">
                                <IconBrandFacebook size="24" />
                            </a>
                            <a v-if="page.props.setting.google_oauth" :href="route('auth.social.redirect', 'google')" class="btn btn-soft-danger">
                                <IconBrandGoogle size="24" />
                            </a>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
