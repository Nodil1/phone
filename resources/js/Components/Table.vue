<template>
    <v-table>
        <tr
        >
            <td>{{ phone.name }}</td>
            <td>{{ phone.calories }}</td>
        </tr>
    </v-table>
</template>

<script>
export default {
    name: "Table",
    props: ['phone']
}
</script>

<style scoped>

</style>
