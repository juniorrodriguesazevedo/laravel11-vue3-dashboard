import { registerPlugins } from "@/plugins";

import App from "./App.vue";

import { createApp } from "vue";
import { createPinia } from "pinia";
import router from "./router";

const pinia = createPinia();
const app = createApp(App);

registerPlugins(app);

app.use(pinia);
app.use(router);
app.mount("#app");
