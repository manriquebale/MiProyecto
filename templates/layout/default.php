<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <?= $this->Html->css('/webroot/css/estilos.css') ?>
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('flaticon.css') ?>
    <?= $this->Html->css('slicknav.min.css') ?>
    <?= $this->Html->css('styless.css')?>
    <?= $this->Html->css('jquery-ui.min.css') ?>
    <?= $this->Html->script(['jquery-3.2.1.min', 'jquery.slicknav.min','circle-progress.min', 'bootstrap.min', 'owl.carousel.min', 'main']); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<header class="header-section" style="background-color=black;"> 
        <a href="index" class="site-logo">
            <img src="../img/logo.png" alt="" height="25px">
        </a>
        <nav class="header-nav">
            <ul class="main-menu">

                <li><a href="../pages/sucursales">Sucursales</a></li>
                <li><a href="../pages/staff">Staff</a></li>
            </ul>
            <div class="header-right">
                <a href="../pages/login" class="hr-btn "></i>Login</a>
                <a href="../usr/add" class="hr-btn hr-btn-2"></i>Registrarse</a>
            
            </div>
        </nav>
    </header> 
<!-- <body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="/"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" href="https://api.cakephp.org/4/">API</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">-->
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <!-- Footer Section -->
    <footer class="footer-section"><
        <div class="container">
            <a href="index" class="footer-logo">
                <img src="../img/logo.png" alt="" height="30px"></i>
                <div class="copyright">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Derechos reservados | by <i class="fa fa-heart-o" aria-hidden="true"></i> <a target="_blank"> Alejandra Manrique</a>
                </div>
        </div>
    </footer> 
    <!-- Footer Section end-->
</body> 
</html>
