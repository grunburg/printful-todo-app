<template>
  <nav class="my-6 flex items-center">
    <button class="p-2 bg-gray-900 rounded-xl focus:outline-none" @click="send('/')">
      <i v-html="setIcon"></i>
    </button>
    <span class="ml-2 font-medium text-xl text-gray-900">{{ setTitle }}</span>
  </nav>
</template>

<script>
export default {
  name: 'Navigation',

  data() {
    return {
      title: 'Menu',
      icon: null
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

    setIcon() {
      if (this.$route.name === 'Tasks') {
        return this.icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-50" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" /> </svg>'
      }

      if (this.$route.name === 'Task') {
        return this.icon = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-50" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" /> </svg>'
      }
    }
  },

  methods: {
    send(path) {
      this.$router.push({path: path});
    },
  }
}
</script>