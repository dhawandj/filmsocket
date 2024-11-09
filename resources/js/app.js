import '../css/app.css';
import '../css/style.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import { definePreset } from '@primevue/themes';
import Aura from '@primevue/themes/aura';
import PrimeVue from 'primevue/config';

const appName = import.meta.env.VITE_APP_NAME || 'filmsocket';

const MyPreset = definePreset(Aura, {
    components: {
        button: {
            colorScheme: {
                dark: {
                    root: {},
                    primary: {
                        background: '{gray.700}',
                        color: '{gray.300}',
                        border: {
                            color: '{gray.500}',
                        },
                    },
                    border: {},
                },
            },
        },
    },
});

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {
                theme: {
                    preset: MyPreset,
                },
            })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
