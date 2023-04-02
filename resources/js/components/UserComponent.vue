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
    <div>
        <form>
            <div class="form-group">
                <label for="name">Ім'я:</label>
                <input type="text" id="name" v-model="user.name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="user.email">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" v-model="user.password">
            </div>
            <button class="save-user" @click.prevent="saveUser">Зберегти користувача</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "UserComponent",

    data() {
        return {
            user: {
                name: '',
                email: '',
                password: '',
            },
        };
    },
    methods: {
        saveUser() {
            axios.post('/api/users/store', this.user).then((response) => {
                // Handle success response
            }).catch((error) => {
                // Handle error response
            });
        },
        fetchUsers() {
            axios.get('/api/users')
                .then(response => {
                    this.users = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchUsers();
    }
}
</script>

<style scoped>
form{
    margin: 40px;
    width: 40%;
}
.form-group {
    margin-bottom: 1rem;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.save-user {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    cursor: pointer;
}

.save-user:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}

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

