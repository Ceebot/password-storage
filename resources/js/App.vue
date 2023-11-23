<template>
    <h1>
        {{ number }}
    </h1>
    <button @click="clickNumber">Увеличить</button>
</template>

<script setup>

import {ref} from "vue";

const number = ref(0);

function clickNumber() {
    number.value += 1;
}

</script>
