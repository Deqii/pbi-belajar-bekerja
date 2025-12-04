<!-- Community Grid -->
<div class="w-5/6 mx-auto">
    <section class="py-16 bg-white mt-16 mb-2">
        <div>
            
            <div class="text-center mb-12">
                <h2 class="text-[40px] text-center font-semibold">
                    Level Up bareng Komunitas Hebat Kami
                </h2>
                <p class="text-center text-text1 text-[17px] font-medium text-sm mt-2">Gabung, Seru-seruan, dan Temukan Energi Baru untuk Capai Karirmu!</p>
            </div>
            
            <div class="mb-8 mt-6">
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div style="height: 350px; border-radius: 8px; width: 100%; overflow: hidden;">
                            <img src="{{ asset('images/community/meeting.png') }}" alt="Diskusi Komunitas" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        
                        <div style="background-color: #FFE066; padding: 1rem; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); height: 350px; width: 100%;">
                            <h4 class="font-semibold text-[36px] text-base mb-1 leading-tight">Event Eksklusif Alumni</h4>
                            <p class="text-[24px] leading-relaxed">Dapetin akses premium khusus alumni untuk event-event keren berikutnya.</p>
                        </div>
                    </div>
                    
                    <div style="height: 710px; border-radius: 8px; width: 100%; overflow: hidden;">
                        <img src="{{ asset('images/community/laptop_person.jpg') }}" alt="Anggota Komunitas" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div style="background-color: #FFF4BF; padding: 1rem; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); height: 350px; width: 100%;">
                            <h4 class="font-semibold text-[36px] text-base mb-1 leading-tight">Bangun Relasi & <br> Skill</h4>
                            <p class="text-[24px] leading-relaxed">Buka koneksi baru, belajar <br> dari orang hebat, dan <br> upgrade dirimu!</p>
                        </div>
                        
                        <div style="height: 350px; border-radius: 8px; width: 100%; overflow: hidden;">
                            <img src="{{ asset('images/community/crowd.png') }}" alt="Acara Komunitas" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <p class="text-text1 text-[16px] text-sm mb-1">Ikuti event terdekat dan ukir momen seru bersama komunitas hebat kami</p>
                <a href="#" class="font-semibold hover:opacity-80 inline-flex items-center gap-1 transition-opacity underline">
                    Intip Jadwal Event Terbaru 
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CAT -->
    <div class="flex mt-16 gap-8 mx-auto items-stretch">
        <!-- Card Kiri -->
        <section class="w-1/2 text-right shadow-2xl p-8 rounded-xl bg-white flex flex-col justify-between">
            <div>
                <h3 class="text-[28px] text-text1 font-semibold leading-tight mb-4">
                    Beasiswa Project-Based <br/> Internship
                </h3>
                <div class="inline-block max-w-[85%]">
                    <p class="font-medium text-[14px] text-text1 leading-relaxed">
                        Biaya bukan halangan. Buktikan potensi melalui Capstone of Class PBI <br> dan raih pengalaman kerja nyata bersama kami.
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-yellow text-text1 font-semibold w-[280px] h-[50px] rounded-sm p-2 cursor-pointer hover:bg-yellow-hover">
                    Daftar Beasiswa Sekarang
                </button>
            </div>
        </section>

        <!-- Card Kanan -->
        <section class="w-1/2 text-left shadow-2xl p-8 rounded-xl bg-white flex flex-col justify-between">
            <div>
                <h3 class="text-[28px] text-text1 font-semibold leading-tight mb-4">
                    Masih ragu dan belum <br/>
                    paham terkait program PBI?
                </h3>
                <p class="font-medium text-[14px] text-text1 leading-relaxed">
                    Tim PBI akan siap bantu menjawab semua pertanyaanmu!
                </p>
            </div>
            <div class="mt-6">
                <button class="bg-yellow text-text1 font-semibold w-[200px] h-[50px] rounded-sm p-2 cursor-pointer hover:bg-yellow-hover">
                    Hubungi Kami
                </button>
            </div>
        </section>
    </div>

    <!-- FAQ -->
    <section class="py-16 bg-white mt-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-4xl text-center leading-tight font-semibold mb-10">Frequently Asked Questions</h2>
            
            <div class="space-y-3">
                <!-- FAQ Item 1 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Kenapa program Project-based Internship ini berbayar?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Apakah ada fee atau seleksi untuk mengikuti program Project-based Internship?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Mengapa program ini dikatakan "Internship"? Lalu, apakah diperlukan latar belakang berkaitan untuk mengikuti program ini?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Adakah perangkat atau tools khusus yang harus dipersiapkan oleh peserta?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Bagaimana saya bisa mendapatkan sertifikat setelah mengikuti program Project-based Internship ini?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Bagaimana cara saya dapat melakukan konversi SKS?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/polygon.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/triangle.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-100' : 'opacity-0'"
                                alt="Open"
                            >
                        </div>
                    </button>
                    <div 
                        x-show="open" 
                        x-collapse
                        class="px-6 pb-4 border-t border-neutral-200"
                    >
                        <p class="text-text2 pt-4 leading-relaxed">Soon...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>