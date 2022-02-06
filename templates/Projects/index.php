<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <div class="projects index content">
        <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Projects') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('final_product') ?></th>
                        <th><?= $this->Paginator->sort('diffusion') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project) : ?>
                        <tr>
                            <td><?= $this->Number->format($project->id) ?></td>
                            <td><?= h($project->final_product) ?></td>
                            <td><?= h($project->diffusion) ?></td>
                            <td><?= h($project->created) ?></td>
                            <td><?= h($project->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
</div>