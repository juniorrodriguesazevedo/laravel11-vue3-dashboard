import Home from "@/pages/Home.vue";
import UserList from "@/pages/user/UserList.vue";
import UserDetail from "@/pages/user/UserDetail.vue";
import UserCreate from "@/pages/user/UserCreate.vue";
import NotFound from "@/pages/NotFound.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/users",
    name: "userList",
    component: UserList,
  },
  {
    path: "/users/:id",
    name: "userDetail",
    component: UserDetail,
  },
  {
    path: "/users/create",
    name: "userCreate",
    component: UserCreate,
  },
  {
    path: "/:pathMatch(.*)*",
    name: "notFound",
    component: NotFound,
  },
];

export default routes;
