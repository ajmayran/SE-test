<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../resources/img/Pconnect Logo.png">
    <link rel="stylesheet" href="../src/output.css">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('../resources/img/Registration\ Stepsbg.png');">
    <div class="w-full max-w-4xl p-8 bg-white border border-gray-100 rounded-lg shadow-lg">
        <h1 class="mb-6 text-2xl font-bold">Distributor Registration</h1>
        <div class="flex items-center">
            <div class="flex items-center flex-1">
                <div class="w-3 h-3 ml-16 bg-green-500 rounded-full"></div>
                <div class="flex-1 h-0.5 bg-gray-300 mx-2"></div>
                <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                <div class="flex-1 h-0.5 bg-gray-300 mx-2"></div>
                <div class="w-3 h-3 mr-8 bg-gray-300 rounded-full"></div>
            </div>
        </div>
        <div class="flex justify-between mb-6">
            <span class="font-medium text-green-500 text-[10px] ml-6">Business Information</span>
            <span class="text-gray-500 text-[10px] mr-8">Distributor Information</span>
            <span class="text-gray-500 text-[10px] mr-6">Submit</span>
        </div>
        <form>
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/3 font-medium text-gray-600">Distributor Name</label>
                    <input type="text" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="flex item-center">
                    <p class="text-gray-500 text-[10px] font-light mt-1 text-left">( This name will be your distributor's name profile )</p>
                    <p class="text-gray-500 text-[10px] font-light mt-1 ml-12">Business Name</p>
                    </div>
            </div>
            <div class="mb-2">
                <label class="block w-1/3 font-medium text-gray-600">Distributor Address</label>
                <div class="flex items-center mb-2">
                    <label class="block w-1/3 pl-4 font-medium text-gray-400">City</label>
                    <select id="citySelect" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" onchange="updateBarangays()">
                        <option class="text-[12px] font-light">Select</option>
                        <option class="text-[12px] font-light" value="Zamboanga">Zamboanga City</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <label class="block w-1/3 pl-4 font-medium text-gray-400">Barangay</label>
                    <select id="barangaySelect" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option class="text-[12px] font-light">Select</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <label class="block w-1/3 pl-4 font-medium text-gray-400">Street</label>
                    <input type="text" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center mr-[175px]">Business Located</p>
            </div>
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/3 font-medium text-gray-600">Phone Number</label>
                    <input type="text" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center mr-[123px]">Business Telephone or Mobile</p>
            </div>
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/3 font-medium text-gray-600">Email</label>
                    <input type="text" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center mr-[150px]">Business Contact Email</p>
            </div>
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/3 font-medium text-gray-600">Password</label>
                    <input type="password" class="w-2/3 px-3 py-2 font-light border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center mr-32">Distributor Login Password</p>
            </div>
                <div class="flex justify-end mt-6">
                    <button type="button" class="px-4 py-2 mr-2 border border-gray-300 rounded-md hover:bg-gray-100"><a href="./login.php">Cancel</a></button>
                    <button type="button" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600"><a href="./registration_step2.php">Next</a></button>
                </div>
        </form>
    </div>

    <script>
        const barangays = {
            Zamboanga: ['Arena Blanco', 'Ayala', 'Baliwasan', 'Baluno', 'Barangay Zone I', 'Barangay Zone II', 'Barangay Zone III', 'Barangay Zone IV', 'Boalan', 'Bolong', 'Buenavista', 'Bunguiao', 'Busay', 'Cabaluay', 'Cabatangan', 'Cacao', 'Calabasa', 'Calarian', 'Campo Islam', 'Canelar', 'Capisan', 'Cawit', 'Culianan', 'Curuan', 'Dita', 'Divisoria', 'Dulian (Upper Bunguiao)', 'Dulian (Upper Pasonanca)', 'Guisao', 'Guiwan', 'Kasanyangan', 'La Paz', 'Labuan', 'Lamisahan', 'Landang Gua', 'Landang Laum', 'Lanzones', 'Lapakan', 'Latuan', 'Licomo', 'Limaong', 'Limpapa', 'Lubigan', 'Lumayang', 'Lumbangan', 'Lunzuran', 'Maasin', 'Malagutay', 'Mampang', 'Manalipa', 'Mangusu', 'Manicahan', 'Mariki', 'Mercedes', 'Muti', 'Pamucutan', 'Pangapuyan', 'Panubigan', 'Pasilmanta', 'Pasobolong', 'Pasonanca', 'Patalon', 'Putik', 'Quiniput', 'Recodo', 'Rio Hondo', 'Salaan', 'San Jose Cawa-cawa', 'San Jose Gusu', 'San Roque', 'Sangali', 'Sibulao', 'Sinubong', 'Sinunoc', 'Sta. Barbara', 'Sta. Catalina', 'Sta. Maria', 'Sto. Niño', 'Tagasilay', 'Taguiti', 'Talabaan', 'Talisayan', 'Talon-talon', 'Taluksangay', 'Tetuan', 'Tictapul', 'Tigbalabag', 'Tictabon', 'Tolosa', 'Tugbungan', 'Tulungatung', 'Tumaga', 'Tumalutab', 'Tungawan', 'Upper Bokong', 'Upper Calarian', 'Upper Pasonanca', 'Upper Paypay', 'Upper Sinunuc', 'Victoria', 'Zambowood']
        };

        function updateBarangays() {
            const citySelect = document.getElementById('citySelect');
            const barangaySelect = document.getElementById('barangaySelect');
            const selectedCity = citySelect.value;

            // Clear previous barangay options
            barangaySelect.innerHTML = '<option class="text-[12px] font-light">Select</option>';

            if (selectedCity && barangays[selectedCity]) {
                barangays[selectedCity].forEach(barangay => {
                    const option = document.createElement('option');
                    option.textContent = barangay;
                    option.value = barangay;
                    barangaySelect.appendChild(option);
                });
            }
        }
    </script>
</body>
</html>