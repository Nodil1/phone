<script>

import {defineComponent} from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

export default defineComponent({
    components: {Footer, Header}
})
</script>

<template>
        <v-layout>
            <Header/>
            <v-main style="">
                <slot/>
                <Footer/>
            </v-main>
        </v-layout>
</template>
<style>
main{
    margin-top: 2%;
}
</style>

