<body class="bg-gray-100">
  <div class="container mx-auto p-8">
    <h2 class="text-2xl font-bold mb-4">Manage Password</h2>

    <div id="passwordForm" class="bg-white rounded shadow p-4">
      <label for="verifyPassword" class="block mb-2 text-center">Verify Password</label>
      <input type="password" id="verifyPassword" class="border border-gray-300 rounded px-4 py-2 w-full mb-4">

      <div class="flex justify-center">
        <button id="showNewPasswordForm" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">OK</button>
      </div>
    </div>

    <div id="newPasswordForm" class="hidden">
      <label for="newPassword" class="block mb-2">New Password</label>
      <input type="password" id="newPassword" class="border border-gray-300 rounded px-4 py-2 w-full mb-4">

      <label for="confirmPassword" class="block mb-2">Confirm New Password</label>
      <input type="password" id="confirmPassword" class="border border-gray-300 rounded px-4 py-2 w-full mb-4">

      <div class="flex justify-end">
        <button id="savePassword" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Save</button>
      </div>
    </div>

    <script>
      const savePasswordButton = document.getElementById('savePassword');

      savePasswordButton.addEventListener('click', () => {
        // Here, you would typically send an AJAX request to update the password on the server.
        // For demonstration purposes, we'll simply show an alert message:
        alert('Password changed successfully!');
      });
    </script>z

    <script>
      const showNewPasswordFormButton = document.getElementById('showNewPasswordForm');
      const passwordForm = document.getElementById('passwordForm');
      const newPasswordForm = document.getElementById('newPasswordForm');

      showNewPasswordFormButton.addEventListener('click', () => {
        passwordForm.classList.add('hidden');
        newPasswordForm.classList.remove('hidden');
      });
    </script>
  </div>
</body>
