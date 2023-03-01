<template>
<DefaultLayaout>
    <Commentitem/>
</DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Commentitem from "@/Components/CommentItem.vue";

export default {
    name: "Review",
    components: {Comment, DefaultLayaout}
}
</script>

<style scoped>

</style>
