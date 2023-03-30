<script setup>
import { useForm } from "@inertiajs/vue3";
import CanvasEntity from "@/Components/Canvas/CanvasEntity.vue";
import { HomeIcon } from "@heroicons/vue/24/outline";
import { ChevronRightIcon } from "@heroicons/vue/20/solid";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import IconButton from "@/Components/IconButton.vue";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <main class="relative w-full h-full bg-canvas-bg-light flex">
    <div class="relative w-full h-full flex items-center justify-center">
      <!-- infinite grid -->
      <div class="absolute top-0 bottom-0 left-0 right-0 grid grid-cols-12 grid-rows-12 gap-4">
        <CanvasEntity v-for="entity in props.diagram.entities" :key="entity.id" :entity="entity" />
      </div>

      <div class="flex items-center justify-between p-3 absolute bottom-0 left-0 right-20">
        <div class="flex items-center gap-1">
          <IconButton>
            <ChevronRightIcon class="w-5 h-5 text-gray-800" />
          </IconButton>
          <IconButton>
            <ChevronRightIcon class="w-5 h-5 text-gray-800" />
          </IconButton>
        </div>
        <div class="flex items-center gap-1">
          <IconButton>
            <ChevronRightIcon class="w-5 h-5 text-gray-800" />
          </IconButton>
          <IconButton>
            <ChevronRightIcon class="w-5 h-5 text-gray-800" />
          </IconButton>
        </div>
      </div>
    </div>

    <div class="absolute top-0 bottom-0 right-0 h-full bg-white p-2 border-l border-gray-200">
      <button
        class="flex items-center justify-center absolute p-2 top-6 -left-[42px] border border-gray-200 bg-white hover:bg-gray-100 transition-colors rounded-l-md">
        <ChevronRightIcon class="w-6 h-6 text-gray-400" />
      </button>
      <ul class="divide-y divide-y-gray-200">
        <li>
          <button class="p-4 hover:bg-gray-100 transition-colors">
            <HomeIcon class="w-6 h-6 text-gray-900" />
          </button>
        </li>
        <li>
          <button class="p-4 hover:bg-gray-100 transition-colors">
            <HomeIcon class="w-6 h-6 text-gray-900" />
          </button>
        </li>
        <li>
          <button class="p-4 hover:bg-gray-100 transition-colors">
            <HomeIcon class="w-6 h-6 text-gray-900" />
          </button>
        </li>
      </ul>
    </div>
  </main>
</template>
