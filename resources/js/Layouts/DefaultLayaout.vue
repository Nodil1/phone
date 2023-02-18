<script>

import {defineComponent} from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

export default defineComponent({
    components: {Footer, Header}
})
</script>

<template>
    <Header/>
    <slot/>
    <Footer/>

</template>



