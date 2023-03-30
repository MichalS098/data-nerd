<script setup>
defineProps({
  type: {
    type: String,
    default: "button",
  },
});
</script>

<template>
  <button :type="type"
    class="inline-flex items-center px-4 py-2 bg-white border border-gray-200 rounded-md font-semibold text-sm text-gray-600 shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-moon-raker-600 focus:ring-offset-2 disabled:opacity-25 disabled:border-gray-600 transition-colors">
    <slot />
  </button>
</template>
