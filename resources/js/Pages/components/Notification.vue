<template>
    <div class="main">
        <div>
            <h4>{{ title }}</h4>
        </div>
        <div>
            <p>{{ content }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: "Notification",
    data() {},
    props: {
        title: "",
        content: "",
    },
};
</script>
<style>
.main {
    position: absolute;
    top: 10vh;
    right: 100px;
    width: 20%;
    height: 20%;
}
</style>
