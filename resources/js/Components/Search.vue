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
>>> .v-field__append-inner{
    padding: 10px;
}
>>> .v-field__overlay {
    width: 99%;
}
>>> .v-field__outline {
    display:none;
}
</style>
