<template>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: {
        users: {
            type: Array,
            default: () => []
        }
    },
    // created() {
    //     this.$parent.$on('users-updated', (users) => {
    //         this.users = users;
    //     });
    // },
}
</script>

<style scoped>
table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    border-collapse: collapse;
}

th,
td {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}

tbody tr:hover {
    background-color: #f5f5f5;
}

button {
    margin-right: .5rem;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
}

</style>
