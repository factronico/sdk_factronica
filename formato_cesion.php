<?php
##############################################################
####### NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO
##############################################################
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO
$CONFACTRONICA["ALMACENLOCAL"]="almacen_local";
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO
$CONFACTRONICA["ALMACENREMOTO"]="almacen_remoto";
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO
$CONFACTRONICA["ARCHIVOPLANO"]="cargar_datos.txt";
# NOMBRE DEL ARCHIVO XML A CEDER (SOLO EL DTE FIRMADO SIN SOBRE)
$CONFACTRONICA["DTEFIRMADO"]="FOLIO12TIPO33_FIRMADO.xml"; 
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)
$CONFACTRONICA["TRACKID"]="TRACKID_RUT77777777-2_TIPO52_FOLIO185.xml";
#
$CONFACTRONICA["DTECEDIDOPORFIRMAR"]="DTECEDIDOPORFIRMAR.xml";
#
$CONFACTRONICA["DTECEDIDOFIRMADO"]="DTECEDIDOFIRMADO.xml";
#
$CONFACTRONICA["CESIONPORFIRMAR"]="CESIONPORFIRMAR.xml";
#
$CONFACTRONICA["CESIONFIRMADA"]="CESIONFIRMADA.xml";
#
$CONFACTRONICA["DOCUMENTOAECPORFIRMAR"]="DOCUMENTOAECPORFIRMAR.xml";
#
$CONFACTRONICA["DOCUMENTOAECFIRMADO"]="DOCUMENTOAECFIRMADO.xml";

##############################################################
####### CONFIGURACIÓN DEL SERVIDOR DE FACTURACIÓN
##############################################################		 
# URL DEL WEBSERVICE SERVIDOR 
$CONFACTRONICA["URLHOST"]="http://www.factronica.cl/factronica_webservice_servidor_beta";
# SCRIPT DEL WEBSERVICE SERVIDOR  
$CONFACTRONICA["URLFILE"]="ws_cesion.php";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="80";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]=1;
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]=1;
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]=30;
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]=0; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]=true; 

##############################################################
# DATOS DE CARATULA
##############################################################
$DocumentoAEC["ID"]="ID_AEC_FOLIO_12_TIPO33";
$Caratula["RutCedente"]="76070316-8";
$Caratula["RutCesionario"]="96861280-8";
$Caratula["NmbContacto"]="GABRIEL REYES";
$Caratula["FonoContacto"]="223274037";
$Caratula["MailContacto"]="GREYES@EUROCAPITAL.CL";

##############################################################
# DATOS DEL CESION
##############################################################
$DocumentoCesion["ID"]="ID_DOC_FOLIO12_TIPO33";
$DocumentoCesion["SeqCesion"]="1";

##############################################################
# DATOS DEL DTE
##############################################################
$IdDTE["TipoDTE"]="33"; // Tipo de Factura Cedida
$IdDTE["RUTEmisor"]="76070316-8"; // Rut del Emisor de la Factura Cedida
$IdDTE["RUTReceptor"]="77646710-3"; // Rut del Receptor (Cliente) de la Factura Cedida
$IdDTE["Folio"]="12"; // Folio de la Factura Cedida
$IdDTE["FchEmis"]="2016-06-20"; // Fecha de la factura cedida formato aaaa-mm-dd
$IdDTE["MntTotal"]="164220"; // Monto total bruto de la factura cedida

##############################################################
# DATOS DEL CEDENTE
##############################################################
$Cedente["RUT"]="76070316-8";
$Cedente["RazonSocial"]="EQUIPAMIENTO E INSUMOS PARA LABORATORIOS LIMITADA";
$Cedente["Direccion"]="AV. CENTENARIO CASA 18 935, Villa/Pob. Condominio Foresta 3";
$Cedente["eMail"]="jflores74@gmail.com";
$Cedente["RUTAutorizado"]="76070316-8";
$Cedente["Nombre"]="JUAN FRANCISCO FLORES HERRERA";
$Cedente["DeclaracionJurada"]="Yo JUAN FRANCISCO FLORES HERRERA, Rut 12628969-3,en representación de EQUIPAMIENTO E INSUMOS PARA LABORATORIOS LIMITADA, RUT 76070316-8 declaro bajo juramento que he puesto a disposición del cesionario EUROCAPITAL S.A., RUT 96861280-8, el (los) documento(s) donde constan los recibos de la recepción de las mercaderías entregadas o servicios prestados, entregados por parte del deudor de la factura Inversiones Diagnomed Ltda. , Rut 77646710-3, de acuerdo a lo establecido en la Ley N° 19.983";

##############################################################
# DATOS DEL CESIONARIO
##############################################################
$Cesionario["RUT"]="88999777-8";
$Cesionario["RazonSocial"]="FACTORINGG S.A.";
$Cesionario["Direccion"]="APOQUINDO 2345 LAS CONDES";
$Cesionario["eMail"]="JPEREZ@FACTORINGG.CL";

##############################################################
# DATOS DEL DOCUMENTO CEDIDO
##############################################################
$DocumentoCesion["MontoCesion"]="164220";
$DocumentoCesion["UltimoVencimiento"]="2016-07-20";
$DocumentoCesion["eMailDeudor"]="PP@gmail.com";//-------------------- falta mail cliente

##############################################################
# CONFIGURACION DE NOMBRES DE CARPETAS Y ARCHIVOS
##############################################################
$DocumentoDTECedido["ID"]="DTEURI20";


##############################################################
# CARGAR CERTIFICADO DIGITAL
############################################################## 
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="wxuHCf5GSLXucTeSSNaB5eYMm0Jv+nJQUk4Oydm2XeY2OyCI8I5FgQA38c2Yoggm
LVJBTppOIgSKLcYT5XnlBpD/6KvQCgil8cTJ0m3T1EEFxvbjDv1tD9MYN82cZx7O
W8V+Zy3dVFox8DudGNqIb5USY8Z5GK7mclScen0lwIk="; 
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGdjCCBV6gAwIBAgIKG+P1lAAAAAOwPDANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
aWRhZCBDZXJ0aWZpY2Fkb3JhMTAwLgYDVQQDEydFLUNFUlRDSElMRSBDQSBGSVJN
QSBFTEVDVFJPTklDQSBTSU1QTEUxJzAlBgkqhkiG9w0BCQEWGHNjbGllbnRlc0Bl
LWNlcnRjaGlsZS5jbDAeFw0xNjA0MjYwMDEyNTdaFw0xODA0MjYwMDEyNTdaMIH5
MQswCQYDVQQGEwJDTDEjMCEGA1UECBMaTUVUUk9QT0xJVEFOQSBERSBTQU5USUFH
TyAxETAPBgNVBAcTCFNhbnRpYWdvMRowGAYDVQQKExFTSiBTQ0lFTlRJRklDIFNQ
QTFHMEUGA1UECxM+Q09NRVJDSUFMSVpBUiBQUk9ELiBFIElOU1VNT1MgUEFSQSBM
QUJPUkFUT1JJTyBFIElOVkVTVElHQUNJT04xJjAkBgNVBAMTHUpVQU4gRlJBTkNJ
U0NPIEZMT1JFUyBIRVJSRVJBMSUwIwYJKoZIhvcNAQkBFhZKVUFORkxPUkVTNzRA
R01BSUwuQ09NMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDG4cJ/kZIte5x
N5JI1oHl5gybQm/6clBSTg7J2bZd5jY7IIjwjkWBADfxzZiiCCYtUkFOmk4iBIot
xhPleeUGkP/oq9AKCKXxxMnSbdPUQQXG9uMO/W0P0xg3zZxnHs5bxX5nLd1UWjHw
O50Y2ohvlRJjxnkYruZyVJx6fSXAiQIDAQABo4ICpzCCAqMwPQYJKwYBBAGCNxUH
BDAwLgYmKwYBBAGCNxUIgtyDL4WTjGaF1Z0XguLcJ4Hv7DxhhNWJYoWMtRECAWQC
AQQwHQYDVR0OBBYEFIqRQO/AI1E7uYoZVHPJoYkoQSbhMAsGA1UdDwQEAwIE8DAf
BgNVHSMEGDAWgBR44T6f0hKzejyNzTAOU7NDKQezVTA+BgNVHR8ENzA1MDOgMaAv
AHAAYQByAGEAIAB1AHMAbwAgAHQAcgBpAGIAdQB0AGEAcgBpAG8wDQYJKoZIhvcN
AQEFBQADggEBABuPOv6NvvfISykDZHKz7WEkGeFiDpwILZKu3d7DH2jZdtGJjzBK
3SEjPOBQZUHwQ9q2pY3RnG5BnYoktE4sql3lewsBelreCpdy7W/TaVCYQ4raMBN9
PFNUkKn3h7ZOwecfxmOxWBpGIngqI7xkEGxwiyXFMsjx5Gr8kjvXQ/R+soA4hJog
mJD4+t+ZU4V2g0nyct5aTel6LzV/npHZesSgxHJL/se9ZZlickGn2ED3r5bWbeyi
6CK2pj+ToL9yaWqQekMEj/T/OP2exyonAKpArkJ5BqTBbTyihxJ4xauSIy6zbcWL
NpF1Nad2MzbjBPrvuhSq/3zZiJsjb5ER+E4=";
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDDG4cJ/kZIte5xN5JI1oHl5gybQm/6clBSTg7J2bZd5jY7IIjw
jkWBADfxzZiiCCYtUkFOmk4iBIotxhPleeUGkP/oq9AKCKXxxMnSbdPUQQXG9uMO
Ya5XYBnkuwJBAMZEiA+iQw02pTIMyQC+iaPkP7SfAEKsIO9tDDJ+x4t2WUVog1we
cI7OTchKm/3cT221Lfb9DcyOIjkV3XxiPYsCQCM04MIIgqmSlk6gbXdmatGu+AV9
EQY+Xku3HRGVAIQeKcR8lECbujFZ9kAwQXSBHDwnJGZP5TJy44R0QAPPOpcCQEcz
9Wkn7MyiA1GmJcmOo/+nyPkk4QMQrgNONkMsJJ2BMy4qCoLaq7GdhXGY2cyhgiT0
HD3HQ11i7gdyQsiYv2ECQGSivsm1w8x89hC2jLdUyKT+9vMT3wpj1dS9kkQxOn/O
GfdQMFmj+6ex9xWji+D/BYt7uoJMQRGHT8n7VzI8uls=
-----END RSA PRIVATE KEY-----"; 
?>
