<script setup>
import { onMounted, ref, watch } from "vue";
import UserService from "../services/UserService";

const users = ref([]);
const currentPage = ref(1);
const lengthPage = ref(0);

const loadUsers = async () => {
  const response = await UserService.getAll(currentPage.value);
  users.value = response.data.data;
  lengthPage.value = response.data.last_page;
};

onMounted(() => {
  loadUsers();
});

watch(currentPage, () => {
  loadUsers();
});
</script>

<template>
  <div>
    <v-table density="compact" hover>
      <thead>
        <tr>
          <th class="text-left">ID</th>
          <th class="text-left">Nome</th>
          <th class="text-left">Email</th>
          <th class="text-left">CPF</th>
          <th class="text-left" style="width: 200px">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.cpf }}</td>
          <td><Actions /></td>
        </tr>
      </tbody>
    </v-table>

    <div class="mt-4">
      <v-pagination
        density="comfortable"
        v-model="currentPage"
        :length="lengthPage"
        :total-visible="7"
        color="blue"
      ></v-pagination>
    </div>
  </div>
</template>
