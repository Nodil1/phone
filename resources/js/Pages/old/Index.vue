<script>

import {defineComponent} from "vue";
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Card from "@/Components/Card.vue";
import Table from "@/Components/Table.vue";

export default defineComponent({
    components: {Table, Card, DefaultLayaout},
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
                    },]}}
})
</script>

<template>
    <DefaultLayaout>
        <div class="wrapper">
            <section class="search">
                <div class="search-input">
                    <v-card
                        class="mx-auto"
                        color="grey-lighten-3"
                        max-width="80%"
                    >
                        <v-card-text>
                            <v-text-field
                                :loading="loading"
                                density="compact"
                                variant="solo"
                                label="Search templates"
                                append-inner-icon="mdi-magnify"
                                single-line
                                hide-details
                                @click:append-inner="onClick"
                            ></v-text-field>
                        </v-card-text>
                    </v-card>
                </div>
            </section>
            <section class="content">
            <v-container class="bg-surface-variant">
                <v-row no-gutters>
                    <v-row>
                        <v-col>
                            <div class="cards">
                                <Card v-for="item in numbers" :phone="item"/>
                            </div>
                        </v-col>
                        <v-col>
                            <div class="right-column">
                                <Table
                                    :phones="numbers"
                                />
                            </div>
                        </v-col>
                    </v-row>
                </v-row>
            </v-container>
            </section>
        </div>
    </DefaultLayaout>

</template>


<style scoped>
.content{
    margin-top: 2%;
}

</style>
