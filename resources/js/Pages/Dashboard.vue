<template>
    <vHeader></vHeader>
    <vSidePanel></vSidePanel>
    <div class="main">
        <PatientsTable></PatientsTable>
    </div>
</template>

<script>
import vHeader from "./components/vHeader.vue";
import vSidePanel from "./components/vSidePanel.vue";
import PatientsTable from "./components/PatientsTable.vue";

export default {
    name: "Dashboard",
    components: {
        vHeader,
        vSidePanel,
        PatientsTable,
    },
};
</script>
<style>
.main {
    z-index: 1;
    background-color: rgb(225, 225, 225);
    border-radius: 10px;
    width: 70vw;
    height: 65vh;
    position: relative;
    top: 20vh;
    left: 20vw;
}
</style>
