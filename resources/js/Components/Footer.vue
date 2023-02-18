<template>
    <v-footer class="bg-grey-lighten-1">
        <v-row justify="center" no-gutters>
            <v-btn
                v-for="link in links"
                :key="link"
                color="white"
                variant="text"
                class="mx-2"
                rounded="xl"
            >
                {{ link }}
            </v-btn>
            <v-col class="text-center mt-4" cols="12">
                {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
            </v-col>
        </v-row>
    </v-footer>
</template>

<script>
export default {
    name: "Footer",
    data: () => ({
        links: [
            'Главная',
            'About Us',
            'Team',
            'Services',
            'Blog',
            'Contact Us',
        ],
    })
}
</script>

<style scoped>
.bg-grey-lighten-1{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: auto;}
</style>
