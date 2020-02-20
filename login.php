<?php

$title = "Login";
$side= " ";
$content= '<form method="post" action="login.php">
            <table class="logintable">
        <tr>
            <div class="input-group">
            <td><label><b>Username:</b></label</td>
            <td><input type="text" name="username"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Password:</b></label></td>
            <td><input type="password" name="password"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><button type="submit" class="btn" name="login_user">Login</button></td>
	</div>
        </tr>
                </table>
	</form>';
include "structura.php";
include "connections.php";