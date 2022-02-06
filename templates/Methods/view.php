<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Method $method
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Method'), ['action' => 'edit', $method->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Method'), ['action' => 'delete', $method->id], ['confirm' => __('Are you sure you want to delete # {0}?', $method->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Methods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Method'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="methods view content">
            <h3><?= h($method->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($method->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $method->has('project') ? $this->Html->link($method->project->final_product, ['controller' => 'Projects', 'action' => 'view', $method->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($method->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($method->CreatedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($method->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($method->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($method->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
