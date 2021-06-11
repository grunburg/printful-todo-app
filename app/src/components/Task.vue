<template>
  <router-link :to="{ name: 'Task', params: {id: TaskId}}"
               class="p-4 flex justify-between items-center rounded-xl transition ease-in-out hover:bg-gray-100 hover:shadow-sm focus:outline-none focus:bg-gray-100">
    <div class="flex items-center">
      <input type="checkbox" :id="TaskId"
             class="mr-3 h-4 w-4 text-amber-500 bg-gray-300 rounded-full border-none focus:ring-amber-300 focus:ring-offset-0"
             :checked="isCompleted">
      <span class="text-gray-800 font-medium">{{ name }}</span>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"/>
    </svg>
  </router-link>
</template>

<script>
export default {
  name: 'Task',

  props: {
    TaskId: Number,
    name: String,
    isCompleted: Boolean
  }
}
</script>