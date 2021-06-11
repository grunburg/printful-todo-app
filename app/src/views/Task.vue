<template>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Task',

  data() {
    return {
      task: Array
    }
  },

  mounted() {
    axios.get(`http://localhost:8000/api/tasks/${this.$route.params.id}`)
        .then(response => this.task = response.data.data)
  },
}

</script>