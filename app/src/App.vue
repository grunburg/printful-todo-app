<template>
  <div class="container mx-auto max-w-lg">
    <Navigation/>
    <main>
      <router-view/>
    </main>

  </div>
</template>

<script>
import Navigation from "./components/Navigation.vue";
import Add from "./components/Add.vue";

export default {
  components: {
    Navigation,
    Add
  },

  name: 'App',

  data() {
    return {}
  }
}

</script>

<style>
body {
  @apply bg-gray-50;
}
</style>
