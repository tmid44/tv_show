<template>
    <table class="table">
        <thead>
        <tr>
            <th>ІД</th>
            <th>Назва</th>
            <th>Опис</th>
            <th>Тривалість</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="show in shows" :key="show.id">
            <td>{{ show.id }}</td>
            <td>{{ show.title }}</td>
            <td>{{ show.description }}</td>
            <td>{{ show.duration_minutes }}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <form>
            <div class="form-group">
                <label for="title">Назва:</label>
                <input type="text" id="title" v-model="show.title">
            </div>
            <div class="form-group">
                <label for="description">Опис:</label>
                <input type="text" id="description" v-model="show.description">
            </div>
            <div class="form-group">
                <label for="duration_minutes">Тривалість:</label>
                <input type="number" id="duration_minutes" v-model="show.duration_minutes">
            </div>
            <button class="save-show" @click.prevent="saveShow">Зберегти програму</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "ShowComponent",

    data() {
        return {
            show: {
                title: '',
                description: '',
                duration_minutes: '',
            },
        };
    },
    methods: {
        saveShow() {
            axios.post('/api/shows/store', this.show).then((response) => {
                // Handle success response
            }).catch((error) => {
                // Handle error response
            });
            this.fetchShows();
        },
        fetchShows() {
            axios.get('/api/shows')
                .then(response => {
                    this.shows = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchShows();
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
input[type="number"] {
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
.save-show {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    cursor: pointer;
}

.save-show:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}

table {
    width: 40%;
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

</style>

