<template>
    <v-alert title="Похожие номера" class="info-ttl" variant="text"></v-alert>
    <v-card border class="info">
    <v-container variant="outlined">
        <v-row no-gutters>
            <v-col
                v-for="n in 16"
                :key="n"
                cols="12"
                sm="4"
            >
                <v-sheet class="ma-2 pa-2" href="/" border rounded>
                    <a href="/">88005553536</a>
                </v-sheet>
            </v-col>
        </v-row>
    </v-container>
    </v-card>
</template>

<script>
export default {
    name: "Similar",
    props:['code']
}
</script>

<style scoped>
.info-ttl{
    color: white;
    padding: 5% 0 5% 0;
}
</style>
