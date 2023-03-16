<script setup>
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        diagram: {
            type: Object,
            required: true
        }
    })
</script>

<template>
    <Link :href="route('diagrams.show', props.diagram.id)" class="w-full rounded-md flex flex-col gap-6 p-6 bg-white dark:bg-gray-700 shadow-md border-indigo-600 border group hover:bg-indigo-500 transition-colors">
        <div class="flex flex-col gap-2">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200 group-hover:text-white transition-colors">
                {{ props.diagram.name }}
            </h2>

            <p class="text-gray-500 dark:text-gray-400 group-hover:text-white  transition-colors">
                {{ props.diagram.description }}
            </p>
        </div>
    </Link>
</template>
