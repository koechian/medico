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
        <tbody v-for="patient in patients">
            <td>{{ patient.id }}</td>
            <td>{{ patient.name }}</td>
            <td>{{ patient.dept }}</td>
            <!-- <td>{{ doctor }}</td> -->
        </tbody>
    </table>
</template>

<script>
import axios from "axios";

export default {
    name: "PatientsTable",
    data() {
        return {
            patients: [
                {
                    id: "",
                    name: "",
                    dept: "",
                    // doctor: "",
                },
            ],
        };
    },
    methods: {
        getPatients() {
            axios.get("api/data/getPatients").then((response) => {
                response.data.forEach((element) => {
                    this.patients.id = element;
                });
                this.patients.id = response.data.id;
                this.patients.name = patients.firstname + patients.lastname;
                this.patients.dept = patients.dept;
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
