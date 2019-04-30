<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','User')->first();
        $user = new User();
        $user->firstname = 'jonah';
        $user->middlename = 'jonah';
        $user->lastname = 'Uche';
        $user->email = 'jonahjonah@g.com';
        $user->marital_status = 'single';
        $user->gender = 'male';
        $user->residential_address = '42 Etche road Aba';
        $user->phone_no = '09059937945';
        $user->village = 'Edda';
        $user->autonomous_comm = 'Edda';
        $user->photo = 'jonah.jpg';
        $user->state_of_origin = 'Ebonyi';
        $user->lga = 'Ebonyi';
        $user->password = bcrypt('password');
        $user->category = 'Engineering/technologists';
        $user->save();
        $user->roles()->attach($role_user);

        $role_admin1 = Role::where('name','Admin1')->first();
        $user = new User();
        $user->firstname = 'jonah';
        $user->middlename = 'Ifeanyi';
        $user->lastname = 'Uche';
        $user->email = 'jonahjonah@gmail.com';
        $user->marital_status = 'single';
        $user->gender = 'male';
        $user->residential_address = '42 Etche road Aba';
        $user->phone_no = '09059937945';
        $user->village = 'Edda';
        $user->autonomous_comm = 'Edda';
        $user->photo = 'jonah.jpg';
        $user->state_of_origin = 'Ebonyi';
        $user->lga = 'Ebonyi';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin1);

        $role_admin2 = Role::where('name','Admin2')->first();
        $user = new User();
        $user->firstname = 'Jerry';
        $user->middlename = 'Admin2';
        $user->lastname = 'Anya';
        $user->email = 'jerry@gmail.com';
        $user->marital_status = 'single';
        $user->gender = 'male';
        $user->residential_address = '42 Etche road Aba';
        $user->phone_no = '09059937945';
        $user->autonomous_comm = 'Edda';
        $user->village = 'Edda';
        $user->photo = 'jonah.jpg';
        $user->state_of_origin = 'Ebonyi';
        $user->lga = 'Ebonyi';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin2);

        $role_admin3 = Role::where('name','Admin3')->first();
        $user = new User();
        $user->firstname = 'Uchenna';
        $user->middlename = 'Ifeanyi';
        $user->lastname = 'John';
        $user->email = 'uchejohn@gmail.com';
        $user->marital_status = 'single';
        $user->gender = 'male';
        $user->residential_address = '42 Etche road Aba';
        $user->phone_no = '09059937945';
        $user->village = 'Edda';
        $user->autonomous_comm = 'Edda';
        $user->photo = 'jonah.jpg';
        $user->state_of_origin = 'Ebonyi';
        $user->lga = 'Ebonyi';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin3);

    }
}
