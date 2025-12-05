<div id="programs" class="w-5/6 mx-auto">
    <section class="text-center">
        <h2 class="text-text1 font-semibold text-[40px]">New Year New You</h2>
        <p class="text-text1 text-[17px] font-medium mt-2">Ubah resolusi tahun barumu menjadi nyata dengan program Project-Based Internship di bawah ini.</p>
    </section>

    <section class="mt-10">
    <div>
        <div class="relative group">
            <button id="btn-left" 
                class="absolute text-2xl left-2 top-1/2 -translate-y-1/2 
                bg-[#FFE98A] text-text2 px-4 py-2 rounded-full z-10 border-text2 border 
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                <
            </button>
            <div id="slider"
                class="flex gap-4 overflow-x-hidden scroll-smooth px-10">

                @foreach(range(1, 8) as $item)
                    <div class="bg-white rounded-xl shadow-xl border-x-background-white border">
                        <img src="https://pbi.belajarbekerja.com/upload/project/gambar_project/afb76a4a6bfb7b237548ee4ae46691c6.png" alt="placeholder" class="rounded-t-xl w-full">
                        <h3 class="text-[18px] font-semibold ml-4 my-2 mt-3">Accounting {{ $item }}</h3>
                        <div class="flex items-center">
                            <img src="./icon/date.png" alt="" class="w-6 h-6 m-2 ml-4">
                            <p class="text-text2 text-[14px]">8 September 2025</p>
                        </div>
                        
                        <div class="flex items-center -mb-4 p-2">
                            <img src="./icon/check.png" alt="" class="w-6 h-6 ml-2 mr-3">
                            <p class="text-text1 text-[14px] leading-[1.6]">Real Case dengan Big Data</p>
                        </div>
                        <div class="flex items-center -mb-4 p-2">
                            <img src="./icon/check.png" alt="" class="w-6 h-6 m-2 mr-3">
                            <p class="text-text1 text-[14px] leading-[1.6]">Kuasai Microsoft Excel dan Dashboard</p>
                        </div>
                        <div class="flex items-center -mb-4 p-2">
                            <img src="./icon/check.png" alt="" class="w-6 h-6 m-2 mr-3">
                            <p class="text-text1 text-[14px] leading-[1.6]">Mengembangkan Data Storytelling</p>
                        </div>
                        <div class="flex items-center -mb-4 p-2">
                            <img src="./icon/check.png" alt="" class="w-6 h-6 m-2 mr-3">
                            <p class="text-text1 text-[14px] leading-[1.6]">Membentuk Mindset Sebagai Data Analyst</p>
                        </div>

                        <div class="flex items-center gap-3 mt-12 ml-4">
                            <p class="text-text1 text-[14px] mr-2 ">Belajar dari Praktisi</p>
                            <div class="w-11 h-11 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-1 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                            <div class="w-11 h-11 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-2 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                            <div class="w-11 h-11 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-3 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                        </div>

                        <button class="bg-yellow text-text1 font-semibold w-[260px] h-[50px] rounded-sm mt-4 p-2 cursor-pointer hover:bg-yellow-hover ml-4 my-6 mr-4">Lihat Detail</button>
                    </div>
                @endforeach

            </div>
            <button id="btn-right"
                class="absolute text-2xl -right-6 top-1/2 -translate-y-1/2 
                bg-[#FFE98A] text-text2 px-4 py-2 rounded-full z-10 border-text2 border
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                >
            </button>
        </div>
    </section>
</div>

<script>
        const slider = document.getElementById('slider');
        const btnLeft = document.getElementById('btn-left');
        const btnRight = document.getElementById('btn-right');

        const cardWidth = 340;
        const visibleCards = 4;

        btnRight.addEventListener('click', () => {
            slider.scrollLeft += cardWidth;
        });

        btnLeft.addEventListener('click', () => {
            slider.scrollLeft -= cardWidth;
        });
</script>