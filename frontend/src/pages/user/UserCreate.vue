<script setup>
import { reactive } from "vue";
import { useRouter } from "vue-router";
import HttpStatus from "../../enums/HttpStatus";
import UserService from "../../services/UserService";

const router = useRouter();

const user = reactive({
  name: "",
  email: "",
  password: "",
  cpf: "",
});

const errors = reactive({
  name: [],
  email: [],
  cpf: [],
  password: [],
});

const handleSubmit = async () => {
  try {
    const response = await UserService.create(user);
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
</script>

<template>
  <v-container>
    <PageHeader name="Cadastrar novo usuário" textButton="Voltar" />

    <form @submit.prevent="handleSubmit">
      <v-text-field
        label="Nome"
        v-model="user.name"
        :error-messages="errors.name"
      >
      </v-text-field>
      <v-text-field
        label="Email"
        type="email"
        v-model="user.email"
        :error-messages="errors.email"
      >
      </v-text-field>
      <v-text-field label="CPF" v-model="user.cpf" :error-messages="errors.cpf">
      </v-text-field>
      <v-text-field
        label="Senha"
        type="password"
        v-model="user.password"
        :error-messages="errors.password"
      >
      </v-text-field>

      <v-btn class="mt-2" type="submit" density="default" block>Salvar</v-btn>
    </form>
  </v-container>
</template>
