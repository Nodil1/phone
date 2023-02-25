<template>
    <DefaultLayaout>
        <v-alert class="wrapper">
            <template v-slot:title>
                <h1>Кто звонил с 8{{numbers[0].number}} ?</h1>
            </template>
            <template v-slot:text>
                <div class="d-flex flex-column">
                <h2>Кто звонил c номера 8{{numbers[0].number}}</h2><p>или +7{{numbers[0].number}} ? Узнайте информацию по звонкам с номера телефона +7{{numbers[0].number}}</p>
                </div>
            </template>
        </v-alert>
        <div class="wrapper">
            <v-container class="bg-surface-variant mb-1">
                <v-row justify="space-between" class="mb-6">
                    <v-col         sm="5"
                                   md="7"
                    >
                        <div class="main-info">
                            <v-card>
                                <v-card-title>
                                    <h3>Информация о номере: 8{{numbers[0].number}}</h3>
                                </v-card-title>
                            </v-card>
                            <Info :number="numbers"/>
                        </div>
                        <BarChart :chartdata="chartData" :options="chartOptions"/>
                        <v-alert class="info-ttl" variant="text">
                            <template v-slot:title>
                                <h2>Отзывы о номере +7{{numbers[0].number}}</h2>
                            </template>
                        </v-alert>
                        <Commentitem v-for="item in numbers" :value="item"/>
                        <v-alert class="info-ttl" variant="text">
                            <template v-slot:title>
                                <div class="inalert">Звонили с этого номера?</div><div class="inalert d-flex">Оставьте<h2>отзыв о номере - +7{{numbers[0].number}}</h2></div>
                            </template>
                        </v-alert>
                        <v-card border class="info">
                            <Comment/>
                        </v-card>

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
import Commentitem from "@/Components/Commentitem.vue";
import BarChart from "@/Components/BarChart.vue";
const phoneNumber = parsePhoneNumber('+79045986298')
console.log(phoneNumber.formatInternational())


export default  {
    name: "Number",
    components: {BarChart, Commentitem, Similar, Lastcomments, Comment, Info, DefaultLayaout},
    props:['phone'],
    data () {
        return {
            chartData: {
                labels: [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ],
                datasets: [
                    {
                        label: 'Data One',
                        data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            },
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
.info-ttl{
    color: white;
    padding: 5% 0 5% 0;
}
.info-ttl-first{
    color: white;
    padding: 0% 0 5%;
    font-size: larger;

}

</style>

