<?php

$title = "Sign Up";
$side=" ";
$content= '<form method="post" action="signup.php">
            <table class="logintable">
        <tr>
            <div class="input-group">
            <td><label><b>Username:</b></label</td>
            <td><input type="text" name="username"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Nume:</b></label</td>
            <td><input type="text" name="nume"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Prenume:</b></label</td>
            <td><input type="text" name="prenume"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Parola:</b></label></td>
            <td><input type="password" name="password"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Email:</b></label</td>
            <td><input type="text" name="email"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Numar de telefon:</b></label</td>
            <td><input type="text" name="telefon"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Tara:</b></label</td>
            <td><input type="text" name="tara"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Judet:</b></label</td>
            <td><input type="text" name="judet"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Oras:</b></label</td>
            <td><input type="text" name="oras"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Adresa:</b></label</td>
            <td><input type="text" name="adresa"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Cod postal:</b></label</td>
            <td><input type="text" name="codpostal"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><button type="submit" class="btn" name="signup_user">Sign Up</button></td>
	</div>
        </tr>
                </table>
	</form>';
include "structura.php";
include "connections.php";