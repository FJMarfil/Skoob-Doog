// Declaración de constantes y variables
const proContainer = document.querySelector(".pro-container"); // Contenedor donde estarán los productos
const cartContainer = document.querySelector(".cart-container"); // Contenedor del cuerpo del carrito

const cartModal = document.getElementById("modalCart"); // Contenedor del modal del carrito
const cartButton = document.getElementById("lg-bag"); // Botón de carrito
const cartQuantity = document.getElementById("cart-quantity"); // Etiqueta de cantidad de productos en el botón del carrito

const clearCart = document.querySelector(".clear-cart"); // Botón de vaciar carrito
const buyCart = document.querySelector(".buy-cart"); // TODO: Botón de comprar
const closeCart = document.querySelector(".close-cart"); // Botón de cerrar carrito
const totalPrice = document.querySelector(".total-price"); // Etiqueta de precio total

let productList = []; // Declarar la variable con el array de productos (recogidos del archivo de texto)
let dataArray = []; // Declarar la variable con el array de datos (recogidos de la bd)
let cart = []; // Declarar variable de carrito

// Función que recuperará el contenido del carrito almacenado en el almacenamiento local, una vez cargue la página
document.addEventListener("DOMContentLoaded", () => {
  cart = JSON.parse(localStorage.getItem("cart")) || [];
  showCart();
});

// Función para vaciar el carrito
clearCart.addEventListener("click", () => {
  cart.length = 0;
  showCart();
});

// Obtener lista de productos del archivo "indexProducts.txt"
productLoad = fetch("indexProducts.txt")
  .then((res) => res.text())
  .then((dataLoad) => {
    return dataLoad;
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos: ", error);
  });

// Cuando el hilo de la función fetch termine, actualizar el contenido de "productList"
productLoad.then((dataLoad) => {
  productList = dataLoad.split(",");
});

// Función para obtener datos de productos en formato JSON
const fetchPromise = fetch("php/get-products-json.php") // Constante que contiene el promise (al ser multihilo, este valor representará si la tarea del hilo ha terminado)
  .then((res) => res.json())
  .then((dataWrite) => {
    // Código utilizado con los datos obtenidos
    // Crear div con producto por cada libro registrado. Si pulsamos el botón del carrito, añadimos el producto al carrito a través de la función "addProduct"
    // Si estamos en la página de la tienda, mostrar todos los productos
    if (location.pathname === "shop.php") {
      dataWrite.forEach((book, index) => {
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
      // Si estamos en la página principal, mostrar los productos pasados por el archivo "indexProducts.txt"
    } else {
      dataWrite.forEach((book, index) => {
        if (productList.includes(book.isbn)) {
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
        }
      });
    }
    return dataWrite; // Devolver el contenido de dataWrite
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los productos: ", error);
  });

// Cuando el hilo de la función fetch termine, agregar el contenido de "dataWrite" a la variable "dataArray"
fetchPromise.then((dataWrite) => {
  dataArray = Object.values(dataWrite);
});

// Función que añade el producto al carrito
function addProduct(index) {
  // Verificar si la variable existe
  const existingProductIndex = cart.findIndex(
    (item) => item.isbn === dataArray[index].isbn
  );
  if (existingProductIndex !== -1) {
    cart[existingProductIndex].quantity++; // Aumentar cantidad del producto en 1
  } else {
    cart.push({ ...dataArray[index], quantity: 1 }); // Agregar el nuevo elemento con quantity: 1
  }
  showCart();
}

// Función que actualiza el contenido del carrito, añadiendo los productos seleccionados y permitiendo borrarlos o pasar a la compra de estos
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
        <span>${book.quantity}</span>
        <button onclick="(() => removeProduct(${cart.indexOf(
          book
        )}))()"class="remove-from-cart-button">Eliminar</button>

    `;
    cartContainer.appendChild(cartItem); // Agregar el nuevo elemento HTML al contenedor del carrito
  });

  // Si el carrito está vacío, mostrar un mensaje
  if (cart.length === 0) {
    cartContainer.innerHTML = `
      <p id="empty-cart-label">¡El carrito está vacío!</p>
    `;
  }

  const totalQuantity = cart.reduce((acc, book) => acc + book.quantity, 0); // Número total de productos añadidos

  cartQuantity.textContent = totalQuantity; // Añadir número de productos a la etiqueta del carrito

  // Suma del precio total de los artículos
  totalPrice.textContent =
    "Total: " +
    cart.reduce((acc, book) => acc + book.quantity * book.price, 0).toFixed(2) +
    " €"; // Límite de dos decimales para evitar errores y concatenación de símbolo de euro

  saveStorage(); // Pasar datos del carrito al almacenamiento local a través de la función saveStorage
};

// Función que elimina un producto al hacer click en el botón "Eliminar" de dicho producto
function removeProduct(index) {
  if (cart[index].quantity === 1) {
    // Si solo hay un producto, eliminar
    cart.splice(index, 1);
  } else {
    cart[index].quantity--; // Si hay varios productos, reducir cantidad
  }
  showCart();
}

// Función que guarda el contenido del carrito en el almacenamiento local del navegador como "cart"
function saveStorage() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// Función que abre la ventana modal del carrito cuando se le hace click al icono de carrito. Esto lo hace al cambiar la clase "modal-hidden" a "modal-visible", las cuales están configuradas en el archivo css para ocultar y mostrar el carrito
cartButton.addEventListener("click", () => {
  cartModal.style.display = "flex";
  cartModal.style.flexDirection = "column";
});

// Función para cerrar el carrito
closeCart.addEventListener("click", () => {
  cartModal.style.display = "none";
});
