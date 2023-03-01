<template>
    <DefaultLayaout>
        <Head>
            <title>+7{{ phone.number }} - кто мне звонил?</title>
            <meta name="description" :content="`Кто звонил с номера +7${phone.number}? По нашей информации номер 7${phone.number }
            принадлежит оператору ${phone.operator}. Номер зарегистрирован в ${phone.region}` " />
            <meta name="Keywords" :content="`Кто звонил, чей номер +7${phone.number}, оператор +7${phone.number}, город +7${phone.number}, регион +7${phone.number}`">

        </Head>
        <v-alert class="wrapper">
            <template v-slot:title>
                <h1>Кто звонил с 8{{ phone.number }} ?</h1>
            </template>
            <template v-slot:text>
                <div class="d-flex flex-column">
                    <h2>Кто звонил c номера +7{{ phone.number }}</h2>
                    <p>Или 8{{ phone.number }}? Узнайте информацию по звонкам с номера телефона +7{{ phone.number }}.</p>
                    <p v-if="phone.operator !== ''">По нашей информации номер <b>7{{ phone.number }}</b> принадлежит оператору <b>{{ phone.operator }}</b>.
                        Номер зарегистрирован в <b>{{phone.region}}</b>.</p>
                </div>
            </template>
        </v-alert>
        <div class="wrapper number">
            <v-container class="mb-1">
                <v-row justify="space-between" class="mb-6">
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
                                color="primary"
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
                        <Similar/>
                    </v-col>
                    <v-col sm="5"
                           md="5">
                        <v-card class="mb-5 text-h6">
                        <v-card-text class="text-h6 pa-2">
                            <p class="ma-2">Звонили с этого номера?</p>
                            <p class="ma-2">Вы можете оставить отзыв о номере +7{{ phone.number }}</p>
                        </v-card-text>
                        </v-card>
                        <v-card border class="info">
                            <Comment/>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </div>
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
import { Head } from '@inertiajs/vue3'

export default {
    name: "Number",
    components: {Head, CommentItem, BarChart, Similar, Lastcomments, Comment, Info, DefaultLayaout},
    props: ['phone'],
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

