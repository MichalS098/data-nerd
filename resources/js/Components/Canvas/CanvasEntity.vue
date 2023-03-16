<script setup>
import { useForm } from "@inertiajs/vue3";
import { defineProps } from "vue";
import { reactive } from "vue";

// const props = defineProps({
//   entity: {
//     type: Object,
//     required: true,
//   },
// });

let entity = reactive({
  name: "course_settings",
  x: 400 + "px",
  y: 400 + "px",
  attributes: [
    {
      id: 1,
      name: "id",
      type: "int",
      primary: true,
    },
    {
      id: 2,
      name: "price",
      type: "float",
      primary: false,
    },
    {
      id: 3,
      name: "test",
      type: "int",
      primary: false,
    },
  ],  
});

</script>

<template>
  <!-- draggable -->
  <div
    class="rounded-lg bg-white p-[3px] border border-gray-200 w-48 absolute"
    :style="{ left: entity.x, top: entity.y }"
    
  >
    <div class="px-3 py-2 bg-moon-raker-200 rounded-t-md font-medium text-sm">
      {{ entity.name }}
    </div>
    <div>
      <ul
        v-for="attribute in entity.attributes"
        :key="attribute.id"
        class="flex flex-col gap-2 px-3 py-2"
      >
        <li
          :class="[
            'flex items-center justify-between gap-1 text-sm',
            attribute.primary ? 'font-bold' : '',
          ]"
        >
          <span class="text-black"> {{ attribute.name }} </span>
          <span class="text-gray-400"> {{ attribute.type }} </span>
        </li>
      </ul>
    </div>
  </div>
</template>
