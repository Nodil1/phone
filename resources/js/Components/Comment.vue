<template>
    <form>
        <slot/>
        <v-textarea
                    label="Комментарий"
                    class="ma-2"
                    v-model="state.comment"
                    :error-messages="v$.name.$errors.map(e => e.$message)"
                    :counter="100"
                    required
                    @input="v$.name.$touch"
                    @blur="v$.name.$touch"
        ></v-textarea>
        <div class="d-flex flex-column">
        <v-text-field
            class="ma-2"
            v-model="state.name"
            :error-messages="v$.name.$errors.map(e => e.$message)"
            :counter="10"
            label="Name"
            required
            @input="v$.name.$touch"
            @blur="v$.name.$touch"
        ></v-text-field>
        <v-text-field
            class="ma-2"
            v-model="state.email"
            :error-messages="v$.email.$errors.map(e => e.$message)"
            label="E-mail"
            required
            @input="v$.email.$touch"
            @blur="v$.email.$touch"
        ></v-text-field>
            <v-autocomplete
                required
                class="select ma-2"
                label="Выберите метку"
                :items="['California', 'Colorado', 'Florida', 'Georgia', 'Texas', 'Wyoming']"
            ></v-autocomplete>
        </div>
        <Rating/>
        <v-checkbox
            v-model="state.checkbox"
            :error-messages="v$.checkbox.$errors.map(e => e.$message)"
            label="Do you agree?"
            required
            @change="v$.checkbox.$touch"
            @blur="v$.checkbox.$touch"
        ></v-checkbox>
        <div class="d-flex align-center justify-space-evenly ma-3">
            <v-btn
                @click="$refs.myChild.Snack()"
                prepend-icon="mdi-send" variant="outlined" color="success"
            >
                Отправить
            </v-btn>
            <v-btn
                prepend-icon="mdi-backspace-reverse-outline" variant="outlined"
                @click="clear"
            >
                Очистить
            </v-btn>
            <Snackbar ref="myChild" />
        </div>
    </form>
</template>
<script>

import { reactive, ref } from 'vue'
import { useVuelidate } from '@vuelidate/core'
import { email, required } from '@vuelidate/validators'
import Rating from "@/Components/Rating.vue";
import Snackbar from "@/Components/Snackbar.vue";
import snackbar from "@/Components/Snackbar.vue";

export default {
    components: {Snackbar, Rating},
    setup () {
        const initialState = {
            comment:'',
            name: '',
            email: '',
            select: null,
            checkbox: null,
        }

        const state = reactive({
            ...initialState,
        })

        const items = ref([
            'Item 1',
            'Item 2',
            'Item 3'
        ])

        const rules = {
            comment: { required },
            name: { required },
            email: { required, email },
            select: { required },
            items: { required },
            checkbox: { required },
        }

        const v$ = useVuelidate(rules, state)

        function clear () {
            v$.value.$reset()

            for (const [key, value] of Object.entries(initialState)) {
                state[key] = value
            }
        }

        return { state, items, clear, v$ }
    },
    name: "Comment",
}
</script>

<style scoped>
.v-autocomplete{
    background: inherit;
}
</style>
