<script>

import {defineComponent} from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Search from "@/Components/Search.vue";

export default defineComponent({
    components: {Search, Footer, Header}
})
</script>
<template>
        <v-layout>
            <Header/>
            <v-main>
                <div class="wrapper">
                    <div class="search-input">
                        <Search/>
                    </div>
                </div>
                <slot/>
                <v-btn
                    fixed
                    dark
                    fab
                    top
                    right
                    color="pink"
                >
                    <v-icon>add</v-icon>
                </v-btn>
                <Footer/>
            </v-main>
        </v-layout>
</template>
<style>
.search-input{
    background-color: #6fb1cc;
    padding: 2%;
}

</style>

