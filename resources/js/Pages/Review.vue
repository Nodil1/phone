<template>
<DefaultLayaout>
    <Commentitem/>
</DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Commentitem from "@/Components/Commentitem.vue";

export default {
    name: "Review",
    components: {Commentitem, DefaultLayaout}
}
</script>

<style scoped>

</style>
