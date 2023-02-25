<script>
import { Link } from '@inertiajs/vue3';
import Modal from "@/Components/Modal.vue";
import Comment from "@/Components/Comment.vue";


export default {
    components: {Modal, Comment,Link},
    name:"card",
    props: ['phone'],
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


    <v-card
        class="mb-2 overflow-hidden"
        density="compact"
        border

    >
        <Link :href="'/number/8'+ phone.number">
        <v-card-item class="item-title">
        <template v-slot:append>
            <v-icon color="red"> mdi-circle </v-icon>
        </template>
        <template v-slot:prepend>
                <v-card-title>
                    8{{ phone.number }}
                </v-card-title>
        </template>
            <v-card-subtitle class="date">
                {{phone.comments[0].date}}
            </v-card-subtitle>
        </v-card-item>
        <v-card-subtitle>
            Метка: {{phone.type}}
        </v-card-subtitle>
        <v-card-text class="d-flex align-baseline">
            <p class="font-weight-bold text-subtitle-2">{{phone.comments[0].name}}: </p> {{phone.comments[0].text}}
        </v-card-text>
        </Link>
        <div class="action">
            <div class="see">
                <div class="count">{{ phone.views}}</div>
                <v-icon icon="mdi mdi-eye-check-outline"></v-icon>
            </div>
            <div class="see">
                <div class="count">{{ phone.comments.length}}</div>
                <v-icon @click='openModal' >mdi-comment-outline</v-icon>
            </div>
        </div>
    </v-card>
    <Modal v-if="isModalOpen" @closeModal="isModalOpen = false">
        <Comment>
            <v-alert class="ma-2">
                <v-alert-text>Отсавьте отзыв о номере: 8{{phone.number}}</v-alert-text>
            </v-alert>
        </Comment>
    </Modal>

</template>



<style scoped>
.date{
    padding: 0;
}
.item-title{
    border-bottom: 1px solid lightgray;
    margin-bottom: 1%;

}
.action{
    display: flex;
    justify-content: flex-end;
    padding: 2%;
}
.mb-2{
    border-bottom: 1px solid lightgrey;
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
