<template>
    <DefaultLayaout>
        <div class="wrapper">
        <v-alert
            :title="'Кто звонил с номера ' + '8'+numbers[0].number +' ?'"
            :text="'Кто звонил по номеру '+ '8'+numbers[0].number + ' или' +'+7'+numbers[0].number+' ?' + ' Узнайте информацию по звонкам с номера телефона '+numbers[0].number"
        ></v-alert>
            <v-container class="bg-surface-variant mb-1">
                <v-row justify="space-between" class="mb-6">
                    <v-col         sm="5"
                                   md="6"
                    >
                        <div class="info">
                            <Info :number="numbers"/>
                        </div>
                        <Comment/>
                        <Similar/>
                    </v-col>
                    <v-col         sm="5"
                                   md="5">
                        <div class="cards">
                            <Lastcomments v-for="item in numbers" :value="item"/>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </div>
    </DefaultLayaout>
</template>

<script>
import DefaultLayaout from "@/Layouts/DefaultLayaout.vue";
import parsePhoneNumber from 'libphonenumber-js'
import Info from "@/Components/Info.vue"
import Comment from "@/Components/Comment.vue";
import Lastcomments from "@/Components/Lastcomments.vue";
import Similar from "@/Components/Similar.vue";
const phoneNumber = parsePhoneNumber('+79045986298')
console.log(phoneNumber.formatInternational())


export default  {
    name: "Number",
    components: {Similar, Lastcomments, Comment, Info, DefaultLayaout},
    props:['phone'],
    data () {
        return {
            numbers: [
                {
                    number: "8005553535",
                    type: "Мошенник",
                    comments: [
                        {
                            name: "Diman",
                            text: "2112 is good. Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110Представляет собой III поколение легковых автомобилей производства ВАЗ. Головной моделью семейства является седан ВАЗ-2110",
                            date:"01.02.45 17:44"
                        }
                    ],
                    stars: 3.4,
                    views: 123
                }]
        }

}}
</script>

<style scoped>

</style>

