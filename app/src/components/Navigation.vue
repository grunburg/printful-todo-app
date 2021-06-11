<template>
  <nav class="p-4 flex items-center rounded-xl bg-gray-800">
    <span class="font-medium text-gray-50">{{ title }}</span>
  </nav>
</template>

<script>
export default {
  name: 'Navigation',

  props: {
    title: String
  }
}
</script>