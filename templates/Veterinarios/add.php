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
            <?= $this->Html->link(__('List Veterinarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veterinarios form content">
            <?= $this->Form->create($veterinario) ?>
            <fieldset>
                <legend><?= __('Add Veterinario') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('sucursal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
