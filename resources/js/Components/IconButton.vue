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
    class="inline-flex items-center p-1 bg-white border border-gray-200 rounded-md font-semibold text-sm text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-moon-raker-600 focus:ring-offset-2 disabled:opacity-25 disabled:border-gray-600 transition-colors">
    <slot />
  </button>
</template>
