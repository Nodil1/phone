<template>
    <v-snackbar
        @childComponent="childComponent"
        v-model="snackbar"
        :timeout="timeout"
    >
        {{ text }}

        <template v-slot:actions>
            <v-btn
                color="blue"
                variant="text"
                @click="snackbar = false"
            >
                Закрыть
            </v-btn>
        </template>
    </v-snackbar>
</template>

<script>
export default {
    name: "Snackbar",
    methods: {
        Snack()  {
            this.snackbar=true
        },
    },
    data: () => ({
        snackbar: false,
        text: 'Спасибо за ваш отзыв!',
        timeout: 1000,
    }),
}
</script>

<style scoped>

</style>
