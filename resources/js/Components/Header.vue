<script>
import { Link } from '@inertiajs/vue3'
export default {
    components:{Link},
    data () {
        return {
            drawer: null,
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
                }
            ]
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
                    <v-toolbar-title>
                        <Link href="/">
                            <v-btn >
                                <v-icon class="margin-right" >mdi-card-account-phone-outline</v-icon>
                                <p>cheynomerok.ru</p>
                            </v-btn>
                        </Link>
                    </v-toolbar-title>


                <v-btn
                    class="hidden-md-and-up"
                    @click.stop="drawer = !drawer"
                    icon = "mdi mdi-menu"
                >
                </v-btn>
                    <v-toolbar-items v-for="item in items" :key="item" class="hidden-sm-and-down">
                        <Link :href="item.link"><v-btn flat>{{ item.text }}</v-btn></Link>
                    </v-toolbar-items>
                </v-toolbar>
            </v-app-bar>
            <v-navigation-drawer
                theme="dark"
                temporary
                v-model="drawer"
            >
                <v-list color="transparent">
                    <v-list-item v-for="item in items" :key="item.text" :href="item.link">
                        <v-list-item-title>{{ item.text }}</v-list-item-title>
                    </v-list-item>
                </v-list>
                <template v-slot:append>
                    <div class="pa-2">
                        <v-btn block>
                            Logout
                        </v-btn>
                    </div>
                </template>
            </v-navigation-drawer>
    </v-card>
</template>

<style scoped>
.v-card{
    position: fixed;
    z-index: 999;
}
.v-list{
    z-index: 1000;

}

</style>

