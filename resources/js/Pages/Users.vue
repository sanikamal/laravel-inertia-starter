<template>
    <Layout>
        <div style="margin-top: 900px;">
            <h1>Users</h1>
            <p>The current time is {{time}}.</p>
            <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
        </div>
    </Layout>


</template>

<script>
import Layout from "../Shared/Layout";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components:{
        Layout,
        Link
    },
    props:{
        time:String,
    }
}
</script>

<style scoped>

</style>
