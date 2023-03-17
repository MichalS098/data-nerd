<script setup>
import { useForm } from "@inertiajs/vue3";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <aside
    class="bg-white w-96 border-r border-gray-200 h-full"
  >
    <TabGroup>
      <TabList>
        <Tab
          class="
          font-bold 
          ui-selected:bg-blue-500 ui-selected:text-white ui-not-selected:bg-white ui-not-selected:text-black"
        >
          Code editor
        </Tab>
        <Tab
          class="

          ui-selected:bg-blue-500 ui-selected:text-white ui-not-selected:bg-white ui-not-selected:text-black"
        >
          Block builder
        </Tab>
        
      </TabList>
      <TabPanels>
        <TabPanel>
          test1
        </TabPanel>
        <TabPanel>
          test2
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </aside>
</template>
