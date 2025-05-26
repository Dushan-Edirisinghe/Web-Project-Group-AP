

// Get modal element and close button
const cartModal = document.getElementById('cartModal');
const closeModal = document.querySelector('.modal .close');
// Get the button that opens the modal
const cartIcon = document.querySelector(".fa-cart-shopping");

// Open modal when cart icon is clicked
cartIcon.addEventListener('click', () => {
  cartModal.style.display = 'block';
  updateCart(); // Ensure cart is updated when modal is opened
});

// Close modal when the close button is clicked
closeModal.addEventListener('click', () => {
  cartModal.style.display = 'none';
});

// Close modal when clicking outside of the modal content
window.addEventListener('click', (event) => {
  if (event.target === cartModal) {
    cartModal.style.display = 'none';
  }
});

// Example cart items (in a real application, this would come from the server/database)
let cartItems = [
  { id: 1, name: 'T-shirt', price: 20, quantity: 2, image: 'images/tshirt.jpg' },
  { id: 2, name: 'Jeans', price: 40, quantity: 1, image: 'images/jeans.jpg' }
];

function updateCart() {
  const cartTableBody = document.getElementById('cartItems');
  cartTableBody.innerHTML = '';

  let total = 0;

  cartItems.forEach(item => {
    const row = document.createElement('tr');

    row.innerHTML = `
      <td><img src="${item.image}" alt="${item.name}"> ${item.name}</td>
      <td><input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${item.id}, this.value)"></td>
      <td>$${item.price.toFixed(2)}</td>
      <td>$${(item.price * item.quantity).toFixed(2)}</td>
      <td><button onclick="removeItem(${item.id})">Remove</button></td>
    `;

    cartTableBody.appendChild(row);

    total += item.price * item.quantity;
  });

  document.getElementById('totalAmount').textContent = `$${total.toFixed(2)}`;
}

function updateQuantity(id, quantity) {
  const item = cartItems.find(item => item.id === id);
  if (item) {
    item.quantity = parseInt(quantity);
    updateCart();
  }
}

function removeItem(id) {
  cartItems = cartItems.filter(item => item.id !== id);
  updateCart();
}

// Ensure cart is updated when the page loads
document.addEventListener('DOMContentLoaded', updateCart);
// Get the modal
const cartPopup = document.getElementById("cartPopup");



// Get the <span> element that closes the modal
const closeBtn = document.querySelector(".close-btn");

// When the user clicks on the cart icon, open the modal
cartIcon.onclick = function() {
  cartPopup.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function() {
  cartPopup.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == cartPopup) {
    cartPopup.style.display = "none";
  }
}