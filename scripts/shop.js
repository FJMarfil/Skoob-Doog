// Declaración de constantes y variables
const proContainer = document.querySelector(".pro-container"); // Contenedor donde estarán los productos
const cartContainer = document.querySelector(".cart-container"); // Contenedor del carrito

const cartModal = document.getElementById("modalCart"); // Contenedor del carrito
const cartButton = document.getElementById("lg-bag"); // Botón de carrito

let dataArray = []; // Declarar la variable con el array de datos
let cart = []; // Declarar variable de carrito

// Función para obtener datos de productos en formato JSON
const fetchPromise = fetch("php/get-products-json.php") // Constante que contiene el promise (al ser multihilo, este valor representará si la tarea del hilo ha terminado)
  .then((res) => res.json())
  .then((data) => {
    // Código utilizado con los datos obtenidos
    // Crear div con producto por cada libro registrado. Si pulsamos el botón del carrito, añadimos el producto al carrito a través de la función "addProduct"
    data.forEach((book, index) => {
      proContainer.innerHTML += `
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
    return data; // Devolver el contenido de data
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos: ", error);
  });

// Cuando el hilo de la función fetch termine, agregar "data" a la variable "dataArray"
fetchPromise.then((data) => {
  dataArray = Object.values(data);
});

// Función que añade el producto al carrito
function addProduct(index) {
  cart.push(dataArray[index]);
  showCart();
}

// TODO: añadir botón de eliminar producto y etiqueta de número de productos iguales y precio de suma de estos
// TODO: añadir botón de comprar, cerrar carrito y vaciar carrito, así como etiqueta de suma total
// TODO: al hacer click fuera del contenedor de carrito, ocultar modal;
// TODO: hacer que se guarde el contenido del carrito en el DOM
const showCart = () => {
  cartContainer.innerHTML = ""; // Limpiamos el contenido anterior del contenedor del carrito
  cart.forEach((book) => {
    const cartItem = document.createElement("div");
    cartItem.classList.add("cart");
    cartItem.innerHTML = `
        <img src="images/update/products/${book.isbn}.png" alt="">
        <div class="des">
            <span>${book.categoryName}</span>
            <h3>${book.title}</h3>
            <h5>${book.authorName}</h5>
            <h4>${book.price} €</h4>
        </div>
        <button onclick="(() => removeProduct(${cart.indexOf(
          book
        )}))()" class="remove-from-cart-button" >Eliminar</button>

    `;
    cartContainer.appendChild(cartItem); // Agregamos el nuevo elemento HTML al contenedor del carrito
  });
};

cartButton.addEventListener("click", () => {
  cartModal.classList.toggle("modal-visible");
});

function removeProduct(index) {
  cart.splice(index, 1);
  showCart();
}
