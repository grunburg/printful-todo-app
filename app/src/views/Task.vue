<template>
  <div class="space-y-4">
    <Alert message="Task was updated successfully!" v-if="alert"/>
    <div>
      <span class="mb-2 block text-sm text-gray-500 uppercase font-medium tracking-wider">Task</span>
      <input
          class="p-3 bg-gray-100 rounded-xl text-gray-900 font-medium placeholder-gray-400 w-full border-none focus:ring-3 focus:ring-blue-200"
          type="text" v-model="this.task.name">
    </div>
    <div>
      <span class="mb-2 block text-sm text-gray-500 uppercase font-medium tracking-wider">Notes</span>
      <textarea
          class="p-3 h-32 bg-gray-100 rounded-xl text-gray-600 placeholder-gray-400 w-full border-none focus:ring-3 focus:ring-blue-200"
          v-model="this.task.description"></textarea>
    </div>
    <div class="flex items-center justify-between">
      <button @click="deleteTask"
              class="px-4 py-2 bg-red-200 text-red-600 rounded-xl ring-red-100 focus:outline-none transition focus:ring-3">
        Delete
      </button>
      <button @click="updateTask"
              class="px-4 py-2 bg-blue-200 text-blue-600 rounded-xl ring-blue-100 focus:outline-none transition focus:ring-3">
        Save
      </button>
    </div>
  </div>
</template>

<script>
import axios from "axios"
import Alert from "../components/Alert.vue"

export default {
  name: 'Task',

  components: {
    Alert
  },

  data() {
    return {
      task: '',
      alert: false
    }
  },

  methods: {
    fetchTask() {
      axios.get(`/tasks/${this.$route.params.id}`)
          .then(response => this.task = response.data)
    },

    deleteTask() {
      axios.delete(`/tasks/${this.task.id}/delete`)
      this.$router.push({path: '/'})
    },

    updateTask() {
      axios.put(`/tasks/${this.$route.params.id}/update`, {
        id: this.task.id,
        name: this.task.name,
        description: this.task.description
      })

      this.alert = true
      setTimeout(() => this.alert = false, 3000)
    },
  },

  mounted() {
    this.fetchTask()
  }
}
</script>