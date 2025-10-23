<?php
define("SITE_NAME","TaskFlow");
$pageTitle=SITE_NAME." - Página de Inicio";
$userName = "Sergio"; // Tipo String
$userAge = 21;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean

$tasks=[
    [
        'title' => 'Preparar la presentación del proyecto',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Enviar informe semanal al jefe',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Actualizar el sitio web',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Hacer copia de seguridad de los datos',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Revisar correos pendientes',
        'completed' => false,
        'priority' => 'media'
    ]
];


        include "../app/views/header.php";
?>

        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

<?php
        include "../app/views/footer.php";
?>
