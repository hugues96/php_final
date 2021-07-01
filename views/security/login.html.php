<?php

use ism\lib\Session;
use ism\config\helper;

//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")) {
    //recuperation des erreur de la session dans la variable local

    $array_error = Session::getSession("array_error");
    //dd($array_error);
    //suppression des erreur dans la session

    Session::destroyKey("array_error");
}
?>
<h3 class="text-center text-black pt-5">Connexion</h3>


<body>
    <style type="text/css">
        body {
            background: #DC8F8F;
        }
    </style>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php path("security/login") ?>" method="post">
                            <div class="form-group">
                                <label for="login" class="text-info">Email:</label><br>
                                <input type="text" name="login" id="login" class="form-control">
                            </div>
                            <?php if (isset($array_error["login"])) : ?>
                                <div id="emailHelp" class="form-text text-danger ">
                                    <?= $array_error["login"]; ?></div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="password" class="text-info">Mot de passe:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <?php if (isset($array_error["password"])) : ?>
                                <div id="emailHelp" class="form-text text-danger ">
                                    <?= $array_error["password"]; ?></div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="pl-1">
                                    <button type="submit" class="btn btn-outline-primary">
                                        Connexion
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>