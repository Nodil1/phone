<template>
    <v-carousel
        cycle
        height="100"
        hide-delimiters
        progress="primary"
        show-arrows="hover"
    >

        <v-carousel-item
            v-for="(slide, i) in slides"
            :key="i"
        >
                <v-card-title>
                    {{slide}}
                </v-card-title>
        </v-carousel-item>
    </v-carousel>
</template>

<script>
export default {
    name: "Slider",
    data () {
        return {
            slides: [
                'Послдение про',
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

</style>
