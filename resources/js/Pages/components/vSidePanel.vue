<template>
    <div class="wrapper">
        <Link href="/dashboard">Overview</Link>
        <Link href="/patients">All Patients</Link>
        <Link href="/">Home</Link>
    </div>
</template>

<script>
export default {
    name: "vSidePanel",
};
</script>
<style>
.wrapper {
    position: fixed;
    left: 0;
    top: 12vh;
}
</style>
