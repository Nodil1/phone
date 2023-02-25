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
                <v-hover
                    v-slot="{ isHovering, props }"
                >
                <v-sheet class="ma-1 pa-1" href="/" border rounded
                         :elevation="isHovering ? 16 : 2"
                         :class="{'on-hover': isHovering }" v-bind="props">
                    <a href="/">88005553536</a>
                </v-sheet>
                </v-hover>
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
