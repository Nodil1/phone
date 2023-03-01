<template>
    <v-row dense>
        <v-col cols="12">
            <v-card
                border
            >
                <template v-slot:append>
                    <v-icon color="green"> mdi-circle</v-icon>
                </template>
                <template v-slot:prepend class="title">
                    <v-card-title class="font-weight-bold">
                        {{ value.number }}
                    </v-card-title>
                </template>

                <v-card-subtitle>
                    {{ value.comments[0].text }}
                </v-card-subtitle>

                <v-card-actions>
                    <v-card-title
                        class="lastcom font-weight-regular overflow-x-hidden"
                        variant="text">
                        {{ value.type }}
                    </v-card-title>
                    <v-spacer></v-spacer>

                    <v-btn
                        :icon="show ? 'mdi-chevron-up' : 'mdi-chevron-down'"
                        @click="show = !show"
                    ></v-btn>
                </v-card-actions>
                <v-expand-transition>
                    <div v-show="show">
                        <v-divider></v-divider>

                        <v-card-text>
                            {{ value.comments[0].text }}
                        </v-card-text>
                    </div>
                </v-expand-transition>
            </v-card>
        </v-col>
    </v-row>

</template>

<script>
export default {
    name: "Lastcomments",
    data: () => ({
        show: false,
    }),
    props: ['value']

}
</script>

<style scoped>
.lastcom {
    padding: 0.5rem 0.5rem;
}

.title {
    background: #00bfa5;
}

</style>
