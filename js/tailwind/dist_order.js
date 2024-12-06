//Notif and account 
document.getElementById('notificationButton').addEventListener('click', function () {
  const dropdown = document.getElementById('notificationDropdown');
  dropdown.classList.toggle('hidden');
});

document.getElementById('accountButton').addEventListener('click', function () {
  const popper = document.getElementById('accountPopper');
  popper.classList.toggle('hidden');
});


window.addEventListener('click', function (event) {
  const dropdown = document.getElementById('notificationDropdown');
  const popper = document.getElementById('accountPopper');

  if (!event.target.closest('#notificationButton')) {
    dropdown.classList.add('hidden');
  }
  if (!event.target.closest('#accountButton')) {
    popper.classList.add('hidden');
  }
});


const penTab = document.getElementById('tab-pending');
const comTab = document.getElementById('tab-completed');
const pendingOrders = document.getElementById('pending-orders');
const completedOrders = document.getElementById('completed-orders');

penTab.addEventListener('click', () => {
  pendingOrders.classList.remove('hidden');
  completedOrders.classList.add('hidden');
  penTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
  comTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
});

comTab.addEventListener('click', () => {
  completedOrders.classList.remove('hidden');
  pendingOrders.classList.add('hidden');
  comTab.classList.add('text-green-600', 'border-b-4', 'border-green-600');
  penTab.classList.remove('text-green-600', 'border-b-4', 'border-green-600');
  penTab.classList.add('text-gray-600');
});

//
function toggleModal(show) {
  const modal = document.getElementById('order-details-modal');
  modal.classList.toggle('hidden', !show);
}

function showOrderDetails(order) {
  document.getElementById('order-id').textContent = order.order_id;
  document.getElementById('order-customer-name').textContent = `${order.first_name} ${order.last_name}`;
  document.getElementById('order-customer-address').textContent = order.retailer_address;
  document.getElementById('order-customer-contact').textContent = order.retailer_contact;


  const productsTable = document.getElementById('order-products');
  productsTable.innerHTML = '';

  let subtotal = 0;
  let total = -0;
  order.details.forEach(product => {
    const row = `<tr>
    <td class="px-4 py-2">${product.product_name}</td>
    <td class="px-4 py-2">₱${product.price}</td>
    <td class="px-4 py-2">${product.quantity}</td>
    <td class="px-4 py-2">₱${product.quantity * product.price}</td>
  </tr>`;
    productsTable.innerHTML += row;
    subtotal += product.quantity * product.price;
    total += product.quantity * product.price;
  });


  document.getElementById('order-subtotal').textContent = `₱${subtotal.toFixed(2)}`;
  document.getElementById('order-total').textContent = `₱${total.toFixed(2)}`;

  toggleModal(true);
}


//
function toggleCompleteModal(show) {
  const modal = document.getElementById('complete-order-details-modal');
  modal.classList.toggle('hidden', !show);
}

function showCompleteOrderDetails(order) {
  document.getElementById('complete-order-id').textContent = order.order_id;
  document.getElementById('complete-order-customer-name').textContent = `${order.first_name} ${order.last_name}`;
  document.getElementById('complete-order-customer-address').textContent = order.retailer_address;
  document.getElementById('complete-order-customer-contact').textContent = order.retailer_contact;


  const completeproductsTable = document.getElementById('complete-order-products');
  completeproductsTable.innerHTML = '';

  let subtotal = 0;
  let total = -0;
  order.details.forEach(product => {
    const row = `<tr>
    <td class="px-4 py-2">${product.product_name}</td>
    <td class="px-4 py-2">₱${product.price}</td>
    <td class="px-4 py-2">${product.quantity}</td>
    <td class="px-4 py-2">₱${product.quantity * product.price}</td>
  </tr>`;
    completeproductsTable.innerHTML += row;
    subtotal += product.quantity * product.price;
    total += product.quantity * product.price;
  });


  document.getElementById('complete-order-subtotal').textContent = `₱${subtotal.toFixed(2)}`;
  document.getElementById('complete-order-total').textContent = `₱${total.toFixed(2)}`;

  toggleCompleteModal(true);
}
//

function updateOrderStatus(action) {
  const orderId = document.getElementById('order-id').textContent;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText.trim();
      if (response === 'success') {
        alert(`Order ${action === 'approve' ? 'approved' : 'rejected'} successfully!`);
        window.location.reload();
      } else {
        alert(`Failed to ${action} order.`);
      }
    }
  };

  xhr.send(`order_id=${orderId}&action=${action}`);
}

function approveOrder(button) {
  var orderId = button.getAttribute('data-order-id');

  // Create a new XMLHttpRequest to call the PHP function
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = xhr.responseText.trim();
      if (response === 'success') {
        // Update the status on the UI or refresh the page
        alert("Order Approved!");
        window.location.reload(); // Refresh the page after approval
      } else {
        alert("Failed to approve order.");
      }
    }
  };

  // Send the request with the order_id
  xhr.send("order_id=" + orderId + "&action=approve");
}

function rejectOrder(button) {
  var orderId = button.getAttribute('data-order-id');
  const reason = document.getElementById('reason').value;


  // Create a new XMLHttpRequest to call the PHP function
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = xhr.responseText.trim();
      if (response === 'success') {
        alert("Order Rejected!");
        window.location.reload(); // Refresh the page after rejection

        // Close all modals after rejection is successful
        closeRejectModal();  // Close reject modal
        toggleModal(false);  // Close order details modal
      } else {
        alert("Failed to reject order.");
      }
    }
  };

  // Send the request with the order_id, reason, and other_reason (if specified)
  xhr.send("order_id=" + orderId + "&action=reject&reason=" + reason + "&other_reason=" + encodeURIComponent(otherReason));
  closeRejectModal(); // Close the reject modal immediately
}


function showRejectModal(button) {
  const orderId = button.getAttribute('data-order-id');
  document.getElementById('rejectOrderModal').classList.remove('hidden');
  document.getElementById('rejectForm').setAttribute('data-order-id', orderId); // Store order ID in form data
}

// Close Reject Order Modal
function closeRejectModal() {
  document.getElementById('rejectOrderModal').classList.add('hidden');
}

// Toggle 'Other' reason text area visibility
document.getElementById('reason').addEventListener('change', function () {
  const reason = this.value;
  const otherReasonDiv = document.getElementById('otherReasonDiv');
  if (reason === 'other') {
    otherReasonDiv.classList.remove('hidden');
  } else {
    otherReasonDiv.classList.add('hidden');
  }
});

// Handle reject form submission
document.getElementById('rejectForm').addEventListener('submit', function (event) {
  event.preventDefault(); // Prevent the form from submitting normally

  const orderId = this.getAttribute('data-order-id');
  const reason = document.getElementById('reason').value;
  const otherReason = document.getElementById('other_reason').value;

  // Make an AJAX request to reject the order with reason
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText.trim();
      if (response === 'success') {
        alert("Order Rejected!");
        window.location.reload(); // Refresh the page after rejection
      } else {
        alert("Failed to reject order.");
      }
    }
  };

  // Send the request with the order_id, reason, and other_reason (if specified)
  xhr.send("order_id=" + orderId + "&action=reject&reason=" + reason + "&other_reason=" + encodeURIComponent(otherReason));
  closeRejectModal(); // Close the modal after submission
});

