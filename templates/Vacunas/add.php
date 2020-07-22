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
            <?= $this->Html->link(__('List Vacunas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vacunas form content">
            <?= $this->Form->create($vacuna) ?>
            <fieldset>
                <legend><?= __('Add Vacuna') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('fdcolocacion');
                    echo $this->Form->control('idMascota');
                    echo $this->Form->control('idVeterinario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
