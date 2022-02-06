<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects view content">
            <h3><?= h($project->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Final Product') ?></th>
                    <td><?= h($project->final_product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diffusion') ?></th>
                    <td><?= h($project->diffusion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($project->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($project->CreatedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($project->ModifiedBy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($project->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($project->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Competencies') ?></h4>
                <?php if (!empty($project->competencies)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->competencies as $competencies) : ?>
                        <tr>
                            <td><?= h($competencies->id) ?></td>
                            <td><?= h($competencies->name) ?></td>
                            <td><?= h($competencies->created) ?></td>
                            <td><?= h($competencies->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Competencies', 'action' => 'view', $competencies->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Competencies', 'action' => 'edit', $competencies->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competencies', 'action' => 'delete', $competencies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencies->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Groupings') ?></h4>
                <?php if (!empty($project->groupings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->groupings as $groupings) : ?>
                        <tr>
                            <td><?= h($groupings->id) ?></td>
                            <td><?= h($groupings->name) ?></td>
                            <td><?= h($groupings->created) ?></td>
                            <td><?= h($groupings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Groupings', 'action' => 'view', $groupings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Groupings', 'action' => 'edit', $groupings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groupings', 'action' => 'delete', $groupings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Methods') ?></h4>
                <?php if (!empty($project->methods)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->methods as $methods) : ?>
                        <tr>
                            <td><?= h($methods->id) ?></td>
                            <td><?= h($methods->name) ?></td>
                            <td><?= h($methods->created) ?></td>
                            <td><?= h($methods->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Methods', 'action' => 'view', $methods->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Methods', 'action' => 'edit', $methods->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Methods', 'action' => 'delete', $methods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $methods->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Resources') ?></h4>
                <?php if (!empty($project->resources)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->resources as $resources) : ?>
                        <tr>
                            <td><?= h($resources->id) ?></td>
                            <td><?= h($resources->name) ?></td>
                            <td><?= h($resources->created) ?></td>
                            <td><?= h($resources->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Resources', 'action' => 'view', $resources->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Resources', 'action' => 'edit', $resources->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Resources', 'action' => 'delete', $resources->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resources->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Standards') ?></h4>
                <?php if (!empty($project->standards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->standards as $standards) : ?>
                        <tr>
                            <td><?= h($standards->id) ?></td>
                            <td><?= h($standards->name) ?></td>
                            <td><?= h($standards->created) ?></td>
                            <td><?= h($standards->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Standards', 'action' => 'view', $standards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Standards', 'action' => 'edit', $standards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Standards', 'action' => 'delete', $standards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $standards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tasks') ?></h4>
                <?php if (!empty($project->tasks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->tasks as $tasks) : ?>
                        <tr>
                            <td><?= h($tasks->id) ?></td>
                            <td><?= h($tasks->name) ?></td>
                            <td><?= h($tasks->created) ?></td>
                            <td><?= h($tasks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tasks', 'action' => 'view', $tasks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tasks', 'action' => 'edit', $tasks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tasks', 'action' => 'delete', $tasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tools') ?></h4>
                <?php if (!empty($project->tools)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->tools as $tools) : ?>
                        <tr>
                            <td><?= h($tools->id) ?></td>
                            <td><?= h($tools->name) ?></td>
                            <td><?= h($tools->created) ?></td>
                            <td><?= h($tools->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tools', 'action' => 'view', $tools->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tools', 'action' => 'edit', $tools->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tools', 'action' => 'delete', $tools->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tools->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
