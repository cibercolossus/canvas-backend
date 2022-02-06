<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Standard[]|\Cake\Collection\CollectionInterface $standards
 */
?>
<div class="standards index content">
    <?= $this->Html->link(__('New Standard'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Standards') ?></h3>
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
                <?php foreach ($standards as $standard): ?>
                <tr>
                    <td><?= $this->Number->format($standard->id) ?></td>
                    <td><?= h($standard->name) ?></td>
                    <td><?= $standard->has('project') ? $this->Html->link($standard->project->final_product, ['controller' => 'Projects', 'action' => 'view', $standard->project->id]) : '' ?></td>
                    <td><?= h($standard->created) ?></td>
                    <td><?= h($standard->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $standard->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $standard->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $standard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $standard->id)]) ?>
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
