<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StemPhp - Grupo X</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="index.php">StemPhp</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="current">Inicio</a></li>
                </ul>
            </nav>
        </header>
        <section id="contenedor">
            <!-- Descripción del problema -->
            <section class="problema">
                <h2>Problema:</h2>
                <p>
                    Determina la energía producida (en MWh) en una central hidroeléctrica de turbina Pelton con rendimiento del 90%, 
                    en el mes de marzo, si el salto de agua es de 120 m y el caudal es de 2,75 m<sup>3</sup>/s.
                </p>
            </section>

            <!-- Fórmulas -->
            <section class="formulas">
                <h2>Fórmulas:</h2>
                <ul>
                    <li><strong>Potencia:</strong> \( P = 1000 \cdot Q \cdot g \cdot h \)</li>
                    <li><strong>Energía:</strong> \( E = P \cdot t \cdot r \)</li>
                    <li><strong>Conversión:</strong> \( 0 = K \cdot t \cdot S \cdot r \)</li>
                </ul>
            </section>

            <!-- Datos -->
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Rendimiento (\( r \)): 90% = 0.9</li>
                    <li>Altura (\( h \)): 120 m</li>
                    <li>Caudal (\( Q \)): 2.75 m<sup>3</sup>/s</li>
                    <li>Gravedad (\( g \)): 9.8 m/s<sup>2</sup></li>
                    <li>Días de marzo: 31</li>
                    <li>Horas por día: 24</li>
                </ul>
            </section>

            <!-- Cálculos -->
            <section class="calculos">
                <h2>Solución:</h2>
                <?php
                // Datos iniciales
                $rendimiento = 0.9;
                $caudal = 2.75; // m³/s
                $gravedad = 9.8; // m/s²
                $altura = 120; // m
                $dias = 31;
                $horas_por_dia = 24;

                // Cálculo de potencia en kW
                $potencia_kw = (1000 * $caudal * $gravedad * $altura) / 1000; // Convertir a kW
                $potencia_mw = $potencia_kw / 1000; // Convertir a MW

                // Cálculo de energía en MWh
                $energia_mwh = $potencia_mw * $dias * $horas_por_dia * $rendimiento;

                echo "<p><strong>Potencia generada:</strong> " . number_format($potencia_mw, 2) . " MW</p>";
                echo "<p><strong>Energía generada en marzo:</strong> " . number_format($energia_mwh, 2) . " MWh</p>";
                ?>
            </section>

            <!-- Resultado -->
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <p>La energía generada es de <strong><?php echo number_format($energia_mwh, 2); ?></strong> MWh.</p>
                </div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 4.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
