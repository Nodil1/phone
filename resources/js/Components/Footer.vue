<template>
    <v-footer
    color="#0d2f58">
        <v-row justify="center" no-gutters>
            <v-toolbar-items v-for="item in items" :key="item" class="pa-1">
                <v-btn                 color="white"
                                       variant="text"
                                       class="mx-2"
                                       rounded="xl" :href="item.link" flat>{{ item.text }}</v-btn>
            </v-toolbar-items>
            <v-col class="text-end mt-4" cols="12">
                2023 - {{ new Date().getFullYear() }}
                <v-btn  color="white" href="#top" variant="text"><v-icon>mdi-card-account-phone-outline</v-icon>NOMERA.COM</v-btn>
            </v-col>
        </v-row>
    </v-footer>
</template>

<script>
export default {
    name: "Footer",
    data: () => ({
        items: [
            {
                text: 'Главная',
                link: '/'
            },
            {
                text: 'Коды номеров',
                link: '/codes'
            },
            {
                text: 'Как пробить номер?',
                link: '/probiv'
            },
            {
                text: 'Связаться с нами',
                link: '/'
            }
        ]
    })
}
</script>

<style scoped>
</style>
