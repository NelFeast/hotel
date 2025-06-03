<script setup>
import {
    IconBrandGoogleFilled,
    IconBrandFacebookFilled,
} from "@tabler/icons-vue";
</script>

<template>
    <div class="d-flex justify-content-center">
        <a
            :href="route('auth.social.redirect', 'google')"
            class="btn btn-icon rounded-circle btn-text-google-plus border me-1_5"
        >
            <IconBrandGoogleFilled class="icon-base" />
        </a>
        <a
            :href="route('auth.social.redirect', 'facebook')"
            class="btn btn-icon rounded-circle btn-text-facebook border"
        >
            <IconBrandFacebookFilled class="icon-base" />
        </a>
    </div>
</template>
