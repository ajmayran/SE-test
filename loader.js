// loader.js
function showLoader() {
    const loaderHTML = `
    <div id="loader" class="fixed inset-0 flex justify-center items-center" style="background-color: #ABEBC6; z-index: 9999;">
        <div class="flex flex-col items-center gap-4"> 
            <div class="flex flex-row gap-2">
                <img src="/img/Pconnect Logo.png" alt="Logo" class="w-12 h-12 spin-animation">
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.1s]">P</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.2s]">C</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.3s]">o</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.4s]">n</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.5s]">n</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.6s]">e</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.7s]">c</div>
                <div class="text-5xl text-white font-bold animate-bounce [animation-delay:.8s]">t</div>
            </div>
            <p class="text-[8px] font-light">Loading, please wait...</p> 
        </div>
    </div>
    `;
    document.body.insertAdjacentHTML('beforeend', loaderHTML);
}

function hideLoader() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.remove();
    }
}