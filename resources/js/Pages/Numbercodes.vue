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
                            variant="underlined"
                            color="black"
                            label="Поиск кода"
                            single-line
                            hide-details
                            append-inner-icon="mdi-magnify"
                            @click:append-inner="onClick"
                        ></v-text-field>
                    </v-card-text>
                    <v-row no-gutters>
                        <v-col
                            v-for="i in codes"
                            cols="20"
                            sm="2"
                            md="2"
                            class="text-center"
                        >
                            <Link :href="'/codes/'+ i.code">
                                <v-hover
                                    v-slot="{ isHovering, props }"
                                >
                                <v-sheet class="ma-2 pa-2" border rounded :elevation="isHovering ? 16 : 2"
                                         :class="{'on-hover': isHovering }" v-bind="props">
                                    КОД: {{i.code}}
                                </v-sheet>
                                </v-hover>
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
    margin: 1%;
    color: white;
    background: #0b82b3;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 16px;
    padding-right: 16px;

}

</style>
