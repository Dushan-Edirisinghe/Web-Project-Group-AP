function contain_number(str){
    return /[0-9]/.test(str);
  }
  function contain_characters(str){
    return /[a-zA-Z]/.test(str);
    }
  function contains_alt(str){
    return str.includes('@');
  }
  
  function validateform() {
   
    var numro = 1;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var error = document.getElementById("error");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
  
    if (contain_number(name)) {
      error.style.display = "block";
      name = "";
      numro = 0;
      return false;
    } else {
      error.style.display = "none";
      numro = 1;
    }
  
    if (!email.includes("@")) {
      error1.style.display = "block";
      email = "";
      numro = 0;
    } else {
      error1.style.display = "none";
      numro = 1;
    }
  
    if (contain_characters(phone)) {
      error2.style.display = "block";
      phone = "";
      numro = 0;
      return false;
    } else {
      error2.style.display = "none";
      numro = 1;
    }
  
    if (phone.length !== 8) {
      error3.style.display = "block";
      phone = "";
      numro = 0;
      return false;
    } else {
      error3.style.display = "none";
      numro = 1;
    }
    if (numro == 0) {
      preventDefault();
      return false;
    }
  
    window.location.href = "waiting.html";
    return true;
   
  }


// Get modal element and close button
const cartModal = document.getElementById('cartModal');
const closeModal = document.querySelector('.modal .close');
const cartIcon = document.getElementById('cartIcon');

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
      <td>Rs.${item.price.toFixed(2)}</td>
      <td>Rs.${(item.price * item.quantity).toFixed(2)}</td>
      <td><button onclick="removeItem(${item.id})">Remove</button></td>
    `;

    cartTableBody.appendChild(row);

    total += item.price * item.quantity;
  });

  document.getElementById('totalAmount').textContent = `Rs.${total.toFixed(2)}`;
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

  