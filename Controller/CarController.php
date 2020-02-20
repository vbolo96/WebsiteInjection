<?php
require ("Model/CarModel.php");
class CarController {
   
    function CreateCarDropdownList() {
        $carModel = new CarModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Selectati un tip: 
                    <select name = 'tip' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($carModel->GetCarTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";
//                "<form action = '' method = 'post' width = '200px'>
//                Cauta dupa orice:
//                <input type = 'text' width = '200px' name = 'cauta'>
//                <input type='submit' name='cautBtn' value='Cauta' />
//                </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateCarTables($tip)
    {
        $carModel = new CarModel();
        $carArray = $carModel->GetCarsByType($tip);
        $result = "";
        
        //Generate a carTable for each carObject in array
        foreach ($carArray as $key => $cars) 
        {
            $result = $result .
                    "<table class = 'carTable'>
                        <tr>
                            <th width = '75px' >Categorie: </th>
                            <td>$cars->tip</td>
                        </tr>
                        <tr>
                            <th>Producator: </th>
                            <td>$cars->producator</td>
                        </tr>
                        <tr>
                            <th>Anul fabricatiei: </th>
                            <td>$cars->anulfabricatiei</td>
                        </tr>
                         <tr>
                            <th>Kilometraj: </th>
                            <td>$cars->kilometraj</td>
                        </tr>
                        <tr>
                            <th>Pret: </th>
                            <td>$cars->pret</td>
                        </tr>
                        <tr>
                            <th>Combustibil: </th>
                            <td>$cars->combustibil</td>
                        </tr>
                        <tr>
                            <th>Capacitate: </th>
                            <td>$cars->capacitatemotor</td>
                        </tr>
                        <tr>
                            <th>Tara de origine: </th>
                            <td>$cars->taraorigine</td>
                        </tr>
                        <tr>
                            <th>Localitate: </th>
                            <td>$cars->localitate</td>
                        </tr>
                        <tr>
                            <th>Vanzator: </th>
                            <td>$cars->usern</td>
                        </tr>
                        
                        <tr>
                             <th>Review: </th>
                            <td colspan='5' >$cars->review</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
        
    }
}
