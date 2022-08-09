<template>
    <div class="wrapper">
        <Link href="/dashboard">Overview</Link>
        <Link href="/patients">All Patients</Link>
        <Link href="/personel">Personel</Link>
        <Link href="/reports">Reports</Link>
        <Link href="/">Home</Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "vSidePanel",
    components: {
        Link,
    },
};
</script>
<style scoped>
.wrapper {
    display: flex;
    flex-direction: column;
    position: fixed;
    left: 180px;
    top: 20vh;
    width: 150px;
    height: 30vh;
    font-weight: 800;
}
a {
    font-size: 1.2em;
    color: black;
    margin-top: 70px;
}
</style>
