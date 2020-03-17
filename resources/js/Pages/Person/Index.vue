<template>
    <div>
    <inertia-link href="/person/create" class="btn btn-primary">Criar Pessoa</inertia-link>
    <a href="/person/create" class="btn btn-primary">Criar 2</a>
    <inertia-link href="/person" class="btn btn-dark" :data="{state:'true'}">Star Wars</inertia-link>
    <inertia-link href="/erro" class="btn btn-danger">Erro</inertia-link>
    <inertia-link href="/person/erro" class="btn btn-danger">dd</inertia-link>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
        </tr>
        <tr v-for="person in persons">
            <td>{{ person.first_name }}</td>
            <td>{{ person.last_name }}</td>
            <td>{{ person.email }}</td>
        </tr>
    </table>
    <table v-if="starwars" class="table table-dark">
        <tr>
            <th>Name</th>
            <th>height</th>
            <th>mass</th>
        </tr>
        <tr>
            <td>{{ starwars.name }}</td>
            <td>{{ starwars.height }}</td>
            <td>{{ starwars.mass }}</td>
        </tr>
    </table>
    </div>
</template>

<script>
export default {
    props: {
        persons: Array,
        starwars: Object
    },
    data() {
        return {

        }
    },
    methods: {

    },
}
</script>