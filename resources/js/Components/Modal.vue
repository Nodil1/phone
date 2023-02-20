<template>
    <div class="text-center">
        <v-dialog
            v-model="dialog"
            width="100%"
        >
            <v-card>
                <slot></slot>
                <v-card-actions>
                    <v-btn color="primary" block @click="onClose">Close Dialog</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
import Comment from "@/Components/Comment.vue";
export default {
    components: {Comment},
    name: "Modal",
    methods: {
      onClose(){
          this.$emit("closeModal")
      }
    },
    data () {
        return {
            dialog: true,
            test: false
        }
    },
}
</script>

<style scoped>

</style>
