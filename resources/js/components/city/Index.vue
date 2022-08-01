<template>
    <section>    
        <form-city></form-city>
        <table-city :cities="city_update"></table-city>
    </section>
</template>

<script>
import FormCity from './Form.vue'
import TableCity from './Table.vue'

export default{
    props: ['cities'],
    components: {
        FormCity,
        TableCity
    },
    data() {
        return{
            city_update: this.cities
        }
    }
}
</script>
