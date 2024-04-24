<script setup>
import { useRoute } from "vue-router";
import UserService from "@/services/UserService";
import { onMounted, ref } from "vue";
import router from "@/router";

const route = useRoute();
const id = route.params.id;
const user = ref({});

const loadUser = async () => {
  try {
    const response = await UserService.getUser(id);
    user.value = response.data;
  } catch (error) {
    router.push({ name: "notFound" });
  }
};

onMounted(() => {
  loadUser();
});
</script>

<template>
  <v-container>
    <PageHeader name="Detalhes do usuário" textButton="Voltar" />

    <v-row>
      <v-col cols="12">
        <p>Nome: {{ user.name }}</p>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12">
        <p>Email: {{ user.email }}</p>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12">
        <p>CPF: {{ user.cpf }}</p>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12">
        <p>Criado em: {{ user.created_at }}</p>
      </v-col>
    </v-row>
  </v-container>
</template>

