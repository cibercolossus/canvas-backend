<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competency $competency
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competency->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Competencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="competencies form content">
            <?= $this->Form->create($competency) ?>
            <fieldset>
                <legend><?= __('Edit Competency') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('project_id', ['options' => $projects]);
                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
