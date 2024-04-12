import User from "@/pages/User.vue";
import Home from "@/pages/Home.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/users",
    name: "user",
    component: User,
  },
];

export default routes;
