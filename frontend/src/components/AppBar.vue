<script setup>
import { useDrawerStore } from "../stores/drawer.js";

const storeDrawer = useDrawerStore();
</script>

<template>
  <v-app-bar>
    <v-btn icon>
      <v-icon @click="storeDrawer.openDrawer">mdi-menu</v-icon>
    </v-btn>

    <v-spacer></v-spacer>

    <v-btn icon>
      <v-icon>mdi-magnify</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>mdi-heart</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>mdi-dots-vertical</v-icon>
    </v-btn>
  </v-app-bar>
</template>
