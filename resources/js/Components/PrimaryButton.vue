<script setup>
const props = defineProps({
  type: {
    type: String,
    default: "submit",
  },
  class: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <button
    :type="props.type"
    :class="{
        'flex items-center gap-1 justify-center px-4 py-2 bg-black border border-transparent rounded-md text-base text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-moon-raker-500 focus:ring-offset-2 transition-colors': true,
        [props.class]: true,
    }"
  >
    <slot />
  </button>
</template>
