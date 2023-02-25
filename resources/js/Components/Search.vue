<template>
    <v-card
        class="mx-auto"
        color="white"
        max-width="100%"
    >
        <v-card-text>
            <v-text-field
                class="ma-2"
                density="compact"
                label="Введите номер"
                append-inner-icon="mdi-magnify"
                required
                hide-details
                @click:append-inner="onClick"
            ></v-text-field>
        </v-card-text>
        <Slider/>
    </v-card>

</template>

<script>
import Slider from "@/Components/Slider.vue";

export default {
    name: "Search",
    components: {Slider}
}
</script>

<style scoped>
.descriptoin{
    border-radius: 0;
}
</style>
