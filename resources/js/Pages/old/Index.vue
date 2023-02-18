<script>

import {defineComponent} from "vue";
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";

export default defineComponent({
    components: {DefaultLayaout},
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
                <div class="cards">

                    <v-card
                        v-for="item in numbers"
                        :key="item.name"
                        border
                        class="mb-2"
                        density="compact"
                        prepend-avatar="https://randomuser.me/api/portraits/women/10.jpg"
                        subtitle="item.name"
                        title="item.name"
                        variant="text"
                    >
                        <v-card-text>
                            Предлагает услуги пробива Предлагает услуги пробива Предлагает услуги пробива
                        </v-card-text>

                        <template v-slot:actions>
                            <v-btn color="primary" variant="text">View More</v-btn>

                            <v-btn color="primary" variant="text">See in Map</v-btn>
                        </template>
                    </v-card>
                </div>
                <div class="right-column">
                    <v-table>
                        <thead>
                        Last numbers
                        <tr>
                            <th class="text-left">
                                numbers
                            </th>
                            <th class="text-left">
                                comments
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr
                            v-for="item in numbers"
                            :key="item.name"
                        >
                            <td>{{ item.name }}</td>
                            <td>{{ item.calories }}</td>
                        </tr>
                        </tbody>
                    </v-table>
                </div>
            </section>
        </div>
    </DefaultLayaout>

</template>


<style scoped>


</style>
