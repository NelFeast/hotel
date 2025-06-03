<script setup>

import AppMenu from '@/Layouts/Includes/Frontend/AppMenu.vue';
import AppNavbar from '@/Layouts/Includes/Frontend/AppNavbar.vue';
// import { watch } from 'vue';
// import { toast } from "vue-sonner";
// import { usePage } from '@inertiajs/vue3';
// import { useThemeStore } from '@Stores/themeStore';

// const page = usePage();
// const xevTheme = useThemeStore();
// watch(
//     () => page.props.flash,
//     (flash) => {
//         if (flash.success) {
//             toast.success("Success", { description: flash.success });
//         }
//         if (flash.error) {
//             toast.error("Error", { description: flash.error });
//         }
//     },
//     { immediate: true }
// );
</script>

<template>
    <!-- <Toaster
        expand
        closeButton
        :visibleToasts="3"
        class="mb-0 me-4"
        :theme="xevTheme.theme"
        position="bottom-right"
    /> -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Nav -->
            <AppNavbar />
            <!-- End Nav -->
            <div class="layout-page">
                <div class="content-wrapper">

                    <!-- Menu -->
                    <AppMenu />
                    <!-- End Menu -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <slot />
                    </div>

                    <!-- Footer -->

                    <!-- End Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</template>
