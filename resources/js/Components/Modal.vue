<template>
    <div class="text-center">
        <v-dialog
            v-model="dialog"
            width="100%"
        >
            <v-card>
                <v-card-actions>
                    <v-icon block @click="onClose">mdi-close</v-icon>
                </v-card-actions>
                <slot></slot>
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
        }
    },
}
</script>

<style scoped>

</style>
