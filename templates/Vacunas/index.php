<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna[]|\Cake\Collection\CollectionInterface $vacunas
 */
?>
<div class="vacunas index content">
    <?= $this->Html->link(__('New Vacuna'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vacunas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('fdcolocacion') ?></th>
                    <th><?= $this->Paginator->sort('idMascota') ?></th>
                    <th><?= $this->Paginator->sort('idVeterinario') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vacunas as $vacuna): ?>
                <tr>
                    <td><?= $this->Number->format($vacuna->id) ?></td>
                    <td><?= h($vacuna->tipo) ?></td>
                    <td><?= h($vacuna->fdcolocacion) ?></td>
                    <td><?= h($vacuna->idMascota) ?></td>
                    <td><?= h($vacuna->idVeterinario) ?></td>
                    <td><?= h($vacuna->created) ?></td>
                    <td><?= h($vacuna->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vacuna->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vacuna->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vacuna->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vacuna->id)]) ?>
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
