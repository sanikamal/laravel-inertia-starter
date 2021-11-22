<template>
<!--    <h1>Hello, {{name}}</h1>-->
<!--    <p>In this starter project, We use the following frameworks:</p>-->
<!--    <ul>-->
<!--        <li v-for="framework of frameworks" v-text="framework"></li>-->
<!--    </ul>-->
    <h1>Home</h1>
</template>

<script>
export default {
    name: "Welcome",
    props: {
        name: String,
        frameworks:Array,
    }
}
</script>

<style scoped>

</style>
