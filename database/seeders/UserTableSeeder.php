<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //=========== avant de seeder la table user  ======
        User::truncate();

        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);


        $clients_ir = User::create([
            'name' => 'Client IR',
            'email' => 'clientir@gmail.com',
            'password' => Hash::make('password')
        ]);





        // ==== Attribution des roles aux utilisateurs ========

        $admin_role = Role::where('name', 'admin')->first();

        $clients_ir_role = Role::where('name', 'clients_ir')->first();
        // ======= Attacher les roles aux utilisateurs ======

        $admin->roles()->attach($admin_role);

        $clients_ir->roles()->attach($clients_ir_role);
    }
}
