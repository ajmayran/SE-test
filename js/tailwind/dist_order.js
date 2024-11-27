//Notif and account 
document.getElementById('notificationButton').addEventListener('click', function() {
  const dropdown = document.getElementById('notificationDropdown');
  dropdown.classList.toggle('hidden');
});

document.getElementById('accountButton').addEventListener('click', function() {
  const popper = document.getElementById('accountPopper');
  popper.classList.toggle('hidden');
});


window.addEventListener('click', function(event) {
  const dropdown = document.getElementById('notificationDropdown');
  const popper = document.getElementById('accountPopper');

  if (!event.target.closest('#notificationButton')) {
    dropdown.classList.add('hidden');
  }
  if (!event.target.closest('#accountButton')) {
    popper.classList.add('hidden');
  }
});

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

  let total = 0;
  order.details.forEach(product => {
    const row = `<tr>
    <td class="px-4 py-2">${product.product_name}</td>
    <td class="px-4 py-2">₱${product.price}</td>
    <td class="px-4 py-2">${product.quantity}</td>
    <td class="px-4 py-2">₱${product.quantity * product.price}</td>
  </tr>`;
    productsTable.innerHTML += row;
    total += product.quantity * product.price;
  });

  document.getElementById('order-total').textContent = `₱${total.toFixed(2)}`;

  toggleModal(true);
}

function updateOrderStatus(action) {
  const orderId = document.getElementById('order-id').textContent;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function() {
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

  xhr.onreadystatechange = function() {
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

  // Create a new XMLHttpRequest to call the PHP function
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./accept_reject_order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = xhr.responseText.trim();
      if (response === 'success') {
        // Update the status on the UI or refresh the page
        alert("Order Rejected!");
        window.location.reload(); // Refresh the page after rejection
      } else {
        alert("Failed to reject order.");
      }
    }
  };

  // Send the request with the order_id
  xhr.send("order_id=" + orderId + "&action=reject");
}