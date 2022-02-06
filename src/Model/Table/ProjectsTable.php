<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \App\Model\Table\CompetenciesTable&\Cake\ORM\Association\HasMany $Competencies
 * @property \App\Model\Table\GroupingsTable&\Cake\ORM\Association\HasMany $Groupings
 * @property \App\Model\Table\MethodsTable&\Cake\ORM\Association\HasMany $Methods
 * @property \App\Model\Table\ResourcesTable&\Cake\ORM\Association\HasMany $Resources
 * @property \App\Model\Table\StandardsTable&\Cake\ORM\Association\HasMany $Standards
 * @property \App\Model\Table\TasksTable&\Cake\ORM\Association\HasMany $Tasks
 * @property \App\Model\Table\ToolsTable&\Cake\ORM\Association\HasMany $Tools
 *
 * @method \App\Model\Entity\Project newEmptyEntity()
 * @method \App\Model\Entity\Project newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('projects');
        $this->setDisplayField('final_product');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Footprint');
        
        $this->hasMany('Competencies', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Groupings', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Methods', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Resources', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Standards', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Tasks', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Tools', [
            'foreignKey' => 'project_id',
        ]);

        $this->belongsTo('CreatedBy', [
            'className' => 'Users',
            'foreignKey' => 'created_by',
            'joinType' => 'INNER',
            'propertyName' => 'CreatedBy'
        ]);
        
        $this->belongsTo('ModifiedBy', [
            'className' => 'Users',
            'foreignKey' => 'modified_by',
            'joinType' => 'INNER',
            'propertyName' => 'ModifiedBy'
        ]);
  
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('final_product')
            ->maxLength('final_product', 255)
            ->requirePresence('final_product', 'create')
            ->notEmptyString('final_product');

        $validator
            ->scalar('diffusion')
            ->maxLength('diffusion', 255)
            ->requirePresence('diffusion', 'create')
            ->notEmptyString('diffusion');

        return $validator;
    }
}
