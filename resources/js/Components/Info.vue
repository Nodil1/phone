<template>
    <v-card border>
        <v-list density="compact" class="rounded-e-xl">
            <v-list-item class="info_line">
                <template v-slot:prepend>
                    <v-list-item-title class="font-weight-bold">Рейтинг номера:</v-list-item-title>
                </template>
                <div class="d-flex justify-end font-weight-bold">
                    <v-rating
                        v-model="number.stars"
                        class="ma-2"
                        density="compact"
                    ></v-rating>
                </div>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.stars }}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item class="info_line">
                <template v-slot:prepend>
                    <v-list-item-title class="font-weight-bold">Просмотров:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.views }}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item class="info_line">
                <template v-slot:prepend>
                    <v-list-item-title class="font-weight-bold">Комментариев:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.comments.length }}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item class="info_line">
                <template v-slot:prepend>
                    <v-list-item-title class="font-weight-bold">Оператор:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.operator }}</v-list-item-title>
                </template>
            </v-list-item>
            <v-list-item class="info_line">
                <template v-slot:prepend>
                    <v-list-item-title class="font-weight-bold">Регион:</v-list-item-title>
                </template>
                <template v-slot:append>
                    <v-list-item-title class="font-weight-bold">{{ number.region }}</v-list-item-title>
                </template>
            </v-list-item>
        </v-list>
    </v-card>

</template>
<script>
export default {
    name: "Info",
    props: ['number']

}
</script>

<style scoped>
.info_line {
    min-height: 50px;
}

.info-ttl {
    color: white;
    padding: 5% 0 5% 0;
}
</style>
