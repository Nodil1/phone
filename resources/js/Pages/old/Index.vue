<script>
import {defineComponent} from "vue";
import Layout from "@/Layouts/layout.vue";

export default defineComponent({
    components: {Layout}
})
</script>

<template>
    <layout></layout>
    <div class="wrapper">
        <div class="main">

        </div>
    </div>
    <div class="search">
        <v-card
            class="mx-auto"
            color="grey-lighten-3"
            max-width="400"
        >
            <v-card-text>
                <v-text-field
                    :loading="loading"
                    density="compact"
                    variant="solo"
                    label="Search templates"
                    append-inner-icon="mdi-magnify"
                    single-line
                    hide-details
                    @click:append-inner="onClick"
                ></v-text-field>
            </v-card-text>
        </v-card>
    </div>


</template>



