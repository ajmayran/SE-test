<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../../src/output.css">
    <style>
      body {
        font-family: 'Lexend', sans-serif;
      }

      .spin-animation {
        animation: spin 2s linear infinite;
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }

        100% {
          transform: rotate(360deg);
        }
      }
    </style>
  </head>

  <body class="flex items-center justify-center min-h-screen bg-center bg-no-repeat bg-cover"
  style="background-image: url(../../resources/img/loginbg.png);">
  <div class="flex w-3/4 mb-20 h-3/4">
    <div class="flex items-center justify-center w-1/2">
      <div class="flex items-center text-center">
        <img src="../../resources/img/Pconnect Logo.png" alt="Logo" class="w-12 h-12 mr-4" />
        <h1 class="text-3xl font-semibold">Diggers - PConnect</h1>
      </div>
    </div>
    <div class="w-0.5 bg-gray-600"></div>
    <div class="flex items-center justify-center w-1/2">
      <div class="w-3/4">
        <h2 class="mb-2 text-3xl font-medium">Welcome</h2>
        <p class="mb-6 font-light text-gray-600">Please login to Admin Dashboard.</p>
          <form id="loginForm">
              <input
                class="w-full p-2 mb-4 text-gray-600 bg-white rounded focus:outline-none focus:ring-2 focus:ring-green-500"
                placeholder="Username" type="text" />
              <input
                class="w-full p-2 mb-4 text-gray-600 bg-white rounded focus:outline-none focus:ring-2 focus:ring-green-500"
                placeholder="Password" type="password" />
              <button class="w-full py-2 text-white bg-green-600 rounded hover:bg-green-400" type="submit">
                Login
              </button>
          </form>
          <a href="">
          <p class="mt-10 font-light text-gray-600 hover:text-gray-400">Forgotten Your Password?</p>
          </a>
        </div>
      </div>
    </div>
    <script src="../../js/tailwind/loader.js"></script>
    <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();

      // Show loader
      showLoader();

      // Simulate login (replace with actual authentication logic)
      setTimeout(() => {
        // Redirect to dashboard
        window.location.href = './dashboard.php';
      }, 2500);
    });
    </script>
  </body>
</html>