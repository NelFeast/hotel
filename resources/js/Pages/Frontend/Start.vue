<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {
    IconReceipt,
    IconCoins,
    IconCalendarCheck,
    IconCalendarX,
} from "@tabler/icons-vue";

defineOptions({ layout: AdminLayout });
</script>

<template>
    <div class="row">
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card h-100">
                <div
                    class="card-body d-flex justify-content-between align-items-center"
                >
                    <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">100 Coins</h5>
                        <p class="mb-0">Loyality Coins</p>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-primary rounded p-3">
                            <IconCoins class="icon-base" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card h-100">
                <div
                    class="card-body d-flex justify-content-between align-items-center"
                >
                    <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">1 Reservasi</h5>
                        <p class="mb-0">Reservasi Aktif</p>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-primary rounded p-3">
                            <IconReceipt class="icon-base" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card h-100">
                <div
                    class="card-body d-flex justify-content-between align-items-center"
                >
                    <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">20 May 2025</h5>
                        <p class="mb-0">Tanggal Check-In</p>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-primary rounded p-3">
                            <IconCalendarCheck class="icon-base" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card h-100">
                <div
                    class="card-body d-flex justify-content-between align-items-center"
                >
                    <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">23 May 2025</h5>
                        <p class="mb-0">Tanggal Check-Out</p>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-primary rounded p-3">
                            <IconCalendarX class="icon-base" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
