<section>
    <nav id="navbar" class="w-full fixed top-0 left-0 mx-auto flex justify-between items-center p-4 z-50">
        <div class="ml-36">
            <img src="https://pbi.belajarbekerja.com/assets-front/images/icons/Logo_BB_new_Hitam.svg" alt="logo">
        </div>

        <ul class="flex gap-8">
            <li class="font-semibold font-[16px] hover:text-yellow transition duration-300 cursor-pointer">Redeem</li >
            <li class="font-semibold font-[16px] hover:text-yellow transition duration-300 cursor-pointer">Program</li>
            <li class="font-semibold font-[16px] hover:text-yellow transition duration-300 cursor-pointer">FAQ</li>
            <li class="font-semibold font-[16px] hover:text-yellow transition duration-300 cursor-pointer">Komunitas</li>
        </ul>

        <div class="mr-30">
            <button class="border-2 border-text1 font-semibold w-[110px] h-[50px] rounded-sm p-2 cursor-pointer mr-8 hover:bg-gray-100">Masuk</button>
            <button class="bg-yellow text-text1 font-semibold w-[110px] h-[50px] rounded-sm p-2 cursor-pointer hover:bg-yellow-hover">Daftar</button>
        </div>
    </nav>
</section>

<script>
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 700) {
      navbar.classList.add("bg-white", "shadow-md", "text-black");
      navbar.classList.remove("bg-transparent", "text-white");
    } else {
      navbar.classList.add("bg-transparent", "text-black");
      navbar.classList.remove("bg-white", "shadow-md", "text-black");
    }
  });
</script>