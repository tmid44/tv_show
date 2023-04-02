import { createApp } from "vue";
import Welcome from "./Welcome.vue";
import UserComponent from "./components/UserComponent.vue";
import UserTable from "./components/UserTable.vue";

createApp(Welcome).mount("#app");
createApp(UserComponent).mount("#user");
createApp(UserTable).mount("#user-table");

