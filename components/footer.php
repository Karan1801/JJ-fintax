<script>
  $(document).ready(function() {
    $('#disclaimerBtn').on('click', function() {
      $(this).tooltip('show');
    });
  });
</script>
<footer class="bg-[#053757] footer-top border-t-2 px-8 py-12">

  <div class="flex flex-col lg:flex-row justify-between lg:pr-12 gap-6 lg:gap-auto">

    <div class="">
      <input type="text" placeholder="name@example.com" class="h-10 rounded-md text-center w-full text-lg font-medium"> <br>
      <button class="text-center bg-[#6AA9D5] text-white mt-4 w-full py-2 rounded-md text-xl">Stay Updated</button>
      <p class="text-center text-white text-sm mt-2">Two insightful newsletters every week</p>

      <div class="flex gap-2 px-4">
        <img src="https://www.jjfintax.com/img/playstore.png" class="w-32" alt="">
        <img src="https://www.jjfintax.com/img/appstore.png" class="w-32" alt="">
      </div>

      <div class="flex gap-2 px-3 mt-3">
        <img src="./images/whatsapp.png" class="w-8" alt="">
        <img src="./images/spotify.png" class="w-8" alt="">
        <img src="./images/linkedin.png" class="w-8" alt="">
        <img src="./images/facebook.png" class="w-8" alt="">
        <img src="./images/instagram.png" class="w-8" alt="">
        <img src="./images/youtube.png" class="w-8" alt="">
        <img src="./images/twitter.png" class="w-8" alt="">
      </div>
    </div>


    <div class="">
      <h3 class="text-white text-lg font-semibold">Services</h3>
      <ul class="text-white font-light">
        <li>Income Tax</li>
        <li>GST</li>
        <li>TDS</li>
        <li>Tax Planning</li>
        <li>Accounting</li>
        <li>Startup Service</li>
        <li>ROC Compliance</li>
        <li>Legal Services</li>
      </ul>
    </div>

    <div class="">
      <h3 class="text-white text-lg font-semibold">Tools</h3>
      <ul class="text-white font-light">
        <li>HRA Calculator</li>
        <li>TDS Calculator</li>
        <li>EMI Calculator</li>
        <li>Tax Calculator</li>
      </ul>
    </div>

    <div class="">
      <h3 class="text-white text-lg font-semibold">JJ Capsule</h3>
      <ul class="text-white font-light">
        <li>Blogs</li>
        <li>News & Updates</li>
        <li>Tax Calender</li>
      </ul>
    </div>

    <div class="">
      <h3 class="text-white text-lg font-semibold">Other Links</h3>
      <ul class="text-white font-light">
        <li>FAQs</li>
        <li>T&C</li>
        <li>Privacy Policy</li>
        <li>Gallery</li>
        <li>Refer and earn</li>
      </ul>
    </div>
    
    <div class="">
      <h3 class="text-white text-lg font-semibold">Pricing</h3>
      <h3 class="text-white text-lg font-semibold">Contact Us</h3>
      <h3 class="text-white text-lg font-semibold">Company</h3>
      <ul class="text-white font-light">
        <li>About Us</li>
        <li>Media</li>
        <li>Finmag</li>
        <li>Career</li>
        <li>Inverstor Relations</li>
      </ul>
    </div>


  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
      breakpoints: {
        0:{
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
</body>

</html>