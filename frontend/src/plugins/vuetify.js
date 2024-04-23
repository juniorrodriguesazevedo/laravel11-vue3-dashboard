import "@mdi/font/css/materialdesignicons.css";
import "vuetify/styles";

import { createVuetify } from "vuetify";

export default createVuetify({
  theme: {
    defaultTheme: "light",
  },
  defaults: {
    global: {
      ripple: false,
    },
    VBtn: {
      variant: "tonal",
      color: "blue",
      density: "comfortable",
    },
    VTextField: {
      variant: 'outlined',
      class: 'mb-1'
    }
  },
});
