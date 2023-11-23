<script setup>
import DropdownLink from "@/Components/DropdownLink.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    id: Number,
    email: String,
})
</script>

<template>
    <AuthenticatedLayout/>

<!--    <DropdownLink :href="route('logout')" method="post" as="button">-->
<!--        Log Out-->
<!--    </DropdownLink>-->
</template>
