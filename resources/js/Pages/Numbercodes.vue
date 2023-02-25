<template>
    <DefaultLayaout>
            <v-alert
                text="Для вашего удобства у нас представлен справочник телфонных кодовмобильных и стационарных номеров телефона."
                class="main-text"
            >
                <template v-slot:title>
                    <h1>Cправочник телефонных кодов:</h1>
                </template>
            </v-alert>
        <div class="wrapper codes">
            <v-card border class="info">
                <v-container variant="outlined">
                    <v-card-text>
                        <v-text-field
                            :loading="loading"
                            density="compact"
                            variant="underlined"
                            color="white"
                            label="Поиск кода"
                            append-inner-icon="mdi-magnify"
                            @click:append-inner="onClick"
                        ></v-text-field>
                    </v-card-text>
                    <v-row no-gutters>
                        <v-col
                            v-for="i in codes"
                            cols="20"
                            sm="4"
                        >
                            <Link :href="'/codes/'+ i.code">
                                <v-sheet class="ma-2 pa-2" border rounded>
                                    КОД: {{i.code}}
                                </v-sheet>
                            </Link>
                        </v-col>
                    </v-row>
                </v-container>
            </v-card>
        </div>
    </DefaultLayaout>

</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Codes from "@/Components/Codes.vue";
import { Link } from '@inertiajs/vue3';
import Search from "@/Components/Search.vue";

export default  {
    name: "Numbercodes",
    components: {Search, Codes, DefaultLayaout,Link},
    data () {
        return {
        codes: [
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "904",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            },
            {
                code: "905",
                operator: ["Теле2","Мегафон"],
                region:["Vladimirskaya obl","Kovrov"]
            }]

}}}

</script>

<style scoped>
.codes{
    padding: 3%;
}
.main-text{
    margin: 3%;
    color: white;
    background: #4B83C6;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 16px;
    padding-right: 16px;

}

</style>
