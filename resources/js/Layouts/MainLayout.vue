<template>
    <Link href="/listing">Listing</Link>&nbsp;&nbsp;
    <Link href="/listing/create">New Listing</Link>
    <!--<div> The page with time {{ timer }}</div>-->
    <div v-if="flashSuccess" class="success">{{ flashSuccess }}</div>
    <slot></slot>
</template>

<script setup>
    import { computed } from "vue";
    import { Link, usePage } from '@inertiajs/inertia-vue3'
    const page = usePage()
    const flashSuccess = computed(() => page.props.value.flash.success)
</script>

<style scoped>
    .success {
        background-color: green;
        color: white;
    }
</style>
