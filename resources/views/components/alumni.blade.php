<div class="w-5/6 mx-auto">
    <section class="mt-32 text-center">
        <h2 class="text-text1 font-semibold text-[40px]">Temukan inspirasi untuk resolusi kariermu tahun ini</h2>
        <p class="text-text1 font-medium text-[17px] mt-2">Lihat perjalanan alumni PBI yang kini telah bekerja di berbagai perusahaan</p>
    </section>

    <section>
    <div class="w-[98.5%] mx-auto py-10">
        <div class="relative group">
            <button id="button-left" 
                class="absolute left-4 top-1/2 -translate-y-1/2 
                bg-white text-text2 px-4 py-2 rounded-full z-10 border-text2 border 
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                <
            </button>
            <div id="alumni"
                class="flex gap-4 overflow-x-hidden  scroll-smooth px-10">

                @foreach(range(1, 8) as $item)
                    <div class="min-w-[290px] h-full bg-white rounded-xl shadow-xl border-x-2 border-gray-200 border">
                        <img src="https://pbi.belajarbekerja.com/upload/review_user/f2dcf1eebb38e4c8db5621ad7e85494a.png" alt="placeholder" class="rounded-t-xl">
                        
                        <h2 class="text-[28px] font-semibold ml-4 mt-4">Tio Prayuda {{ $item }}</h2>
                        <h3 class="text-[17px] font-medium ml-4 mt-1">Web Developer</h3>
                        <p class="m-4 ml-4 text-[14px] leading-[1.6]">Sangat baik. saya dapat belajar banyak dari mentor dan teman-teman yang memiliki passion di bidang yang sama dengan saya. 3 bulan yang sangat mengesankan!</p>

                        <div class="flex gap-2 items-center ml-4 my-8">
                            <img src="./icon/gojek.png" alt="gojek" class="w-14 h-14 rounded-full object-contain shadow-sm shadow-text1 mr-4">

                            <div>
                                <h4 class="font-semibold mb-1">Fullstack Developer</h4>
                                <p class="font-medium font-[14px]">Gojek</p>
                            </div>
                        </div>

                        <button class="bg-yellow text-text1 font-semibold w-[260px] h-[50px] rounded-sm mt-4 p-2 cursor-pointer hover:bg-yellow-hover ml-4 my-6 mr-4">Lihat Cerita</button>
                    </div>
                @endforeach

            </div>
            <button id="button-right"
                class="absolute -right-4 top-1/2 -translate-y-1/2 
                bg-white text-text2 px-4 py-2 rounded-full z-10 border-text2 border
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                >
            </button>
        </div>
    </section>
</div>

<script>
        const alumni = document.getElementById('alumni');
        const buttonLeft = document.getElementById('button-left');
        const buttonRight = document.getElementById('button-right');

        const cardWidth2 = 340;

        buttonRight.addEventListener('click', () => {
            alumni.scrollLeft += cardWidth2;
        });

        buttonLeft.addEventListener('click', () => {
            alumni.scrollLeft -= cardWidth2;
        });
</script>