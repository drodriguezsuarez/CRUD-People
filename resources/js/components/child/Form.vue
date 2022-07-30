<template>
  <section>
    <form @submit.prevent="storeSon">
      <div>
        <label><b>Name</b></label>
        <input type="text" class="form-control" v-model="son.name" required />
      </div>
      <div>
        <label><b>Age</b></label>
        <input type="text" class="form-control" v-model="son.age" required />
      </div>
      <div class="mb-2">
        <label ><b>Parent</b></label>
        <select class="form-control" v-model="son.person_id" required>
          <option v-for="(person, index) in parents" :value="person.id" :key="index">{{ person.name }}</option>
        </select>
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
  </section>
</template>
<script>
export default {
  props: ["parents"],
    data(){
        return{
            son: {
                name: null,
                age: null,
                person_id: 0
            }
        }
        
    },
  methods: {
    async storeSon() {
      await axios.post(`/Son/store`, this.son ).then((res) => {
        if ( res.data.saved ) {
          alert("Hijo guardado");
          this.son = {};
          this.$children.sons_update.push( res.data.son );
        }
      });
    },
  },
};
</script>

<style scoped>

</style>