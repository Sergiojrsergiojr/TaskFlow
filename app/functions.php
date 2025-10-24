<?php

function obtenerClasePrioridad($prioridad)
{
    $clases = 'task-item';
    switch ($tarea['prioridad']) 
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
    }
}
?>