<template>
    <DefaultLayaout>
        <section class="search">
            <div class="search-input">
                <Search/>
            </div>
        </section>
        <div class="wrapper">
            <section class="content">
            <v-container class="bg-surface-variant mb-1">
                <v-row justify="space-between" class="mb-6">
                    <v-col         sm="5"
                                   md="6">
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
            </section>
            <Pagination/>
            <Card :onLogin='onLogin'/>

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

export default defineComponent({
    components: {Modal, Comment, Pagination, Search, Description, Table, Card, DefaultLayaout},
    methods: {
        onLogin (data) {
            console.log('child component said login',data)
        }
    },
    data () {
        return {
            numbers: [
                {
                    name: '8(904)-598-62-00',
                    calories: 1,
                },
                {
                    name: '8(904)-598-62-00',
                    calories: 2,
                },
                {
                    name: '8(904)-598-62-00',
                    calories: 1,
                },
                {
                    name: '8(904)-598-62-00',
                    calories: 2,
                },]}},
})
</script>

<style scoped>
.content{
    margin-top: 2%;
}
.v-container{
    padding: 0;
}
</style>
