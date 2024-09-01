<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>JJ Fintax</title>
    <!-- <link rel="stylesheet" href="src/output.css"> -->
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="icon" type="images/x-icon" href="https://www.jjfintax.com/img/new_logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    

</head>

<body class="font-roboto text-black">
    <style>

    </style>

    <script>
        function toggleDropdown() {
            var dropdown = document.querySelector('.dropdown-services');
            dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'grid' : 'none';
        }
    </script>


    <nav class="flex justify-between  px-6 lg:px-20 xl:px-16 py-4 background-line">
        <div class="">
            <a href="/"><img class="w-32 md:w-36 lg:w-52 z-99" src="https://www.jjfintax.com/img/JJTax-logo.png" alt="10Deca Logo"></a>
        </div>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg style="background-color: #6AA9D5;" fill="none" stroke="rgb(12, 85, 147)" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <!-- Mobile Menu -->
        <ul class="list-none oggy pl-4 lg:pl-0">

            <li class="dropdown !block lg:!hidden group text-black text-lg ">
                <p class="!block lg:!hidden" id="service-dropdown" onclick="toggleDropdown()">Company <i class="fas fa-angle-down"></i></p>
                <p class="group !hidden lg:!block" id="service-dropdown">Company</p>
                <ul id="dropdown-services" class="dropdown-services dropdown-menu ml-3 text-left hidden group-hover:grid lg:absolute transition-transform duration-200 transform lg:gap-3 jack bg-[#0c5593] p-0 lg:p-4 z-[100]">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Awards</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Investor Relations</a></li>
                </ul>
            </li>
            <li class="dropdown !block lg:!hidden group text-black text-lg ">
                <p class="!block lg:!hidden" id="service-dropdown" onclick="toggleDropdown()">Resources <i class="fas fa-angle-down"></i></p>
                <p class="group !hidden lg:!block" id="service-dropdown">Services</p>
                <ul id="dropdown-services" class="dropdown-services dropdown-menu ml-3 text-left hidden group-hover:grid lg:absolute transition-transform duration-200 transform lg:gap-3 jack bg-[#0c5593] p-0 lg:p-4 z-[100]">
                    <li><a href="">Blogs</a></li>
                    <li><a href="">JJTaxFit</a></li>
                    <li><a href="">Tax Calendar</a></li>


                </ul>
            </li>
            <li class="dropdown !block lg:!hidden group text-black text-lg ">
                <p class="!block lg:!hidden" id="service-dropdown" onclick="toggleDropdown()">Services <i class="fas fa-angle-down"></i></p>
                <p class="group !hidden lg:!block" id="service-dropdown">Services</p>
                <ul id="dropdown-services" class="dropdown-services dropdown-menu ml-3 text-left hidden group-hover:grid lg:absolute transition-transform duration-200 transform lg:gap-3 jack bg-[#0c5593] p-0 lg:p-4 z-[100]">
                    <li><a href="">Blogs</a></li>
                    <li><a href="">JJTaxFit</a></li>
                    <li><a href="">Tax Calendar</a></li>


                </ul>
            </li>

            <!-- PC Menu -->
            <li class="dropdown !hidden lg:!inline-block group text-black text-base ">
                <p class="group px-2 cursor-pointer" id="service-dropdowns">Company <i class="fas fa-angle-down"></i></p>
                <ul id="dropdown-services" class="dropdown-services dropdown-menu ml-3 text-left hidden group-hover:grid lg:absolute transition-transform duration-200 transform lg:gap-3 jack bg-white p-0 lg:p-4 z-[100] mainer">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Awards</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Investor Relations</a></li>
                </ul>
            </li>
            <li class="dropdown !hidden lg:!inline-block group text-black text-base ">
                <p class="group px-2 cursor-pointer" id="service-dropdowns">Resources <i class="fas fa-angle-down"></i></p>
                <ul id="dropdown-services" class="dropdown-services dropdown-menu ml-3 text-left hidden group-hover:grid lg:absolute transition-transform duration-200 transform lg:gap-3 jack bg-white mainer p-0 lg:p-4 z-[100]">
                    <li><a href="">Blogs</a></li>
                    <li><a href="">JJTaxFit</a></li>
                    <li><a href="">Tax Calendar</a></li>

                </ul>
            </li>
            <li class="dropdown !hidden lg:!inline-flex justify-center group text-black text-base ">
                <p class="group px-2 cursor-pointer" id="service-dropdowns">Services <i class="fas fa-angle-down"></i></p>
                <ul id="dropdown-services" class="dropdown-services w-max shadow dropdown-menu text-left hidden group-hover:flex lg:absolute transition-transform duration-200 top-[10%] transform lg:gap-6 jack bg-white mainer p-0 lg:p-4 z-[100]">
                    <li>
                        <ul class="grid">
                            <li>
                                <p4 class="text-2xl text-[#053757] font-bold">For Individuals</h4>
                            </li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">JJTaxFit</a></li>
                            <li><a href="">Tax Calendar</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="grid">
                            <li>
                                <p4 class="text-2xl text-[#053757] font-bold">For Businesses</h4>
                            </li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">JJTaxFit</a></li>
                            <li><a href="">Tax Calendar</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="grid">
                            <li>
                                <p4 class="text-2xl text-[#053757] font-bold">Other Services</h4>
                            </li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">JJTaxFit</a></li>
                            <li><a href="">Tax Calendar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="text-black text-base"><a href="">Pricing</a></li>
            <li class="text-black text-base"><a href="">Contact</a></li>

            <input type="text" class="bgsearch bg-border border-[#87beffee] border-2 rounded-md mb-3 lg:mb-0">

            <li class="!hidden lg:!inline-block text-black text-base bg-[#6AA9D5] text-white rounded-lg mx-4 py-[4px]"><a href="">Chat with an expert</a></li>
            <li class="!hidden lg:!inline-block text-black text-base bg-[#6AA9D5] text-white rounded-lg py-[4px]"><a href="">Log in</a></li>
        </ul>
    </nav>
    <section class="bg-[#6AA9D5]">
        <div class="bg-[#0c5593] relative w-max px-3 py-[5px] text-base text-white">
            <p class="News-headline text-lg">JJ Tax News</p>
        </div>
    </section>
    <!-- banner -->