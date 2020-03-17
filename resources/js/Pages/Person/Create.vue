<template>
    <div>
    <form @submit.prevent="submit">
      <div class="form-group">
        <label for="first_name">Nome:</label>
        <input id="first_name" class="form-control" v-model="form.first_name" />
      </div>
      <div class="form-group">
        <label for="last_name">Sobrenome:</label>
        <input id="last_name" class="form-control" v-model="form.last_name" />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input id="email" class="form-control" v-model="form.email" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <inertia-link href="/person" class="btn btn-default">Voltar</inertia-link>
    </form>
    </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        first_name: null,
        last_name: null,
        email: null,
      },
    }
  },
  methods: {
    submit() {
      this.$inertia.post('/person/store', this.form)
    },
  },
}
</script>