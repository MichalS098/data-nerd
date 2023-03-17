<script setup>
// use highlight js
import hljs from "highlight.js/lib/core";
import sql from "highlight.js/lib/languages/sql";
import "highlight.js/styles/atom-one-dark.css";
import { ref } from "vue";
import { computed } from "vue";
import { ClipboardDocumentIcon } from "@heroicons/vue/24/outline";
import { TransitionRoot } from "@headlessui/vue";

hljs.registerLanguage("sql", sql);

const props = defineProps({
  lang: {
    type: String,
    required: true,
  },
  code: {
    type: String,
    required: true,
  },
});

let highlightedCode = computed(() => {
  return hljs.highlight(props.lang, props.code).value;
});

let showCopied = ref(false);
let copyCode = () => {
  navigator.clipboard.writeText(props.code);
  showCopied.value = true;
  setTimeout(() => {
    showCopied.value = false;
  }, 2000);
};
</script>

<template>
  <div class="flex h-full relative group">
    <!-- copy code button -->
    <button
      class="hidden group-hover:block absolute top-3 right-3 bg-white p-2 rounded-md border border-gray-200 hover:bg-gray-100 transition-colors"
      @click="copyCode"
    >
      <ClipboardDocumentIcon class="w-5 h-5 text-gray-400" />
    </button>
    <TransitionRoot :show="showCopied">
      <div
        class="absolute top-3 right-3 p-2 rounded-md border border-gray-200 bg-sandwisp-200 text-black shadow-md transition-opacity"
      >
        Text copied
      </div>
    </TransitionRoot>

    <div
      class="h-full w-12 bg-canvas-bg-light text-sm font-mono p-3 text-right text-swirl-500"
    >
      <span
        v-for="(line, index) in highlightedCode.split(' ')"
        :key="index"
        class="block"
      >
        {{ index + 1 }}
      </span>
    </div>
    <div class="h-full w-full overflow-auto py-3 px-1">
      <pre class="h-full w-full">
            <code class="h-full w-full text-sm" v-html="highlightedCode" />
        </pre>
    </div>
  </div>
</template>