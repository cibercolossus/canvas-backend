<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tool[]|\Cake\Collection\CollectionInterface $tools
 */
?>
<div class="tools index content">
    <?= $this->Html->link(__('New Tool'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tools') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('project') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tools as $tool): ?>
                <tr>
                    <td><?= $this->Number->format($tool->id) ?></td>
                    <td><?= h($tool->name) ?></td>
                    <td><?= $tool->has('project') ? $this->Html->link($tool->project->final_product, ['controller' => 'Projects', 'action' => 'view', $tool->project->id]) : '' ?></td>
                    <td><?= h($tool->created) ?></td>
                    <td><?= h($tool->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tool->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tool->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tool->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tool->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
