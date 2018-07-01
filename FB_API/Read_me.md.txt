----------------------------------------------Como Usarlo------------------------------------------------------------

1) Instalar un Servidor WEB y Extensiones PHP o en su defecto Instalar un paquete como (XAMPP/WAMP).

2) Una vez instalado ir a la ubicación donde se encuentra instalado el programa y buscar la carpeta (www),  
en mi caso (C:\wamp\www) y dentro de esta carpeta extraer el Archivo Comprimido FB_API.

3) Ejecutar el programa para poner en marcha el servidos WEB.

4) Usar el navegador de tu preferencia y colocar en la URL la siguiente dirección 
(http://localhost/FB_API/) para ejecutar el programa.

5) Dentro del programa se encuentra un botón para hacer Login con Facebook.

6) Al presionar el botón te pedirá dependiendo sea el caso:

	6.1) Loguearte en tu cuenta de Facebook si no tienes tu sesión abierta y pedir permisos al usuario para que la aplicación recopile datos de tu perfil.
	6.2) Si tienes sesión abierta solo te pedirá permisos para recopilar información de tu perfil.

7)Una vez dado los permisos te redirigirá a otra página donde podrá visualizar los siguientes datos 
Facebook/ID/Nombre/Apellido/Correo.


NOTA: La aplicacion se encuentra en desarrollo por lo tanto no habra forma de que la ejecute con su usuario de facebook, por lo tanto en el archivo config.ini ubicado en (FB_API) debera colocar los siguientes datos de tu cuenta de (developers.facebook.com)

	Daos a Mofificar:	'app_id' => 'Tu Id',                      
						'app_secret' => 'Tu Key' 

********Ambos Datos se pueden obtener al crear una nueva Aplicacion en el apartado de settings/basic/ de la pagina de   (developers.facebook.com) ********

Una vez hecho esto podra probarlo con su perfil de Facebook y ejecytar perfiles de prueba para ejecutarlo.

----------------------------------------------------------------------------------------------------------------------







