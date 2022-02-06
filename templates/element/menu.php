<aside class="column">
    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('PROYECTOS'), ['controller' => 'Projects', 'action' => 'index']) ?>  / 
        <?= $this->Html->link(__('RECURSOS'), ['controller' => 'Resources', 'action' => 'index']) ?> / 
        <?= $this->Html->link(__('HERRAMIENTAS TIC'), ['controller' => 'Tools', 'action' => 'index']) ?> / 
         <?= $this->Html->link(__('AGRUPAMIENTOS / ORGANIZACIÓN'), ['controller' => 'Groupings', 'action' => 'index']) ?> / 
        <?= $this->Html->link(__('TAREAS'), ['controller' => 'Tasks', 'action' => 'index']) ?> / 
        <?= $this->Html->link(__('COMPETENCIAS CLAVE'), ['controller' => 'Competencies', 'action' => 'index']) ?> / 
        <?= $this->Html->link(__('ESTANDARES DE APRENDIZAJE'), ['controller' => 'Standards', 'action' => 'index']) ?> / 
        <?= $this->Html->link(__('MÉTODOS DE EVALUACIÓN'), ['controller' => 'Methods', 'action' => 'index']) ?>
    </div>
</aside>