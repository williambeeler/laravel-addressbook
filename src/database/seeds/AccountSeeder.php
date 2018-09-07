<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Account::class, 10)->create()->each(function ($account) {

            //Make some addresses
            $account->addresses()->save( 
                factory(\App\Address::class)->make() 
            );
            $account->addresses()->save( 
                factory(\App\Address::class)->make() 
            );            

            //Make some websites
            $account->websites()->save( 
                factory(\App\Website::class)->make() 
            );
            $account->websites()->save( 
                factory(\App\Website::class)->make() 
            );            

            //Make some phone numbers
            $account->phones()->save( 
                factory(\App\Phone::class)->make() 
            );
            $account->phones()->save( 
                factory(\App\Phone::class)->make() 
            );            

        });        

    }
}
