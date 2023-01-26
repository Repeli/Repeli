<?php

/**
 * Description of PeliController
 *
 * @author Sami
 */

require ("Model/PelitModel.php");

class PeliController 
{
    function PeliDropDownList()
    {
        $peliModel = new PelitModel();
        $result = "<form action = '' method = 'post' width = '200px'>
            Valitse tyyppi:
            <select name = 'types' >
                <option value = '%' >Kaikki</option>
                ".$this->LuoOptionValues($peliModel->GetPeliTyyppi()).
            "</select>
                <input type = 'submit' value = 'Search' />
                </form>";
        
        return $result;
    }
    
    function LuoOptionValues(array $valueArray)
    {
        $result = "";
        
        foreach ($valueArray as $value)
        {
            $result = $result . "<option value='$value'>$value</option>";
        }
        
        return $result;
    }
    
    function LuoPeliTablet($types)
    {
        $peliModel = new PelitModel();
        $peliArray = $peliModel->GetPeliByType($types);
        $result = "";
        
        foreach ($peliArray as $key => $pelit)
        {
            $result = $result .
                    "<table class = 'peliTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$pelit->image'/></th>
                            <th width = '75px' >Nimi: </th>
                            <td>$pelit->name</td>
                        </tr>
                        
                        <tr>
                            <th>Tyyppi: </th>
                            <td>$pelit->type</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$pelit->review</td>
                        </tr>
                    </table>"; 
        }
        
        return $result;
    }
}

?>