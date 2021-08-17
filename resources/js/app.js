require('./bootstrap');

import "./bootstrap";
import "./tw-starter";
import "./chart";
import "./highlight";
import "./feather";
import "./tiny-slider";
import "./tippy";
import "./datepicker";
import "./tom-select";
import "./dropzone";
import "./ckeditor";
import "./validation";
import "./zoom";
import "./notification";
import "./tabulator";
import "./calendar";

import "./maps";
import "./chat";
import "./show-modal";
import "./show-slide-over";
import "./show-dropdown";
import "./search";
import "./copy-code";
import "./show-code";
import "./side-menu";
import "./mobile-menu";
import "./side-menu-tooltip";
import "./dark-mode-switcher";


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
