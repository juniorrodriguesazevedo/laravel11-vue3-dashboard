<script setup>
import { defineProps, ref } from "vue";

const props = defineProps({
  dialog: Boolean,
  confirmAction: Function,
});

const dialog = ref(props.dialog);
</script>

<template>
  <v-dialog v-model="dialog" max-width="400" persistent>
    <v-card class="py-6 px-2">
      <v-img src="/imgs/exclamation.png" height="100"></v-img>
      <v-card-title class="text-center mb-6">
        Tem certeza que deseja excluir?
      </v-card-title>
      <template v-slot:actions>
        <v-spacer></v-spacer>

        <v-btn @click="confirmAction" variant="tonal" density="default">
          Sim, deletar
        </v-btn>

        <v-btn
          @click="dialog = false"
          color="red"
          variant="tonal"
          density="default"
        >
          Cancelar
        </v-btn>
      </template>
    </v-card>
  </v-dialog>
</template>
