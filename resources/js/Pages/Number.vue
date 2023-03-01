<template>
    <DefaultLayaout>
        <Head>
            <title>+7{{ phone.number }} - кто мне звонил?</title>
            <meta name="description" :content="`Кто звонил с номера +7${phone.number}? По нашей информации номер 7${phone.number }
            принадлежит оператору ${phone.operator}. Номер зарегистрирован в ${phone.region}` "/>
            <meta name="Keywords"
                  :content="`Кто звонил, чей номер +7${phone.number}, оператор +7${phone.number}, город +7${phone.number}, регион +7${phone.number}`">

        </Head>
        <v-alert class="wrapper default-container margin-top blue-bg">
            <template v-slot:title>
                <h1>Кто звонил с 8{{ phone.number }} ?</h1>
            </template>
            <template v-slot:text>
                <div class="d-flex flex-column">
                    <h2>Кто звонил c номера +7{{ phone.number }}</h2>
                    <p>Или 8{{ phone.number }}? Узнайте информацию по звонкам с номера телефона +7{{
                            phone.number
                        }}.</p>
                    <p v-if="phone.operator !== ''">По нашей информации номер <b>7{{ phone.number }}</b> принадлежит
                        оператору <b>{{ phone.operator }}</b>.
                        Номер зарегистрирован в <b>{{ phone.region }}</b>.</p>
                </div>
            </template>
        </v-alert>
        <v-alert class="wrapper default-container margin-top blue-bg">
            <template v-slot:title>
                <h2>Возможные варианты номера +7{{ phone.number }}</h2>
            </template>
            <template v-slot:text>
                <div class="d-flex flex-column">
                    Номер +7{{ phone.number }} написать по разному, например: {{this.generateNumbers()}}
                </div>
            </template>
        </v-alert>
        <v-row justify="space-between" class="default-container blue-bg margin-top">
            <v-col sm="7"
                   md="7"
            >
                <div class="main-info">
                    <v-card class="mb-5 text-h6">
                        <v-card-text class="text-h6">
                            <h3>Информация о номере: 8{{ phone.number }}</h3>
                        </v-card-text>
                    </v-card>
                    <Info :number="phone"/>
                    <v-btn
                        class="hidden-md-and-up margin-top"
                        href="#comment"
                    >
                        Оставить комментарий
                    </v-btn>
                </div>
                <v-alert class="info-ttl" variant="text">
                    <template v-slot:title>
                        <h2>Отзывы о номере +7{{ phone.number }}</h2>
                    </template>
                </v-alert>

                <CommentItem v-for="item in phone.comments" :value="item"/>
                <Similar v-if="false"/>
            </v-col>
            <v-col sm="5"
                   md="5">
                <v-card class="mb-5 text-h6" id="comment">
                    <v-card-text class="text-h6 pa-2">
                        <p class="ma-2">Звонили с этого номера?</p>
                        <p class="ma-2">Вы можете оставить отзыв о номере +7{{ phone.number }}</p>
                    </v-card-text>
                </v-card>
                <v-card border class="info">
                    <Comment  />
                </v-card>
            </v-col>
        </v-row>
    </DefaultLayaout>
</template>

<script>

import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import parsePhoneNumber from 'libphonenumber-js'
import Info from "@/Components/Info.vue"
import Comment from "@/Components/Comment.vue";
import Lastcomments from "@/Components/Lastсomments.vue";
import Similar from "@/Components/Similar.vue";
import BarChart from "@/Components/BarChart.vue";
import CommentItem from "@/Components/CommentItem.vue";
import {Head} from '@inertiajs/vue3'

export default {
    name: "Number",
    computed: {
        login() {
            return login
        }
    },
    components: {Head, CommentItem, BarChart, Similar, Lastcomments, Comment, Info, DefaultLayaout},
    props: ['phone'],
    methods: {
        generateNumbers() {
            let result = []
            const phoneNumber = parsePhoneNumber(`7${this.phone.number}`, 'RU')
            result.push(`8${this.phone.number}`)

            result.push(phoneNumber.format("NATIONAL"))
            result.push(phoneNumber.format("NATIONAL").replace("(", "").replace(")", ""))
            result.push(phoneNumber.format("NATIONAL", {nationalPrefix: false}))
            result.push("+7 " + phoneNumber.format("NATIONAL", {nationalPrefix: false}))

            result.push(phoneNumber.format("INTERNATIONAL"))

            return result.join(", ")
        }
    },
    data() {
        return {
            options: {
                responsive: true,
                maintainAspectRatio: false
            },
        }
    },
    mounted() {
        console.log(this.phone)
    }
}

</script>

<style scoped>
.info-ttl {
    color: white;
    padding: 5% 0 5% 0;
}

.number {
    padding: 0;
}

.info-ttl-first {
    color: white;
    padding: 0% 0 5%;
    font-size: larger;

}

.wrapper {
    background: rgb(11, 130, 179);
    color: white;

}

</style>

