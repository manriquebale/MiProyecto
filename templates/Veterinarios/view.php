<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veterinario $veterinario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Veterinario'), ['action' => 'edit', $veterinario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Veterinario'), ['action' => 'delete', $veterinario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veterinario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Veterinarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Veterinario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veterinarios view content">
            <h3><?= h($veterinario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($veterinario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($veterinario->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($veterinario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= h($veterinario->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sucursal') ?></th>
                    <td><?= h($veterinario->sucursal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($veterinario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($veterinario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($veterinario->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
