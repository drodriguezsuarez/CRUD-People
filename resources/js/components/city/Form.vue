<template>
    <section>
    <form @submit.prevent="storeCity">
        <div class="mb-4">
            <label><b>Name</b></label>
            <input type="text" class="form-control" v-model="city.name" required>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success" >Save</button>
        </div>
    </form>
    </section>
</template>

<script>
import axios from 'axios'

export default {
        // props: ['cities'],
        data(){
            return{
                city: {
                    name: null,
                }
            }
        },
        methods:{
            async storeCity(){
                await axios.post('/city/store', this.city ).then(res =>{
                    if(res.data.saved) {
                        alert('Ciudad guardada')
                        this.city = {
                            name: null,
                        };
                        this.$parent.city_update.push(res.data.city);
                    }
                })
            },
        }
        
}
</script>

<style scoped>

</style>