<template>
  <div class="p-3 flex items-center rounded-2xl border-2 border-gray-100 focus-within:border-blue-100 transition">
    <button class="p-1 bg-blue-500 rounded-lg focus:outline-none" @click="addTask">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-50" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"/>
      </svg>
    </button>
    <input class="p-0 ml-2 text-gray-500 placeholder-gray-400 w-full bg-transparent border-none focus:ring-0"
           type="text" :placeholder="placeholder"
           v-model="newTask" @keyup.enter="addTask">
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'Add',

  props: {
    placeholder: String
  },

  data() {
    return {
      newTask: '',
    }
  },

  methods: {
    addTask() {
      if (this.newTask.trim().length === 0) return

      axios.post('/tasks/create', {
        name: this.newTask
      }).then(response => this.$emit('addTask', response.data))


      this.newTask = ''
    }
  }
}
</script>