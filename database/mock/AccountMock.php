<?php

namespace Mock;

class AccountMock
{
    public static function accounts():array
    {
        return array(
            array(
                'username' => 'customer1',
                'email' => 'customer1@email.com',
                'account_type' => 'customer',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            ),
        );
    }
}
