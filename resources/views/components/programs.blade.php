<div>
    <section class="mt-32 text-center">
        <h2 class="text-text1 font-semibold text-5xl">New Year New You</h2>
        <p class="text-text1 text-[20px] mt-5">Ubah reolusi tahun barumu menjadi nyata dengan program Project-Based Internship di bawah ini.</p>
    </section>

    <section>
    <div class="max-w-[1460px] mx-auto py-10">
        <div class="relative group">
            <button id="btn-left" 
                class="absolute left-4 top-1/2 -translate-y-1/2 
                bg-white text-text2 px-4 py-2 rounded-full z-10 border-text2 border 
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                <
            </button>
            <div id="slider"
                class="flex gap-8 overflow-hidden overflow-y-visible scroll-smooth px-10">

                @foreach(range(1, 8) as $item)
                    <div class="min-w-[330px] bg-white rounded-xl shadow-xl border-text2 border">
                        <img src="https://placehold.co/600x400" alt="placeholder" class="rounded-t-xl">
                        <h3 class="text-2xl font-semibold m-4">Accounting {{ $item }}</h3>
                        <div class="flex items-center -mb-2">
                            <img src="./icon/date.png" alt="" class="w-8 h-8 m-4 mr-3">
                            <p class="text-text2">8 September 2025</p>
                        </div>
                        
                        <div class="flex items-center -mb-4">
                            <img src="./icon/check.png" alt="" class="w-8 h-8 m-4 mr-3">
                            <p class="text-text1">Real Case dengan Big Data</p>
                        </div>
                        <div class="flex items-center -mb-4">
                            <img src="./icon/check.png" alt="" class="w-8 h-8 m-4 mr-3">
                            <p class="text-text1">Kuasai Microsoft Excel dan Dashboard</p>
                        </div>
                        <div class="flex items-center -mb-4">
                            <img src="./icon/check.png" alt="" class="w-8 h-8 m-4 mr-3">
                            <p class="text-text1">Mengembangkan Data Storytelling</p>
                        </div>
                        <div class="flex items-center -mb-4">
                            <img src="./icon/check.png" alt="" class="w-8 h-8 m-4 mr-3">
                            <p class="text-text1">Membentuk Mindset Sebagai Data Analyst</p>
                        </div>

                        <div class="flex items-center gap-3 mt-16">
                            <p class="text-text1 m-4 mr-2 ">Belajar dari Praktisi</p>
                            <div class="w-12 h-12 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-1 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                            <div class="w-12 h-12 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-2 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                            <div class="w-12 h-12 rounded-full shadow-md bg-white border border-text1 flex items-center justify-center z-3 -mr-5">
                                <img src="./icon/gojek.png" alt="logo" class="w-7 h-7 object-contain">
                            </div>
                        </div>

                        <button class="bg-yellow text-text1 font-semibold w-[257px] h-[50px] rounded-sm mt-4 p-2 cursor-pointer hover:bg-yellow-hover ml-9 my-8">Lihat Detail</button>
                    </div>
                @endforeach

            </div>
            <button id="btn-right"
                class="absolute -right-4 top-1/2 -translate-y-1/2 
                bg-white text-text2 px-4 py-2 rounded-full z-10 border-text2 border
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

        const cardWidth = 380;
        const visibleCards = 4;

        btnRight.addEventListener('click', () => {
            slider.scrollLeft += cardWidth;
        });

        btnLeft.addEventListener('click', () => {
            slider.scrollLeft -= cardWidth;
        });
</script>