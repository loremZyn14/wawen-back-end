<?php

namespace Mock;

class AccountMock
{
    public static function accounts():array
    {
        return array(
            array(
                'username' => 'lorem',
                'email' => 'lorem@gmail.com',
                'account_type' => 'admin',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            ),
            array(
                'username' => 'yasuaimo',
                'email' => 'yasuaimo@gmail.com',
                'account_type' => 'customer',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            ),
            array(
                'username' => 'dolor',
                'email' => 'dolor@gmail.com',
                'account_type' => 'customer',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            ),
        );
    }
}
