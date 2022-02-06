<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competency Entity
 *
 * @property int $id
 * @property string $name
 * @property int $project_id
 * @property int $created_by
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Project $project
 */
class Competency extends Entity
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
        'name' => true,
        'project_id' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'project' => true,
    ];
}
