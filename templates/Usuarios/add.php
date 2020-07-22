<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>

<br>
<br>
<br>
<br>

<div class="row">
    <aside class="column" style="margin-left: 50px; margin-top: 33px;">
        <div class="side-nav" style="margin-left: 50px;  margin-top: 33px;">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuarios) ?>
            <br>

            <fieldset>
                <legend><?= __('Agregar Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contrasena');
               
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
