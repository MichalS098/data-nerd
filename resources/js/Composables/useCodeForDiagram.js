import { ref } from "vue";

export function useCodeForDiagram(entities) {
    const code = ref("");
    entities.forEach((entity) => {
        code.value += `create table ${entity.name}(\n`;
        entity.fields.forEach((field) => {
            code.value += `  ${field.name} ${field.type},\n`;
        });
        code.value += `);\n`;
    });

    return { code };
}