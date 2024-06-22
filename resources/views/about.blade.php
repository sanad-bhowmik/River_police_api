<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - PHH M&E SERVICES PTE LTD</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Additional CSS styles can be linked here -->
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">
</head>
<style>
    .relative:hover>.kkg {
        display: block;
    }

    .kkg {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        padding: 8px 0;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .kkg {
        display: none;
    }

    .parallax {
        background-image: url('https://img.freepik.com/premium-photo/set-hand-tools-black-background-copy-space_275805-579.jpg');
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
        background: linear-gradient(rgb(62 71 247 / 50%), rgb(39 255 111 / 20%)), url(https://agrosoftware.in/img/product-bg.png) left bottom no-repeat;
        background-size: auto;

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
        background: rgba(187, 163, 163, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(187, 163, 163, 0.3);
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
                        <a href="/about" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white lg:text-red-500 underline">About</a>
                        <ul class="kkg hidden bg-white mt-2 py-2 w-32 rounded-md shadow-lg z-10">
                            <li><a href="/review" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Review</a></li>
                            <li><a href="/mission" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Our Mission</a></li>
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
                    <img src="{{ url('img/logo.png') }}" alt="" class="h-20">
                </div>
                <div class="flex items-center w-full md:w-auto">
                    <input type="text" placeholder="ENTER KEYWORD" class="text-gray-300 hover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                </div>
            </div>
        </div>
    </nav>

    <section class="parallax mt-16" style="position: relative; background: url('https://img.freepik.com/premium-photo/set-hand-tools-black-background-copy-space_275805-579.jpg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">About</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / About</p>
        </div>
    </section>



    <section class="px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-start">
            <div class="flex justify-center items-center lg:w-auto">
                <img style="height: auto; max-width: 100%;" src="{{ url('img/logo.png') }}" alt="Everyworks Singapore Logo">
            </div>
            <div class="lg:w-1/2 lg:ml-12 mt-8 lg:mt-0">
                <p style="max-width: 100%; text-align: justify; font-size: 17px; color: #777;">PPH M&E Ltd Singapore is a holistic solution for all your home maintenance and handyman needs including electrical, plumbing, and aircon services. You can expect to get all your needs to be done just by messaging us via WhatsApp. Find and book appointments for multiple handyman services at reasonable prices, with guaranteed quality work and excellent customer support. PPH M&E Ltd Singapore aims to be the number one handyman service provider to meet all your home maintenance needs!</p>
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
    <!-- <section style="border-top: 1px solid;width: 945px;margin-left: 20%;margin-top: 60px;">
        <div>
            <p style="text-align: center;font-size: 30px;color: #000;margin-top: 8px;font-family: fantasy;letter-spacing: 5px;text-shadow: 3px 3px 0 rgba(0,0,0,.25);">WHAT YOU CAN EXPECT</p>
        </div>

        <div class="flex mt-12">
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-11.52 -11.52 71.04 71.04" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="1.8240000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #f7a90c;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M40.83,8.48c1.14,0,2,1,1.54,2.86l-5.58,26.3c-.39,1.87-1.52,2.32-3.08,1.45L20.4,29.26a.4.4,0,0,1,0-.65L35.77,14.73c.7-.62-.15-.92-1.07-.36L15.41,26.54a.46.46,0,0,1-.4.05L6.82,24C5,23.47,5,22.22,7.23,21.33L40,8.69a2.16,2.16,0,0,1,.83-.21Z"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Fast Response & Anticipation of Your Needs</p>
            </div>
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-4.56 -4.56 33.12 33.12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="#000000" stroke-width="0.624" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">5 -Star Customer Service</p>
            </div>
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-9.12 -9.12 42.24 42.24" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M3.161 4.469a6.5 6.5 0 0 1 8.84-.328 6.5 6.5 0 0 1 9.178 9.154l-7.765 7.79a2 2 0 0 1-2.719.102l-.11-.101-7.764-7.791a6.5 6.5 0 0 1 .34-8.826zm1.414 1.414a4.5 4.5 0 0 0-.146 6.21l.146.154L12 19.672l5.303-5.304-3.535-3.535-1.06 1.06a3 3 0 1 1-4.244-4.242l2.102-2.103a4.501 4.501 0 0 0-5.837.189l-.154.146zm8.486 2.828a1 1 0 0 1 1.414 0l4.242 4.242.708-.706a4.5 4.5 0 0 0-6.211-6.51l-.153.146-3.182 3.182a1 1 0 0 0-.078 1.327l.078.087a1 1 0 0 0 1.327.078l.087-.078 1.768-1.768z"></path>
                        </g>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">End-to-End Service of Supply & Installation</p>
            </div>
        </div>
        <div class="flex mt-12">
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-245.76 -245.76 1515.52 1515.52" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.01024">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M864 512a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM881.92 389.44a23.68 23.68 0 0 0-5.76-2.88 19.84 19.84 0 0 0-6.08-1.92 32 32 0 0 0-28.8 8.64A32 32 0 0 0 832 416a32 32 0 1 0 64 0 33.6 33.6 0 0 0-9.28-22.72z" fill="#f7a90c"></path>
                        <path d="M800 128h-32a96 96 0 0 0-96-96H352a96 96 0 0 0-96 96H224a96 96 0 0 0-96 93.44v677.12A96 96 0 0 0 224 992h576a96 96 0 0 0 96-93.44V736a32 32 0 0 0-64 0v162.56a32 32 0 0 1-32 29.44H224a32 32 0 0 1-32-29.44V221.44A32 32 0 0 1 224 192h32a96 96 0 0 0 96 96h320a96 96 0 0 0 96-96h32a32 32 0 0 1 32 29.44V288a32 32 0 0 0 64 0V221.44A96 96 0 0 0 800 128z m-96 64a32 32 0 0 1-32 32H352a32 32 0 0 1-32-32V128a32 32 0 0 1 32-32h320a32 32 0 0 1 32 32z" fill="#f7a90c"></path>
                        <path d="M712.32 426.56L448 721.6l-137.28-136.32A32 32 0 0 0 265.6 630.4l160 160a32 32 0 0 0 22.4 9.6 32 32 0 0 0 23.04-10.56l288-320a32 32 0 0 0-47.68-42.88z" fill="#f7a90c"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Transparent Pricing & Detailed Quotations</p>
            </div>
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-4.32 -4.32 32.64 32.64" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e5e1e1" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect width="24" height="24" fill="white"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5C14 11.9853 11.9853 14 9.5 14C7.01472 14 5 11.9853 5 9.5Z" fill="#323232"></path>
                        <path d="M14.3675 12.0632C14.322 12.1494 14.3413 12.2569 14.4196 12.3149C15.0012 12.7454 15.7209 13 16.5 13C18.433 13 20 11.433 20 9.5C20 7.567 18.433 6 16.5 6C15.7209 6 15.0012 6.2546 14.4196 6.68513C14.3413 6.74313 14.322 6.85058 14.3675 6.93679C14.7714 7.70219 15 8.5744 15 9.5C15 10.4256 14.7714 11.2978 14.3675 12.0632Z" fill="#323232"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.64115 15.6993C5.87351 15.1644 7.49045 15 9.49995 15C11.5112 15 13.1293 15.1647 14.3621 15.7008C15.705 16.2847 16.5212 17.2793 16.949 18.6836C17.1495 19.3418 16.6551 20 15.9738 20H3.02801C2.34589 20 1.85045 19.3408 2.05157 18.6814C2.47994 17.2769 3.29738 16.2826 4.64115 15.6993Z" fill="#323232"></path>
                        <path d="M14.8185 14.0364C14.4045 14.0621 14.3802 14.6183 14.7606 14.7837V14.7837C15.803 15.237 16.5879 15.9043 17.1508 16.756C17.6127 17.4549 18.33 18 19.1677 18H20.9483C21.6555 18 22.1715 17.2973 21.9227 16.6108C21.9084 16.5713 21.8935 16.5321 21.8781 16.4932C21.5357 15.6286 20.9488 14.9921 20.0798 14.5864C19.2639 14.2055 18.2425 14.0483 17.0392 14.0008L17.0194 14H16.9997C16.2909 14 15.5506 13.9909 14.8185 14.0364Z" fill="#323232"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">Qualified and Licensed Professionals</p>
            </div>
            <div class="flex">
                <svg width="64px" height="64px" viewBox="-6.24 -6.24 36.48 36.48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">A Holistic Solution Personalised To You</p>
            </div>
        </div>
        <div>
            <p style="width: 1080px;text-align: justify;font-size: 17px;color: #777;margin-top: 42px;">
                Everyworks offer a wide range of home maintenance services including <span style="color: #f3b04f;">handyman</span>,<span style="color: #f3b04f;">electrical</span> , <span style="color: #f3b04f;">plumbing</span>, and aircon services that will save you time from searching for other service providers. Built on transparency and trust, we will provide all the information that you require to best serve your needs. Our seamless and hassle-free service offerings will simplify the process of hiring a handyman service. Turn to Everyworks Singapore and we will get the job done. You will get more time to do the things you love so leave the rest to us. For other repair and maintenance work, please visit our <span style="color: #f3b04f;">resources page</span> .</p>
        </div>
    </section> -->

    <section style="border-top: 1px solid;width: 100%;margin-top: 60px;text-align: center;">
        <div>
            <p style="font-size: 24px;color: #000;margin-top: 8px;font-family: fantasy;letter-spacing: 2px;text-shadow: 2px 2px 0 rgba(0,0,0,.25);">WHAT YOU CAN EXPECT</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div class="border-r-2 border-b-2 p-4" style="margin: 10px;">
                <svg width="64px" height="64px" viewBox="-11.52 -11.52 71.04 71.04" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="1.8240000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #f7a90c;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M40.83,8.48c1.14,0,2,1,1.54,2.86l-5.58,26.3c-.39,1.87-1.52,2.32-3.08,1.45L20.4,29.26a.4.4,0,0,1,0-.65L35.77,14.73c.7-.62-.15-.92-1.07-.36L15.41,26.54a.46.46,0,0,1-.4.05L6.82,24C5,23.47,5,22.22,7.23,21.33L40,8.69a2.16,2.16,0,0,1,.83-.21Z"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Fast Response & Anticipation of Your Needs</p>
            </div>

            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-4.56 -4.56 33.12 33.12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="#000000" stroke-width="0.624" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">5 -Star Customer Service</p>
            </div>

            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-9.12 -9.12 42.24 42.24" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M3.161 4.469a6.5 6.5 0 0 1 8.84-.328 6.5 6.5 0 0 1 9.178 9.154l-7.765 7.79a2 2 0 0 1-2.719.102l-.11-.101-7.764-7.791a6.5 6.5 0 0 1 .34-8.826zm1.414 1.414a4.5 4.5 0 0 0-.146 6.21l.146.154L12 19.672l5.303-5.304-3.535-3.535-1.06 1.06a3 3 0 1 1-4.244-4.242l2.102-2.103a4.501 4.501 0 0 0-5.837.189l-.154.146zm8.486 2.828a1 1 0 0 1 1.414 0l4.242 4.242.708-.706a4.5 4.5 0 0 0-6.211-6.51l-.153.146-3.182 3.182a1 1 0 0 0-.078 1.327l.078.087a1 1 0 0 0 1.327.078l.087-.078 1.768-1.768z"></path>
                        </g>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">End-to-End Service of Supply & Installation</p>
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-245.76 -245.76 1515.52 1515.52" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.01024">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M864 512a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM881.92 389.44a23.68 23.68 0 0 0-5.76-2.88 19.84 19.84 0 0 0-6.08-1.92 32 32 0 0 0-28.8 8.64A32 32 0 0 0 832 416a32 32 0 1 0 64 0 33.6 33.6 0 0 0-9.28-22.72z" fill="#f7a90c"></path>
                        <path d="M800 128h-32a96 96 0 0 0-96-96H352a96 96 0 0 0-96 96H224a96 96 0 0 0-96 93.44v677.12A96 96 0 0 0 224 992h576a96 96 0 0 0 96-93.44V736a32 32 0 0 0-64 0v162.56a32 32 0 0 1-32 29.44H224a32 32 0 0 1-32-29.44V221.44A32 32 0 0 1 224 192h32a96 96 0 0 0 96 96h320a96 96 0 0 0 96-96h32a32 32 0 0 1 32 29.44V288a32 32 0 0 0 64 0V221.44A96 96 0 0 0 800 128z m-96 64a32 32 0 0 1-32 32H352a32 32 0 0 1-32-32V128a32 32 0 0 1 32-32h320a32 32 0 0 1 32 32z" fill="#f7a90c"></path>
                        <path d="M712.32 426.56L448 721.6l-137.28-136.32A32 32 0 0 0 265.6 630.4l160 160a32 32 0 0 0 22.4 9.6 32 32 0 0 0 23.04-10.56l288-320a32 32 0 0 0-47.68-42.88z" fill="#f7a90c"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Transparent Pricing & Detailed Quotations</p>
            </div>
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-4.32 -4.32 32.64 32.64" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e5e1e1" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect width="24" height="24" fill="white"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5C14 11.9853 11.9853 14 9.5 14C7.01472 14 5 11.9853 5 9.5Z" fill="#323232"></path>
                        <path d="M14.3675 12.0632C14.322 12.1494 14.3413 12.2569 14.4196 12.3149C15.0012 12.7454 15.7209 13 16.5 13C18.433 13 20 11.433 20 9.5C20 7.567 18.433 6 16.5 6C15.7209 6 15.0012 6.2546 14.4196 6.68513C14.3413 6.74313 14.322 6.85058 14.3675 6.93679C14.7714 7.70219 15 8.5744 15 9.5C15 10.4256 14.7714 11.2978 14.3675 12.0632Z" fill="#323232"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.64115 15.6993C5.87351 15.1644 7.49045 15 9.49995 15C11.5112 15 13.1293 15.1647 14.3621 15.7008C15.705 16.2847 16.5212 17.2793 16.949 18.6836C17.1495 19.3418 16.6551 20 15.9738 20H3.02801C2.34589 20 1.85045 19.3408 2.05157 18.6814C2.47994 17.2769 3.29738 16.2826 4.64115 15.6993Z" fill="#323232"></path>
                        <path d="M14.8185 14.0364C14.4045 14.0621 14.3802 14.6183 14.7606 14.7837V14.7837C15.803 15.237 16.5879 15.9043 17.1508 16.756C17.6127 17.4549 18.33 18 19.1677 18H20.9483C21.6555 18 22.1715 17.2973 21.9227 16.6108C21.9084 16.5713 21.8935 16.5321 21.8781 16.4932C21.5357 15.6286 20.9488 14.9921 20.0798 14.5864C19.2639 14.2055 18.2425 14.0483 17.0392 14.0008L17.0194 14H16.9997C16.2909 14 15.5506 13.9909 14.8185 14.0364Z" fill="#323232"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">Qualified and Licensed Professionals</p>
            </div>
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-6.24 -6.24 36.48 36.48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">A Holistic Solution Personalised To You</p>
            </div>
            <!-- Repeat the above structure for other items -->
        </div>

        <div>
            <p style="width: 90%;text-align: justify;font-size: 14px;color: #777;margin-top: 20px;margin-left: auto;margin-right: auto;">
                PPH M&E Ltd offer a wide range of home maintenance services including <span style="color: #f3b04f;">handyman</span>, <span style="color: #f3b04f;">electrical</span>, <span style="color: #f3b04f;">plumbing</span>, and aircon services that will save you time from searching for other service providers. Built on transparency and trust, we will provide all the information that you require to best serve your needs. Our seamless and hassle-free service offerings will simplify the process of hiring a handyman service. Turn to PPH M&E Ltd Singapore and we will get the job done. You will get more time to do the things you love so leave the rest to us. For other repair and maintenance work, please visit our <span style="color: #f3b04f;">resources page</span>.
            </p>
        </div>
    </section>

    <section style="border-top: 1px solid; max-width: 100%; margin-top: 60px; text-align: center;">
        <div>
            <p style="font-size: 24px; color: #000; margin-top: 8px; font-family: fantasy; letter-spacing: 3px; text-shadow: 2px 2px 0 rgba(0,0,0,.25);">WHY CHOOSE PPH M&E Ltd</p>
        </div>

        <div class="relative mx-auto mt-10" style="max-width: 100%; width: 90%;">
            <img class="absolute h-full w-full object-cover" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHdvcmt8ZW58MHx8MHx8fDA%3D" style="border-radius: 8px;">
            <div class="text-black lg:w-1/2 bg-yellow-500 bg-opacity-95 p-5 opacity-90 backdrop-blur-lg lg:p-12" style=" padding: 20px; border-radius: 8px;">
                <h2 class="font-serif text-2xl md:text-4xl font-bold">BOOK HOME MAINTENANCE SERVICES</h2>
                <p class="mb-4 font-serif font-light text-sm md:text-base">With our range of handyman services including aircon, plumbing, and electrical services, we can solve your home repair and maintenance issues in a single arrangement. No need to book different service providers and have them arrive at different schedules.</p>
                <a href="#" class="mt-6 inline-block rounded-xl border-2 px-6 md:px-10 py-3 font-semibold border-black hover:bg-blue hover:text-blue-600">See Services</a>
            </div>
        </div>

        <div class="container mx-auto p-6 mt-16">
            <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <img src="https://www.betterup.com/hs-fs/hubfs/Blog%20Images/how%20to%20carry%20a%20conversation/coworkers-chatting-in-office-how-to-carry-a-conversation.jpg?width=867&name=coworkers-chatting-in-office-how-to-carry-a-conversation.jpg" alt="Calendar" class="rounded-lg shadow-lg w-full">
                </div>

                <div class="w-full md:w-1/2 p-2">
                    <h1 class="text-xl md:text-2xl font-bold mb-4">JUST WHATSAPP TO GET ADVICE AND A DIRECT QUOTE</h1>
                    <p class="mb-4 text-sm md:text-base">
                        Customers can enquire about PPH M&E Ltd services by simply messaging us on Whatsapp. You can send a picture of the problem you are facing, or describe what you are looking for, and our customer service officers can help solve your needs quickly.
                    </p>
                    <a style="margin-left: 13%;" id="sendbtn" class="shortcode_wa_button mt-6 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="https://api.whatsapp.com/send?phone=65 6575 1226&amp;text=Hello, I would like to know more about the following home service" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="img/whatsapp.png" alt="" class="mr-2"><span>WhatsApp to Start Now!</span>
                    </a>
                </div>
            </div>
        </div>



        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                <figcaption class="flex items-center justify-center ">
                    <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M142.9 736c-11.5 0-22.7-6.3-28.4-17.2C81.5 655.4 64 583.9 64 512c0-60.5 11.8-119.1 35.2-174.4 22.6-53.4 54.9-101.3 96-142.4s89-73.4 142.4-96C392.9 75.8 451.5 64 512 64c47.3 0 93.9 7.3 138.4 21.8 16.8 5.5 26 23.5 20.6 40.3-5.5 16.8-23.5 26-40.3 20.6C592.5 134.3 552.6 128 512 128c-211.7 0-384 172.3-384 384 0 62.5 14.5 122.2 43.2 177.2 8.2 15.7 2.1 35-13.6 43.2-4.7 2.4-9.7 3.6-14.7 3.6zM704.2 913.1c-11.5 0-22.7-6.3-28.4-17.2-8.2-15.7-2.1-35 13.6-43.2C816.8 786.2 896 655.7 896 512c0-19.8-1.5-39.7-4.5-59.1-2.7-17.5 9.3-33.8 26.7-36.5 17.5-2.7 33.8 9.3 36.5 26.7 3.5 22.6 5.3 45.8 5.3 68.9 0 83.5-23.1 164.9-66.8 235.5-42.5 68.6-102.7 124.6-174.2 161.9-4.8 2.5-9.9 3.7-14.8 3.7z" fill="#FFEA00"></path>
                            <path d="M259.9 530.5a117.2 146.5 0 1 0 234.4 0 117.2 146.5 0 1 0-234.4 0Z" fill="#3D5AFE"></path>
                            <path d="M506.1 960c140.7 0 160.9-65.1 43.7-143-49.5-32.9-108.9-52-172.7-52s-123.3 19.2-172.7 52c-117.2 77.9-97 143 43.7 143h258z" fill="#3D5AFE"></path>
                            <path d="M733.2 193.1a52.1 65.1 0 1 0 104.2 0 52.1 65.1 0 1 0-104.2 0Z" fill="#8C9EFF"></path>
                            <path d="M842.7 384c62.5 0 71.5-28.9 19.4-63.5-22-14.6-48.4-23.1-76.8-23.1s-54.8 8.5-76.8 23.1c-52.1 34.6-43.1 63.5 19.4 63.5h114.8z" fill="#8C9EFF"></path>
                        </g>
                    </svg>
                </figcaption>
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">CUSTOMER SATISFACTION GUARANTEED</h3>
                    <p class="my-4">Our company’s policy is to maintain honesty and transparency in our prices. We are committed to providing you with effective and efficient home service solutions. We also provide workmanship warranties to ensure the job is truly well done. We are the trusted service providers to ensure guaranteed satisfaction with affordable and reliable home service offerings.</p>
                </blockquote>
            </figure>

            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                </figcaption>
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">SHOP WITH US FOR ONE-STOP CONVENIENCE</h3>
                    <p class="my-4">Customers can shop for products if they are in need of new installations or replacements for their home or office fixtures and appliances. Through WhatsApp, our customer service can provide recommendations and advice on the products we offer. We are the trusted service providers to ensure guaranteed satisfaction with affordable and reliable home service offerings.</p>
                </blockquote>
            </figure>
        </div>

    </section>

    <footer class="px-4 py-8 dark:bg-gray-100 dark:text-gray-600 footer">
        <div class="container flex flex-wrap items-center justify-center mx-auto space-y-4 sm:justify-between sm:space-y-0">
            <div class="flex flex-row pr-3 space-x-4 sm:space-x-8">
                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full dark:bg-violet-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 rounded-full dark:text-gray-50">
                        <path d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z"></path>
                    </svg>
                </div>
                <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
                    <li>
                        <a rel="noopener noreferrer" href="#">Terms of Use</a>
                    </li>
                    <li>
                        <a rel="noopener noreferrer" href="#">Privacy</a>
                    </li>
                </ul>
            </div>
            <ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
                <li>
                    <a rel="noopener noreferrer" href="#">Instagram</a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#">Facebook</a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#">Twitter</a>
                </li>
            </ul>
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
            navbar.style.top = "-345px";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };
</script>
