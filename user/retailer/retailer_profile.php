<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../src/output.css">
  <link rel="stylesheet" href="../../src/user_dash.css">
  <script src="https://unpkg.com/iconify-icon/dist/iconify-icon.min.js"></script>
</head>

<body>
  <?php
    require_once '../../includes/retailer_topnav_2.php';
  ?>
 
  <div class="container flex gap-2 m-10 mx-auto">
    <div class="w-1/4 h-screen pt-5 border shadow-md">
      <h2 class="p-4 mb-4 text-xl font-bold text-center">Account</h2>
        <ul class="text-center tab-list space-y">
            <li class="p-2 cursor-pointer tab-item hover:bg-gray-200">Profile</li>
            <li class="p-2 cursor-pointer tab-item hover:bg-gray-200">Address</li>
            <li class="p-2 cursor-pointer tab-item hover:bg-gray-200">Change Password</li>
            <a href="retailer_purchase_status.php"><li class="p-2 cursor-pointer tab-item hover:bg-gray-200">My Purchase</li></a>
            <li class="p-2 cursor-pointer tab-item hover:bg-gray-200" >Notifications</li>
            <li class="p-2 cursor-pointer tab-item hover:bg-gray-200">My Voucher</li>
            <li class="p-2 mt-2 font-bold text-red-500 cursor-pointer tab-item hover:bg-gray-200">Log Out</li>
        </ul>
    </div>
    <div class="w-3/4 p-4 pt-5 border shadow-md">
        <div class="tab-content">

            <div class="tab-pane">
            <?php
              require_once '../../includes/retailer_profile_form.php';
            ?>               
            </div>

            <div class="hidden tab-pane">
            <?php
              require_once '../../includes/retailer_address.php';
            ?>  
            </div>

            <div class="hidden tab-pane">
            <?php
              require_once '../../includes/retailer_password.php';
            ?>  
            </div>

            <div class="hidden tab-pane"></div>

            <div class="hidden tab-pane" >
            <?php
              require_once '../../includes/retailer_notif.php';
            ?>  
            </div>
            
            <div class="hidden tab-pane">
            <?php
              require_once '../../includes/retailer_voucher.php';
            ?>               
            </div>

        </div>
    </div>
  </div>
<?php
    require_once '../../includes/retailer_footer.php';
?> 
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const tabItems = document.querySelectorAll('.tab-item');
  const tabPanes = document.querySelectorAll('.tab-pane');
  const queryParams = new URLSearchParams(window.location.search);
  const activeTab = queryParams.get('tab'); // Get 'tab' parameter from the URL

  // Default behavior: Set the first tab as active
  let activeIndex = 0;

  // If there's a tab parameter, find the matching tab and set it as active
  if (activeTab) {
    tabItems.forEach((item, index) => {
      if (item.textContent.trim().toLowerCase() === activeTab.toLowerCase()) {
        activeIndex = index;
      }
    });
  }

  // Activate the determined tab
  tabItems.forEach(item => item.classList.remove('active'));
  tabPanes.forEach(pane => pane.classList.add('hidden'));

  tabItems[activeIndex].classList.add('active');
  tabPanes[activeIndex].classList.remove('hidden');
});
const tabItems = document.querySelectorAll('.tab-item');
const tabPanes = document.querySelectorAll('.tab-pane');

// Set the first tab as active by default
tabItems[0].classList.add('active');
tabPanes[0].classList.remove('hidden');

tabItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    tabItems.forEach(item => item.classList.remove('active'));
    tabPanes.forEach(pane => pane.classList.add('hidden'));

    item.classList.add('active');
    tabPanes[index].classList.remove('hidden');
  });
});
</script>