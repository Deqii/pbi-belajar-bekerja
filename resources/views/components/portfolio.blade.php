<div>
    <section class="mt-32 text-center">
        <h2 class="text-text1 font-semibold text-5xl">Mulai Tahun Baru dengan Pengalaman Baru</h2>
        <p class="text-text1 text-[20px] mt-5">Lihat karya nyata para talenta PBI yang menjadikan resolusi karier mereka jadi kenyataan.</p>
    </section>

    <section x-data="{ activeSlide: 1, slides: 3 }" x-init="setInterval(() => { activeSlide = activeSlide === slides ? 1 : activeSlide + 1 }, 4000)" class="relative w-5/6 mx-auto overflow-hidden rounded-lg mt-12">

        <!-- Slides -->
        <div class="relative h-64">
            <!-- Slide 1 -->
            <div x-show="activeSlide === 1" class="absolute inset-0 transition-all duration-3000">
                <img src="https://picsum.photos/800/400?random=1" class="w-full h-full object-cover" />
            </div>

            <!-- Slide 2 -->
            <div x-show="activeSlide === 2" class="absolute inset-0 transition-all duration-3000">
                <img src="https://picsum.photos/800/400?random=2" class="w-full h-full object-cover" />
            </div>

            <!-- Slide 3 -->
            <div x-show="activeSlide === 3" class="absolute inset-0 transition-all duration-3000">
                <img src="https://picsum.photos/800/400?random=3" class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Prev Button -->
        <button @click="activeSlide = activeSlide === 1 ? slides : activeSlide - 1"
            class="absolute left-2 top-1/2 -translate-y-1/2 text-text1 bg-white text-6xl px-4 py-2 rounded-full shadow">
            ‹
        </button>

        <!-- Next Button -->
        <button @click="activeSlide = activeSlide === slides ? 1 : activeSlide + 1"
            class="absolute right-2 top-1/2 -translate-y-1/2 text-text1 bg-white text-6xl px-4 py-2 rounded-full shadow">
            ›
        </button>

        <!-- Indicators -->
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex space-x-2">
            <template x-for="i in slides">
                <div @click="activeSlide = i" class="w-3 h-3 rounded-full cursor-pointer"
                    :class="activeSlide === i ? 'bg-white' : 'bg-gray-400/50'">
                </div>
            </template>
        </div>
    </section>
</div>