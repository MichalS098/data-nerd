<script setup>
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import { TransitionRoot } from "@headlessui/vue";
import { PlusIcon, MagnifyingGlassIcon } from "@heroicons/vue/20/solid";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SidebarEntity from "@/Components/Canvas/SidebarEntity.vue";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});

// let entities = props.entities;
// let searchQuery = ref("");

// const filteredEntities = computed(() =>
//   searchQuery.value === ""
//     ? entities
//     : entities.filter((entity) => {
//       return entity.name
//         .toLowerCase()
//         .includes(searchQuery.value.toLowerCase());
//     })
// );

console.log(props.diagram.entities);

const addEntity = () => {
  const form = useForm({
    name: "Entity",
  });  

  form.post(route("diagrams.entities.store", props.diagram.id));
};
</script>

<template>
  <div class="sidebar-block-scrollbar flex flex-col overflow-y-auto pt-3 pb-64 px-3 gap-2 h-full">
    <PrimaryButton @click="addEntity()" class="w-full">
      Add entity
      <PlusIcon class="h-5 w-5 text-white" />
    </PrimaryButton>
    <SidebarEntity v-for="entity in props.diagram.entities" :key="entity.id" :entity="entity" />
    <!-- <div class="absolute bottom-0 left-0 right-0 w-full px-6 py-3 border-t border-gray-200 bg-white flex items-center">
      <div class="p-3 border border-gray-200 rounded-md bg-gray-100">
        <MagnifyingGlassIcon class="h-5 w-5 text-gray-800" />
      </div>
      <input v-model="searchQuery" type="text"
        class="border-0 focus:outline-moon-raker-500 focus:ring-0 rounded-r-md px-3 py-2" placeholder="Search blocks">
    </div> -->
  </div>
</template>

<style>
.sidebar-block-scrollbar::-webkit-scrollbar {
  width: 0.5rem;
}

.sidebar-block-scrollbar::-webkit-scrollbar-track {
  background: #fff;
}

.sidebar-block-scrollbar::-webkit-scrollbar-thumb {
  background: rgb(243 244 246);
  border-radius: 0.5rem;
}

.sidebar-block-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #e0e0e0;
}
</style>