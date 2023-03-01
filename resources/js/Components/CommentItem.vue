<template>
    <v-row dense>
        <v-col cols="12">

            <v-card
                border>
                <template v-slot:append>
                    <v-icon color="green"> mdi-circle</v-icon>
                </template>
                <template v-slot:prepend class="title">
                    <Link href="/">
                        <v-card-title class="font-weight-bold d-flex flex-row align-baseline">
                            <p class="margin-right">{{ value.name }}</p>
                            <div class="text-subtitle-2 ">
                                <p>{{ value.date }}</p>
                            </div>
                        </v-card-title>
                    </Link>
                </template>
                <v-card-subtitle>
                    МЕТКА НОМЕРА: {{ value.type }}
                </v-card-subtitle>
                <v-card-text>
                    {{ value.text }}
                </v-card-text>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    1
                    <v-btn
                        icon
                        color="success"
                    >
                        <v-icon>mdi-thumb-up</v-icon>
                    </v-btn>
                    43
                    <v-btn
                        icon
                        color="error"
                    >
                        <v-icon>mdi-thumb-down</v-icon>
                    </v-btn>
                </v-card-actions>

            </v-card>
        </v-col>
    </v-row>

</template>

<script>
import {Link} from '@inertiajs/vue3';

export default {
    components: {Link},
    name: "CommentItem",
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
