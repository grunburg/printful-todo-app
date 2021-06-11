<template>
  <div class="p-4 container mx-auto max-w-lg">
    <Navigation title="Tasks"/>

    <main class="py-4">
      <router-view/>
    </main>

  </div>
</template>

<script>
import Navigation from "./components/Navigation.vue";

export default {
  components: {
    Navigation
  },

  name: 'App',

  data() {
    return {
      tasks: []
    }
  },

  created() {
    this.tasks = [
      {
        id: 1,
        name: 'My Task',
        description: 'A simple task',
        isCompleted: true
      }
    ]
  }
}

</script>

<style>
body {
  @apply bg-gray-200;
}
</style>
