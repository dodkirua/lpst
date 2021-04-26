<?php
echo "
<div class='modal fade' id='$idModal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title subtitle' id='staticBackdropLabel'><?= $title?>></h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <form  action='../php/addAddress.php' method='post' class='flexColumn flexCenter width_100'>
                        <input type='hidden' value='$delivery' name='delivery'>
                        <label for='addressName' class='colorBlue center margin15-30'>Nom de l'adresse </label>
                        <input id='addressName' name='addressName' class='whiteBorder width_100' type='text'>
                        <label for='firstname' class='colorBlue center margin15-30'>Prénom </label>
                        <input id='firstname' name='firstname' class='whiteBorder width_100' type='text'>
                        <label for='lastname' class='colorBlue center margin15-30'>Nom </label>
                        <input id='lastname' name='lastname' class='whiteBorder width_100' type='text'>
                        
                        <div class='flexRow'>
                            <label for='num_street' class='colorBlue  width30' >N° </label>
                            <label for='street' class='colorBlue  width65' >Nom de la voie </label>
                        </div>    
                        <div class='flexRow'>                            
                            <input id='num_street' name='num' class='whiteBorder width30' type='text' placeholder='10'>                            
                            <input id='street' name='street' class='whiteBorder width65' type='text' placeholder='rue des blés'>
                        </div>
                        <label id='complements' class='colorBlue center margin15-30'></i>Compléments (bis,ter,...)</label>
                        <input name='complement' class='whiteBorder width_100' type='text' placeholder=\"complément d'adresse\">

                        <label for='country' class='colorBlue center margin15-30'>Pays </label>
                        <input id='country' name='firstname' class='whiteBorder width_100' type='text'>
                        <label for='postalCode' class='colorBlue center margin15-30'>Code postal </label>
                        <input id='postalCode' name='postalCode' class='whiteBorder width_100' type='text'>
                        <label for='city' class='colorBlue center margin15-30'>Ville </label>
                        <input id='city' name='city' class='whiteBorder width_100' type='text'>
                        <label for='phone' class='colorBlue center margin15-30'>Téléphone </label>
                        <input id='phone' name='phone' class='whiteBorder width_100' type='tel'>
                        <input type='submit' id='modifyInformation2' class='send modify modifyProfil' value='Enregistrer'>
                    </form>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='redButton' data-bs-dismiss='modal'>Fermer</button>
                </div>
            </div>
        </div>
    </div>
";