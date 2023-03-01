<template>
    <v-card border>
        <v-row class="bottom-border ">
            <v-col><p class="text-center">Номер</p></v-col>
            <v-col><p class="text-center">Просмотров</p></v-col>
            <v-col><p class="text-center">Оценка</p></v-col>
        </v-row>
        <v-row v-for="item in phones" class="bottom-border table-row">
            <v-col><Link :href="'/number/7' + item.number"><p class="text-center">8{{ item.number }}</p></Link></v-col>
            <v-col><p class="text-center">{{ item.views }} шт</p></v-col>
            <v-col><p class="text-center">{{ item.stars }}</p></v-col>
        </v-row>
    </v-card>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Table",
    components: {Link},
    props: ['phones']
}
</script>

<style scoped>

td{
}
.sees{
    text-align: center;
}
.table-row{
    cursor: pointer;

}
.table-row:hover{
    background-color: rgba(199, 199, 199, 0.55);
}
</style>
