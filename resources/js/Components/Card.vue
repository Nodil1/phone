<script>
import { Link } from '@inertiajs/vue3';
import Modal from "@/Components/Modal.vue";
import Comment from "@/Components/Comment.vue";


export default {
    components: {Modal, Comment,Link},
    name:"card",
    props: ['onLogin','phone'],
    data(){
        return {
            isModalOpen: false
        }
    },
    methods: {
        openModal(){
            this.isModalOpen = true
            console.log('child component said login')
        },
    }

};
</script>

<template>
    <Link :href="phone.name">


    <v-card
        border
        class="mb-2"
        density="compact"
        color="surface-variant" size="12"
        :title="phone.name"
        variant="text"
    >
        <template v-slot:append>
            <v-icon color="green"> mdi-decagram </v-icon>
        </template>

        <v-card-text>
            Евгений: Предлагает услуги
        </v-card-text>

        <div class="action">
            <div class="see">
                <div class="count">{{ phone.calories}}</div>
                <v-icon icon="mdi mdi-eye-check-outline"></v-icon>
            </div>
            <div class="see">
                <div class="count">{{ phone.calories}}</div>
                <v-icon @click='openModal' >mdi-comment</v-icon>
            </div>
        </div>
    </v-card>
    </Link>
    <Modal v-if="isModalOpen" @closeModal="isModalOpen = false">
        <Comment>
            <v-alert class="ma-2">
                <v-alert-text>Отсавьте отзыв о номере: {{phone.name}}</v-alert-text>
            </v-alert>
        </Comment>
    </Modal>

</template>



<style scoped>
.comment{

}
.action{
    display: flex;
    justify-content: flex-end;
    padding: 2%;
}
.see{
    margin-right: 3%;
    display: flex;
    align-items: center;
}
.count{
    margin-right: 15%;
}
</style>
