<script setup>
import { useForm } from "@inertiajs/vue3";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import CodeEditor from "@/Components/CodeEditor.vue";
import { ref } from "vue";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});

let code = ref(`
create table users
(
  id int primary key,
  name varchar(255),
  email varchar(255)
);
`);
</script>

<template>
  <aside class="bg-white w-96 border-r border-gray-200 h-full">
    <TabGroup>
      <TabList class="w-full grid grid-cols-2">
        <Tab
          class="
          font-bold text-gray-500 flex items-center justify-center pt-5 pb-3 px-3 border-b-2 border-gray-300
          focus:outline-moon-raker-500
          ui-selected:border-black ui-selected:text-black"
        >
          Code editor
        </Tab>
        <Tab
          class="
          font-bold text-gray-500 flex items-center justify-center pt-5 pb-3 px-3 border-b-2 border-gray-300
          focus:outline-moon-raker-500
          ui-selected:border-black ui-selected:text-black"
        >
          Block builder
        </Tab>
      </TabList>
      <TabPanels>
        <TabPanel>
          <CodeEditor lang="sql" :code="code" />
        </TabPanel>
        <TabPanel>
          <BlockBuilder />
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </aside>
</template>
