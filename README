###Elección del PAAS

Por la versatilidad y la variedad de lenguajes de programación que soporta he seleccionado la plataforma openshift de Red Hat, por que aunque en este práctica solo voy a utilizar php, html y css, en otro momento me gustaría programar aplicaciones en otros lenguajes y probarlas en dicho PAAS.

_"OpenShift es un producto de computación en la nube de plataforma como servicio de Red Hat._

_Este software funciona como un servicio que es de código abierto bajo el nombre de "OpenShift Origin", y está disponible en GitHub._

_Los desarrolladores pueden usar Git para desplegar sus aplicaciones Web en los diferentes lenguajes de la plataforma._

_OpenShift también soporta programas binarios que sean aplicaciones Web, con tal de que se puedan ejecutar en RHEL Linux. Esto permite el uso de lenguajes arbitrarios y frameworks._

_OpenShift se encarga de mantener los servicios subyacentes a la aplicación y la escalabilidad de la aplicación como se necesite."_ (Información obtenida de wikipedia).


### Configuración de cliente rhc para openshift

Para poder instalar el cliente de openshift necesitamos tener instalado en el sistema el gestor de paquetes rubygems, para ello utilizamos la orden:

                         sudo apt-get install rubygems

Una vez instalado este gestor de paquetes lo utilizamos para descargar e instalar rhc, esto lo hacemos con la orden:

                         sudo gem rhc

Cuando termine de instalarlo procedemos a la configuración de rhc utilizando:

                         sudo rhc setup

En este proceso nos pedira que introduzcamos el usuario y la contraseña de la cuenta creada en openshift y nos preguntara si deseamos que se cree una contraseña para conexión por ssh, en mi caso he aceptado esto pero no es necesario.



### Creación del proyecto en openshift

Una vez en marcha el cliente de openshift podemos crear nuevos proyecto con la orden:

                         rhc app create <nombre del proyecto> <lenguaje del proyecto>

En mi caso he elegido php como lenguaje de mi proyecto y como nombre del proyecto he introducido practica1.


### Aplicación en openshift

El codigo desarrollado para esta práctica está bajo licencia GPL expresada explícitamente en el mismo.

_"La Licencia Pública General de GNU o más conocida por su nombre en inglés GNU General Public License (o simplemente sus siglas del inglés GNU GPL) es la licencia más ampliamente usada en el mundo del software y garantiza a los usuarios finales (personas, organizaciones, compañías) la libertad de usar, estudiar, compartir (copiar) y modificar el software. Su propósito es declarar que el software cubierto por esta licencia es software libre y protegerlo de intentos de apropiación que restrinjan esas libertades a los usuarios. Esta licencia fue creada originalmente por Richard Stallman fundador de la Free Software Foundation (FSF) para el proyecto GNU (GNU project)."_ (Información obtenida de wikipedia).


La aplicación es un ejemplo sencillo de cómo realizar un formulario en php en varios pasos, es decir, generando varias páginas que se pasan información de una a otra mediante POST y mostrando en la última de las mismas toda la información recogida en los distintos pasos. El ejemplo es muy básico pero sirve de manera didáctica para el aprendizaje del manejo del array POST como medio de intercambio de datos entre páginas.


