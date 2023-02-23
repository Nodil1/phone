<template>
    <DefaultLayaout>
        <div class="wrapper">
            <v-container class="bg-surface-variant mb-1">
                <v-row justify="space-between" class="mb-6">
                    <v-col         sm="5"
                                   md="6"
                                   >
                            <div class="cards">
                                <Card v-for="item in numbers" :phone="item"/>
                            </div>
                    </v-col>
                    <v-col         sm="5"
                                   md="5">
                        <div class="right-column">
                            <Table
                                :phones="numbers"
                            />
                        </div>
                    </v-col>
                </v-row>
            </v-container>
            <Pagination/>
        </div>
    </DefaultLayaout>
</template>
<script>
import { email, required } from '@vuelidate/validators'
import { useVuelidate } from '@vuelidate/core'
import { Link } from '@inertiajs/vue3';

import {defineComponent} from "vue";
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Card from "@/Components/Card.vue";
import Table from "@/Components/Table.vue";
import Description from "@/Components/Description.vue";
import Search from "@/Components/Search.vue";
import Pagination from "@/Components/Pagination.vue";
import Comment from "@/Components/Comment.vue";
import Modal from "@/Components/Modal.vue";

export default defineComponent({
    components: {Modal, Comment, Pagination, Search, Description, Table, Card, DefaultLayaout},
    data () {
        return {
            numbers: [
                {
                    number: "8005553535",
                    type: "Мошенник",
                    comments: [
                        {
                            name: "Diman",
                            text: "2112 is good. Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110",
                            date:"01.02.45 17:44"
                        }
                    ],
                    stars: 3.4,
                    views: 123
                }]
        }

}})
</script>

<style scoped>
.v-container{
    padding: 0;
}
</style>
