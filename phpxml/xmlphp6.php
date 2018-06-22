<?php
/**
 * Crear un documento XML desde cero
 */
try {
   $dasxml = SDO_DAS_XML::create("carta.xsd");
   try {
       $doc = $dasxml->createDocument();
       $odr = $doc->getRootDataObject();
       $sec = $odr->getSequence();
       $sec->insert("April 09, 2005", NULL, 'fecha');
       $sec->insert("Acme Inc. ", NULL, NULL);
       $sec->insert("United Kingdom. ");
       $sec->insert("Estimado/a", NULL, NULL);
       $sec->insert("Tarun", NULL, "nombre");
       $sec->insert("Nayaraaa", NULL, "apellido");
       $odr->apellido = "Nayar";
       $sec->insert("Porfavor, observe que su pedido número ");
       $sec->insert(12345);
       $sec->insert(" ha sido enviado hoy. Gracias por hacer negocios con nosotros.");
       print($dasxml->saveString($doc));
   } catch (SDO_Exception $e) {
       print($e);
   }
} catch (SDO_Exception $e) {
   print("Problema creando un documento XML: " . $e->getMessage());
}
?>