<template>
    <v-card border>
        <v-row>
            <v-col><p>Номер</p></v-col>
            <v-col><p>Просмотров</p></v-col>
            <v-col><p>Оценка</p></v-col>
        </v-row>
        <v-row v-for="item in phones">
            <v-col>8{{ item.number }}</v-col>
            <v-col>{{ item.views }} шт</v-col>
            <v-col>{{ item.stars }}</v-col>
        </v-row>
    </v-card>
</template>

<script>
export default {
    name: "Table",
    props: ['phones']
}
</script>

<style scoped>

td{
}
.sees{
    text-align: center;
}
</style>
