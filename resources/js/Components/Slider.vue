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
                'Реклама',
                'Реклама',
                'Реклама',
                'Реклама',
                'Реклама',
            ],
        }
    },
}
</script>

<style scoped>
>>> .v-card-title{
    text-align: center;
}
</style>
