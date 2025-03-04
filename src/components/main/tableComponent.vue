<script setup>
let props = defineProps({
    data: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <div class="table-container">
        <table>
            <tr v-for="item in data" :key="item">
                <td class="header">{{ item.head }}</td>
                <td>
                    {{ item.content }}
                    <ul v-if="item.details != null">
                        <li v-for="detail in item.details" :key="detail">
                            {{ detail }}
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</template>

<style scoped>
table {
    border-collapse: collapse;

    .header {
        font-weight: bold;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }
}
</style>
