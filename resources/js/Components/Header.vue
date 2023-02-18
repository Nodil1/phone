<script>

export default {
    data () {
        return {
            drawer: null,
        }
    },
    name: "Footer"

}
</script>

<template>
    <v-card
        class="mx-auto"
        max-width="50%"
    >
            <v-app-bar
                color="white"
                density="compact"
            >
                <v-app-bar-title>Чейконтакт.ру</v-app-bar-title>
                <v-btn
                    color="primary"
                    @click.stop="drawer = !drawer"
                >
                    Toggle
                </v-btn>


            </v-app-bar>
            <v-navigation-drawer
                v-model="drawer"
                temporary
            >
                <v-list-item
                    Вход
                ></v-list-item>

                <v-list density="compact" nav>
                </v-list>
            </v-navigation-drawer>
    </v-card>
</template>


<style scoped>


</style>

