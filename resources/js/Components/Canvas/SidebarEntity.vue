<script setup>
import { ref, computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import {
  ChevronDownIcon,
  CheckIcon,
  ChevronUpDownIcon,
} from "@heroicons/vue/20/solid";
import { TrashIcon } from "@heroicons/vue/24/outline";
import {
  Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
} from "@headlessui/vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
  entity: {
    type: Object,
    required: true,
  },
});


const sqlFieldTypes = [
  { id: 1, name: "int" },
  { id: 2, name: "varchar" },
  { id: 3, name: "text" },
  { id: 4, name: "date" },
  { id: 5, name: "datetime" },
  { id: 6, name: "timestamp" },
  { id: 7, name: "time" },
  { id: 8, name: "year" },
  { id: 9, name: "tinyint" },
  { id: 10, name: "smallint" },
  { id: 11, name: "mediumint" },
  { id: 12, name: "bigint" },
  { id: 13, name: "decimal" },
  { id: 14, name: "float" },
  { id: 15, name: "double" },
  { id: 16, name: "bit" },
  { id: 17, name: "boolean" },
  { id: 18, name: "serial" },
  { id: 19, name: "blob" },
  { id: 20, name: "tinyblob" },
  { id: 21, name: "mediumblob" },
  { id: 22, name: "longblob" },
  { id: 23, name: "enum" },
  { id: 24, name: "set" },
  { id: 25, name: "json" },
];

const addField = () => {
  const form = useForm({
    name: "Field",
    type: "varchar"
  });

  form.post(route("entities.fields.store", props.entity.id), {
    onSuccess() {
      console.log('success');
    },
  });
}

</script>

<template>
  <div class="flex flex-col">
    <Disclosure>
      <DisclosureButton>
        <div class="flex items-center justify-between px-3 py-2 bg-gray-100 border border-gray-200 rounded-md">
          <div class="text-sm font-medium text-gray-900">
            {{ props.entity.name }}
          </div>
          <ChevronDownIcon class="w-5 h-5 text-gray-500 ui-open:rotate-180" />
        </div>
      </DisclosureButton>

      <transition enter-active-class="transition duration-100 ease-out" enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100" leave-active-class="transition duration-75 ease-out"
        leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
        <DisclosurePanel>
          <div class="px-3">
            <div v-for="field in props.entity.fields" :key="field.id"
              class="grid grid-cols-sidebar-entity items-center gap-1 py-1">
              <div class="text-sm font-medium text-gray-900">
                {{ field.name }}
              </div>

              <Listbox as="div" v-model="field.type">
                <ListboxLabel class="sr-only">Field type</ListboxLabel>
                <div class="relative mt-1">
                  <ListboxButton
                    class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-moon-raker-500 focus:outline-none focus:ring-1 focus:ring-moon-raker-500 sm:text-sm">
                    <span class="block truncate">{{ field.type }}</span>
                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                      <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                    </span>
                  </ListboxButton>

                  <transition leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100"
                    leave-to-class="opacity-0">
                    <ListboxOptions
                      class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                      <ListboxOption as="template" v-for="fieldType in sqlFieldTypes" :key="fieldType.id"
                        :value="fieldType.name" v-slot="{ active, selected }">
                        <li
                          :class="[active ? 'text-white bg-moon-raker-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                          <span :class="[selected ? 'font-semibold' : 'font-normal', 'block truncate']">
                            {{ fieldType.name }}
                          </span>
                          <span v-if="selected"
                            :class="[active ? 'text-white' : 'text-moon-raker-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                          </span>
                        </li>
                      </ListboxOption>
                    </ListboxOptions>
                  </transition>
                </div>
              </Listbox>

              <div class="text-sm font-medium text-gray-900 justify-self-end">
                test
              </div>
            </div>

            <div class="border-t border-gray-200 mt-2 pt-2 flex items-center justify-between gap-3">
              <div class="flex items-center gap-3">
                <SecondaryButton>
                  <TrashIcon class="h-4 w-4 text-black" />
                </SecondaryButton>
                <SecondaryButton>
                  <TrashIcon class="h-4 w-4 text-white" />
                </SecondaryButton>
              </div>
              <div>
                <SecondaryButton @click="addField()">New field</SecondaryButton>
              </div>
            </div>
          </div>
        </DisclosurePanel>
      </transition>
    </Disclosure>
  </div>
</template>

<style> .grid-cols-sidebar-entity {
   grid-template-columns: 1fr 1.5fr 50px;
 }
</style>