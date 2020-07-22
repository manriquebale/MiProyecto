<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veterinario[]|\Cake\Collection\CollectionInterface $veterinarios
 */
?>
<div class="veterinarios index content">
    <?= $this->Html->link(__('New Veterinario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Veterinarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th><?= $this->Paginator->sort('sucursal') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veterinarios as $veterinario): ?>
                <tr>
                    <td><?= $this->Number->format($veterinario->id) ?></td>
                    <td><?= h($veterinario->nombre) ?></td>
                    <td><?= h($veterinario->tel) ?></td>
                    <td><?= h($veterinario->email) ?></td>
                    <td><?= h($veterinario->matricula) ?></td>
                    <td><?= h($veterinario->sucursal) ?></td>
                    <td><?= h($veterinario->created) ?></td>
                    <td><?= h($veterinario->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $veterinario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veterinario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veterinario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veterinario->id)]) ?>
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
