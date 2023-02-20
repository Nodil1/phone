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
                <v-toolbar>
                    <v-toolbar-title>Чейконтакт.ру</v-toolbar-title>
                <v-btn
                    @click.stop="drawer = !drawer"
                    icon = "mdi mdi-menu"
                >

                </v-btn>
                </v-toolbar>
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
.v-card{
    position: fixed;
    z-index: 999;
}

</style>

