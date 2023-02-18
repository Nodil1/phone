<template>
    <v-table>

            <td>{{ phone.name }}</td>
            <td>{{ phone.calories }}</td>

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
