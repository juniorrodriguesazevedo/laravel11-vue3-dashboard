<script setup>
import { defineProps } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

defineProps({
  name: String,
  textButton: String,
  to: {
    type: [String, Object],
    default: null,
  },
});
</script>

<template>
  <v-row class="mb-4">
    <v-col cols="6">
      <h2 class="text-xl font-semibold">{{ name }}</h2>
    </v-col>
    <v-col cols="6" class="text-right">
      <v-btn
        variant="tonal"
        color="blue"
        density="comfortable"
        v-if="to"
        :to="to"
      >
        {{ textButton }}
      </v-btn>
      <v-btn
        v-else
        @click="router.go(-1)"
        variant="tonal"
        color="blue"
        density="comfortable"
      >
        {{ textButton }}
      </v-btn>
    </v-col>
  </v-row>
</template>
