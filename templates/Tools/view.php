<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tool $tool
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tool'), ['action' => 'edit', $tool->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tool'), ['action' => 'delete', $tool->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tool->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tools'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tool'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tools view content">
            <h3><?= h($tool->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tool->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $tool->has('project') ? $this->Html->link($tool->project->final_product, ['controller' => 'Projects', 'action' => 'view', $tool->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tool->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($tool->CreatedBy->name) ?></td>

                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($tool->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tool->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tool->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
