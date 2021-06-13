<template>
  <button class="px-3 py-1 text-sm text-blue-400 bg-blue-100 rounded-lg focus:outline-none">
    {{ name }}
  </button>
</template>

<script>
export default {
  name: 'Sort',

  props: {
    name: String
  },

  data() {
    return {}
  }
}
</script>