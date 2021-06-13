<template>
  <Add placeholder="Add a task" v-on:addTask="newTask($event)"/>

  <div class="py-4">
    <div class="pb-2 font-medium text-gray-900">Tasks – {{ tasks.length }}</div>
    <div class="space-y-2">
      <div v-for="task in tasks" :key="task.id">
        <Task :id="Number(task.id)" :name="task.name" :description="task.description"
              :completed="Boolean(Number(task.completed))"/>
      </div>
    </div>
  </div>

</template>

<script>
import Navigation from "../components/Navigation.vue"
import Task from "../components/Task.vue"
import Add from "../components/Add.vue";
import Sort from "../components/Button.vue";

import axios from "axios";
import mitt from 'mitt';


export default {
  name: 'Tasks',

  components: {
    Navigation,
    Task,
    Add,
    Sort
  },

  data() {
    return {
      tasks: []
    }
  },

  methods: {
    newTask(value) {
      this.tasks.push({
        name: value,
        description: null,
        completed: false
      })
    },

    fetchTasks() {
      axios.get('/tasks')
          .then(response => this.tasks = response.data.data)
    }
  },

  created() {
    mitt().on('deleteTask', (id) => console.log(id))
  },

  mounted() {
    this.fetchTasks()
  },
}

</script>