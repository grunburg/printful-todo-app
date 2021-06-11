<template>
  <div v-for="task in tasks" :key="task.id">
    <Task :id="task.id" :name="task.name" :is-completed="Boolean(Number(task.completed))"/>
  </div>
</template>

<script>
import axios from 'axios'

import Task from "../components/Task.vue"

export default {
  name: 'Tasks',

  components: {
    Task
  },

  data() {
    return {
      tasks: Array
    }
  },

  mounted() {
    axios.get('http://localhost:8000/api/tasks')
        .then(response => this.tasks = response.data.data)
  },
}

</script>