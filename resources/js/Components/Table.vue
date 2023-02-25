<template>
    <v-card border>
    <v-table>
        <thead>
        <tr>
            <th class="text-left">
                Номер
            </th>
            <th class="text-left">
                Просмотров
            </th>
            <th class="text-left">
                Оценка
            </th>
        </tr>
        </thead>
        <tbody>
        <tr
            v-for="item in phones"
        >
            <td>8{{ item.number }}</td>
            <td>{{ item.views }} шт</td>
            <td>{{ item.stars }}</td>
        </tr>
        </tbody>
    </v-table>
    </v-card>
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
