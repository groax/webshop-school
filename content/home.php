<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 8-5-2017
 * Time: 12:45
 */

?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Home</h1>
            <?php
                $table = new table(['th' => ['1', '2']],['td' => ['3', '4']]);
                echo $table->Read();
            ?>
        </div>
    </div>
</div>
