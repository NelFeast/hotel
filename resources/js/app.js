import './bootstrap';
import '../libs/bootstrap/bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'

import { Toaster } from 'vue-sonner';
import VueApexCharts from "vue3-apexcharts"
import { ZiggyVue } from '../../vendor/tightenco/ziggy'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueApexCharts)
            .component('Head', Head)
            .component('Link', Link)
            .component('Toaster', Toaster)
            .mount(el)
    },
    progress: {
        color: '#0f172a',
        includeCSS: true,
        showSpinner: true,
    },
})