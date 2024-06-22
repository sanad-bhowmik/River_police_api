<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission - PHH M&E SERVICES PTE LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<style>
    .submenu-container {
        position: relative;
        display: flex;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        border: 1px solid black;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
        font-family: serif;
        width: 123%;
    }

    .submenu-container:hover .submenu {
        display: block;
    }

    .submenu a {
        display: block;
        padding: 5px 0;
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .submenu a:hover {
        color: #f7a80c;
        font-size: 15px;
        font-weight: 600;
    }

    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');

    fixed-image-height {
        height: 500px;
        /* Set a fixed height */
    }

    .image-container {
        position: relative;
        display: inline-block;
        overflow: hidden;
        border-radius: 8px;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        border-radius: 8px;
    }

    .image-container:hover .image {
        transform: scale(1.1);
    }

    .hover-button {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 16px solid rgba(0, 0, 0, 0.7);
        cursor: pointer;
        transition: opacity 0.3s ease, transform 0.3s ease;
        opacity: 0;
    }

    .image-container:hover .hover-button {
        opacity: 1;
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

    .parallax {
        background-image: url('https://drvinodmune.com/wp-content/uploads/2022/09/istockphoto-1306669539-170667a.jpg');
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

    .submenu-container {
        position: relative;
        display: flex;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
        font-family: serif;
        width: 123%;
    }

    .submenu-container:hover .submenu {
        display: block;
    }

    .submenu a {
        display: block;
        padding: 5px 0;
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .submenu a:hover {
        color: #f7a80c;
        font-size: 15px;
        font-weight: 600;
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

    <nav class="bg-gradient-to-r from-blue-300 to-blue-600 mt-6 border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ url('img/logo.png') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PPH M&E Servie LTD</span>
            </a>
            <div class="flex items-center lg:order-2">
                <div class="hidden mt-2 mr-4 sm:inline-block">
                    <span></span>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-white dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent  lg:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <a href="/about" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">About</a>
                        <ul class="absolute hidden bg-white mt-2 py-2 w-32 rounded-md shadow-lg z-10">
                            <li><a href="/review" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Review</a></li>
                            <li><a href="/mission" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 border-4 p-2">Our Mission</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/service" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white ">Service</a>
                    </li>
                    <li>
                        <a href="/price" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Price</a>
                    </li>
                    <li>
                        <a href="/works" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Works</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                    <img src="{{ url('img/logo.png') }}" alt="" class="h-20">
                </div>
                <div class="flex items-center w-full md:w-auto">
                    <input type="text" placeholder="ENTER KEYWORD" class="text-gray-300 hover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                </div>
            </div>
        </div>
    </nav>


    <section class="parallax mt-16">
        <div class="overlay"></div>
        <div class="content flex pl-56" style="gap: 63%;">
            <h1 style="font-size: 319%;color: white;font-weight: 100;" class="mb-6">Mission</h1>
            <p style="font-size: 20px;color: antiquewhite;">Home / Mission</p>
        </div>
    </section>


    <section class="mt-6 mb-10">
        <div class="container max-w-xl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold text-center sm:text-5xl">Our Company Vision</h2>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
                <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">EveryWorks Services is the most trusted platform and service provider for homeowners in Singapore who are looking for a convenient, trustworthy and affordable solution to their home repair woes. Turn to Everyworks Services, and we will make it work.</p>
            </div>
            <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                <div>
                    <div class="mt-4 space-y-12">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket">
                                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">We Put Your Convenience First :</h4>
                                <p class="mt-2 ">Our flexible range of services is sure to answer most of your house repair and house improvement needs. We meet your demands at the flexibility of your time, and exert our best efforts to resolve the problem.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark-plus">
                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                                        <line x1="12" x2="12" y1="7" y2="13"></line>
                                        <line x1="15" x2="9" y1="10" y2="10"></line>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">Openness & Transparency :</h4>
                                <p class="mt-2 ">We are open and transparent with our service rates and methods, as we believe well-informed customers are happy customers. We create open and accessible communication channels within our company and between our clients for a positive and productive working relationship.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-question">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                        <path d="M10 10.3c.2-.4.5-.8.9-1a2.1 2.1 0 0 1 2.6.4c.3.4.5.8.5 1.3 0 1.3-2 2-2 2"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">We Take Pride In Workmanship :</h4>
                                <p class="mt-2 ">Going strong is when each job we complete with beautiful results, brings joy to both us and the clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" class="mt-10 lg:mt-0">
                    <img width="600" height="600" src="https://digiworld.com.vn/assets/banner/vision-mission-bg.png" class="mx-auto rounded-lg shadow-lg dark-bg-gray-500" style="color:transparent">
                </div>
            </div>
        </div>
    </section>


    <section class="mb-10">
        <div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
            <div class="text-center mb-10">
                <h2 class="text-4xl tracking-tight font-bold text-primary-800">BROWSE OUR SITE</h2>
            </div>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            </div>
            <div class="flex flex-col md:flex-row">

                <!-- end can help image -->

                <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/09/man-with-desk-white.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Find A Service Provider</h3>
                            <p class="text-sm">Everyworks Services gives you the quickest solution to resolve all home maintenance issues. We make the process of find reliable home service providers simple and efficient through one convenient portal and fast responses through our live Whatsapp chat (Daily, 9AM – 9PM).</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/04/tab-img3.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Built-In Reliability</h3>
                            <p class="text-sm">Everyworks Services is home to a curated list of certified and reliable professionals from reputable home repair companies in Singapore. You can read all reviews of our trusted built-in network of home repair companies in Singapore.</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/04/estimate-icon.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Cost Effective</h3>
                            <p class="text-sm">Can’t figure out what home service solutions you may need? Or perhaps you want to learn more about your home maintenance issue? Browse through our articles to understand more. Otherwise, our fast response team is always ready to receive your enquiry.</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/09/tag-white.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Open & Transparent Pricing</h3>
                            <p class="text-sm">We are transparent about our prices and will only carry out the works upon your approval of the final quotation. In addition, save time & effort with our end-to-end solutions of supply & installation. Our home services prices are always quoted nett, inclusive of labour and transport.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://web.whatsapp.com/" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>


    <!-- component -->
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
            navbar.style.top = "-242px";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };
</script>
