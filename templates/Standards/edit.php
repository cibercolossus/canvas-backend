<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Standard $standard
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $standard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $standard->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Standards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="standards form content">
            <?= $this->Form->create($standard) ?>
            <fieldset>
                <legend><?= __('Edit Standard') ?></legend>
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
