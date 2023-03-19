const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

//todo: Quitar comentario de consola
if (bar) {
  bar.addEventListener("click", () => {
    console.log("Se ha clickeado", bar);
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}
