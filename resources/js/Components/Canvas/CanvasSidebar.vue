<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <aside class="bg-white w-96 p-3 flex flex-col border-r border-gray-200 h-full">
    <div class="flex items-center gap-6">
      <div class="w-10 h-10 rounded-full bg-swirl-900"></div>
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
    </div>
    <div class="flex flex-col gap-6">
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
    </div>
    <div class="flex flex-col gap-6">
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
      <div class="flex flex-col gap-1">
        <span class="text-lg text-swirl-900">Lorem Ipsum</span>
        <span class="text-sm text-swirl-900">Lorem Ipsum</span>
      </div>
    </div>


  </aside>
</template>
