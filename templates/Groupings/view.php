<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grouping $grouping
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Grouping'), ['action' => 'edit', $grouping->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Grouping'), ['action' => 'delete', $grouping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grouping->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Groupings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Grouping'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groupings view content">
            <h3><?= h($grouping->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($grouping->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $grouping->has('project') ? $this->Html->link($grouping->project->final_product, ['controller' => 'Projects', 'action' => 'view', $grouping->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($grouping->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($grouping->CreatedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($grouping->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($grouping->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($grouping->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
