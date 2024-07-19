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
    <style>

        .my-logo-class {
            width: 150px; /* Adjust the width as needed */
            height: auto; /* Maintain the aspect ratio */
        }
    </style>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous');?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>  
<main class="main">
  <div class="container">
  <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><!--<span>Gestion de references</span>--></a>
            <!--<img src="webroot/img/logo-mtd+2at.png" alt="Logo application"> -->
            <?= $this->Html->image('logo-mtd+2at.png', ['alt' => 'My Logo', 'class' => 'my-logo-class']) ?>
        </div>
        <div class="top-nav-links">
            <!--<a target="_blank" rel="noopener" href="https://book.cakephp.org/5/">Documentation</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
            <!-- <?= $this->Html->link(__('Reference'), ['controller' => 'Reference', 'action' => 'index'], ['class' => 'x','escape' => false]) ?>
            <?= $this->Html->link(__('Client'), ['controller' => 'Client', 'action' => 'index'], ['class'=>'y','escape' => false]) ?>
            <?= $this->Html->link(__('Company'), ['controller' => 'Societe', 'action' => 'index'], ['escape' => false]) ?>
            <?= $this->Html->link(__('Sector'), ['controller' => 'Secteur', 'action' => 'index'], ['escape' => false]) ?>
            <?= $this->Html->link(__('Year'), ['controller' => 'Annee', 'action' => 'index'], ['escape' => false]) ?>
            <?= $this->Html->link(__('Country'), ['controller' => 'Pays', 'action' => 'index'], ['escape' => false]) ?>
            <?= $this->Html->link(__('Type'), ['controller' => 'Type', 'action' => 'index'], ['escape' => false]) ?>
            <?= $this->Html->link(__('<i class="fa fa-power-off" style="color: #ed7923;"></i> Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout', 'escape' => false, 'style' => 'color: #ed7923;']) ?> -->
        </div>
</nav>

<?php if ($this->request->getParam('controller') !== 'Users' || $this->request->getParam('action') !== 'login'): ?>

<div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">Reference Manager</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">


      <li>
        <?= $this->Html->link(
                '<i class="bx bx-search"></i><span class="links_name">Search</span>',
                ['controller' => 'Reference', 'action' => 'search'],
                ['escape' => false]
            ) ?>
            <span class="tooltip">Search</span>
      </li>
      <li>
            <?= $this->Html->link(
                '<i class="bx bx-grid-alt"></i><span class="links_name">Reference</span>',
                ['controller' => 'Reference', 'action' => 'index'],
                ['escape' => false]
            ) ?>
            <span class="tooltip">Reference</span>
        </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bx-user"></i> <span class="links_name">Client</span>'), ['controller' => 'Client', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Client</span>
      </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bx-buildings"></i><span class="links_name">Company</span>'), ['controller' => 'Societe', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Company</span>
      </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bx-pie-chart-alt-2"></i><span class="links_name">Sector</span>'), ['controller' => 'Secteur', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Sector</span>
      </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bxs-calendar"></i><span class="links_name">Year</span>'), ['controller' => 'Annee', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Year</span>
      </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bx-location-plus"></i><span class="links_name">Country</span>'), ['controller' => 'Pays', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Country</span>
      </li>
      <li>
      <?= $this->Html->link(__('<i class="bx bxs-devices"></i><span class="links_name">Type</span>'), ['controller' => 'Type', 'action' => 'index'], ['escape' => false]) ?>
        <span class="tooltip">Type</span>
      </li>

      <li class="profile">

        <?= $this->Html->link(__('<i class="bx bx-log-out"></i><span class="links_name">Log Out</span>'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout', 'escape' => false, 'style' => 'color: #ed7923;']) ?>
      </li>
    </ul>
  </div>
  <?php endif; ?>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => {
      // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
</main>
   
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous') ?>

    <footer>
    </footer>
</body>
</html>
