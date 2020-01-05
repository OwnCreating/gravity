<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where('name', 'codex')->get();

        if($user){
            $user = factory(\App\User::class, 5)->create();
        }
        else {
            $user = factory(\App\User::class)->create();
            $role = Role::where('name', '=', 'Admin')->firstOrFail();
            $user->roles()->attach($role);
        }
        
    }
}
