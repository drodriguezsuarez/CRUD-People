import './bootstrap';

import Vue from 'vue'

import IndexPerson from './components/person/Index.vue'
import FormPerson from './components/person/Form.vue'
import IndexSon from './components/child/Index.vue'
import FormSon from './components/child/Form.vue'
import IndexCity from './components/city/Index.vue'
import FormCity from './components/city/Form.vue'

new Vue({
    el: '#app',
    components:{
        IndexPerson,
        FormPerson,
        IndexSon,
        FormSon,
        IndexCity,
        FormCity

    }
})