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
                <div class="flex-1 h-0.5 bg-green-500 mx-2"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                <div class="flex-1 h-0.5 bg-gray-300 mx-2"></div>
                <div class="w-3 h-3 mr-8 bg-gray-300 rounded-full"></div>
            </div>
        </div>
        <div class="flex justify-between mb-6">
            <span class="font-medium text-green-500 text-[10px] ml-6">Business Information</span>
            <span class="font-medium text-green-500 text-[10px] mr-8">Distributor Information</span>
            <span class="font-medium text-gray-500 text-[10px] mr-6">Submit</span>
        </div>
        <form>
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/2 mb-2 mr-4 text-sm font-bold text-right text-gray-500" for="registered-name">
                        Registered Name 
                    </label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="registered-name" type="text">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center mr-8">Last Name, First Name, Middle Name (Optional)</p>
            </div>

            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/2 mb-2 mr-4 text-sm font-bold text-right text-gray-500" for="registered-name">
                        Registered Address
                    </label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-500 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="registered-name" type="text">
                </div>
                <p class="text-gray-500 text-[10px] font-light mt-1 text-center ml-4">City, Barangay Located, Street Address or Building Number</p>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <label class="block w-1/3 mr-4 text-sm font-bold text-right text-gray-500" for="tin-number">
                        TaxPayer Identification <br> Number (TIN)
                    </label>
                    <div class="flex items-center w-2/3">
                        <input class="w-full px-3 py-2 leading-tight text-gray-500 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="tin-number" type="text" placeholder="Input">
                    </div>
                </div>
                <p class="text-[10px] ml-4 text-gray-500 font-light text-right mr-16">Your 9 digit tin and 3-5 digit branch code, Please Use "000" as your branch code if you don't have one</p>
            </div>
            <!-- For BIR Certificate of Registration -->
            <div class="mb-2">
                <div class="flex items-center">
                    <label class="block w-1/2 pb-2 mr-4 text-sm font-bold text-right text-gray-500" for="BIR">
                        BIR Certifcate of Registration
                    </label>
                    <div class="w-full py-1.5 border rounded-lg">
                        <input type="file" class="hidden" id="birFileInput" onchange="displayFileName(this, 'birFileName')">
                        <label for="birFileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label>
                        <span class="ml-1 text-[12px] font-light" id="birFileName"></span>
                    </div>
                </div>    
            </div>

            <!-- For SEC Certificate for Incorporation -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label class="block w-1/2 pb-3 mr-4 text-sm font-bold text-right text-gray-500" for="SEC">
                        SEC Certificate for Incorporation
                    </label>
                    <div class="w-full py-1.5 border rounded-lg">
                        <input type="file" class="hidden" id="secFileInput" onchange="displayFileName(this, 'secFileName')">
                        <label for="secFileInput" class="px-4 py-2 font-semibold text-white transition duration-300 bg-green-500 rounded-lg shadow-lg hover:bg-green-600"> Upload File</label>
                        <span class="ml-1 text-[12px] font-light" id="secFileName"></span>
                    </div>
                </div>    
                <div class="flex justify-between">
                    <p class="text-[10px] ml-72 text-gray-500 font-light text-center">BIR Form 2303 and SEC Certificate</p>
                    <p class="text-[10px] text-gray-500 font-light text-right mr-8">JPG, JPEG, PNG, PDF support. Maximum of 20MB</p>
                </div>
            </div>
            <div class="flex items-center mb-2 bg-gray-100">
                <label class="block w-1/3 text-sm font-bold text-gray-700"></label>
                <label class="inline-flex items-center w-2/3">
                    <input type="checkbox" class="text-green-500 form-checkbox">
                    <span class="w-full ml-2 text-gray-700">I agree to this <a href="#" class="text-blue-500">Terms and Conditions</a></span>
                </label>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" class="px-4 py-2 mr-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100"><a href="./registration_step1.php">Back</a></button>
                <button type="button" class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600"><a href="./registration_step3.php">Submit</a></button>
            </div>
        </form>
    </div>
    <script>
        function displayFileName(input, labelId) {
            const fileName = input.files[0] ? input.files[0].name : '';
            document.getElementById(labelId).textContent = fileName;
        }
    </script>
</body>
</html>