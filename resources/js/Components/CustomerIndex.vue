<template>
<div class="card shadow mb-4">
            <div class="card-header py-3 ">
              <div class="row">
                   <div class="col-sm-9">
                     <h4 class="m-2 font-weight-bold " style="color:#946826;">Clients &nbsp;
     <router-link :to="{name: 'customer.create'}" :type="button" class="btn btn-primary"> Creer client </router-link>
 </h4> 
                   </div>

                  
              </div>
 

            </div>
            
            <div class="card-body">
            
              
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">        
                  <thead>
                      <tr style="color:#946826;">
                        <th>Nom client</th>
                        <th>Phone</th>
                        <th>Is favorie?</th>
                        
                      </tr>
                  </thead>
                  <tbody id="content">
                    <template v-for="customer in customers"  :key="customer.id">
                     <tr>
                     <td v-text="customer.name"> </td>
                      <td v-text="customer.tel"></td>
                      <td v-text="customer.is_favorite"></td>
                      </tr> 
                       </template>
                  </tbody>
                </table>
                
              </div>
            </div>   
          </div>

  
</template>


<script >

import { onMounted } from 'vue';

import useCustomers from '../Services/customerServices.js';
	
export default  {
     
  setup()  {

	const { customers , getCustomers } = useCustomers();
	console.log(customers);

    onMounted(getCustomers());

	return{
     customers 

	} ;

}

}

</script>