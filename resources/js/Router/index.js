import {createRouter , createWebHistory} from 'vue-router' ;

import CustomerIndex from '../Components/CustomerIndex.vue'
import customerCreation from '../Components/customerCreation.vue'

const routes = [

    {
    	path: '/home',
    	name : 'customers.index',
    	component: CustomerIndex
    } ,

     {
    	path: '/customers',
    	name : 'customer.create',
    	component: customerCreation
    }
] ;

export default createRouter({

	history: createWebHistory(),
	routes
}) ; 