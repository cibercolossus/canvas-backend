<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competency $competency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Competency'), ['action' => 'edit', $competency->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Competency'), ['action' => 'delete', $competency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competency->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Competencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Competency'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="competencies view content">
            <h3><?= h($competency->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($competency->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $competency->has('project') ? $this->Html->link($competency->project->final_product, ['controller' => 'Projects', 'action' => 'view', $competency->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($competency->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($competency->CreatedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($competency->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($competency->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($competency->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
