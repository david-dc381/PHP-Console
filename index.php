<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>PHP Console</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">PHP CONSOLE</h1>
            <p class="lead">This is a PHP console...</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Variables, tipos de datos.</h4>
                    <?php
                    /* 
                        * Comentarios.
                        * Declaramos variables.
                        * Concatenamos varibles
                        * Imprimimos tipo de variables.
                        */
                    $name = "Gus";
                    $isdOld = true;
                    $year = 1990;
                    $km = 10.5;
                    
                    echo "Hello " . $name . " you born in the year " . $year . ", and you are to " . $km . " distance.<br>";
                    echo "The variable <code>$</code><code>name</code> is a type of " .gettype($name);
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Operadores.</h4>
                    <?php
                        $num1 = 3;
                        $num2 = 5;

                        $num1++;
                        $num2--;

                        echo "La suma es: " . ($num1+$num2) . "<br>";
                        echo "La resta es: " . ($num1-$num2) . "<br>";
                        echo "La multiplicación es: " . ($num1*$num2) . "<br>";
                        echo "La división es: " . ($num1/$num2) . "<br>";
                        echo "El modulo es: " . ($num1%$num2) . "<br>";
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Condicionales.</h4>
                    <?php
                        $name = "Robin";
                        $year = 2000;

                        if ($name == "Robin" and $year == 1900) {
                            echo "It's you";

                        } elseif ($name="Robin" and $year == 2000) {
                            echo "Maybe it's you";
                        } else {
                            echo "It´s not you";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Switch.</h4>
                    <?php
                        $numero = 10;

                        switch ($numero) {
                            case 1:
                                echo "Calificación muy baja";
                                break;
                            case 2:
                            case 4:
                                echo "Calificación baja";
                                break;
                            case 6:
                                echo "Calificación media";
                                break;
                            case 8:
                                echo "Calificación buena";
                                break;
                            case 10:
                                echo "Calificación excelente";
                                break;
                            
                                
                            default:
                                echo "La calificación no es válida";
                                break;
                        }
                       
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>While</h4>
                    <?php
                        $numero = 0;
                        
                        while ($numero < 5) {
                            $numero++;
                            echo "El número es: ".$numero."<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>For</h4>
                    <?php
                       for ($i=1; $i <= 5 ; $i++) { 
                            echo "El número es: ".$numero."<br>";
                       }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Array</h4>
                    <?php
                        $numero = [1,5,8,9];
                        
                        for ($i=0; $i < count($numero) ; $i++) { 
                            echo $numero[$i]. "<br>";
                        }
                        
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Array</h4>
                    <?php
                      $names = ["Pedro", "Juan", "Andre", "Santiago"];
                        
                      for ($i=0; $i < count($names) ; $i++) { 
                          echo $names[$i]. "<br>";
                      }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Foreach</h4>
                    <?php
                        $names = ["Pedro", "Juan", "Andre", "Santiago"];
                        
                        foreach ($names as $name) {
                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Break</h4>
                    <?php
                      $names = ["Pedro", "Juan", "Andre", "Santiago"];
                        
                      foreach ($names as $name) {
                          if ($name == "Santiago") {
                            break;
                          }
                          echo $name . "<br>";
                      }
                        
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Continue</h4>
                    <?php
                      $names = ["Pedro", "Juan", "Andre", "Santiago"];
                        
                      foreach ($names as $name) {
                        if ($name == "Andre") {
                          continue;
                        }
                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-warning text-white">
                    <h4>Funciones</h4>
                    <?php
                      function calc($sign, $num1, $num2) {
                          switch ($sign) {
                              case '+':
                                  return $num1 + $num2;
                                  break;
                              case '-':
                                  return $num1 - $num2;
                                  break;
                              default:
                                  return 0;
                                  break;
                          }
                      }

                      $result = calc('+', 8, 5);
                      echo "El resultado es: " . $result;
                        
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-danger text-white">
                    <h4>POO</h4>
                    <?php
                        class Mascota {
                            public $nombre;
                            public $tipo;
                            public $patas;

                            // La función del constructor, construye que es lo que queremos pasar al objeto.
                            function __construct($nombre, $tipo, $patas)
                            {
                                $this->nombre = $nombre;
                                $this->tipo = $tipo;
                                $this->patas = $patas;
                            }

                            // Creamos un método(función) para mostrar los resultados
                            public function getDescription() {
                                if ($this->patas == 0) {
                                    echo "Tu mascota es un " .$this->tipo. " y se llama " .$this->nombre.  " y no tiene patas.";
                                } else {
                                    echo "Tu mascota es un " .$this->tipo. " y se llama " .$this->nombre. " y tiene " .$this->patas. " patas.";
                                }
                            }
                        }
                        // Instanciamos los objetos
                        $perro = new Mascota("Firulais", "perro", 4);
                        $gato = new Mascota("Figaro", "gato", 4);
                        $pez = new Mascota("Qwerty", "pez", 0);
                        
                        // Imprimimos los métodos de los objetos
                        echo $perro->getDescription(). "<br>";
                        echo $gato->getDescription(). "<br>";
                        echo $pez->getDescription();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>