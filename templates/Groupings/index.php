<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grouping[]|\Cake\Collection\CollectionInterface $groupings
 */
?>
<div class="groupings index content">
    <?= $this->Html->link(__('New Grouping'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Groupings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groupings as $grouping): ?>
                <tr>
                    <td><?= $this->Number->format($grouping->id) ?></td>
                    <td><?= h($grouping->name) ?></td>
                    <td><?= $grouping->has('project') ? $this->Html->link($grouping->project->final_product, ['controller' => 'Projects', 'action' => 'view', $grouping->project->id]) : '' ?></td>
                    <td><?= h($grouping->created) ?></td>
                    <td><?= h($grouping->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $grouping->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grouping->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grouping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grouping->id)]) ?>
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
