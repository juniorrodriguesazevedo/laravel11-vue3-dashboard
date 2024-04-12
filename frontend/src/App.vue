<script setup>
import Home from "./pages/Home.vue";
import { useDrawerStore } from "./stores/drawer.js";

const storeDrawer = useDrawerStore();
</script>

<template>
  <v-layout class="rounded rounded-md">
    <NavigationDrawer v-if="storeDrawer.drawer" />

    <AppBar />
    <v-main>
      <div style="padding: 20px">
        <Home />
      </div>
    </v-main>

    <v-footer app>Todos os direitos reservados</v-footer>
  </v-layout>
</template>
