<template>
  <VueBottomNavigation :options="options" v-model="selected" />
</template>

<script>
  import VueBottomNavigation from "bottom-navigation-vue";
  export default {
    components: { VueBottomNavigation },
    data: () => ({
      selected: 1,
      options: [
        {
          id: 1,
          icon: "fas fa-home",
          title: "Home",
          childs: [
            { id: 101, icon: "fas fa-tshirt", title: "Products" },
            { id: 102, icon: "fas fa-tag", title: "Discount" },
            { id: 103, icon: "fas fa-gifts", title: "Gifts", badge: 7 },
          ],
        },
        { id: 2, icon: "fas fa-wallet", title: "Wallet" },
        {
          id: 3,
          icon: "fas fa-plus",
          title: "Setting",
          childs: [
            { id: 301, icon: "fas fa-bookmark", title: "Bookmarks" },
            { id: 302, icon: "fas fa-tasks", title: "Tasks" },
            { id: 303, icon: "fas fa-tachometer-alt", title: "Dashboard" },
            { id: 304, icon: "fas fa-ticket-alt", title: "Tickets" },
          ],
        },
        { id: 4, icon: "fas fa-bell", title: "Notification", badge: 15 },
        { id: 5, icon: "fas fa-user", title: "Account" },
      ],

color: {
  type: String,
  default: "#42A5F5",
},
badgeColor: {
  type: String,
  default: "#FBC02D",
},
    }),
  };
</script>