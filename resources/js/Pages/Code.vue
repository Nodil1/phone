<template>
    <DefaultLayaout>
        <v-alert
            :text="'Мы собрали всю доступную информацию по телефонному коду '+code"
            class="main-text"
        >
            <template v-slot:title>
                <h1>Телефонный код: {{code}}</h1>
            </template>
        </v-alert>
        <div class="wrapper codes">
            <v-card>
                <v-table>
                    <thead>
                    <tr>
                        <th class="text-left">
                            Регионы
                        </th>
                        <th class="text-left">
                            Операторы
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr
                        v-for="i in codes"
                        :key="i.code"
                    >
                        <td>{{ i.operator[1] }}</td>
                        <td>{{ i.region[0] }}</td>
                    </tr>
                    </tbody>
                </v-table>
                </v-card>
        </div>
    </DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";

export default {
    name: "Code",
    props:['code'],
    components: {DefaultLayaout},
    data () {
        return {
            codes: [
                {
                    code: "904",
                    operator: ["Теле2","Мегафон"],
                    region:["Vladimirskaya obl","Kovrov"]
                },]}}
}
</script>

<style scoped>
.main-text{
    color: white;
    background: #0b82b3;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 16px;
    padding-right: 16px;

}
</style>
