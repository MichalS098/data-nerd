<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue";
    import DiagramCard from "@/Components/Diagrams/DiagramCard.vue";
    import PrimaryButton from "@/Components/PrimaryButton.vue";
    import {
        useForm
    } from '@inertiajs/vue3'

    const props = defineProps({
        diagrams: {
            type: Array,
            required: true
        }
    })

    // TODO: make modal with form
    const createDiagram = () => {
        const form = useForm({
            name: 'Nowy diagram',
            description: 'Nowy opis'
        })

        form.post(route('diagrams.store'))
    }
</script>

<template>
    <AppLayout title="Diagrams">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Diagrams
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                    <div>
                        <div
                             class="border-b border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent lg:p-8">

                            <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                                Diagrams listing
                            </h1>

                            <p class="mt-6 leading-relaxed text-gray-500 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error iure voluptas illo alias
                                dicta recusandae ratione, vitae doloribus ipsam ut. Illo minus deserunt, cupiditate
                                commodi culpa modi dicta? Error, velit.
                            </p>
                        </div>

                        <div
                             class="grid grid-cols-1 gap-6 bg-gray-200 bg-opacity-25 p-6 dark:bg-gray-800 md:grid-cols-2 lg:gap-8 lg:p-8">
                            <div v-for="diagram in props.diagrams" :key="diagram.id">
                                <DiagramCard :diagram="diagram" />
                            </div>

                            <div class="md:col-span-2">
                                <PrimaryButton @click="createDiagram">
                                    Create diagram
                                </PrimaryButton>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
