// Declaración de constantes y variables
const proContainer = document.querySelector(".pro-container"); // Contenedor donde estarán los productos
const cartContainer = document.querySelector(".cart-container"); // Contenedor del cuerpo del carrito

const cartModal = document.getElementById("modalCart"); // Contenedor del modal del carrito
const cartButton = document.getElementById("lg-bag"); // Botón de carrito
const cartQuantity = document.getElementById("cart-quantity"); // Etiqueta de cantidad de productos en el botón del carrito
const purchaseFormEmailButton = document.getElementById(
  "purchase-form-email-button"
); // Botón de enviar formulario de correo

const clearCart = document.querySelector(".clear-cart"); // Botón de vaciar carrito
const buyCart = document.querySelector(".buy-cart"); // TODO: Botón de comprar
const closeCart = document.querySelector(".close-cart"); // Botón de cerrar carrito
const totalPrice = document.querySelector(".total-price"); // Etiqueta de precio total

let stockAnimation = false; // Animación al intentar añadir productos por encima del stock disponible

let productList = []; // Variable con el array de productos (recogidos del archivo de texto)
let dataArray = []; // Variable con el array de datos de los productos (recogidos de la bd)
let dataArrayUser = []; // Variable con el array de datos de usuario (recogidos de la bd)
let cart = []; // Variable de carrito

// Recuperar contenido del carrito almacenado en el almacenamiento local, una vez cargue la página
document.addEventListener("DOMContentLoaded", () => {
  cart = JSON.parse(localStorage.getItem("cart")) || [];
  showCart();
});

// Evento click: vaciar el carrito
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
const fetchPromise = fetch("php/get-products.php") // Constante que contiene el promise (al ser multihilo, este valor representará si la tarea del hilo ha terminado)
  .then((res) => res.json())
  .then((dataWrite) => {
    // Código utilizado con los datos obtenidos
    // Crear div con producto por cada libro registrado. Si pulsamos el botón del carrito, añadimos el producto al carrito a través de la función "addProduct"
    // Si estamos en la página de la tienda, mostrar todos los productos
    if (location.pathname.includes("shop.php")) {
      dataWrite.forEach((book, index) => {
        // Si el artículo tiene stock, lo incluimos
        if (book.stock > 0) {
          proContainer.innerHTML += `
        <div class="pro">
          <img src="images/update/products/${book.isbn}.png" alt="">
          <div class="des">
              <span>${book.categoryName}</span>
              <h3>${book.title}</h3>
              <h5>${book.authorName}</h5>
              <h4>${book.price} €</h4>
              <span class="stock-number">Unidades disponibles: ${book.stock}</span>
          </div>
          <a onclick="(() => addProduct(${index}))()" class="add-to-cart-button"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        `;
        }
      });
      // Si estamos en la página principal, mostrar los productos pasados por el archivo "indexProducts.txt"
    } else if (location.pathname.includes("index.php")) {
      dataWrite.forEach((book, index) => {
        // Si el libro está indicado en "indexProducts.txt" y tiene stock, lo incluimos
        if (productList.includes(book.isbn) && book.stock > 0) {
          proContainer.innerHTML += `
        <div class="pro">
          <img src="images/update/products/${book.isbn}.png" alt="">
          <div class="des">
              <span>${book.categoryName}</span>
              <h3>${book.title}</h3>
              <h5>${book.authorName}</h5>
              <h4>${book.price} €</h4>
              <span class="stock-number">Unidades disponibles: ${book.stock}</span>
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

// Función para obtener datos de usuarios en formato JSON
const fetchPromiseUser = fetch("php/get-users.php") // Constante que contiene el promise (al ser multihilo, este valor representará si la tarea del hilo ha terminado)
  .then((res) => res.json())
  .then((dataWriteUser) => {
    // Código utilizado con los datos obtenidos

    return dataWriteUser; // Devolver el contenido de dataWriteUser
  })
  // Si hay un error, mostrar por consola
  .catch((error) => {
    console.error("Error al obtener los usuarios: ", error);
  });

// Cuando el hilo de la función fetch termine, agregar el contenido de "dataWriteUser" a la variable "dataArrayUser"
fetchPromiseUser.then((dataWriteUser) => {
  dataArrayUser = Object.values(dataWriteUser);
});

// Función que añade el producto al carrito
function addProduct(index) {
  // Verificar si el producto existe en el carrito
  const existingProductIndex = cart.findIndex(
    (item) => item.isbn === dataArray[index].isbn
  );

  // Si el producto ya existe en el carrito
  if (existingProductIndex !== -1) {
    // Si la cantidad que se intenta agregar supera el stock disponible, no se añadirá ningún producto al carrito
    if (dataArray[index].stock <= cart[existingProductIndex].quantity) {
      // En el caso de la página de la tienda, se añadirá una animación al texto de stock cuando no se pueda añadir más
      if (location.pathname.includes("shop.php")) {
        const stockNumber = document.querySelectorAll(".stock-number")[index]; // Span con clase "stock-number" correspondiente al stock
        const stockOriginalColor = stockNumber.style.color; // Color original del span

        // Verificar si el efecto está desactivado (para no acumular el efecto al hacer muchos clicks)
        if (!stockAnimation) {
          // Cambiar el color del span a rojo por 500ms
          stockNumber.style.color = "red";
          stockNumber.style.transition = "color 500ms ease-in-out";

          stockAnimation = true; // Establecer la animación como activa

          // Después de 500ms, volver al color original del span
          setTimeout(() => {
            stockNumber.style.color = stockOriginalColor;
            stockNumber.style.transition = "color 500ms ease-in-out";

            stockAnimation = false; // Establecer la animación como inactiva
          }, 500);
        }
      }
      // En el caso de que no supere el stock, se sumará el producto al carrito
    } else {
      cart[existingProductIndex].quantity++; // Aumentar cantidad del producto en 1
    }
    // Si el producto no está en el carrito, se añadirá
  } else {
    cart.push({ ...dataArray[index], quantity: 1 }); // Agregar el nuevo producto estableciendo su cantidad en 1
  }
  showCart(); // Actualizar carrito
}

// Función que actualiza el contenido del carrito, añadiendo los productos seleccionados y permitiendo borrarlos o pasar a la compra de estos
const showCart = () => {
  cartContainer.innerHTML = ""; // Limpiar el contenido anterior del contenedor del carrito
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

// Evento que abre la ventana modal del carrito cuando se le hace click al icono de carrito. Esto lo hace al cambiar la clase "modal-hidden" a "modal-visible", las cuales están configuradas en el archivo css para ocultar y mostrar el carrito
cartButton.addEventListener("click", () => {
  cartModal.style.display = "flex";
  cartModal.style.flexDirection = "column";
});

// Evento click en botón de cerrar carrito: cerrar el carrito
closeCart.addEventListener("click", () => {
  cartModal.style.display = "none";
});

// Evento click en botón de comprar (carrito): ir a página de compra (si hay productos añadidos al carrito)
buyCart.addEventListener("click", () => {
  if (cart.length !== 0) {
    window.location.href = "purchase.php";
  }
});

if (location.pathname.includes("purchase.php")) {
  // Evento click en botón de formulario email
  purchaseFormEmailButton.addEventListener("click", (event) => {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Obtener el valor del correo electrónico ingresado
    let emailInput = document.getElementById("email");
    let email = emailInput.value.toLowerCase().trim();

    // Verificar si el correo electrónico está en el array de correos permitidos
    if (dataArrayUser.some((user) => user.email === email)) {
      // Si el correo existe
      console.log("EXISTEEEEEEEEEEEE");
    } else {
      // Si el correo no existe
      console.log("NOPE");
    }
  });
}

// TODO: Quitar función de llevar al formulario cuando se hace enter