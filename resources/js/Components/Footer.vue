<template>
    <v-layout>
        <v-footer
            class="bg-indigo-lighten-1 text-center d-flex flex-column"
        >
            <div>
                <v-btn

                ></v-btn>
            </div>

            <div class="pt-0">
                Чейномер.ру
            </div>
            <v-divider></v-divider>

            <div>
                {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
            </div>
        </v-footer>
    </v-layout>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
