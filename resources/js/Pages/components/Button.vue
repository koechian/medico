<template>
    <button :class="{{class}}">{{ name }}</button>
</template>

<script>
export default {
    props: {
        name: "",
        class: "",
    },
};
</script>
