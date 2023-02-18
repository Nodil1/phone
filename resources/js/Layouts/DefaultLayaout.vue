<script>

import {defineComponent} from "vue";
import Header from "@/Components/Header.vue";

export default defineComponent({
    components: {Header}
})
</script>

<template>
<Header></Header>
    <slot/>
    Foo

</template>



