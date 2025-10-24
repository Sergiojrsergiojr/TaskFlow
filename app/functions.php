<?php

function obtenerClasePrioridad($prioridad)
{
    $clases='';
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
    }
}
?>