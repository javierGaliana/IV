Ejercicios Tema 2
=================
Ejercicio 1.
------------
En este ejercicio teníamos que crear un NameSpace de tipo montaje. Esto se hacía con el comando:
![unshare](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/unshare.png  "Unshare")
Como podemos observar al dejar de ser tipo root y tratar de ver que hay en la carpeta donde hemos montado la imagen, vemos que está vacía.



Ejercicio 2.
------------
En este ejercicio hemos tenido que hacer un puente que sirva de conexión entre dispositivos de tal manera que compartan la red. Lo que hemos buscado ha sido crear un puente y asignarle una interfaz de tal manera que puedan conectarse otros dispositivos a través del puente y utilizar dicha interfaz.
En Ubuntu creamos un puente mediante:
![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl.png  "brctl") 
Ahora lo que tenemos es que asignarle una interfaz. Lo hacemos con la eth0 ya que la wlan da problemas aunque en https://wiki.debian.org/BridgeNetworkConnections dicen como hacerlo para la wifi. 
![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl2.png  "brctl")
Ahora mostramos el resultado por medio de:
![brctl](https://github.com/javierGaliana/IV/raw/master/ejerciciosTema2/pics/brctl3.png  "brctl")
