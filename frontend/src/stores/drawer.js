import { ref } from "vue";
import { defineStore } from "pinia";

export const useDrawerStore = defineStore("drawer", () => {
  const drawer = ref(true);

  function openDrawer() {
    drawer.value = !drawer.value;
  }

  return { drawer, openDrawer };
});
