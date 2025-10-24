// Cuando el DOM esté cargado
document.addEventListener("DOMContentLoaded", () => {
    const tareas = document.querySelectorAll(".task-item");

    tareas.forEach(tarea => {
        tarea.addEventListener("click", () => {
            // Alternar el estado de completado visualmente
            tarea.classList.toggle("completed");

            // Mostrar mensaje en consola (o futuro backend)
            const titulo = tarea.textContent.trim();
            const completada = tarea.classList.contains("completed");
            console.log(`Tarea "${titulo}" marcada como ${completada ? 'completada' : 'pendiente'}`);
        });
    });
});
