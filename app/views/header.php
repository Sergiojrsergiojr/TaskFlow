<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle?></title>
    <style>
    
    /* ======== ESTILOS GENERALES ======== */
body {
    font-family: sans-serif;
    margin: 2em;
    background-color: #f1f5f9;
    color: #1e293b;
}

header, footer {
    text-align: center;
    color: #475569;
}

h1, h2 {
    color: #334155;
}

/* ======== LISTA DE TAREAS ======== */
ul {
    list-style-type: none;
    padding: 0;
}

.task-item {
    padding: 10px;
    border-left: 5px solid;
    margin-bottom: 8px;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    border-radius: 0 4px 4px 0;
    transition: transform 0.2s ease, background-color 0.2s ease;
    cursor: pointer;
}

.task-item:hover {
    transform: translateX(5px);
    background-color: #f9fafb;
}

/* ======== PRIORIDADES ======== */
.priority-alta {
    border-left-color: #ef4444; /* rojo */
}

.priority-media {
    border-left-color: #f59e0b; /* naranja */
}

.priority-baja {
    border-left-color: #22c55e; /* verde */
}

/* ======== TAREAS COMPLETADAS ======== */
.completed {
    text-decoration: line-through;
    color: #9ca3af;
    background-color: #f3f4f6;
}
</style>
</head>
<body>
    
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>

    <main>