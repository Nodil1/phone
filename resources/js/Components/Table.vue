<template>
    <v-table>
        <thead>
        <tr>
            <th class="text-left">
                Номер
            </th>
            <th class="text-left">
                Просмотров
            </th>
        </tr>
        </thead>
        <tbody>
        <tr
            v-for="item in phones"
            :key="item.name"
        >
            <td>{{ item.name }}</td>
            <td class="sees">{{ item.calories }}</td>
        </tr>
        </tbody>
    </v-table>
</template>

<script>
export default {
    name: "Table",
    props: ['phones']
}
</script>

<style scoped>
.sees{
    text-align: center;
}
</style>
