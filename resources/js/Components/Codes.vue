<template>
    <v-alert title="Телефонный код" class="info-ttl" variant="text"></v-alert>
    <v-card border class="info">

    </v-card>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Modal from "@/Components/Modal.vue";
import Comment from "@/Components/Comment.vue";
export default {
    components: {Link},
    name: "Codes",
    props:['codes']
}
</script>

<style scoped>

</style>
