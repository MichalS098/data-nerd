<script setup>
defineProps({
  type: {
    type: String,
    default: "button",
  },
});
</script>

<template>
  <button  
    :type="type"
    class="inline-flex items-center px-4 py-2 bg-white border border-swirl-200 rounded-md font-semibold text-sm text-swirl-800 shadow-sm hover:bg-swirl-50 focus:outline-none focus:ring-2 focus:ring-moon-raker-600 focus:ring-offset-2 disabled:opacity-25 disabled:border-swirl-600 transition-colors"
  >
    <slot />
  </button>
</template>
