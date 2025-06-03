<script setup>
import NavLink from '@/Components/NavLink.vue';
import { IconUser, IconLifebuoy, IconReceipt, IconLayoutDashboard } from '@tabler/icons-vue';
</script>

<template>
    <aside
        id="layout-menu"
        class="layout-menu-horizontal menu-horizontal menu flex-grow-0"
    >
        <div class="container-xxl d-flex h-100">
            <ul class="menu-inner">
                <NavLink
                    title="Dashboard"
                    :icon="IconLayoutDashboard"
                    :route="route('start')"
                    :isActive="['/start']"
                />
                <NavLink
                    title="Profile"
                    :icon="IconUser"
                    :route="route('profile.index')"
                    :isActive="['/profile']"
                />
                <!-- <NavLink
                    title="Reservasi"
                    :icon="IconReceipt"
                    :route="route('profile.index')"
                    :isActive="['/support']"
                />
                <NavLink
                    title="Tiket Dukungan"
                    :icon="IconLifebuoy"
                    :route="route('profile.index')"
                    :isActive="['/support']"
                /> -->
            </ul>
        </div>
    </aside>
</template>
