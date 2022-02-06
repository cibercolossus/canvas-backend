<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Resource'), ['action' => 'edit', $resource->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Resource'), ['action' => 'delete', $resource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resource->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Resources'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Resource'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="resources view content">
            <h3><?= h($resource->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($resource->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $resource->has('project') ? $this->Html->link($resource->project->final_product, ['controller' => 'Projects', 'action' => 'view', $resource->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($resource->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($resource->CreatedBy->name) ?></td>
                </tr>
                <tr>
                   <th><?= __('Modified By') ?></th>
                    <td><?= h($resource->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($resource->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($resource->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
