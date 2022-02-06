<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $final_product
 * @property string $diffusion
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Competency[] $competencies
 * @property \App\Model\Entity\Grouping[] $groupings
 * @property \App\Model\Entity\Method[] $methods
 * @property \App\Model\Entity\Resource[] $resources
 * @property \App\Model\Entity\Standard[] $standards
 * @property \App\Model\Entity\Task[] $tasks
 * @property \App\Model\Entity\Tool[] $tools
 */
class Project extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'final_product' => true,
        'diffusion' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'competencies' => true,
        'groupings' => true,
        'methods' => true,
        'resources' => true,
        'standards' => true,
        'tasks' => true,
        'tools' => true,
    ];
}
