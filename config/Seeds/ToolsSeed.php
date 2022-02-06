<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Tools seed.
 */
class ToolsSeed extends AbstractSeed
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
                'name' => 'Herramienta TIC #1',
                'project_id' => 1,
                'created_by' => 1,
                'modified_by' => 1,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 2,
                'name' => 'Herramienta TIC #2',
                'created_by' => 4,
                'project_id' => 1,
                'modified_by' => 4,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 3,
                'name' => 'Herramienta TIC #3',
                'project_id' => 1,
                'created_by' => 2,
                'modified_by' => 2,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 4,
                'name' => 'Herramienta TIC #4',
                'created_by' => 5,
                'project_id' => 2,
                'modified_by' => 5,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 5,
                'name' => 'Herramienta TIC #5',
                'project_id' => 2,
                'created_by' => 3,
                'modified_by' => 3,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 6,
                'name' => 'Herramienta TIC #6',
                'created_by' => 5,
                'project_id' => 3,
                'modified_by' => 5,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 7,
                'name' => 'Herramienta TIC #7',
                'project_id' => 3,
                'created_by' => 3,
                'modified_by' => 3,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 8,
                'name' => 'Herramienta TIC #8',
                'created_by' => 5,
                'project_id' => 4,
                'modified_by' => 5,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 9,
                'name' => 'Herramienta TIC #9',
                'project_id' => 4,
                'created_by' => 3,
                'modified_by' => 3,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 10,
                'name' => 'Herramienta TIC #10',
                'created_by' => 5,
                'project_id' => 5,
                'modified_by' => 5,
                'created' => $now,
                'modified' => $now
            ],
            [
                'id' => 11,
                'name' => 'Herramienta TIC #11',
                'project_id' => 5,
                'created_by' => 3,
                'modified_by' => 3,
                'created' => $now,
                'modified' => $now
            ]
        ];

        $table = $this->table('tools');
        $table->insert($data)->save();
    }
}
