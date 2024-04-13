<script setup>
import Header from "./components/layouts/Header.vue";
</script>

<template>
  <v-layout class="rounded rounded-md">
    <v-main>
      <Header />
      <div class="px-16 py-10">
        <router-view></router-view>
      </div>
    </v-main>
  </v-layout>
</template>
