<template>
        <v-list density="compact" class="rounded-e-xl">
            <v-list-subheader>Информация о номере: 8{{number[0].number}}</v-list-subheader>
            <v-list-item>
                <template v-slot:prepend>
                    <v-icon>mdi-star</v-icon>
                    <v-list-item-title class="font-weight-bold">Рейтинг номера:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">
                        <v-rating
                            v-model="rating"
                            class="ma-2"
                            density="compact"
                        ></v-rating>
                        {{number[0].stars}}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item>
                <template v-slot:prepend>
                    <v-icon>mdi-star</v-icon>
                    <v-list-item-title class="font-weight-bold">Просмотров:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{number[0].views}}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item>
                <template v-slot:prepend>
                    <v-icon>mdi-star</v-icon>
                    <v-list-item-title class="font-weight-bold">Комментариев:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.comments.length}}</v-list-item-title>
                </template>
            </v-list-item>
        </v-list>

</template>
<script>
export default {
    name: "Info",
    props:['number']

}
</script>

<style scoped>

</style>
