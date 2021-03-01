<!--Jesus Canelon CI:27.199.177
    Seccion IN2103
    
2- Proponga tres ejemplos de objetos del mundo real:
· Para cada uno de ellos, determine la clase a la que pertenecen.
· Asóciele a cada clase un identificador descriptivo adecuado.
· Enumere varios atributos y operaciones para cada una de las clases.
· Represente gráficamente las clases utilizando la notación UML.
· A partir de los diagramas UML, escriba el código funcional necesario para definir una de las clases
propuestas, sus atributos y método utilizando el lenguaje de programación PHP. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Remoto</title>
</head>
<body>
    <h3 style="text-align: center;">ARMA TU AUTO RC</h3>
    <div>
    <form action="" method="post">
        <p>Que tipo de vehiculo desea?</p> 
        <ul>
        <li><input type="radio" name="tipoVehiculo" value="Auto">Auto</li>
        <li><input type="radio" name="tipoVehiculo" value="Moto">Moto</li>
        <li><input type="radio" name="tipoVehiculo" value="Camion">Camion</li>
        </ul>

        Seleccione el color que desea:
        <select name="tipoColor" id="">
        <option value="rojo">Rojo</option>
        <option value="verde">Verde</option>
        <option value="azul">Azul</option>
        <option value="rosa">Rosa</option>
        </select>
        <br> <br>
        Nombre del vehiculo: <input type="text" name="nameV"> <br> <br>
        <input type="submit" value="ENCENDER">
    </form>
    
    </div>

</body>
</html>