<?php 
// 
/********************************************

FORMATO PARA ARCHIVO DE LIBRO DE VENTAS

*********************************************/
//
/*

LISTADO DE TIPOS DE DOCUMENTOS DEL SII CON SU CODIGO RESPECTIVO

30: factura
33: Factura Electrónica
60: nota de crédito
61: Nota de Crédito Electrónica
55: nota de débito
56: Nota de Débito Electrónica
50  Guía de Despacho.
52: Guía de Despacho Electrónica
34: Factura No Afecta o Exenta Electrónica
32: factura de venta bienes y servicios no afectos o exentos de IVA
39: Boleta Electrónica
41: Boleta Exenta Electrónica
35: Boleta
38: Boleta exenta
46: Factura de Compra Electrónica.
43: Liquidación-Factura Electrónica
110: Factura de Exportación Electrónica
111: Nota de Débito de Exportación Electrónica
112: Nota de Crédito de Exportación Electrónica
45: factura de compra
103: Liquidación
40: Liquidación Factura
801 Orden de Compra
802 Nota de pedido
803 Contrato
804 Resolución
805 Proceso ChileCompra
806 Ficha ChileCompra
807 DUS
808 B/L (Conocimiento de embarque)
809 AWB (Air Will Bill)
810 MIC/DTA
811 Carta de Porte
812 Resolución del SNA donde califica Servicios de Exportación
813 Pasaporte
814 Certificado de Depósito Bolsa Prod. Chile.
815 Vale de Prenda Bolsa Prod. Chile

*/
 
##############################################################
# DATOS DE ENVIO
##############################################################
#
$Config["EnviarSii"]="1";
$Config["EnviarMail"]="1";
$Config["Produccion"]="1";
$Config["MailDestino"]="contacto@factronica.cl";
$Archivos["XMLLIBRO"]="milibrito.xml";

##############################################################
# CARATULA DEL LIBRO
##############################################################
#
$Caratula["RutEmisorLibro"]="76436563-1";
$Caratula["RutEnvia"]="13725303-8";
$Caratula["PeriodoTributario"]="2016-02";
$Caratula["FchResol"]="2014-08-22";
$Caratula["NroResol"]="80";
$Caratula["TipoOperacion"]="VENTA";
$Caratula["TipoLibro"]="MENSUAL";
$Caratula["TipoEnvio"]="TOTAL"; 
$Caratula["FolioNotificacion"]="";

##############################################################
# DETALLE DEL LIBRO
##############################################################

# FACTURA ELECTRONICA
$Detalle["TpoDoc"]["1"]="33";
$Detalle["NroDoc"]["1"]="194";
$Detalle["TpoImp"]["1"]="1";
$Detalle["TasaImp"]["1"]="19";
$Detalle["FchDoc"]["1"]="2016-02-09";
$Detalle["CdgSIISucur"]["1"]="12312";
$Detalle["RUTDoc"]["1"]="76183109-7";
$Detalle["RznSoc"]["1"]="SERVICIOS GASTRONOMICOS FELIPE ALBERTO AGUAYO FIGUEROA";
$Detalle["TpoDocRef"]["1"]="";
$Detalle["FolioDocRef"]["1"]="";
$Detalle["MntExe"]["1"]="";
$Detalle["MntNeto"]["1"]="10000";
$Detalle["MntIVA"]["1"]="1900";
$Detalle["MntSinCred"]["1"]="0";
$Detalle["MntTotal"]["1"]="11900";

# FACTURA ELECTRÓNICA
$Detalle["TpoDoc"]["2"]="33";
$Detalle["NroDoc"]["2"]="195";
$Detalle["TpoImp"]["2"]="1";
$Detalle["TasaImp"]["2"]="19";
$Detalle["FchDoc"]["2"]="2016-02-09";
$Detalle["CdgSIISucur"]["2"]="12312";
$Detalle["RUTDoc"]["2"]="76301137-2";
$Detalle["RznSoc"]["2"]="GASTRONOMICA E INVERSIONES AGUAYO LIMITADA";
$Detalle["MntExe"]["2"]="";
$Detalle["MntNeto"]["2"]="10000";
$Detalle["MntIVA"]["2"]="1900";
$Detalle["MntSinCred"]["2"]="0";
$Detalle["MntTotal"]["2"]="11900";

# NOTA DE CRÉDITO ELECTRONICA
$Detalle["TpoDoc"]["3"]="61";
$Detalle["NroDoc"]["3"]="11";
$Detalle["TpoImp"]["3"]="1";
$Detalle["TasaImp"]["3"]="0";
$Detalle["FchDoc"]["3"]="2016-02-09";
$Detalle["CdgSIISucur"]["3"]="12312";
$Detalle["RUTDoc"]["3"]="11111111-1";
$Detalle["RznSoc"]["3"]="PUBLICO GENERAL";
$Detalle["MntExe"]["3"]="0";
$Detalle["MntNeto"]["3"]="10000";
$Detalle["MntIVA"]["3"]="1900";
$Detalle["MntSinCred"]["3"]="0";
$Detalle["MntTotal"]["3"]="11900";

##############################################################
# TOTALES DEL LIBRO
##############################################################
#
#  TOTALES DE FACTURAS ELECTRONICAS = TIPO 33
$TotalesPeriodo["TpoDoc"]["33"]="33";
$TotalesPeriodo["TotDoc"]["33"]="2";
$TotalesPeriodo["TotMntExe"]["33"]="0";
$TotalesPeriodo["TotMntNeto"]["33"]="20000";
$TotalesPeriodo["TotMntIVA"]["33"]="3800";
$TotalesPeriodo["TotIVAFueraPlazo"]["33"]="0";
$TotalesPeriodo["TotMntTotal"]["33"]="23800";
# TOTALES NOTAS CREDITO ELECTRONICAS TIPO = 61
$TotalesPeriodo["TpoDoc"]["61"]="34";
$TotalesPeriodo["TotDoc"]["61"]="1";
$TotalesPeriodo["TotMntExe"]["61"]="0";
$TotalesPeriodo["TotMntNeto"]["61"]="10000";
$TotalesPeriodo["TotMntIVA"]["61"]="1900";
$TotalesPeriodo["TotIVAFueraPlazo"]["61"]="0";
$TotalesPeriodo["TotMntTotal"]["61"]="11900";
# TOTALES BOLETAS MANUALES TIPO = 35
$TotalesPeriodo["TpoDoc"]["35"]="35";
$TotalesPeriodo["TotDoc"]["35"]="3"; 
$TotalesPeriodo["TotMntExe"]["35"]="100000";
$TotalesPeriodo["TotMntNeto"]["35"]="0";
$TotalesPeriodo["TotMntIVA"]["35"]="19000";
$TotalesPeriodo["TotIVAFueraPlazo"]["35"]="0";
$TotalesPeriodo["TotMntTotal"]["35"]="119000";
############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="w61tmFW8A2ttWcTdz/9IlhhsXISAO+4M9EiVEGzzQ93v7E9Pwj6820Qn2gyBHz34
Gtga5udEbJv+k0cqUIs1kujtC8kdw8B7BFETURJpwLDvWMeWLhhGWZWpnRQ2bxzJ
7gxUBb9VpZEUVlO2osSq1xG0M14ewhp67QzcFIhrlPs="; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGZDCCBUygAwIBAgIKfQYwyAAAAALebTANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
rw7BaLr9PeGfEqA2nRUp6fFoplTcJCls9HqRZUnjIGvYW/KHW2dz7fhS9IWmenvv
hKLyloPUsmsttgkRT6sU0Z8q2hjFu2ojxaOSo1mAKBrCjwi+Vgc//vtuCdVu22gf
kjrviJpJEdlWh0pfTqGnbTx2hmDNWtsk4NSkNErQHrEtBOlPCLknG0Th0tkCGAiB
K3o3H++ilZg=";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICWQIBAAKBgQDDrW2YVbwDa21ZxN3P/0iWGGxchIA77gz0SJUQbPND3e/sT0/C
fK2dCBf9lVxVi1efuNLyHkUiFbHrSPf+aaINGwSVr4W6+MmL8eSOY3CSBMPfvbEo
k4k9viEWHpzqMRkCQCA5GWyFUgrcmB0oz57AlHKy/hpSOgOowWu7+tYi21A//tao
FlzOt/sYYB9NkMY5RM2wVUZOHDbxFzqY5SA3hTE=
-----END RSA PRIVATE KEY-----"
?>
