<template>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Current Assigned Dept</th>
                <th>Current Assigned Doctor</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ id }}</td>
            <td>{{ name }}</td>
            <td>{{ dept }}</td>
            <td>{{ doctor }}</td>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "PatientsTable",
    data() {
        return {
            id: "",
            name: "",
            dept: "",
            doctor: "",
        };
    },
    methods: {},
};
</script>
<style>
table {
    width: 100%;
    padding-top: 20px;
}
table thead {
    font-size: 1.1em;
}
</style>
