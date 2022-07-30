<template>
  <section>
    <form @submit.prevent="storePerson">
      <div>
        <label><b>Name</b></label>
        <input type="text" class="form-control" v-model="person.name" required />
      </div>
      <div>
        <label><b>Last Name</b></label>
        <input type="text" class="form-control" v-model="person.last_name" required />
      </div>
      <div>
        <label><b>Age</b></label>
        <input type="text" class="form-control" v-model="person.age" required />
      </div>
      <div>
        <label><b>Phone</b></label>
        <input type="tel" class="form-control" v-model="person.phone" required />
      </div>
      <div class="mb-5">
        <label><b>City</b></label>
        <select class="form-control" v-model="person.city_id" required>
          <option v-for="(city, index) in cities" :value="city.id" :key="index"> {{ city.name }} </option>
        </select>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
  </section>
</template>
<script>
export default {
    props: ['cities'],
    data() {
        return {
            person: {
                name: null,
                last_name: null,
                age: null,
                phone: null,
                city_id: 0
            }
        }
    },
    methods:{
        async storePerson(){
            await axios.post('/person/store', this.person).then(res => {
              if (res.data.saved){
                alert('Persona guardada')
                this.person = {}
                this.$parent.people_update.push(res.data.person)
              }
            });
        }
    }
}
</script>

<style scoped>

</style>