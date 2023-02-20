<template>
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
        <div class="d-flex justify-center">
            <v-card class="descriptoin" title="Кто звонил с номера" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, ratione debitis quis est labore voluptatibus! Eaque cupiditate minima, at placeat totam, magni doloremque veniam neque porro libero rerum unde voluptatem!" variant="tonal"></v-card>
        </div>
    </v-card>

</template>

<script>
export default {
    name: "Search"
}
</script>

<style scoped>
.descriptoin{
    border-radius: 0;
}
</style>
