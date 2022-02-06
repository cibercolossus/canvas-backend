<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Standard $standard
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Standard'), ['action' => 'edit', $standard->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Standard'), ['action' => 'delete', $standard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $standard->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Standards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Standard'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="standards view content">
            <h3><?= h($standard->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($standard->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $standard->has('project') ? $this->Html->link($standard->project->final_product, ['controller' => 'Projects', 'action' => 'view', $standard->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($standard->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($standard->CreatedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($standard->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($standard->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($standard->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
