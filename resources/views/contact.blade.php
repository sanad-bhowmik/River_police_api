<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price - PHH M&E SERVICES PTE LTD</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Additional CSS styles can be linked here -->
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<style>
    #nav1 {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M419.6053010003687 163.3661663577806L460.0172446068905 230.62293494402098 540.6964256829901 136.3766352411181z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M832.647%2c268.098C850.153%2c267.956%2c865.16%2c258.158%2c875.221%2c243.831C887.506%2c226.338%2c900.103%2c204.959%2c890.341%2c185.942C880.079%2c165.952%2c855.111%2c160.385%2c832.647%2c160.899C811.214%2c161.39%2c789.297%2c169.489%2c779.353%2c188.482C769.932%2c206.476%2c777.563%2c227.653%2c788.861%2c244.532C798.743%2c259.295%2c814.883%2c268.242%2c832.647%2c268.098' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M924.2167904606458-69.39989263033448L802.0358488286402 36.81037954426655 1030.4270626352468 52.78104900167121z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M883.4503129161776 145.9319053284218L991.5423983336607 104.43924126467385 841.9576488524297 37.839819910938715z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M843.68 491.95 a161.12 161.12 0 1 0 322.24 0 a161.12 161.12 0 1 0 -322.24 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M762.4664758135211 349.5036480581027L651.3413188206356 468.6707893138538 770.5084600763867 579.7959463067393 881.6336170692722 460.6288050509883z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M167.625%2c166.733C197.209%2c166.479%2c220.899%2c144.616%2c235.025%2c118.621C248.452%2c93.912%2c249.417%2c64.92%2c236.533%2c39.924C222.396%2c12.497%2c198.456%2c-10.901%2c167.625%2c-12.144C134.897%2c-13.464%2c103.626%2c4.965%2c88.372%2c33.951C73.996%2c61.269%2c82.37%2c93.289%2c98.191%2c119.796C113.537%2c145.507%2c137.683%2c166.99%2c167.625%2c166.733' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M852.5273925112068 449.94057081914406L969.5194397284837 481.28849539187723 1000.8673643012169 364.2964481746003 883.87531708394 332.9485236018671z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M654.7218892975667 413.88063108446335L740.3231740574574 440.05157020784156 736.7789403625793 298.5641735063165z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1039.4221823438097 184.18131092343668L918.302514958343 268.9902150521932 1003.1114190870995 390.10988243765996 1124.2310864725662 305.30097830890344z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M484.6223913901636 418.69155680193126L507.69913879861855 527.7701765678157 581.2549366066957 463.82909704376243z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M700.7129912812588 487.1877231557661L800.5494979470236 354.7002039762914 668.0619787675489 254.86369731052667 568.2254721017841 387.3512164900014z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M194.64034498289436 416.72315197868386L353.3951998313218 462.2453740732798 398.9174219259177 303.49051922485233 240.16256707749028 257.9682971302564z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M-41.93706318769925 78.44152557562158L51.65387791988694 217.19580186810322 190.40815421236857 123.60486076051701 96.81721310478237-15.149415531964607z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M616.8463150881507 25.144255406657948L602.3479771820636 143.22374194366773 720.4274637190733 157.72207984975492 734.9258016251605 39.64259331274513z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M547.23 61.34 a169.03 169.03 0 1 0 338.06 0 a169.03 169.03 0 1 0 -338.06 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M930.55 151.07 a130.08 130.08 0 1 0 260.16 0 a130.08 130.08 0 1 0 -260.16 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M177.51874183477418 176.92069846295792L321.06365536532667 177.0574998664828 260.2293139012762 67.30944270484724z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M178.89008021283894 65.4963141947672L231.25290241968779 26.038097445983716 145.88416619308816-32.777027489897804z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M127.202%2c745.821C184.825%2c747.403%2c227.356%2c696.273%2c252.821%2c644.558C275.183%2c599.144%2c271.525%2c547.155%2c246.771%2c502.999C221.39%2c457.725%2c179.103%2c420.948%2c127.202%2c420.482C74.615%2c420.01%2c28.308%2c454.259%2c3.858%2c500.819C-18.974%2c544.297%2c-9.092%2c594.109%2c12.99%2c637.972C38.226%2c688.099%2c71.102%2c744.28%2c127.202%2c745.821' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    }

    .submenu {
        display: none;
    }

    .hoverable:hover .submenu {
        display: block;
    }

    .half-red-half-black {
        height: 759px;
        width: 1497px;
        background: linear-gradient(to right, #f7a80c 50%, black 50%);
    }

    .fixed-image-height {
        height: 500px;
    }

    .custom-list {
        list-style-type: none;
    }

    .custom-list li {
        position: relative;
        padding-left: 1.5em;
    }

    .custom-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.25em;
        width: 0.3em;
        height: 0.3em;
        background-color: currentColor;
        transform: rotate(0deg);
    }

    .parallax {
        background-image: url('https://t4.ftcdn.net/jpg/07/33/03/17/360_F_733031773_x7wrOMgLWJjq79exLwhshlVrk9msHwRl.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.8);
        /* Background shade */
        position: relative;
        overflow: hidden;
    }


    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content {
        position: relative;
        z-index: 1;
        text-align: center;
        padding-top: 100px;
    }

    .footer {
        background: linear-gradient(rgb(62 71 247 / 9%), rgb(39 255 111 / 10%)), url(https://agrosoftware.in/img/product-bg.png) left bottom no-repeat;
        background-size: auto;

    }

    .sticky-nav {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 10;
        transition: all 0.5s ease-in-out;
    }

    .half {
        background-color: #fff;
        position: relative;
        height: 596px;
        width: 1399px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .responsive-map {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .responsive-map iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .relative:hover>.absolute {
        display: block;
    }

    .absolute {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        padding: 8px 0;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .absolute {
        display: none;
    }

    .main-container__marquee {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100vw;
        max-width: 100%;
        min-height: 1rem;
        overflow-x: hidden;
        font-family: "Merriweather", serif;
        font-size: 18px;
        color: black;
    }

    .main-container__marquee-track {
        display: flex;
        white-space: nowrap;
        position: relative;
        display: flex;
        overflow: hidden;
        user-select: none;
    }

    .main-container__marquee-items {
        flex-shrink: 0;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        min-width: 100%;
        animation: marquee 12s linear infinite;

    }

    .main-container__marquee-item {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: auto;
        transition: all 0.1s ease-in-out;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>

<body>
    <article class="main-container__marquee">
        <div class="main-container__marquee-track">
            <div class="main-container__marquee-items">
                <span class="main-container__marquee-item">Launching soon</span>
                <span class="main-container__marquee-item">We Will always for your service</span>
            </div>
            <div aria-hidden="true" class="main-container__marquee-items">
                <span class="main-container__marquee-item">Launching soon</span>
                <span class="main-container__marquee-item">We Will always for your service</span>
            </div>
        </div>
    </article>

    <header>
        <nav id="nav1" x-data="{ open: false }" class="flex h-auto w-auto bg-white mt-10 rounded-lg justify-between
      md:h-16" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="flex w-full justify-between ">
                <div :class="open ? 'hidden':'flex'" class="flex px-6 w-1/2 items-center font-semibold
          md:w-1/5 md:px-1 md:flex md:items-center md:justify-center" x-transition:enter="transition ease-out duration-300">
                    <a href="/">All House Works</a>
                </div>

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300" class="flex flex-col w-full h-auto
          md:hidden">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <a href="/">Home</a>
                        <a href="/about">About Us</a>
                        <a href="/service">Service</a>
                        <a href="/price">Price</a>
                        <a href="/works">Works</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
                <div class="hidden w-2/5 items-center justify-evenly font-semibold
          md:flex">
                    <a href="/">Home</a>
                    <div class="hoverable relative">
                        <a href="/about">About Us</a>
                        <div class="submenu absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2">
                            <a href="/review" class="block px-4 py-2 hover:bg-gray-200">Review</a>
                            <a href="/mission" class="block px-4 py-2 hover:bg-gray-200">Mission</a>
                        </div>
                    </div>
                    <div class="hoverable relative">
                        <a href="/service">Service</a>
                        <div class="submenu absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2 hidden group-hover:block z-20">
                            <a href="/plumbing" class="block px-4 py-2 hover:bg-gray-200">Plumber</a>
                            <a href="/electric" class="block px-4 py-2 hover:bg-gray-200">Electrician</a>
                            <a href="/handyman" class="block px-4 py-2 hover:bg-gray-200">Handyman</a>
                            <a href="/deepclean" class="block px-4 py-2 hover:bg-gray-200">Deep Cleaning</a>
                            <a href="/floorpolish" class="block px-4 py-2 hover:bg-gray-200">Floor Polishing</a>
                            <a href="/floorclean" class="block px-4 py-2 hover:bg-gray-200">Floor Cleaning</a>
                            <a href="/wood" class="block px-4 py-2 hover:bg-gray-200">Wood Varnishing</a>
                            <a href="/decking" class="block px-4 py-2 hover:bg-gray-200">Decking</a>
                        </div>
                    </div>
                    <a href="/price">Price</a>
                    <a href="/works">Works</a>
                    <a href="/contact">Contact</a>
                </div>

                <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white
                          md:hidden
                        " @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                    </div>
                </button>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <nav class="h-auto md:h-48">
        <div class="max-w-7xl mx-auto px-4 py-2">
            <div class="mt-10 flex flex-wrap justify-center md:space-x-64 space-y-4 md:space-y-0">
                <div class="flex items-center w-full md:w-auto" style="height: auto; width: auto;">
                    <div class="p-2">
                        <img src="{{ url('img/whatsapp.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-semibold" style="font-family: 'Josefin Sans';">WHATSAPP NUMBER</p>
                        <p class="text-gray-500" style="font-family: 'math';">65 6575 1226</p>
                    </div>
                </div>
                <div class="w-full md:w-auto flex justify-center">
                    <img src="https://www.shutterstock.com/image-vector/builder-crossed-hammers-new-construction-600nw-2246936013.jpg" alt="" class="h-20">
                </div>
                <div class="flex items-center w-full md:w-auto">
                    <input type="text" placeholder="ENTER KEYWORD" class="text-gray-300 hover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                </div>
            </div>
        </div>
    </nav>
    <!-- component -->


    <section class="parallax mt-16" style="position: relative; background: url('https://www.shutterstock.com/image-photo/businessman-working-modern-devices-student-600nw-654406453.jpg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">Contact</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Contact</p>
        </div>
    </section>

    <section style="padding: 1rem; text-align: center;">
        <h3 style="font-size: 1.25rem; font-weight: 700; color: #777777; margin-top: 1.5rem; margin-bottom: 1.5rem;">
            Our services are operating as usual, please <span style="color: #FFC107;">WhatsApp</span> us for any enquiries. Thank you for understanding.
        </h3>
        <img src="https://www.everyworks.com/wp-content/uploads/2021/08/whatsapp-chat-icon-everyworks-singapore-300x168.png" alt="WhatsApp Icon" style="margin: 1rem auto; display: block; width: 50%; max-width: 300px;">
    </section>


    <section class="half-red-half-black">
        <div class="half">
            <div class="mt-20 relative" style="top:60px;margin-left: 36%;height: 73px;width: 438px;padding: 18px;border-right: 3px solid #810CA8;border-left: 3px solid #810CA8;">
                <h1 class="text-center" style="font-size: 36px;font-weight: 800;font-family: math;text-shadow: 1px 1px 1px #000;">CONTACT INFO</h1>
                <div class="absolute top-0 left-0 right-0 " style="background-color: #810CA8;height: 2px;"></div>
                <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 px-2 " style="background-color: #fff;">
                    <span>
                        <svg fill="#000000" width="64px" height="64px" viewBox="-16.64 -16.64 97.28 97.28" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#000000" stroke-width="0.00064">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="_x32_5_attachment"></g>
                                <g id="_x32_4_office"></g>
                                <g id="_x32_3_pin"></g>
                                <g id="_x32_2_business_card"></g>
                                <g id="_x32_1_form"></g>
                                <g id="_x32_0_headset"></g>
                                <g id="_x31_9_video_call"></g>
                                <g id="_x31_8_letter_box"></g>
                                <g id="_x31_7_papperplane"></g>
                                <g id="_x31_6_laptop"></g>
                                <g id="_x31_5_connection">
                                    <g>
                                        <path d="M32,1C14.9072,1,1.001,14.9067,1.001,32S14.9072,63,32,63s30.999-13.9067,30.999-31S49.0928,1,32,1z M46.7568,31 c-0.0324-2.1485-0.1685-4.2808-0.4067-6.3666c1.3589-0.485,2.4686-1.4901,3.0918-2.7772 C56.0771,24.0959,60.2359,27.4291,60.8954,31H46.7568z M44.3726,39.0518c-2.9026,0.0765-5.2448,2.4193-5.3213,5.3214 c-1.9846,0.2237-4.0108,0.3524-6.0513,0.3841V33h11.7568C44.7252,35.0426,44.5967,37.0689,44.3726,39.0518z M33,31V19.246 c2.0505,0.0314,4.0767,0.1591,6.0513,0.381c0.0766,2.902,2.4188,5.2447,5.3213,5.3212c0.2241,1.9828,0.3527,4.0092,0.3843,6.0518 H33z M44.5176,22.9556c-1.915,0-3.4736-1.5581-3.4736-3.4736c0-1.915,1.5586-3.4731,3.4736-3.4731s3.4736,1.5581,3.4736,3.4731 C47.9912,21.3975,46.4326,22.9556,44.5176,22.9556z M39.366,17.6501c-2.0773-0.2368-4.2094-0.372-6.366-0.4041V3.1034 c3.5742,0.6591,6.9073,4.8182,9.1432,11.4547C40.8559,15.1812,39.8508,16.2911,39.366,17.6501z M31,3.097v14.1451 c-3.6047,0.052-7.0351,0.3829-10.2034,0.9517C22.8394,9.7535,26.668,3.8873,31,3.097z M31,19.2421V31h-7.3917 c-0.3975-2.1418-2.0439-3.8463-4.1541-4.3305c0.184-2.2051,0.478-4.3188,0.8689-6.3129 C23.6259,19.6952,27.2342,19.3017,31,19.2421z M18.2314,35.4731c-1.918,0-3.4775-1.5581-3.4775-3.4731 s1.5596-3.4731,3.4775-3.4731c1.915,0,3.4727,1.5581,3.4727,3.4731S20.1465,35.4731,18.2314,35.4731z M17.4542,26.5885 c-2.3233,0.3321-4.1789,2.121-4.6044,4.4115H3.103c0.8047-4.3291,6.7612-8.1297,15.0952-10.1736 C17.8681,22.6607,17.6182,24.5873,17.4542,26.5885z M12.8498,33c0.4255,2.2905,2.2811,4.0794,4.6044,4.4115 c0.1642,2.0023,0.4142,3.93,0.7446,5.7653C9.8643,41.1323,3.9075,37.3306,3.103,33H12.8498z M19.4542,37.3305 c2.1101-0.4842,3.7565-2.1887,4.1541-4.3305H31v11.7614c-3.7656-0.0596-7.3736-0.4533-10.6763-1.1147 C19.9324,41.6517,19.6383,39.5368,19.4542,37.3305z M31,46.7613V60.903c-4.3314-0.7902-8.1597-6.6549-10.2026-15.0935 C23.9655,46.3783,27.3956,46.7093,31,46.7613z M33,60.8964V46.7573c2.1461-0.0324,4.2782-0.1686,6.366-0.4072 c0.4849,1.359,1.4902,2.4689,2.7775,3.092C39.9038,56.0775,36.5709,60.2366,33,60.8964z M41.0439,44.5181 c0-1.9155,1.5586-3.4736,3.4736-3.4736s3.4736,1.5581,3.4736,3.4736c0,1.915-1.5586,3.4731-3.4736,3.4731 S41.0439,46.4331,41.0439,44.5181z M46.35,39.3666c0.2383-2.0858,0.3743-4.2181,0.4067-6.3666h14.1387 c-0.6595,3.5709-4.8183,6.9041-11.4536,9.1438C48.8187,40.8568,47.7089,39.8516,46.35,39.3666z M60.3704,25.9969 c-2.2195-2.4177-5.7788-4.5214-10.4017-6.0711c0.0118-0.1468,0.0225-0.294,0.0225-0.4438c0-3.0181-2.4551-5.4731-5.4736-5.4731 c-0.1496,0-0.2966,0.0106-0.4432,0.0225c-1.5475-4.6228-3.6501-8.182-6.0676-10.4017 C49.1861,5.9941,58.0074,14.8167,60.3704,25.9969z M25.9716,3.6345c-3.2159,2.9634-5.822,8.2573-7.3279,14.9893 c-6.7022,1.4893-12.0201,4.0807-15.0005,7.3146C6.023,14.7933,14.8222,6.0018,25.9716,3.6345z M3.6436,38.0635 c2.9807,3.2344,8.2986,5.8265,15.0007,7.316c1.5061,6.7305,4.1119,12.023,7.3273,14.986 C14.8229,57.9984,6.024,49.2076,3.6436,38.0635z M38.003,60.3714c2.4175-2.2197,4.5209-5.7791,6.0702-10.4027 c0.147,0.0119,0.2944,0.0225,0.4444,0.0225c3.0186,0,5.4736-2.4551,5.4736-5.4731c0-0.1498-0.0107-0.2971-0.0225-0.4438 c4.6229-1.5497,8.1822-3.6534,10.4017-6.0711C58.0072,49.1846,49.1841,58.0081,38.003,60.3714z"></path>
                                    </g>
                                </g>
                                <g id="_x31_4_phonebook"></g>
                                <g id="_x31_3_classic_telephone"></g>
                                <g id="_x31_2_sending_mail"></g>
                                <g id="_x31_1_man_talking"></g>
                                <g id="_x31_0_date"></g>
                                <g id="_x30_9_review"></g>
                                <g id="_x30_8_email"></g>
                                <g id="_x30_7_information"></g>
                                <g id="_x30_6_phone_talking"></g>
                                <g id="_x30_5_women_talking"></g>
                                <g id="_x30_4_calling"></g>
                                <g id="_x30_3_women"></g>
                                <g id="_x30_2_writing"></g>
                                <g id="_x30_1_chatting"></g>
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="absolute bottom-0 left-0 right-0 " style="background-color: #810CA8;height: 2px;"></div>
            </div>
            <p style="width: 403px;height: 119px;text-align: center;margin-top: 8%;margin-left: 38%;font-size: large;color: gray;">Please do not hesitate to contact our Everyworks Services team for any enquiries or quotations. Call us at <span class="text-yellow-400">+65 6575 1226</span> or message us via <span class="text-yellow-400">Whatsapp</span>. We look forward to providing our expertise and services to you and your company.</p>


            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 " style="margin-top: 20px;margin-right: 20px;">
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md red-light">
                        <div class="rounded bg-white-100 p-4 transform translate-x-6 -translate-y-6  border-t border-r">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-red-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 255.86 255.86" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00255856">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path style="fill:#000002;" d="M127.928,38.8c-30.75,0-55.768,25.017-55.768,55.767s25.018,55.767,55.768,55.767 s55.768-25.017,55.768-55.767S158.678,38.8,127.928,38.8z M127.928,135.333c-22.479,0-40.768-18.288-40.768-40.767 S105.449,53.8,127.928,53.8s40.768,18.288,40.768,40.767S150.408,135.333,127.928,135.333z"></path>
                                            <path style="fill:#000002;" d="M127.928,0C75.784,0,33.362,42.422,33.362,94.566c0,30.072,25.22,74.875,40.253,98.904 c9.891,15.809,20.52,30.855,29.928,42.365c15.101,18.474,20.506,20.02,24.386,20.02c3.938,0,9.041-1.547,24.095-20.031 c9.429-11.579,20.063-26.616,29.944-42.342c15.136-24.088,40.527-68.971,40.527-98.917C222.495,42.422,180.073,0,127.928,0z M171.569,181.803c-19.396,31.483-37.203,52.757-43.73,58.188c-6.561-5.264-24.079-26.032-43.746-58.089 c-22.707-37.015-35.73-68.848-35.73-87.336C48.362,50.693,84.055,15,127.928,15c43.873,0,79.566,35.693,79.566,79.566 C207.495,112.948,194.4,144.744,171.569,181.803z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-grow " style="font-family: sans-serif;">
                                <h2 class=" text-xl title-font font-medium mb-3">Everyworks Singapore – East</h2>
                                <p class="leading-relaxed text-sm text-justify">WhatsAspp Number (WhatsApp message Only): <span class="text-yellow-300">+65 6575 1226</span></p>
                                <p class="leading-relaxed text-sm text-justify">Phone Number: <span class="text-yellow-300">+65 6232 6600 </span></p>
                                <p class="leading-relaxed text-sm text-justify">Address: 5 Tampines Central 6, #03-38, Singapore 529482</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md red-light">
                        <div class="rounded bg-white-100 p-4 transform translate-x-6 -translate-y-6  border-t border-r">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 255.86 255.86" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00255856">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path style="fill:#000002;" d="M127.928,38.8c-30.75,0-55.768,25.017-55.768,55.767s25.018,55.767,55.768,55.767 s55.768-25.017,55.768-55.767S158.678,38.8,127.928,38.8z M127.928,135.333c-22.479,0-40.768-18.288-40.768-40.767 S105.449,53.8,127.928,53.8s40.768,18.288,40.768,40.767S150.408,135.333,127.928,135.333z"></path>
                                            <path style="fill:#000002;" d="M127.928,0C75.784,0,33.362,42.422,33.362,94.566c0,30.072,25.22,74.875,40.253,98.904 c9.891,15.809,20.52,30.855,29.928,42.365c15.101,18.474,20.506,20.02,24.386,20.02c3.938,0,9.041-1.547,24.095-20.031 c9.429-11.579,20.063-26.616,29.944-42.342c15.136-24.088,40.527-68.971,40.527-98.917C222.495,42.422,180.073,0,127.928,0z M171.569,181.803c-19.396,31.483-37.203,52.757-43.73,58.188c-6.561-5.264-24.079-26.032-43.746-58.089 c-22.707-37.015-35.73-68.848-35.73-87.336C48.362,50.693,84.055,15,127.928,15c43.873,0,79.566,35.693,79.566,79.566 C207.495,112.948,194.4,144.744,171.569,181.803z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-grow " style="font-family: sans-serif;">
                                <h2 class=" text-xl title-font font-medium mb-3">Everyworks Singapore – West</h2>
                                <p class="leading-relaxed text-sm text-justify">WhatsAspp Number (WhatsApp message Only): <span class="text-yellow-300">+65 6575 1226</span></p>
                                <p class="leading-relaxed text-sm text-justify">Phone Number: <span class="text-yellow-300">+65 6232 6600 </span></p>
                                <p class="leading-relaxed text-sm text-justify">Address: 2 Venture Drive #14-02, Singapore 608526</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md red-light">
                        <div class="rounded bg-white-100 p-4 transform translate-x-6 -translate-y-6  border-t border-r">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 255.86 255.86" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00255856">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path style="fill:#000002;" d="M127.928,38.8c-30.75,0-55.768,25.017-55.768,55.767s25.018,55.767,55.768,55.767 s55.768-25.017,55.768-55.767S158.678,38.8,127.928,38.8z M127.928,135.333c-22.479,0-40.768-18.288-40.768-40.767 S105.449,53.8,127.928,53.8s40.768,18.288,40.768,40.767S150.408,135.333,127.928,135.333z"></path>
                                            <path style="fill:#000002;" d="M127.928,0C75.784,0,33.362,42.422,33.362,94.566c0,30.072,25.22,74.875,40.253,98.904 c9.891,15.809,20.52,30.855,29.928,42.365c15.101,18.474,20.506,20.02,24.386,20.02c3.938,0,9.041-1.547,24.095-20.031 c9.429-11.579,20.063-26.616,29.944-42.342c15.136-24.088,40.527-68.971,40.527-98.917C222.495,42.422,180.073,0,127.928,0z M171.569,181.803c-19.396,31.483-37.203,52.757-43.73,58.188c-6.561-5.264-24.079-26.032-43.746-58.089 c-22.707-37.015-35.73-68.848-35.73-87.336C48.362,50.693,84.055,15,127.928,15c43.873,0,79.566,35.693,79.566,79.566 C207.495,112.948,194.4,144.744,171.569,181.803z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-grow " style="font-family: sans-serif;">
                                <h2 class=" text-xl title-font font-medium mb-3">Everyworks Singapore – North</h2>
                                <p class="leading-relaxed text-sm text-justify">WhatsAspp Number (WhatsApp message Only): <span class="text-yellow-300">+65 6575 1226</span></p>
                                <p class="leading-relaxed text-sm text-justify">Phone Number: <span class="text-yellow-300">+65 6232 6600 </span></p>
                                <p class="leading-relaxed text-sm text-justify">Address: 10 Woodlands Square, #04-53, Singapore 737714</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section>
        <!-- component -->
        <div class="p-24 flex flex-wrap items-center justify-center">

            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-yellow-400 rounded-lg max-w-xs shadow-lg hover:bg-green-200">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://cdn-icons-png.flaticon.com/256/2886/2886372.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Location</span>
                    </div>
                    <span class="block opacity-75 -mb-1">1090 Lower Delta Road <br> #03-07, Singapore 169201</span>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-red-400 rounded-lg max-w-xs shadow-lg hover:bg-green-200">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://cdn1.iconfinder.com/data/icons/google-new-logos-1/32/gmail_new_logo-512.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Email Address</span>
                    </div>
                    <span class="block opacity-75 -mb-1">Example@gmail.com</span>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-300 rounded-lg max-w-xs shadow-lg hover:bg-green-200">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Green_Phone_Font-Awesome.svg/512px-Green_Phone_Font-Awesome.svg.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Phone Number</span>
                    </div>
                    <span class="block opacity-75 -mb-1">+65 6575 1226</span>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-300 rounded-lg max-w-xs shadow-lg hover:bg-green-200">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-whatsapp-mobile-software-icon-png-image_6315991.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">WhatsApp Number</span>
                    </div>
                    <span class="block opacity-75 -mb-1">+65 6575 1226</span>
                </div>
            </div>

        </div>
    </section>

    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://web.whatsapp.com/" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>

    <section>
        <div class="responsive-map mb-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.714758267377!2d103.69263646814161!3d1.3476262586048955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0fbda6cccbab%3A0xb1c20d19b16ef889!2s747%20Jurong%20West%20Street%2073%2C%20Block%20747%2C%20Singapore%20640747!5e0!3m2!1sen!2sbd!4v1717497453947!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="footer bg-blue-100/80 font-sans dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get an update.</h1>

                    <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                        <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address" />

                        <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                            Subscribe
                        </button>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Home</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Who We Are</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Our Philosophy</p>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Retail & E-Commerce</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Information Technology</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Finance & Insurance</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        if (window.pageYOffset > 0) {
            navbar.classList.add("sticky-nav");
            navbar.style.width = "100%";
            navbar.style.position = "fixed";
            navbar.style.top = "0";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        } else {
            navbar.classList.remove("sticky-nav");
            navbar.style.width = "80%";
            navbar.style.position = "absolute";
            navbar.style.top = "-348px";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };
</script>
