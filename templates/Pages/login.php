
    <div id="preloder">
        <div class="loader"></div>
    </div>
<br>
<br>

<br>
<br>
<br>

<br>

    <div class="container">
        <div class="row justify-content-center">
         <!--    <div class="col-md-8 shadow-sm p-3 mb-5 bg-white rounded"> -->
                <div class="card border-success">
                    <div class="card-header">Iniciar Sesión</div>
                    <div class="card-body">
                        <?= $this->Flash->render('auth') ?>
                        <?= $this->Form->create() ?>
                        <div class="form-group row">
                            <label for="email_address" class="col-md-8 col-form-label text-md-right">Dirección de E-Mail</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('email', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'correo electrónico', 'required']) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'contraseña', 'required']) ?>

                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4"> <!--   -->
                            <?= $this->Form->button('Iniciar Sesión', ['class' => 'btn btn-primary'])?>
                            <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-warning']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                    
                </div>
  <!--           </div> -->
        </div>
    </div>
</div>

<br>
<br>

<br>
<br>
<br>

<br>