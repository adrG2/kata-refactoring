Ejercicio 1

1.  Incumple Principio de responsabilidad única, OCP, Inversión de dependencias, etc. 

2.  Altísimo acoplamiento. El método login tiene un alto acoplamiento. Está totalmente acoplado, no hace distinción de capas de infraestructura, aplicación, vista, configuración, etc. 

3.  Nula posibilidad de escalabilidad ni testabilidad.

4.  Condiciones negadas en las capturas de parámetros GET. Complejidad elevada, dificultando la lectura de código. Propuesta de extract method como "checkParams'.

5.  Conexión a base de datos. Extraería esta funcionalidad a una interfaz(DBConnecion) que implementaría en una Clase llamada MysqlConnection.

6.  Datos de conexión Base de datos. Riesgo de seguridad. 

7.  Queries. Abstracción de la implementación mediante interface "UserLoginRepository". Esto lo haría así para no ir en contra de uno de los principios del refactoring el cual es no alterar el comportamiento del software que estás refactorizando. Las funcionalidades y mejoras se realizan después, una vez que el software ya se ha refactorizado. Es posible que haya que replantear bien este diseño debido a que podría darse si no se está dando ya un incumplimiento del ISP. ¿Hay clientes de esta interfaz que sólo necesiten obtener un usuario por mail?

8.  $r1 y $2. Naming totalmente erróneo. No es nada descriptivo y además tiene un gran smell de naming que es el hecho de contener un número. 

9.  DRY(Don't repeat you). Se comprueba dos veces lo mismo para ambas queries, y es el: num_rows > 0. Además ese 0 es un número mágico, se le debería dar semántica  para hacerlo más descriptivo. Se podría extraer a una función llamada "userExists" o similar. 

10. Cláusulas de guarda. Se podría usar una cláusula de guarda y/o hacer un extract method para rebajar complejidad de cada if/else.

Ejercicio 2

1.  Interface Figure incumple el principio ISP. Se ve claramente en la implementación de la interface ya que hay varias funcionalidades que no necesita y que le estamos obligando a implementar. 

2.  Clases del dominio: Person y Tree. Propondría evitar en la medida de lo posible los getters y setters, abstrayendo así al cliente de nuestra implementación. Un cambio en la implementación afectaría a todos los clientes de ese dominio teniendo que hacer modificaciones. Aplicación de Tell Don't Ask.

3.  Clase Main. Acoplamiento con la implementación. Se debería hacer un inyección de dependencias con la interfaz. Ahora se incumple el principio de Inversión de dependencias.

4.  Método draw. Ocultamiento de dependencias desde fuera de la clase. Alto acoplamiento a Game y GameScreen. 

5.  DRY. Se repite forma de acceder a la "$x". Extract variable.

Ejercicio 3

1.  Se incumple principio OCP. Se ve un claro code smell Switch Statements. Este problema lo podemos subsanar con polimorfismo. Dejando así nuestra implementación más desacoplada y con más extensibilidad a la hora de añadir nuevas funcionalidad.