<template>
    <vHeader></vHeader>
    <vSidePanel></vSidePanel>
</template>

<script>
import vHeader from "./components/vHeader.vue";
import vSidePanel from "./components/vSidePanel.vue";

export default {
    name: "Dashboard",
    components: {
        vHeader,
        vSidePanel,
    },
};
</script>
