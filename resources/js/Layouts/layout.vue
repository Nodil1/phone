<script>

export default {
    data () {
        return {
            drawer: null,
        }
    }
}
</script>

<template>
        <v-card
            class="mx-auto"
            max-width="50%"
        >
            <v-layout>
                <v-app-bar
                    color="white"
                    density="compact"
                >
                    <v-app-bar-title>Чейконтакт.ру</v-app-bar-title>
                    <template v-slot:append>
                        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                    </template>
                </v-app-bar>
                <v-navigation-drawer
                    v-model="drawer"
                    temporary
                >
                    <v-list-item

                    ></v-list-item>

                    <v-list density="compact" nav>
                    </v-list>
                </v-navigation-drawer>
            </v-layout>
        </v-card>
</template>



