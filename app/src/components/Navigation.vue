<template>
  <nav class="my-6 flex items-center">
    <button class="p-2 bg-gray-900 rounded-xl focus:outline-none" @click="send('/')">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-50" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </button>
    <span class="ml-2 font-medium text-xl text-gray-900">{{ setTitle }}</span>
  </nav>
</template>

<script>
export default {
  name: 'Navigation',

  data() {
    return {
      title: 'Menu'
    }
  },

  computed: {
    setTitle() {
      if (this.$route.name === 'Tasks') {
        return this.title = 'Menu'
      }

      if (this.$route.name === 'Task') {
        return this.title = 'Back'
      }
    },
  },

  methods: {
    send(path) {
      this.$router.push({path: path});
    },
  }
}
</script>