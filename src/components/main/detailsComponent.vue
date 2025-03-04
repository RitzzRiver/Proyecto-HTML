<script setup>
let props = defineProps({
    data: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <details v-for="item in data" :key="item">
        <summary>{{ item.title }}</summary>
        <p v-if="item.subtitle != ''">{{ item.subtitle }}</p>
        <ul>
            <li v-if="item.content != ''" v-for="content in item.content">
                {{ content }}
            </li>
        </ul>
    </details>
</template>
