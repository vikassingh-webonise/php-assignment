<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->Html->charset(); ?>
    <title>
        Welcome To Bootswatch Assessment
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
    echo $this->Html->css(array(
        'bootstrap.min',
        'bootstrap-responsive',
        'font-awesome.min',
        'custom',
    ));
    echo $this->fetch('css');

    echo $this->Html->script(array(
        'custom',
        'bootstrap/bootstrap-affix',
        'bootstrap/bootstrap-collapse',
        'bootstrap/bootstrap-dropdown',
        'bootstrap/bootstrap-modal',
        'bootstrap/bootstrap-tab',
        'bootstrap/bootstrap-transition',
        'bootstrap/bootstrap',
    ));
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <header>
        <?php echo $this->element('Htmls/header'); ?>
    </header>
    <div id="content">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer" class="footerRole">
        <hr/>
        <?php echo $this->element('Htmls/footer'); ?>
    </div>
</div>
<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
