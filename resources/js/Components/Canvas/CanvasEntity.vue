<script setup>
import { useForm } from "@inertiajs/vue3";
import { defineProps } from "vue";
import { reactive } from "vue";

const props = defineProps({
  entity: {
    type: Object,
    required: true,
  },
});

</script>

<template>
  <!-- draggable -->
  <div class="rounded-lg bg-white p-[3px] border border-gray-200 w-48 absolute"
    :style="{ left: entity.x + 'px', top: entity.y + 'px' }">
    <div class="px-3 py-2 bg-moon-raker-200 rounded-t-md font-medium text-sm">
      {{ entity.name }}
    </div>
    <div>
      <ul v-for="field in entity.fields" :key="field.id" class="flex flex-col gap-2 px-3 py-2">
        <li :class="[
          'flex items-center justify-between gap-1 text-sm',
          field.primary ? 'font-bold' : '',
        ]">
          <span class="text-black"> {{ field.name }} </span>
          <span class="text-gray-400"> {{ field.type }} </span>
        </li>
      </ul>
    </div>
  </div>
</template>
