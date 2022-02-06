<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $now = '2022-02-05 14:30:20';

        $password = (new DefaultPasswordHasher())->hash('123456');
        $data = [
            [
                'id' => 1,
                'name' => 'root',
                'email' => 'root@mail.com',
                'password' => $password,
                'created' => $now,
                'modified' => $now,
                'modified' => $now
            ],
            [
                'id' => 2,
                'name' => 'Yohanny Lugo',
                'email' => 'yohanny.lugo@mail.com',
                'password' => $password,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 3,
                'name' => 'Perdro Perez',
                'email' => 'pedro.perez@mail.com',
                'password' => $password,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 4,
                'name' => 'Luis Gomez',
                'email' => 'luis.gomez@mail.com',
                'password' => $password,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 5,
                'name' => 'Fabian Lara',
                'email' => 'fabia.lara@mail.com',
                'password' => $password,
                'created' => $now,
                'modified' => $now
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
