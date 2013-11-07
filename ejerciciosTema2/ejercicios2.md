Ejercicios Tema 2
=================
Ejercicio 1
-----------
En este ejercicio teníamos que crear un NameSpace de tipo montaje. Esto se hacía con el comando:
![unshare](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/unshare.png  "Unshare")
Como podemos observar al dejar de ser tipo root y tratar de ver que hay en la carpeta donde hemos montado la imagen, vemos que está vacía.



Ejercicio 2
-----------
En este ejercicio hemos tenido que hacer un puente que sirva de conexión entre dispositivos de tal manera que compartan la red. Lo que hemos buscado ha sido crear un puente y asignarle una interfaz de tal manera que puedan conectarse otros dispositivos a través del puente y utilizar dicha interfaz.
En Ubuntu creamos un puente mediante:

![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl.png  "brctl")
 
Ahora lo que tenemos es que asignarle una interfaz. Lo hacemos con la eth0 ya que la wlan da problemas aunque en https://wiki.debian.org/BridgeNetworkConnections dicen como hacerlo para la wifi. 

![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl2.png  "brctl")

Ahora mostramos el resultado por medio de:
![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl3.png  "brctl")



Ejercicio 3
-----------
En este apartado lo que buscamos es crear jaulas donde metemos sistemas operativos mínimos, para este caso se ha instalado mediante debootstrap el SO lucid de Ubuntu.

![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/debootstrap.png  "brctl")

Después de instalarse comprobamos que está instalado.

![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/debootstrap2.png  "brctl")

Ahora con el programa rinse creamos otra jaula pero con una distribución Fedora.
![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/rinse.png  "brctl")

![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/rinse2.png  "brctl")

Ya tenemos instaladas 2 jaulas completamente operativas.



Ejercicio 4
-----------
Una vez instalado el SO Ubuntu "Lucid" en /home/jaulas/lucid lo aislamos en una jaula chroot.

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot.png  "chroot")

Además hacemos que se copie la carpeta proc del sistema anfitrión en nuestro SO enjaulado.
Una vez hecho esto podemos probar a hacer top.

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot3.png  "chroot")

Otra configuración interesante es la de instalar el paquete de lenguaje ya que nuestro idioma es el español hacemos:

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot4.png  "chroot")

y ya tenemos configurado nuestro SO de dentro de la jaula. Para ver el significado de chroot hacemos pwd y nos aparece:

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot5.png  "chroot")

lo cual quiere decir que chroot hace un cambio de directorio raíz al de la jaula sin poder ver el exterior de la misma y aislando los procesos. También haciendo top sobre el terminal del SO anfitrión podemos ver lo que se va ejecutando dentro de la jaula.

Un programa interesante a tener es VIM ya que nos permite desde la propia terminal escribir guiones y por lo tanto modificar todos los ficheros que necesitemos.

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot6.png  "chroot")

Ahora creamos un programa de python y lo lanzamos para ver el funcionamiento en la jaula.

![chroot](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/chroot7.png  "chroot")

¡Ya podemos trabajar en la jaula!

Ejercicio 5
-----------

Para este ejercicio continuamos con el SO Ubuntu "Lucid". En esta ocasión vamos a instalar el servidor web nginx.

Primero de todo debemos descargarnos una llave pública

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx.png  "nginx")

Ahora añadimos dicha llave a apt-key

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx2.png  "nginx")

Para que apt busque en el repositorio de nginx debemos cambiar

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx3.png  "nginx")

añadiendo al final las dos últimas líneas

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx4.png  "nginx")

Hacemos apt-get update y vemos como busca en los repositorios añadidos.

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx5.png  "nginx")

Ahora ya podemos instalar de la manera habitual

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx6.png  "nginx")

¡Ya tenemos nuestro servidor instalado en el SO enjaulado! Eso sí, hay que asegurarse que el puerto 80 no esté unido a otro servicio por ejemplo apache2 en la máquina anfitrión.
Para comprobar que funciona primero hacemos 

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx7.png  "nginx")

Ahora desde un navegador del anfitrión poniendo en la url localhost vemos

![nginx](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/nginx8.png  "nginx")

¡El servidor está corriendo!
