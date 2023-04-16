// Declaración de constantes y variables
const cartContainerTable = document.querySelector(".pro-container"); // Contenedor donde estarán los productos

let cart = []; // Declarar variable de carrito
let dataArray = []; // Declarar la variable con el array de datos

// Obtener datos de productos en formato JSON
const fetchPromise = fetch("php/get-products-json.php")
  .then((res) => res.json())
  .then((data) => {
    // Código utilizado con los datos obtenidos
    // Crear div con producto por cada libro registrado. Si pulsamos el botón del carrito, añadimos el producto al carrito a través de la función "addProduct"
    data.forEach((book, index) => {
      cartContainerTable.innerHTML += `
      <div class="pro">
                    <img src="images/update/products/${book.isbn}.png" alt="">
                    <div class="des">
                        <span>${book.categoryName}</span>
                        <h3>${book.title}</h3>
                        <h5>${book.authorName}</h5>
                        <h4>${book.price} €</h4>
                    </div>
                    <a onclick="(() => addProduct(${index}))()" class="add-to-cart-button"><i class="fal fa-shopping-cart cart"></i></a>

                </div>
      `;
    });
    // console.log(data); // El array "data" es accesible aquí
    // TODO: Añadir datos de array a variable global
    return data;
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos:", error);
  });

fetchPromise.then((res) => {
  dataArray = Object.values(res);
});

// Función que añade el producto al carrito
function addProduct(index) {
  console.log(dataArray[index]);
}
