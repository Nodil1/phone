<template>
    <DefaultLayaout>
        <v-container class="blue-bg full-container">
            <v-row>
                <v-col
                    cols="4"
                    v-for="i in propNumbers"
                >
                    <Card :phone="i"></Card>
                </v-col>
            </v-row>
        </v-container>
    </DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import Card from "@/Components/Card.vue";

export default {
    name: "PhonesList",
    props: ['propNumbers'],
    components: {Card, DefaultLayaout},
    mounted() {
        console.log("Ya!")
        console.log(this.propNumbers)
    }
}
</script>

<style scoped>

</style>
