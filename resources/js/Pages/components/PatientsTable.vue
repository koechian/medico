<template>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Current Assigned Dept</th>
                <th>Current Assigned Doctor</th>
                <th><button v-on:click="getPatients()">Refresh</button></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr v-for="patient in patients">
                <td>{{ patient.id }}</td>
                <td>{{ patient.name }}</td>
                <td>{{ patient.dept }}</td>
                <td>{{ doctor }}</td> -->
            <!-- </tr> -->
        </tbody>
    </table>
</template>

<script>
import axios from "axios";

export default {
    name: "PatientsTable",
    data() {
        return {
            patients: {
                id: "",
                name: "",
                dept: "",
                // doctor: "",
            },
        };
    },
    methods: {
        getPatients() {
            axios.get("api/data/getPatients").then((response) => {
                response.data.forEach((element) => {
                    this.patients.id = element.id;
                    this.patients.name = element.name;
                    this.patients.dept = element.dept;
                });
                console.log(this.patients);
            });
        },
    },
};
</script>
<style>
table {
    z-index: 1;
    width: 100%;
    padding-top: 20px;
}
table thead {
    font-size: 1.1em;
}
</style>
