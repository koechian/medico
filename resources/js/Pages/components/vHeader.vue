<template>
    <header>
        <div class="icon"><span>• medico health centre</span></div>
        <div class="searchbar">
            <input placeholder="Patient Search" type="search" />
        </div>
        <div>
            <button class="add-patient">New Patient</button>
            <NewPatient></NewPatient>
        </div>
        <div class="user">
            <select name="" id="">
                <option disabled selected value="">Test</option>
                <option value=""><button>Profile</button></option>
                <option value=""><button>Logout</button></option>
            </select>
        </div>
    </header>
</template>
<script>
import NewPatient from "./newPatient.vue";
export default {
    name: "vHeader",
    components: {
        NewPatient,
    },
};
</script>
<style>
header {
    position: fixed;
    top: 10px;
    margin-left: 50%;
    margin-top: 10px;
    transform: translateX(-50%);
    align-items: center;
    width: 90%;
    height: 10vh;
    display: grid;
    grid-template-columns: 1fr 2fr 0.5fr 1fr;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    padding: 10px;
    border-radius: 10px;
    background-color: rgba(201, 144, 255, 0.946);
}
.icon span {
    font-size: 1.2em;
    font-weight: 600;
}
.searchbar input {
    border: none;
    outline: none;
    background-color: rgb(242, 242, 242);
    border-radius: 5px;
    padding: 10px;
    width: 50%;
    font-size: 0.9em;
    color: rgb(113, 113, 113);
}
.searchbar input::placeholder {
    color: rgb(75, 75, 75);
    font-size: 0.9em;
}
select {
    border: none;
    background-color: transparent;
}
.add-patient {
    border: none;
    background-color: transparent;
    outline: blueviolet 2px solid;
    color: rgb(41, 41, 41);
    padding: 10px;
    border-radius: 5px;
    font-size: 0.9em;
    transition: ease 0.4s;
}
.add-patient:hover {
    background-color: white;
    color: rgb(65, 65, 65);
    cursor: pointer;
}
</style>
