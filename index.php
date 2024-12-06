<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Un colector solar plano</h2>
                <p>Un colector solar plano, que se va a utilizar como medio de calefaccion en Andalucia mide <strong>4 cm<sup>2</sup>,</strong> y vale <strong>$2600, </strong> incluida la instalacion. Determinar el tiempo que se tardara en amortizar (pagar lo que ha costado) si <strong>K=0,8 cal/min*cm2</strong> y esta funcionando una media de 6 horas al dia, durante 150 dias al año. Este colector seria una alternativa al radiador electrico. Un Kwh vale $0,08</p>
            </section>
            <section class="esquemaProblema">
                <h2>Imagen referencia:</h2>
                <center>
                    <img class="imgProblema" src="images/problema.jpg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li><strong>Q = </strong>K * t * S * r<strong>en Kcal</li>
                    <li><strong>Convertir a Kwh (base 1h)</strong></li>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li><strong>Q = </strong>Energia generada</li>
                    <li><strong>K = </strong>Coeficiente de radiaccion</li>
                    <li><strong>t = </strong>Tiempo, en minutos</li>
                    <li><strong>S = </strong>Area, en Cm<sup>2</sup></li>
                    <li><strong>r = </strong>Rendimiento</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <button onclick="calcular()">Calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Alumno: Jesus Alejandro Osorio Morales
            - Num. Control: 22090712
            - Programacion Web XB
        </footer>
    </section>
</body>
</html>
