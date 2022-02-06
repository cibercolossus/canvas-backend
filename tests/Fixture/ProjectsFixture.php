<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'final_product' => 'Lorem ipsum dolor sit amet',
                'diffusion' => 'Lorem ipsum dolor sit amet',
                'created_by' => 1,
                'modified_by' => 1,
                'created' => '2022-02-06 00:15:27',
                'modified' => '2022-02-06 00:15:27',
            ],
        ];
        parent::init();
    }
}
