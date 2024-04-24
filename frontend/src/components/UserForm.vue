<script setup>
defineProps({
  user: Object,
  errors: Object,
  handleSubmit: Function,
});
</script>

<template>
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
</template>
