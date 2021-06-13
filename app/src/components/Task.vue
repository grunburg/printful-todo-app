<template>
  <router-link :to="{ name: 'Task', params: {id: id } }" :class="{'opacity-75': completed}"
               class="block w-full bg-gray-100 rounded-2xl">
    <div class="p-3 flex items-center">
      <div class="flex items-center">
        <input type="checkbox" :id="id" @click.stop
               class="mr-2 w-5 h-5 border-2 border-blue-500 bg-transparent text-blue-500 rounded-md focus:ring-offset-0 focus:ring-3 focus:ring-blue-200"
               :checked="completed" v-model="completed" @click="checked">
        <span :class="{'line-through': completed}" class="text-gray-900 font-medium">{{ name }}</span>
      </div>
    </div>
    <div class="px-3 pb-3" v-if="description !== null">
      <span class="block text-sm text-gray-600">{{ description }}</span>
    </div>
  </router-link>
</template>

<script>
import axios from "axios";

export default {
  name: 'Task',

  props: {
    id: Number,
    name: String,
    description: String,
    completed: Boolean
  },

  methods: {
    checked() {
      axios.put(`/tasks/${this.id}/mark`, {
        id: this.id,
        completed: Number(!this.completed)
      }).catch(error => console.log(error))
    }
  }
}
</script>