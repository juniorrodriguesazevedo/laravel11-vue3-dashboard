<template>
  <v-navigation-drawer location="left" permanent>
    <template v-slot:prepend>
      <h3 class="text-center py-5">Dashboard</h3>
    </template>

    <v-divider></v-divider>

    <v-list density="compact" nav>
      <v-list-item
        prepend-icon="mdi-home-city"
        title="Home"
        value="home"
        :to="{ name: 'home' }"
      ></v-list-item>
      <v-divider></v-divider>
      <v-list-item
        prepend-icon="mdi-account"
        title="My Account"
        value="account"
      ></v-list-item>
      <v-divider></v-divider>
      <v-list-item
        prepend-icon="mdi-account-group-outline"
        title="Usuários"
        value="users"
        :to="{ name: 'user' }"
      ></v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>
