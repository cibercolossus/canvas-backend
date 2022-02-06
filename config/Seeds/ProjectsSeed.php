<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Projects seed.
 */
class ProjectsSeed extends AbstractSeed
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
        $now = '2022-02-05 17:21:30';
        $data = [
            [
                'id' => 1,
                'final_product' => 'Proyecto #1',
                'diffusion' => 'Dependiendo de la complejidad y el destinatario de los wireframes.',
                'created_by' => 1,
                'modified_by' => 1,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 2,
                'final_product' => 'Proyecto #2',
                'diffusion' => 'Dependiendo de la complejidad y el destinatario de los wireframes.',
                'created_by' => 4,
                'modified_by' => 4,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 3,
                'final_product' => 'Proyecto #3',
                'diffusion' => 'Dependiendo de la complejidad y el destinatario de los wireframes.',
                'created_by' => 2,
                'modified_by' => 2,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 4,
                'final_product' => 'Proyecto #4',
                'diffusion' => 'Dependiendo de la complejidad y el destinatario de los wireframes.',
                'created_by' => 5,
                'modified_by' => 5,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 5,
                'final_product' => 'Proyecto #5',
                'diffusion' => 'Dependiendo de la complejidad y el destinatario de los wireframes.',
                'created_by' => 3,
                'modified_by' => 3,
                'created' => $now,
                'modified' => $now
            ]
        ];

        $table = $this->table('projects');
        $table->insert($data)->save();
    }
}
