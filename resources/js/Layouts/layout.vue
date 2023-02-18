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
    <div></div>
    <div class="header">
        <v-card
            class="mx-auto"
            max-width="448"
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
    </div>
    <footer>
        <v-footer
            class="bg-indigo-lighten-1 text-center d-flex flex-column"
        >
            <div>
                <v-btn

                ></v-btn>
            </div>

            <div class="pt-0">
                Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum. Praesent ut risus eget metus luctus accumsan id ultrices nunc. Sed at orci sed massa consectetur dignissim a sit amet dui. Duis commodo vitae velit et faucibus. Morbi vehicula lacinia malesuada. Nulla placerat augue vel ipsum ultrices, cursus iaculis dui sollicitudin. Vestibulum eu ipsum vel diam elementum tempor vel ut orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </div>

            <v-divider></v-divider>

            <div>
                {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
            </div>
        </v-footer>
    </footer>



</template>



