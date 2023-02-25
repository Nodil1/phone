<template>
    <v-row dense>
        <v-col cols="12">

            <v-card
                border>
                <template v-slot:append>
                    <v-icon color="green"> mdi-circle </v-icon>
                </template>
                <template v-slot:prepend class="title">
                    <Link href="/">
                    <v-card-title class="font-weight-bold d-flex flex-row align-baseline">
                        {{ value.comments[0].name }}
                        <div class="text-subtitle-2">
                         {{ value.comments[0].date }}
                        </div>
                    </v-card-title>
                    </Link>
                </template>
                <v-card-subtitle>
                    МЕТКА НОМЕРА: {{ value.type }}
                </v-card-subtitle>
                <v-card-text>
                    {{ value.comments[0].text }}
                </v-card-text>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    1
                    <v-btn
                        @click="$refs.myChild.Snack()"
                        icon
                        color="success"
                    >
                        <v-icon>mdi-thumb-up</v-icon>
                    </v-btn>
                    43
                    <v-btn
                        @click="$refs.myChild.Snack()"
                        icon
                        color="error"
                    >
                        <v-icon>mdi-thumb-down</v-icon>
                    </v-btn>
                </v-card-actions>
                <Snackbar ref="myChild"/>
                <v-expand-transition>
                    <div v-show="show">
                        <v-divider></v-divider>

                        <v-card-text>
                            {{ value.comments[0].text }}
                        </v-card-text>
                    </div>
                </v-expand-transition>
            </v-card>
        </v-col>
    </v-row>

</template>

<script>
import { Link } from '@inertiajs/vue3';
import Snackbar from "@/Components/Snackbar.vue";
export default {
    components:{Snackbar, Link},
    name: "Commentlist",
    props: ['value'],
    data: () => ({
        snackbar: false,
        text: 'Спасибо за ваш отзыв!',
        timeout: 1000,
    }),
}
</script>

<style scoped>

</style>
