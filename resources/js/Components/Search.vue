<template>
    <v-card
        class="mx-auto"
        color="white"
        max-width="100%"
    >
        <v-card-text>
            <v-text-field
                :loading="loading"
                density="compact"
                variant="solo"
                label="Введите номер"
                append-inner-icon="mdi-magnify"
                single-line
                hide-details
                @click:append-inner="onClick"
            ></v-text-field>
        </v-card-text>
        <v-carousel
            height="100"
            hide-delimiters
            progress="primary"
            show-arrows="hover"
        >
            <v-carousel-item
                v-for="(slide, i) in slides"
                :key="i"
            >
                <v-sheet
                    height="100%"
                >
                    <div class="d-flex fill-height justify-center align-center">
                        <div class="text-h6">
                            {{ slide }} Slide
                        </div>
                    </div>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
    </v-card>

</template>

<script>
export default {
    name: "Search",
    data () {
        return {
            slides: [
                'yyyyyyyyyyyyyyyyyyyy',
                'Second',
                'Third',
                'Fourth',
                'Fifth',
            ],
        }
    },
}
</script>

<style scoped>
.descriptoin{
    border-radius: 0;
}
</style>
