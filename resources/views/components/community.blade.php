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
                        
                        <div style="padding: 1rem; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); height: 350px; width: 100%;" class="bg-gradient-to-t from-[#FFCC00] to-white"> 
                            <h4 class="font-semibold text-[36px] text-base mb-1 leading-tight mt-4 ml-2">Event Eksklusif Alumni</h4>
                            <p class="text-[18px] font-medium leading-[1.3] ml-2">Dapetin akses premium khusus <br> alumni untuk event-event keren <br> berikutnya.</p>
                            <img src="./images/community/chat.png" alt="" class="w-[240px] h-[240px] ml-44 -mt-16">
                        </div>
                    </div>
                    
                    <div style="height: 710px; border-radius: 8px; width: 100%; overflow: hidden;">
                        <img src="{{ asset('images/community/laptop_person.jpg') }}" alt="Anggota Komunitas" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <div style="padding: 1rem; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); height: 350px; width: 100%;" class="bg-gradient-to-b from-[#FFCC00]">
                            <img src="./images/community/talk.png" alt="" class="w-[240px] h-[240px] ml-44 -mt-32">
                            <h4 class="font-semibold text-[36px] text-base mb-1 leading-tight ml-2">Bangun Relasi & <br> Skill</h4>
                            <p class="text-[18px] leading-relaxed ml-2">Buka koneksi baru, belajar dari orang <br> hebat, dan upgrade dirimu!</p>
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
    <div class="flex mt-32 gap-8 mx-auto">
        <section class="w-1/2 mx-auto text-right shadow-2xl p-6 rounded-xl bg-gradient-to-r from-[#FFCC00] to white bg-[length:60%_100%] bg-no-repeat">
            <h3 class="text-3xl text-text1 font-semibold">Beasiswa Project-Based <br/> Internship</h3>
            <p class="font-medium mt-3">Biaya bukan halangan. Buktikan potensi melalui <br/> Captain of Class PBI dan raih pengalaman kerja nyata bersama kami.</p>
            
            <div class="relative">
                <img src="./images/achievement.png" alt="" class="w-[144px] h-[144px] object-contain absolute bottom-0 left-0">
            </div>

            <div>
                <button class="border-2 border-text1 font-semibold w-[200px] h-[50px] rounded-sm mt-8 p-2 cursor-pointer mr-8 hover:bg-gray-100">Hubungi Kami</button>
                <button class="bg-yellow text-text1 font-semibold w-[237px] h-[50px] rounded-sm mt-8 p-2 cursor-pointer hover:bg-yellow-hover">Coba Gratis Sekarang</button>
            </div>
        </section>

        <section class="w-1/2 mx-auto text-left shadow-2xl p-6 rounded-xl bg-gradient-to-r from-[#FFCC00] to white bg-[length:60%_100%] bg-no-repeat">
            <h3 class="text-3xl text-text1 font-semibold">Masih ragu dan belum<br/> paham terkait program PBI?</h3>
            <p class="font-medium mt-3">Tim PBI akan siap banju menjawab semua<br/>  pertanyaanmu!</p>
            <div class="relative">
                <img src="./icon/thinking.png" alt="" class="w-[144px] h-[144px] object-contain absolute bottom-0 right-0">
            </div>
            <button class="bg-white text-text1 font-semibold w-[237px] h-[50px] rounded-sm mt-8 p-2 cursor-pointer hover:bg-yellow-hover">Tes Sekarang</button>
        </section>
    </div>

    <!-- FAQ -->
    <section class="py-16 bg-white mt-32">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-4xl text-center leading-tight font-semibold mb-10">Frequently Asked Questions</h2>
            
            <div class="space-y-3">
                <!-- FAQ Item 1 -->
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Kenapa program Project-based Internship ini berbayar?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Apakah ada fee atau seleksi untuk mengikuti program Project-based Internship?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Mengapa program ini dikatakan "Internship"? Lalu, apakah diperlukan latar belakang berkaitan untuk mengikuti program ini?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Adakah perangkat atau tools khusus yang harus dipersiapkan oleh peserta?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Bagaimana saya bisa mendapatkan sertifikat setelah mengikuti program Project-based Internship ini?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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
                <div class="border border-neutral-300 rounded-lg overflow-hidden mt-6 shadow-md shadow-amber-200" x-data="{ open: false }">
                    <button 
                        @click="open = !open" 
                        class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-neutral-100 transition-colors"
                    >
                        <span class="font-semibold text-text1 pr-8 text-base">Bagaimana cara saya dapat melakukan konversi SKS?</span>
                        <div class="relative w-5 h-5 flex-shrink-0">
                            <img 
                                src="{{ asset('icon/arrow-down.png') }}"
                                class="absolute inset-0 w-full h-full transition-opacity duration-300"
                                :class="open ? 'opacity-0' : 'opacity-100'"
                                alt="Closed"
                            >
                            <img 
                                src="{{ asset('icon/arrow-up.png') }}"
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