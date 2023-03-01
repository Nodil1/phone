<script>

import {defineComponent} from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Search from "@/Components/Search.vue";
import Snackbar from "@/Components/Snackbar.vue";
export default defineComponent({
    components: {Snackbar, Search, Footer, Header}
})
</script>
<template>
        <v-layout>
            <Header/>
            <v-main :id="top">
                <div class="wrapper default-container margin-top">
                    <div class="search-input">
                        <Search/>
                    </div>
                </div>
                <slot/>
                <Footer/>
            </v-main>
            <v-btn
                href="#top"
                elevation="15"
                icon="mdi-arrow-up-circle"
                color="white"
                class="fixed_button"
            ></v-btn>
            <Snackbar/>
        </v-layout>
</template>
<style>
.fixed_button{
    position:fixed; /*задаём тип позиции, в нашем случае - фиксированная*/
    bottom:8%;      /* отступ сверху*/
    bottom:8%;      /* отступ сверху*/
    right: 2%;       /* отступ слева*/
    z-index:999;
    background: #00acc1/*позиция относительно дальности*/
}
</style>
