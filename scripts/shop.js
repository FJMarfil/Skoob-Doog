// Variable que del contenedor donde estarán
const cartContainerTable = document.querySelector(".pro-container");

// Obtener datos de productos en formato JSON
fetch("php/get-products-json.php")
  .then((res) => res.json())
  .then((data) => {
    // Código utilizado con los datos obtenidos
    // Crear div con producto por cada libro registrado. Si pulsamos el botón del carrito, añadimos el producto al carrito a través de la función "addProduct"
    data.forEach((item) => {
      cartContainerTable.innerHTML += `
      <div class="pro">
                    <img src="images/update/products/${item.isbn}.png" alt="">
                    <div class="des">
                        <span>${item.categoryName}</span>
                        <h3>${item.title}</h3>
                        <h5>${item.authorName}</h5>
                        <h4>${item.price} €</h4>
                    </div>
                    <a onclick="addProduct(${item.isbn})" class="add-to-cart-button"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
      `;
    });
    // TODO: Realizar cambios en el número de productos del icono de carrito y añadirlos
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos:", error);
  });

  // Función que añade el producto al carrito
function addProduct(isbn) {
  console.log(isbn);
}