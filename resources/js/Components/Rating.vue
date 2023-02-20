<template>
    <div class="d-flex align-center justify-center flex-column">
        <v-rating
            v-model="rating"
            class="ma-2"
            :item-labels="['Плохо', '', '', '', 'Отлично']"
            item-label-position="top"
        ></v-rating>
    </div>
</template>

<script>
export default {
    name: "Rating",
    data: () => ({ rating: 4 }),
}
</script>

<style scoped>

</style>
