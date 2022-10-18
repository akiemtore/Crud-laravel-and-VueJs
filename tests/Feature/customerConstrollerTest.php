<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Customer;

class customerConstrollerTest extends TestCase
{
    /**
     

     @test
     */
    public function itlistCustomers()
    {
        $response = $this->get('/api/customers');

        $response->assertOk();
        
    }


    /**
     

     @test
     */
    public function itCreatesCustomer()
    {
        $response = $this->post('/api/customers' , [
           
           'name'=>'Mon premier client' ,
           'tel'=>'06XXXXXX',
           'is_favorite' =>TRUE
        ]);

        $customers= Customer::all();
        $customer = Customer::first();

        $response->assertOk();

        $this->assertEquals(1,$customers->count()) ;

         $this->assertEquals('Mon premier client',$customer->name) ;
        
    }
}
