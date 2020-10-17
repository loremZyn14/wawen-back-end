<?php

use Illuminate\Database\Seeder;
use App\User;
use Mock\AccountMock;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(AccountMock::accounts() as $account ){
            User::create($account);
        }
    }
}
