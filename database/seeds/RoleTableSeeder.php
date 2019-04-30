<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$role_user = new Role();
    	$role_user->name = "User";
    	$role_user->description = 'A Normal User';
    	$role_user->save();

    	$role_admin1 = new Role();
    	$role_admin1->name = "Admin1";
    	$role_admin1->description = 'A Manager';
    	$role_admin1->save();

    	$role_admin2 = new Role();
    	$role_admin2->name = "Admin2";
    	$role_admin2->description = 'A Second Admin';
    	$role_admin2->save();

    	$role_admin3 = new Role();
    	$role_admin3->name = "Admin3";
    	$role_admin3->description = 'A Higer Admin';
    	$role_admin3->save();

    }
}
