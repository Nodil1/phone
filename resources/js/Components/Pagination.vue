<template>
    <div class="text-center paginator">
        <v-icon class="page-item left-arrow" icon="mdi-chevron-left" @click="inc"></v-icon>
        <v-icon class="page-item right-arrow" icon="mdi-chevron-right" @click="dec"></v-icon>
        <v-container class="paginator hidden-overflow">
            <div class="d-flex" :style="{ 'transform': `translateX(${translateXValue}px)` }">
                <div v-for="i in 100" :key="i"
                >
                    <div class="margin-right page-item"
                         :class="{'selected-page': i === page}"
                         @click="page=i"
                    >
                        <p>{{ i }}</p>
                    </div>
                </div>
            </div>
        </v-container>
    </div>
</template>

<script>
import {router} from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3'

export default {
    name: "Pagination",
    props: ['pageCount', "currentPage"],
    components: {Link},
    data() {
        return {
            translateXValue: 0,
            page: this.currentPage
        }
    },
    methods: {
        inc() {
            if (this.translateXValue < 0) {
                this.translateXValue += 60
            }
        },
        dec() {
            if (this.translateXValue > -(100 * 60)) {
                this.translateXValue -= 60
            }
        }
    },
    computed: {
        showedPages() {
            let result = []
        },


    },
    watch: {
        page(newVal, oldVal) {
             router.get('/page/' + newVal)
        }
    }
}
</script>

<style scoped>
.paginator {
    position: relative;
    padding: 0 50px;
}

.left-arrow {
    position: absolute;
    left: 100px;
}

.right-arrow {
    position: absolute;
    right: 100px;
}

.page-item {
    display: flex;
    align-items: center;
    padding: 5px;
    border-radius: 5px;
    height: 40px;
}

.page-item:hover {
    background-color: #0a739e;
    transition-duration: 200ms;
    cursor: pointer;
}

.page-item p {
    transition-duration: 200ms;

    width: 40px;
}

.selected-page {
    background-color: #0a739e;
}
</style>
