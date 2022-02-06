<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StandardsFixture
 */
class StandardsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'project_id' => 1,
                'created_by' => 1,
                'modified_by' => 1,
                'created' => '2022-02-05 17:50:59',
                'modified' => '2022-02-05 17:50:59',
            ],
        ];
        parent::init();
    }
}
