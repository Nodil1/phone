<template>
    <v-alert title="Похожие номера" variant="text" class="ttle-lst"></v-alert>
    <v-container class="bg-surface-variant" variant="outlined">
        <v-row no-gutters>
            <v-col
                v-for="n in 16"
                :key="n"
                cols="12"
                sm="4"
            >
                <v-sheet class="ma-2 pa-2" href="/">
                    88005553536
                </v-sheet>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "Similar"
}
</script>

<style scoped>

</style>
