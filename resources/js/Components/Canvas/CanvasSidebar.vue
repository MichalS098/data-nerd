<script setup>
import { useForm } from "@inertiajs/vue3";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import CodeEditor from "@/Components/CodeEditor.vue";
import BlockBuilder from "@/Components/BlockBuilder.vue";
import { ref, computed } from "vue";
import { useCodeForDiagram } from "@/Composables/useCodeForDiagram.js";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});

const { code } = useCodeForDiagram(props.diagram.entities);
</script>

<template>
  <aside class="bg-white canvas-sidebar-width border-r border-gray-200 h-full">
    <TabGroup as="div" class="h-full">
      <TabList class="w-full grid grid-cols-2">
        <Tab
          class="font-bold text-gray-500 flex items-center justify-center pt-5 pb-3 px-3 border-b-2 border-gray-300 focus:outline-moon-raker-500 ui-selected:border-black ui-selected:text-black">
          Code editor
        </Tab>
        <Tab
          class="font-bold text-gray-500 flex items-center justify-center pt-5 pb-3 px-3 border-b-2 border-gray-300 focus:outline-moon-raker-500 ui-selected:border-black ui-selected:text-black">
          Block builder
        </Tab>
      </TabList>
      <TabPanels class="h-full">
        <TabPanel class="h-full">
          <CodeEditor lang="sql" :code="code" />
        </TabPanel>
        <TabPanel class="h-full">
          <BlockBuilder :diagram="props.diagram" />
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </aside>
</template>

<style>
.canvas-sidebar-width {
  width: clamp(400px, 30vw, 500px);
}
</style>