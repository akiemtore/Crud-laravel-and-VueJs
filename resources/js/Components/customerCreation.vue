<template>
 <form method="POST" @submit.prevent="storeCustomer" class="form" enctype="multipart/form-data" >
     
        <div class="row">
             <div class="col-sm-6">
             <div class="form-group">
             
              <label for="client" >Nom client</label>
                  <input id="client" type="text" class="form-control"  v-model="form.name" required >
       
                      
                </div>
                </div>
            
             </div>
             <br>

            
            
           <div class="row">
             <div class="col-sm-6">
             <div class="form-group">
               
           <label for="phone" >Telephone</label>

                <input id="phone" type="tel" class="form-control " v-model="form.tel"  required >

                        
                </div>
                </div>
               
             </div>
             <br>

        
        
             <div >
               
           <label for="favorie" >Favori?</label>

                <input id="favorie" type="checkbox"  v-model="form.is_favorite"  required >

                        
                </div>
              
               
          <br><br>
          
   
      
     <div class="container">
      <div class="btn-group">
      <button class="btn btn-primary "  type="submit">ENVOYER</button>
           </div>

       <div class="btn-group">
          <button class="btn btn-danger "  type="reset">ANNULER</button>
      </div>
      
      <div class="btn-group">
          
           <router-link :to="{name: 'customers.index'}" :type="button" class="btn btn-secondary"> RETOUR </router-link>
      </div>

    </div>
    
  </form>
  
</template>


<script >

import {reactive} from 'vue';
import useCustomers from '../Services/customerServices.js';
import Router from '../Router/index.js';

	
export default  {
     
     setup(){

      const form = reactive({

          name:'' ,
          tel:'',
          is_favorite:''

      }) ;
      
     const { createCustomer } = useCustomers();

     const storeCustomer = async () => {


       await createCustomer({...form});

       Router.push({name: 'customer.create'});

  } ;


     return{

      form ,
      storeCustomer
     }
      
     } 

   
 
}

</script>