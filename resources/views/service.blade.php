<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - PHH M&E SERVICES PTE LTD</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Additional CSS styles can be linked here -->
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<style>
    .fixed-image-height {
        height: 500px;
        /* Set a fixed height */
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
        background-image: url('https://media.istockphoto.com/id/1458743865/photo/professional-plumber-connects-brass-fittings-to-plumbing-hose-close-up-of-hand-of-the-master.jpg?s=612x612&w=0&k=20&c=52y69BS0v_zoJYwBxADeOp4sRkBL0ojcChFQB5haUKE=');
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

    @media (max-width: 768px) {
        .services-container {
            width: 100% !important;
            padding: 10px !important;
        }

        .services-title {
            font-size: 24px !important;
        }

        .separator {
            width: 90% !important;
        }
    }

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
                        <ul class="kkg hidden bg-white mt-2 py-2 w-32 rounded-md shadow-lg z-10">
                            <li><a href="/review" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Review</a></li>
                            <li><a href="/mission" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Our Mission</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/service" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white lg:text-red-500 underline">Service</a>
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
    <!-- component -->


    <section class="parallax mt-16" style="position: relative; background: url('https://img.freepik.com/premium-photo/male-hand-touching-service-concept_220873-7826.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716508800&semt=ais_user') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">Service</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Service</p>
        </div>
    </section>



    <section>
        <div style="position: relative; height: 87px; width: 90%; max-width: 438px; margin: 2rem auto; padding: 18px; border-right: 3px solid #ffc527; border-left: 3px solid #ffc527; text-align: center;">
            <h1 style="font-size: 36px; font-weight: 700; color: black; position: relative;">ALL SERVICES</h1>
            <div style="position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%); background-color: white; padding: 0 0.5rem;">
                <span>
                    <img src="https://www.everyworks.com/wp-content/uploads/2018/04/title-img.png" alt="Title Decoration" style="display: block; max-width: 100%; height: auto;">
                </span>
            </div>
            <div style="content: ''; position: absolute; left: 0; right: 0; top: 0; height: 2px; background-color: #ffc527;"></div>
            <div style="content: ''; position: absolute; left: 0; right: 0; bottom: 0; height: 2px; background-color: #ffc527;"></div>
        </div>
    </section>

    <hr style="height: 20px; width: 73%; margin: 20px auto; border-top: 3px solid black; color: black; font-weight: 900;">

    <!-- component -->


    <section style="padding: 0 1rem;">
        <div class="mt-10 mb-10 flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-5xl gap-4">
                <!-- Card 1 -->
                <div class="grid relative">
                    <a class="group hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9" href="">
                        <img src="https://www.everyworks.com/wp-content/uploads/2019/06/aircon-filter-aircon-servicing-singapore-everyworks-2.jpg" alt="">
                        <p class="text-2xl text-black group-hover:text-yellow-400 text-center mt-4" style="font-weight: 600;font-family: math;">Aircon Services</p>
                        <ul class="custom-list pl-5 mt-6 leading-6 text-lg font-semibold text-gray-500 group-hover:text-white">
                            <li><span style="color: #F5C906;">Aircon Servicing</span></li>
                            <li><span style="color: #F5C906;">Aircon Installation</span></li>
                            <li><span style="color: #F5C906;">Aircon Chemical Overhaul</span></li>
                            <li><span style="color: #F5C906;">Aircon Repair</span></li>
                            <li><span style="color: #F5C906;">Aircon Leaking Water</span></li>
                            <li><span style="color: #F5C906;">Aircon Not Cold</span></li>
                            <li><span style="color: #F5C906;">Aircon Gas Top-up</span></li>
                            <li><span style="color: #F5C906;">Commercial & Industrial Aircon</span></li>
                        </ul>

                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-1 absolute top-0 left-0"> </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="grid relative">
                    <a class="group hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9" href="">
                        <img src="https://www.everyworks.com/wp-content/uploads/2019/06/aircon-filter-aircon-servicing-singapore-everyworks-2.jpg" alt="">
                        <p class="text-2xl text-black group-hover:text-yellow-400 text-center mt-4" style="font-weight: 600;font-family: math;">Electrical Services</p>
                        <ul class="custom-list pl-5 mt-6 leading-6 text-lg font-semibold text-gray-500 group-hover:text-white">
                            <li><span style="color: #F5C906;">Electrical Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Electrical Repair</span></li>
                            <li><span style="color: #F5C906;">Light Services</span></li>
                            <li><span style="color: #F5C906;">Light Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Light Repair</span></li>
                            <li><span style="color: #F5C906;">Electrical Switch Services</span></li>
                            <li><span style="color: #F5C906;">Light Switch Services</span></li>
                            <li><span style="color: #F5C906;">Power Sockets & Power Points Services</span></li>
                            <li><span style="color: #F5C906;">HDB Electrician</span></li>
                            <li><span style="color: #F5C906;">Electrical Troubleshooting</span></li>
                            <li><span style="color: #F5C906;">Emergency Electrician</span></li>
                            <li><span style="color: #F5C906;">Doorbell Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Smart Switch Installation Services</span></li>
                            <li><span style="color: #F5C906;">Circuit Breaker Services</span></li>
                            <li><span style="color: #F5C906;">Electrical Distribution Board (DB Box) Services</span></li>
                            <li><span style="color: #F5C906;">Electrical Wiring</span></li>
                            <li><span style="color: #F5C906;">Power Trip/Power Failure</span></li>
                        </ul>

                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-1 absolute top-0 left-0"> </div>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="grid relative">
                    <a class="group hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9" href="">
                        <img src="https://www.everyworks.com/wp-content/uploads/2019/06/aircon-filter-aircon-servicing-singapore-everyworks-2.jpg" alt="">
                        <p class="text-2xl text-black group-hover:text-yellow-400 text-center mt-4" style="font-weight: 600;font-family: math;">Plumbing Services</p>
                        <ul class="custom-list pl-5 mt-6 leading-6 text-lg font-semibold text-gray-500 group-hover:text-white">
                            <li><span style="color: #F5C906;">Rubbish Chute</span></li>
                            <li><span style="color: #F5C906;">Door Repair</span></li>
                            <li><span style="color: #F5C906;">Door Knob Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">Door Hinge Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">Door Handle Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">HDB Gate Lock Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">Door Lock Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">HDB Main Door Lock Installation/Replacement/Repair</span></li>
                            <li><span style="color: #F5C906;">Change Door Lock</span></li>
                            <li><span style="color: #F5C906;">Cupboard Hinge Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Cabinet Hinge Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Hydraulic Hinge Installation/Replacement</span></li>
                            <li><span style="color: #F5C906;">Handyman Drilling Services</span></li>
                            <li><span style="color: #F5C906;">TV Bracket Installation</span></li>
                            <li><span style="color: #F5C906;">Wall Mounting Installation</span></li>
                            <li><span style="color: #F5C906;">Pull Up Bar Installation</span></li>
                            <li><span style="color: #F5C906;">Punching Bag Installation Service</span></li>
                            <li><span style="color: #F5C906;">Furniture Assembly</span></li>
                            <li><span style="color: #F5C906;">Carpentry</span></li>
                        </ul>

                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-1 absolute top-0 left-0"> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full h-56 lg:h-60 rounded-xl justify-center items-center focus:outline-none bg-gradient-to-t from-yellow-500 to-yellow-300 mb-10">
        <div style="padding: 2rem; text-align: center;">
            <h1 style="font-size: 2rem; font-family: math; font-weight: 700;">Prefer To Chat With Customer Service?</h1>
            <a id="sendbtn" style="margin: 1rem auto; display: block; max-width: 200px;" class="shortcode_wa_button inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="https://api.whatsapp.com/send?phone=65 6575 1226&amp;text=Hello, I would like to know more about the following home service" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                <img src="img/whatsapp.png" alt="" class="mr-2"><span>WhatsApp to Start Now!</span>
            </a>
        </div>
    </section>



    <section class="mb-10 mt-10">
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="lg:text-center">
                    <h2 class="font-heading mb-4 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest text-black uppercase title-font">
                        Why choose us?
                    </h2>
                    <p class="font-heading mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        We know pipes, we know fixtures. We are plumbing experts.
                    </p>
                    <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-auto">
                        We know how to handle taxation for all the
                        countried we operate in. We care for our customers and help them manage cashflows.
                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/503163/api-settings.svg">
                                </div>
                                <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Your Happiness Is Our Happiness</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                We believe well-informed customers are happy customers. We create open and accessible communication channels within our company and between our clients for a positive and productive working relationship.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/503138/webpack.svg">
                                </div>
                                <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">We Put Your Convenience First
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Our flexible range of services is sure to answer most of your house repair and house improvement needs. We meet your demands at the flexibility of your time, and exert our best efforts to resolve the problem.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/511771/dashboard-671.svg">

                                </div>
                                <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">
                                    Openness & Transparency
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">We are open and transparent with our service rates and methods, as we believe well-informed customers are happy customers. We create open and accessible communication channels within our company and between our clients for a positive and productive working relationship.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/76267/free-commercial-label.svg">

                                </div>
                                <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">We Take Pride In Workmanship
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Your satisfaction is our satisfaction. What keeps us going strong is when each job we complete with beautiful results, brings joy to both us and the clients.
                            </dd>
                        </div>
                    </dl>
                </div>

            </div>
        </div>
    </section>



    <!-- component -->
    <footer class="footer bg-blue-100/80 font-sans dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get an update.</h1>

                    <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                        <input id="email" type="text" class="px-4 py-2 text-white bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address" />

                        <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-white focus:ring focus:ring-gray-300 focus:ring-opacity-80">
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
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://web.whatsapp.com/" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>
</body>

</html>
<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const accordionContent = this.nextElementSibling;
                const icon = this.querySelector('.icon');
                accordionContent.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>
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
            navbar.style.top = "-341px";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };
</script>
