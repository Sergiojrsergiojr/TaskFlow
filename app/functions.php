<?php

function obtenerClasePrioridad($prioridad)
{
    $clasesTarea = '';
    
     switch ($prioridad) 
    {
            case 'alta':
                $clasesTarea .= ' priority-alta';
                break;
            case 'media':
                $clasesTarea .= ' priority-media';
                break;
            case 'baja':
                $clasesTarea .= ' priority-baja';
                break;
            default:
                // No se asigna ninguna clase si la prioridad no coincide
                break;
    }

    return $clasesTarea;
}

function renderizarTarea($tarea)
{
    $clasePrioridad='task-item'. obtenerClasePrioridad($tarea['prioridad']);
    if($tarea['completado'])
    {
        $clasePrioridad.='completed';
    }
    $tituloSeguro = htmlspecialchars($tarea['titulo'], ENT_QUOTES, 'UTF-8');
    return "<li class='$clasePrioridad'>{$tarea['titulo']}</li>";
}
?>