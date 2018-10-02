<!DOCTYPE html>
<html>
<head>
    <meta>
    </meta>
</head>
<form action="#" method="post">
<select name="Sec[]" multiple>
<option value="Sec1">Sección 1</option>
<option value="Sec2">Sección 2</option>
<option value="Sec3">Sección 3</option>
<option value="Sec4">Sección 4</option>
<option value="Sec5">Sección 5</option>
</select>
<input type="submit" name="submit" value="Envia la sección que quieres" />
</form>
<?php
    if(isset($_POST['submit'])){
        foreach($_POST['Sec'] as $selected_val){
            echo "Seleccionaste la sección:" .$selected_val;  // Se despliega el valor de la variable
            echo("\n ");
        }
    }
?>

</html>