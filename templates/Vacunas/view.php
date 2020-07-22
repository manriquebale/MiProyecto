<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna $vacuna
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vacuna'), ['action' => 'edit', $vacuna->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vacuna'), ['action' => 'delete', $vacuna->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vacuna->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vacunas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vacuna'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vacunas view content">
            <h3><?= h($vacuna->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($vacuna->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fdcolocacion') ?></th>
                    <td><?= h($vacuna->fdcolocacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMascota') ?></th>
                    <td><?= h($vacuna->idMascota) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVeterinario') ?></th>
                    <td><?= h($vacuna->idVeterinario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vacuna->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vacuna->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vacuna->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
