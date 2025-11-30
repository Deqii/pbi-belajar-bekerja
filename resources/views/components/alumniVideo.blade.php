<div class="relative w-5/6 h-[650px] mx-auto rounded-md mt-32 overflow-hidden">

    <!-- Video -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="https://pbi.belajarbekerja.com/upload/cerita_alumni/video/413da0014a80f8b33ff7bb10862eabd6.mp4" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Text -->
    <div class="relative left-10 -bottom-12 z-10 p-10 text-white">
        <h2 class="text-5xl font-semibold leading-snug">
            Perjalanan Alumni yang Bisa Jadi <br> Awal Barumu
        </h2>
    </div>

    <!-- Button -->
    <button onclick="openYoutube('https://www.youtube.com/embed/VIDEO_ID?autoplay=1')"
            class="relative z-10 mt-12 left-20 bg-white text-black px-10 py-4 rounded-md font-semibold cursor-pointer hover:bg-gray-200 transition">
        Tonton Video <span class="ml-3 text-[20px]">▶</span>
    </button>

    <p class="text-white text-[18px] font-semibold relative z-10 -bottom-16 left-20">
        Cerita Lainnya
    </p>

    <!-- Cards -->
    <div class="relative z-10 -bottom-22 left-20 right-4 flex gap-4 overflow-x-auto pb-2">
        <div onclick="openYoutube('https://www.youtube.com/embed/v=Wkc_2rTXiHE&t=7s')" 
            class="w-100 h-48 bg-gray-300 rounded-md cursor-pointer hover:scale-105 transition"></div>
        <div onclick="openYoutube('https://www.youtube.com/embed/VIDEO_ID_1?autoplay=1')" 
            class="w-100 h-48 bg-gray-300 rounded-md cursor-pointer hover:scale-105 transition"></div>
        <div onclick="openYoutube('https://www.youtube.com/embed/VIDEO_ID_1?autoplay=1')" 
            class="w-100 h-48 bg-gray-300 rounded-md cursor-pointer hover:scale-105 transition"></div>
        <div onclick="openYoutube('https://www.youtube.com/embed/VIDEO_ID_1?autoplay=1')" 
            class="w-100 h-48 bg-gray-300 rounded-md cursor-pointer hover:scale-105 transition"></div>
    </div>
</div>


<!-- Popup-->
<div id="youtubeModal"
     class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-[999] flex justify-center items-center p-4 transition-opacity duration-300 opacity-0">

    <div id="youtubeOverlay" class="absolute inset-0"></div>

    <div id="youtubeContent"
         class="relative bg-black rounded-xl w-full max-w-4xl z-10
                transform scale-90 opacity-0 transition-all duration-300">
        
        <iframe id="youtubeFrame"
            class="w-full h-[450px] rounded-xl"
            src=""
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </div>
</div>


<script>
    const modal = document.getElementById("youtubeModal");
    const content = document.getElementById("youtubeContent");
    const overlay = document.getElementById("youtubeOverlay");
    const iframe = document.getElementById("youtubeFrame");

    function openYoutube(url) {
        iframe.src = url;

        // tampilkan modal
        modal.classList.remove("hidden");

        // tunggu 10ms supaya transition berjalan
        setTimeout(() => {
            modal.classList.remove("opacity-0");
            content.classList.remove("opacity-0", "scale-90");
            content.classList.add("scale-100");
        }, 10);
    }

    function closeYoutube() {
        // animasi keluar
        modal.classList.add("opacity-0");
        content.classList.add("opacity-0", "scale-90");

        // hide popup setelah animasi selesai
        setTimeout(() => {
            modal.classList.add("hidden");
            iframe.src = ""; 
        }, 300); // sesuai duration-300
    }

    // Klik area luar (overlay)
    overlay.addEventListener("click", closeYoutube);
</script>




