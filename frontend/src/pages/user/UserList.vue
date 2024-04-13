<script setup>
import { onMounted, ref, watch } from "vue";
import UserService from "../../services/UserService";

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
  <v-container>
    <PageHeader
      name="Usuários"
      textButton="Adicionar Novo"
      :to="{ name: 'userCreate' }"
    />

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
          <td>
            <v-col cols="auto">
              <v-btn
                icon="mdi mdi-eye"
                size="small"
                variant="tonal"
                color="blue"
                class="mr-2"
                :to="{ name: 'userDetail', params: { id: user.id } }"
              ></v-btn>
              <v-btn
                icon="mdi mdi-pencil"
                size="small"
                variant="tonal"
                color="yellow-darken-2"
                class="mr-2"
              ></v-btn>
              <v-btn
                icon="mdi mdi-delete"
                size="small"
                variant="tonal"
                color="red"
              ></v-btn>
            </v-col>
          </td>
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
  </v-container>
</template>
