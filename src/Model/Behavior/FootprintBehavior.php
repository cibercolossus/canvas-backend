<?php 
namespace App\Model\Behavior;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;

class FootprintBehavior extends Behavior
{
    public function getFootprint(EntityInterface $entity)
    {   
        if($entity->isNew()) {
            $entity->set('created_by', $_SESSION['Auth']['id']);
            $entity->set('modified_by', $_SESSION['Auth']['id']);
        } else {
            $entity->set('modified_by', $_SESSION['Auth']['id']);
        }
    }

    public function beforeSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->getFootprint($entity);
    }
}