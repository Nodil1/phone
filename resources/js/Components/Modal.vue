<template>
    <div class="text-center">
        <v-btn
            color="primary"
            @click="dialog = true"
        >
            Open Dialog
        </v-btn>

        <v-dialog
            v-model="dialog"
            width="100%"
        >
            <v-card>
                <slot></slot>
                <v-card-actions>
                    <v-btn color="primary" block @click="dialog = false">Close Dialog</v-btn>
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
            dialog: false,
        }
    },
}
</script>

<style scoped>

</style>
