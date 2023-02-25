<template>
    <v-footer
    color="#4B83C6">
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
                2023 - {{ new Date().getFullYear() }}
                <v-btn href="/" variant="text"><v-icon>mdi-card-account-phone-outline</v-icon>NOMERA.COM</v-btn>
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
            'Коды номеров',
            'Пробив номера'
        ],
    })
}
</script>

<style scoped>
</style>
