<script setup>
import { useDrawerStore } from "../../stores/drawer.js";

const storeDrawer = useDrawerStore();
</script>

<template>
  <header>
    <NavigationDrawer v-if="storeDrawer.drawer" />

    <AppBar />
  </header>
</template>
