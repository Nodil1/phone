<template>
    <Head>
        <title>Чей номер? Узнай кто тебе звонил.</title>
        <meta name="keyword" :content="keywords">
        <meta name="description"
              content="Позвонили с незнакомого номера? Мы поможем найти информацию о любом незнакомом номере. У нас вы можете получить информацию об операторе, регионе телефонного номера.">
    </Head>
    <DefaultLayaout>
        <v-alert
            class="main-text default-container margin-top blue-bg white-text"
        >
            <template v-slot:text>
                <p>Часто на экране телефона появляются незнакомые номера. Чтобы быстро понять, кто вам звонил, с какого сотового оператора и из какого региона мы разработали данный сервис. Наш справочник содержит абонентов всех мобильных телефонов России.</p>
            </template>
            <template v-slot:title>
                <h1>Звонят с незнакомого номера?</h1>
            </template>
        </v-alert>
        <div class="wrapper default-container margin-top">
            <v-row justify="space-between">
                <v-col sm="7"
                       md="6"
                >
                    <p class="white-text bold-text text-h5 margin-bottom">Популярные номера</p>
                    <div class="cards">
                        <Card v-for="item in propNumbers" :phone="item"/>
                    </div>
                </v-col>
                <v-col xs="3" sm="5" md="6">
                    <p class="white-text bold-text text-h5 margin-bottom">Последние активные</p>

                    <div class="right-column">
                        <Table
                            :phones="lastComments"
                        />
                    </div>
                </v-col>
            </v-row>
            <Pagination :page-count="pageCount" :current-page="1"/>
        </div>
    </DefaultLayaout>
</template>

<script>
import {defineComponent} from "vue";
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Card from "@/Components/Card.vue";
import Table from "@/Components/Table.vue";
import Description from "@/Components/Description.vue";
import Search from "@/Components/Search.vue";
import Pagination from "@/Components/Pagination.vue";
import Comment from "@/Components/Comment.vue";
import Modal from "@/Components/Modal.vue";
import Code from "@/Pages/Code.vue";
import {Head} from '@inertiajs/vue3'

export default defineComponent({
    components: {Code, Modal, Comment, Pagination, Search, Description, Table, Card, DefaultLayaout, Head},
    props: ['propNumbers', 'lastComments', 'pageCount'],
    mounted() {
        console.log(this.propNumbers);
    },
    computed: {
        keywords() {
            console.log("Keyword")
            console.log(this.propNumbers.map((x) => x.number))
            return this.propNumbers.map((x) => x.number).join(",")
        }
    },
    data() {
        return {
            numbers: [
                {
                    number: "8005553535",
                    type: "Мошенник",
                    comments: [
                        {
                            name: "Diman",
                            text: "2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110",
                            date: "01.02.45 17:44"
                        }
                    ],
                    stars: 3.4,
                    views: 123
                },
                {
                    number: "8905553535",
                    type: "Мошенник",
                    comments: [
                        {
                            name: "Diman",
                            text: "2112 is good. Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110",
                            date: "01.02.45 17:44"
                        }
                    ],
                    stars: 3.4,
                    views: 123
                }]
        }

    }
})

</script>

<style scoped>
.v-container {
    padding: 0;
}


.codes {
    padding: 1%;
}
</style>
