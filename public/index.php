<?php
define("SITE_NAME","TaskFlow");
$pageTitle=SITE_NAME." - Página de Inicio";
$userName = "Sergio"; // Tipo String
$userAge = 21;             // Tipo Integer
$isPremiumUser = true;     // Tipo Boolean

require_once '../app/functions.php';
// Datos de las tareas (simulando una base de datos)


$tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];

        require_once "../app/functions.php";
        include "../app/views/header.php";
?>
<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tareas as $tarea) : ?>
        <?php echo renderizarTarea($tarea); ?>
    <?php endforeach; ?>
</ul>

 <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

        
<?php include '../app/views/footer.php'; ?>