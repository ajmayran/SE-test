<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
<body>
    <aside class="w-1/4 min-h-screen bg-white sidebar-menu">
        <ul class="m-10 ml-10 space-y-2">
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_dashboard.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="mdi:home"></span>
                    <span class="ml-2 font-normal">Dashboard</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_orders.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="material-symbols-light:sell"></span>
                    <span class="ml-2 font-normal">My Orders</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_return.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="ph:key-return-fill"></span>
                    <span class="ml-2 font-normal">Return | Refund</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_cancellation.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="basil:cancel-solid"></span>
                    <span class="ml-2 font-normal">Cancellation</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_delivery.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="mdi:truck-delivery"></span>
                    <span class="ml-2 font-normal">Delivery</span>
                </a>
            </li>
            <hr class="border-gray-300 shadow-sm" />
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_products.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="dashicons:products"></span>
                    <span class="ml-2 font-normal">My Products</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_inventory.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="ic:baseline-inventory-2"></span>
                    <span class="ml-2 font-normal">Inventory</span>
                </a>
            </li>
            <hr class="border-gray-300 shadow-sm" />
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_messages.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="ant-design:message-filled"></span>
                    <span class="ml-2 font-normal">Messages</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_blocking.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="material-symbols:block"></span>
                    <span class="ml-2 font-normal">Blocking</span>
                </a>
            </li>
            <hr class="border-gray-300 shadow-sm" />
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_insights.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="gg:insights"></span>
                    <span class="ml-2 font-normal">Business Insights</span>
                </a>
            </li>
            <hr class="border-gray-300 shadow-sm" />
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_voucher.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="mdi:voucher"></span>
                    <span class="ml-2 font-normal">Voucher</span>
                </a>
            </li>
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_settings.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="material-symbols:settings"></span>
                    <span class="ml-2 font-normal">Shop Settings</span>
                </a>
            </li>
            <hr class="border-gray-300 shadow-sm" />
            <li class="group">
                <a class="flex items-center px-4 py-1 hover:bg-green-300 hover:text-gray-100" href="./dist_staff.php">
                    <span class="iconify ml-10 mr-1 text-xl text-green-500" data-icon="material-symbols:settings"></span>
                    <span class="ml-2 font-normal">Manage Staff</span>
                </a>
            </li>

        </ul>
    </aside>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.sidebar-menu .group a');
    const currentPage = window.location.pathname.split('/').pop(); // Get the current file name (e.g., "dist_dashboard.php")

    menuItems.forEach((item) => {
        const href = item.getAttribute('href'); // Get the href value of the menu item

        if (href === `./${currentPage}`) {
            // Highlight the menu item for the current page
            item.classList.add('bg-green-500', 'text-white');
            item.querySelector('.iconify').classList.replace('text-green-500', 'text-white');
        }

        // Add click listener to handle navigation and updates dynamically
        item.addEventListener('click', () => {
            menuItems.forEach((el) => {
                el.classList.remove('bg-green-700', 'text-white');
                el.querySelector('.iconify').classList.replace('text-white', 'text-green-500');
            });

            item.classList.add('bg-green-700', 'text-white');
            item.querySelector('.iconify').classList.replace('text-green-500', 'text-white');
        });
    });
});
</script>

    </script>
</body>

