<script setup>
import Header from "./components/layouts/Header.vue";
import Footer from "./components/layouts/Footer.vue";
</script>

<template>
  <v-layout class="rounded rounded-md">
    <v-main>
      <Header />
      <div class="px-16 py-10">
        <router-view></router-view>
      </div>
      <Footer />
    </v-main>
  </v-layout>
</template>
