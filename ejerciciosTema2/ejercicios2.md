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


