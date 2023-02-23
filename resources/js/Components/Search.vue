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
                        <div class="text-h2">
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
                'First',
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
