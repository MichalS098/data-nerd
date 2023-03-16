<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { computed } from "vue";
import { useForm } from "@inertiajs/vue3";
import CanvasHeader from "@/Components/Canvas/CanvasHeader.vue";
import CanvasSidebar from "@/Components/Canvas/CanvasSidebar.vue";
import CanvasScreen from "@/Components/Canvas/CanvasScreen.vue";

const props = defineProps({
  diagram: {
    type: Object,
    required: true,
  },
});

const createEntity = () => {
  const form = useForm({
    name: "Nowa encja",
  });

  form.post(route("diagrams.entities.store", props.diagram.id));
};
</script>

<template>
  <div class="h-screen w-full overflow-hidden flex flex-col">
    <Head :title="props.diagram.name" />
    <CanvasHeader />
    <div class="flex-1 flex overflow-hidden">
      <div class="flex-1 flex">
        <CanvasSidebar :diagram="props.diagram" />
        <CanvasScreen :diagram="props.diagram" />        
      </div>
    </div>
  </div>
</template>
