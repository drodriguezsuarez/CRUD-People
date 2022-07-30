import './bootstrap';

import Vue from 'vue'

import IndexPerson from './components/person/Index'
import FormPerson from './components/person/Form'
import IndexSon from './components/child/Index'
import FormSon from './components/child/Form'
import IndexCity from './components/city/Index'
import FormCity from './components/city/Form'

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