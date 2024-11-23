<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>
    <link rel="stylesheet" href="./src/output.css">
    <style>
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        .spin-animation {
            animation: spin 2s linear infinite;
        }
    </style>
</head>
<body class="min-h-screen flex justify-center items-center" style="background-color: #ABEBC6;">
    <div class="flex flex-row gap-2">
        <img src="./resources/img/Pconnect Logo.png" alt="Logo" class="w-12 h-12 spin-animation">
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.1s]" >P</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.2s]">C</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.3s]">o</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.4s]">n</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.5s]">n</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.6s]">e</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.7s]">c</div>
        <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.8s]">t</div>
    </div>
</body>
</html>
