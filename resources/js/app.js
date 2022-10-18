require('./bootstrap');

import {createApp} from 'vue' ;

import Router from './Router';

import CustomerIndex from './Components/CustomerIndex.vue';
import customerCreation from './Components/customerCreation.vue';


createApp({

	components : {

		CustomerIndex ,
		customerCreation

         }
})
.use(Router)
.mount('#app');
