/*
// Función que se ejecutará al hacer click al botón de añadir al carrito
function addToCart() {
  // Obtener el botón y asignar a la variable button
  var button = document.getElementById("add-to-cart-button");
  // Añadir función en evento de click
  button.addEventListener("click", function () {
    var product = {
      name: "Nombre del producto",
      price: 10.99,
      quantity: 1,
    };

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "prueba-carrito.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(JSON.stringify(product));

    // Actualizar información de cantidad de productos en la página
    var productQuantity = document.getElementById("cart-quantity");
    productQuantity.innerHTML = cart.length;
  });
}
*/

const addToCartButton = document.getElementsByClassName("add-to-cart-button");

fetch("php/get-products-json.php")
  .then((res) => res.json())
  .then((data) => {
    // Código utilizado con los datos obtenidos
    // Mostrar array por consola
    console.log(data)
    // TODO: Realizar cambios en el número de productos del icono de carrito y añadirlos

    // Enviar la salida al elemento con clase add-to-cart-button
    document.getElementsByClassName("add-to-cart-button").innerHTML = str;
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos:", error);
  });
