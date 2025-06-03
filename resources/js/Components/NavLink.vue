<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const props = defineProps({
    icon: [Object, Function],
    route: String,
    title: String,
    isActive: {
        type: Array,
        default: () => [],
    },
});

const isActive = computed(() => {
    const currentRoute = usePage().url;
    return props.isActive.includes(currentRoute) || currentRoute === props.route;
});
</script>

<template>
    <li class="menu-item" :class="{ active: isActive }">
        <Link :href="route" class="menu-link">
            <component :is="icon" class="menu-icon icon-base" />
            <span>{{ title }}</span>
        </Link>
    </li>
</template>
