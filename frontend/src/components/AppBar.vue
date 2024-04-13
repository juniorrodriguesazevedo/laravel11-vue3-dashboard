<script setup>
import { useDrawerStore } from "../stores/drawer.js";

const storeDrawer = useDrawerStore();
</script>

<template>
  <v-app-bar>
    <v-app-bar-nav-icon @click="storeDrawer.openDrawer"></v-app-bar-nav-icon>

    <v-spacer></v-spacer>

    <v-menu transition="slide-y-transition">
      <template v-slot:activator="{ props }">
        <v-avatar v-bind="props">
          <v-img
            alt="John"
            src="https://cdn-icons-png.flaticon.com/512/147/147142.png"
          ></v-img>
        </v-avatar>

        <v-icon v-bind="props" icon="mdi mdi-menu-down" size="x-large"></v-icon>
      </template>

      <v-card min-width="180px">
        <v-list :lines="false" density="compact" nav>
          <v-list-item prepend-icon="mdi-account-outline">
            <v-list-item-title>Meu perfil</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-card>
    </v-menu>
  </v-app-bar>
</template>
