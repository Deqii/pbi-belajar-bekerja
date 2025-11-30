<div>
    <section class="mt-32 text-center">
        <h2 class="text-text1 font-semibold text-5xl">Temukan inspirasi untuk resolusi kariermu tahun ini</h2>
        <p class="text-text1 text-[20px] mt-5">Lihat perjalanan alumni PBI yang kini telah bekerja di berbagai perusahaan</p>
    </section>

    <section>
    <div class="max-w-[1460px] mx-auto py-10">
        <div class="relative group">
            <button id="button-left" 
                class="absolute left-4 top-1/2 -translate-y-1/2 
                bg-white text-text2 px-4 py-2 rounded-full z-10 border-text2 border 
                opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                <
            </button>
            <div id="alumni"
                class="flex gap-8 overflow-hidden overflow-y-visible scroll-smooth px-10">

                @foreach(range(1, 8) as $item)
                    <div class="min-w-[330px] h-full bg-white rounded-xl shadow-xl border-text2 border">
                        <img src="https://placehold.co/600x400" alt="placeholder" class="rounded-t-xl">

                        <div class="flex gap-2 items-center ml-8 mt-8">
                            <img src="./icon/itb.png" alt="icon" class="w-12 h-12">
                            <h3 class="font-medium ml-2">Institut Teknologi Bandung</h3>
                        </div>
                        
                        <h2 class="text-3xl font-semibold ml-8 mt-8">Tio Prayuda {{ $item }}</h2>
                        <h3 class="text-[18px] font-medium ml-8 mt-2">Web Developer</h3>
                        <p class="m-4 ml-8">Sangat baik. saya dapat belajar banyak dari mentor dan teman-teman yang memiliki passion di bidang yang sama dengan saya. 3 bulan yang sangat mengesankan!</p>

                        <div class="flex gap-2 items-center ml-8 my-8">
                            <img src="./icon/gojek.png" alt="gojek" class="w-14 h-14 rounded-xl object-contain shadow-sm shadow-text1 mr-4">

                            <div>
                                <h4 class="font-semibold mb-1">Fullstack Developer</h4>
                                <p class="font-medium">Gojek</p>
                            </div>
                        </div>
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

        const cardWidth2 = 380;

        buttonRight.addEventListener('click', () => {
            alumni.scrollLeft += cardWidth2;
        });

        buttonLeft.addEventListener('click', () => {
            alumni.scrollLeft -= cardWidth2;
        });
</script>