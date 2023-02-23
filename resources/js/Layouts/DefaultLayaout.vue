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
            <v-main style="">
                    <div class="search-input">
                        <Search/>
                    </div>
                <slot/>
                <Footer/>
            </v-main>
        </v-layout>
</template>
<style>
main{
    margin-top: 2%;
}
.search-input{
    background-color: #6fb1cc;
    padding: 2%;
}

</style>

