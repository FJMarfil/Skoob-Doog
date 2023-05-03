// Declaración de constantes
const bar = document.getElementById("bar"); // Botón para abrir panel (móvil)
const close = document.getElementById("close"); // Botón de cerrar panel (móvil)
const nav = document.getElementById("navbar"); // Panel (móvil)

// Evento de activar panel al hacer click en botón (móvil)
if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

// Evento de cerrar panel al hacer click en botón de cerrar (móvil)
if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}
