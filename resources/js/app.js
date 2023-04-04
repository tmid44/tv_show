import { createApp } from "vue";
import Welcome from "./Welcome.vue";
import UserComponent from "./components/UserComponent.vue";
import ShowComponent from "./components/ShowComponent.vue";

// createApp(Welcome).mount("#app");
createApp(UserComponent).mount("#user");
createApp(ShowComponent).mount("#tv_show");

