 <?php
try {
    $usuario = "admin";
    $contrasena = "DB4dm1n@";
    $mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contrasena);
    //foreach($mbd->query('SELECT * from prueba') as $fila) {
    //    print_r($fila);
    
    $usr="Usuario1";
    $edad=45;
    $sql="SELECT * FROM prueba WHERE nombre ='".$usr."' and edad ='".$edad."'";
    echo "<p>".$sql."</p>";
    $gsent = $mbd->prepare($sql);
    $gsent->execute();

    print("PDO::FETCH_OBJ: ");
    print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
    //$result3 = $gsent->fetch(PDO::FETCH_OBJ);
    if($result3 = $gsent->fetch(PDO::FETCH_OBJ)){
        //session_start();
        echo "<p>";
        print $result3->nombre."\n";
        print $result3->edad."\n";
        print $result3->fecha."\n";
        print $result3->id_per. "\n";
        print("\n");
        echo "</p>";
        echo "<span>Usuario encontrado</span>";
    
        //header("Status: 301 Moved Permanently");
        //header("Location: ind.php");
        //exit;
    }
    else{
        echo "Usuario no encontrado";
    }
    $mbd = null;
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>