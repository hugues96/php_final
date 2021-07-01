<?php
use ism\lib\Role;
use ism\lib\Session; 
?>
  
<nav class="navbar navbar-expand-lg navbar-silver bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <a>Avatar</a>
    </a>
    </div>
    
    <div class="collapse navbar-collapse  ">
    <style>
    body{
        background: #DC8F8F;
    }
  
  </style>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parametre</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php if (!Role::estConnect()) : ?>
                        <a class="dropdown-item " href="<?php path('security/login') ?>">Connexion</a>
                    <?php endif ?>
                    <?php if (Role::estConnect()) : ?>
                        <a class="dropdown-item" href="<?php path('security/logout') ?>">Deconnexion</a>
                    <?php endif ?>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php if (Role::estConnect()) : ?>
                <li class="nav-item">
                    <?= Session::getSession("user_connect")["nom"];
                    ?>
                </li>
            <?php endif ?>
        </ul>
  </div>
</nav>