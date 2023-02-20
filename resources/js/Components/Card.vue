<template>
    <v-card
        border
        class="mb-2"
        density="compact"
        prepend-avatar="https://randomuser.me/api/portraits/women/10.jpg"
        append-icon="mdi mdi-decagram"
        color="surface-variant" size="12"
        :title="phone.name"
        variant="text"
    >
        <v-card-text>
            Евгений: Предлагает услуги
        </v-card-text>

        <div class="action">
            <div class="see">
                500
                <v-icon icon="mdi mdi-eye-check-outline"></v-icon>
            </div>
            <div class="see">
                4
                <v-btn @click='openModal' ><v-icon>mdi-eye-check-outline</v-icon></v-btn>
            </div>

        </div>
        <Modal v-if="isModalOpen" @closeModal="isModalOpen = false">
            <Comment></Comment>
        </Modal>
    </v-card>
</template>

<script>
import Modal from "@/Components/Modal.vue";
import Comment from "@/Components/Comment.vue";
4
export default {
    components: {Modal, Comment},
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
        },
        login () {
            this.onLogin('login')
        }
    }

};
</script>

<style scoped>
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
</style>
