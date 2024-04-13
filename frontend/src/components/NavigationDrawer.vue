<template>
  <v-navigation-drawer location="left" permanent>
    <template v-slot:prepend>
      <v-list-subheader class="d-flex align-center justify-center">
        <h2 class="py-5 px-5">Dashboard</h2>
      </v-list-subheader>
    </template>

    <v-divider></v-divider>

    <v-list density="compact" nav color="blue">
      <v-list-item
        prepend-icon="mdi-home-city"
        title="Home"
        value="home"
        :to="{ name: 'home' }"
      ></v-list-item>
      <v-list-item
        prepend-icon="mdi-account"
        title="My Account"
        value="account"
      ></v-list-item>
      <v-list-item
        prepend-icon="mdi-account-group-outline"
        title="Usuários"
        value="users"
        :to="{ name: 'user' }"
      ></v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>
