<template>
    <DefaultLayaout>
        <v-alert class="main-text default-container margin-top">
            <template v-slot:title>
                <h1>Кто мне звонил с незнакомого номера ?</h1>
            </template>
            <template v-slot:text>
                <div class="d-flex flex-column">
                    <p>Вам поступил звонок с незнакомого номера? Воспользуйтесь нашим справочником телефонных номеров.
                        На нашем сайте вы можете узнать область, оператора телефонного номера, а также прочитать отзывы
                        других людей.</p>
                </div>
            </template>
        </v-alert>
        <v-container class="wrapper default-container margin-top">
            <v-row>
                <v-col
                    cols="12"
                    md="4"
                    v-for="i in propNumbers"
                >
                    <Card :phone="i"></Card>
                </v-col>
            </v-row>
                <Pagination :current-page="currentPage" :page-count="pageCount"/>
        </v-container>
    </DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Card from "@/Components/Card.vue";
import Pagination from "@/Components/Pagination.vue";

export default {
    name: "PhonesList",
    props: ['propNumbers', 'currentPage', 'pageCount'],
    components: {Pagination, Card, DefaultLayaout},
    mounted() {
        console.log("Ya!")
        console.log(this.propNumbers)
    }
}
</script>

<style scoped>

</style>
