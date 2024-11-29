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
<body class="min-h-screen flex flex-col">
  <?php
    $page_title = 'Dashboard';
    require_once '../../includes/retailer_topnav.php';
  ?>
  <div class="flex flex-row">
    <div class="w-1/4 bg-gray-200 p-4">
      <ul class="space-y-4">
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="profile">Profile</li>
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="address">Address</li>
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="change-password">Change Password</li>
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="my-purchases">My Purchases</li>
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="notifications">Notifications</li>
        <li class="text-gray-700 hover:bg-gray-300 hover:text-gray-900 cursor-pointer sidebar-item" data-target="my-vouchers">My Vouchers</li>
      </ul>
    </div>
    <div class="w-3/4 p-4">
      <div id="profile" class="hidden">
        <p>This is the profile content.</p>
      </div>
      <div id="address" class="hidden">
        <p>This is the address content.</p>
      </div>
      <div id="change-password" class="hidden">
        <p>This is the change password content.</p>
      </div>
      <div id="my-purchases" class="hidden">
        <p>This is the my purchases content.</p>
      </div>
      <div id="notifications" class="hidden">
        <p>This is the notifications content.</p>
      </div>
      <div id="my-vouchers" class="hidden">
        <p>This is the my vouchers content.</p>
      </div>
    </div>
  </div>

  <?php
    require_once '../../includes/retailer_footer.php';
  ?> 
  <script>
    const sidebarItems = document.querySelectorAll('.sidebar-item');

    sidebarItems.forEach(item => {
      item.addEventListener('click', () => {
        const targetId = item.dataset.target;
        const contentSections = document.querySelectorAll('.content-section');

        contentSections.forEach(section => {
          if (section.id === targetId) {
            section.classList.remove('hidden');
          } else {
            section.classList.add('hidden');
          }
        });
      });
    });
  </script> 
</body>
</html>