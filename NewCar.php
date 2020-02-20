<?php

$title = "New Car";
$side=" ";
$content= '<form method="post" action="NewCar.php">
            <table class="logintable">
        <tr>
            <div class="input-group">
            <td><label><b>Tip:</b></label</td>
            <td><select name="tipForm">
                <option value="">Select...</option>
                <option value="Autoturisme">Autoturisme</option>
                <option value="Motociclete">Motociclete</option>
                <option value="Camioane">Camioane</option>
                <option value="Autoutilitare">Autoutilitare</option>
                <option value="Remorci">Remorci</option>
                <option value="Agro">Agro</option>
                <option value="Constructii">Constructii</option>
                </select></td>
            </div>
        </tr> 
        
        <tr>
            <div class="input-group">
            <td><label><b>Producator:</b></label</td>
            <td><input type="text" name="producator"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Anul fabricatiei:</b></label</td>
            <td><input type="text" name="anulfabricatiei"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Kilometraj:</b></label></td>
            <td><input type="text" name="kilometraj"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Pret:</b></label</td>
            <td><input type="text" name="pret"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Combustibil:</b></label</td>
            <td><input type="text" name="combustibil"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Capacitate motor:</b></label</td>
            <td><input type="text" name="capacitatemotor"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Tara de origine:</b></label</td>
            <td><input type="text" name="taraorigine"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><label><b>Localitate:</b></label</td>
            <td><input type="text" name="localitate"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Vanzator:</b></label</td>
            <td><input type="text" name="usern"></td>
            </div>
        </tr>
        <tr>
            <div class="input-group">
            <td><label><b>Review:</b></label</td>
            <td><input type="text" name="review"></td>
            </div>
        </tr>
        
        <tr>
            <div class="input-group">
            <td><button type="submit" class="btn" name="newcar_btn">Adauga anunt</button></td>
	</div>
        </tr>
                </table>
	</form>';
include "structura.php";
include "connections.php";