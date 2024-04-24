<script setup>
import router from "@/router";
import { useRoute } from "vue-router";
import HttpStatus from "@/enums/HttpStatus";
import { ref, onMounted, reactive } from "vue";
import UserService from "@/services/UserService";

const route = useRoute();
const id = route.params.id;

const user = reactive({});

const errors = reactive({
  name: [],
  email: [],
  cpf: [],
  password: [],
});

const loadUser = async () => {
  try {
    const response = await UserService.getUser(id);
    Object.assign(user, response.data);
  } catch (error) {
    router.push({ name: "notFound" });
  }
};

const handleSubmit = async () => {
  try {
    const response = await UserService.update(id, user);
    if (response.status === HttpStatus.OK) {
      router.push({ name: "userList" });
    }
  } catch (error) {
    if (
      error.response &&
      error.response.status === HttpStatus.UNPROCESSABLE_ENTITY
    ) {
      const response = error.response.data;

      const setErrors = (field) => {
        errors[field] = response.errors[field] || [];
      };

      setErrors("name");
      setErrors("email");
      setErrors("cpf");
      setErrors("password");
    }
  }
};

onMounted(() => {
  loadUser();
});
</script>

<template>
  <v-container>
    <PageHeader name="Editar usuário" textButton="Voltar" />

    <UserForm :user="user" :errors="errors" :handleSubmit="handleSubmit" />
  </v-container>
</template>
