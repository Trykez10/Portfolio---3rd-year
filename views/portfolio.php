<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $fullname . "'s Portfolio" ?></title>
    <link rel="stylesheet" href="assets/output.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.ico">
    <script src="assets/functions.js" defer></script>
    <script src="https://kit.fontawesome.com/a59df86d25.js" crossorigin="anonymous"></script>
</head>


<body class="bg-gray-100">
    <nav class="h-20 bg-white/20 backdrop-blur-3xl border-b border-gray-500 lg:flex sticky top-0 z-50  ">
        <div class="w-full max-w-7xl mx-auto flex items-center justify-between h-full px-5">
            <h1 class="text-xl font-medium"> <?= $navbarlogo ?></h1>

            <!-- DESKTOP VIEW -->
            <ul class="hidden lg:flex space-x-4 ">
                <div class="flex space-x-6">
                    <div
                        class="w-15 pb-2 text-center border-b-2 border-black transition-all duration-200 hover:border-transparent">
                        <a href="#home">
                            <li class="text-gray-700 cursor-pointer text-xs">Home</li>
                        </a>
                    </div>

                    <div
                        class="w-15 pb-2 text-center border-b-2 border-black transition-all duration-200 hover:border-transparent">
                        <a href="#projects">
                            <li class="text-gray-700 cursor-pointer text-xs">Projects</li>
                        </a>
                    </div>

                    <div
                        class="w-15 pb-2 text-center border-b-2 border-black transition-all duration-200 hover:border-transparent">
                        <a href="#techstack">
                            <li class="text-gray-700 cursor-pointer text-xs">Tech Stack</li>
                        </a>
                    </div>

                    <div
                        class="w-15 pb-2 text-center border-b-2 border-black transition-all duration-200 hover:border-transparent">
                        <a href="#contact">
                            <li class="text-gray-700 cursor-pointer text-xs">Contact</li>
                        </a>
                    </div>
                </div>


            </ul>
            <button
                class="cursor-pointer border border-gray-400 transition-all ease-linear duration-200 px-5 py-1 text-sm rounded-md hidden hover:bg-black hover:text-white lg:block">
                <i class="fa-solid fa-download mr-2"></i>Resume
            </button>

            <!-- Mobile view -->
            <!-- Nav button -->
            <div id="menu" onclick="openMenu()"
                class="flex lg:hidden flex-col justify-center gap-y-1 cursor-pointer relative z-50">
                <span id="line1" class="w-7 h-1 bg-black transition-all duration-300"></span>
                <span id="line2" class="w-7 h-1 bg-black transition-all duration-300"></span>
                <span id="line3" class="w-7 h-1 bg-black transition-all duration-300"></span>
            </div>

            <!-- Mobile Nav-->
            <div id="MenuLists"
                class="transform transition-all translate-x-20 duration-300 ease-linear opacity-0 hidden bg-white shadow-black shadow-md flex-col h-fit absolute top-16 right-2 w-40 z-40">
                <ul class="flex flex-col gap-y-3 px-4 py-3">
                    <li
                        class="text-gray-700 text-sm hover:bg-gray-500 transition-all duration-200 hover:text-white cursor-pointer">
                        <a href="#home">Home</a>
                    </li>

                    <li
                        class="text-gray-700 text-sm hover:bg-gray-500 transition-all duration-200 hover:text-white cursor-pointer">
                        <a href="#projects">Projects</a>
                    </li>

                    <li
                        class="text-gray-700 text-sm hover:bg-gray-500 transition-all duration-200 hover:text-white cursor-pointer">
                        <a href="#techstack">Tech Stack</a>
                    </li>

                    <li
                        class="text-gray-700 text-sm hover:bg-gray-500 transition-all duration-200 hover:text-white cursor-pointer">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <button
                    class="cursor-pointer border border-gray-400 px-5 py-1 text-sm transition-all duration-200 hover:bg-black hover:text-white block lg:hidden">
                    <i class="fa-solid fa-download mr-2"></i>Resume
                </button>
            </div>

        </div>
    </nav>


    <!-- Landing Page -->
    <!-- Container -->
    <section id="home"
        class="px-6 lg:px-10 mt-10 lg:mt-25 flex flex-col-reverse lg:flex-row items-center justify-center lg:space-x-40">

        <!-- Text Content -->
        <div class="flex flex-col justify-center text-center lg:text-left lg:ml-15 max-w-xl">
            <p class="border border-gray-400 px-4 text-sm rounded-md font-medium w-fit mx-auto lg:mx-0">
                Available for new opportunities
            </p>

            <div class="mt-2">
                <h1 class="text-lg">Hi, I'm
                    <?= $fullname ?>
                </h1>
                <h1 class="text-lg">
                    <?= $career ?>
                </h1>
            </div>

            <div class="mt-2 text-gray-500 text-lg">
                I create functional and user-focused web applications. As a
                <?= $course ?> student, I’m developing my
                skills in Laravel and modern web development through hands-on projects and continuous learning.
            </div>

            <div class="mt-5 space-x-4">
                <a href="#projects">
                    <button class="bg-black text-white px-4 py-1 text-md rounded-md">View my work
                        <i class="fa-solid fa-arrow-right-to-bracket ml-2"></i>
                    </button>
                </a>
                <a href="#contact">
                    <button class="border border-gray-400 px-3 py-1 text-md rounded-md">Get in touch</button>
                </a>
            </div>

            <div class="mt-5 space-x-4 text-xl">
                <i class="fa-brands fa-github cursor-pointer"></i>
                <i class="fa-brands fa-linkedin cursor-pointer"></i>
                <i class="fa-brands fa-facebook cursor-pointer"></i>
                <i class="fa-solid fa-envelope cursor-pointer"></i>
            </div>
        </div>

        <!-- Image -->
        <div class="mb-6 lg:mb-0">
            <img src="assets/photo-1719400471588-575b23e27bd7.jpg" alt="My Photo"
                class="w-60 h-auto rounded-2xl mx-auto lg:w-75 lg:h-fit lg:mx-0">
        </div>
    </section>


    <section class="px-6 lg:px-10 mt-10 lg:mt-40 lg:mb-10 flex flex-col items-center">

        <div class="flex flex-col mx-auto text-center">
            <h1 id="projects" class="text-xl font-medium">Featured Projects</h1>
            <p class="mt-5 text-gray-500">
                Here are some of my recent projects that showcase my skills and experience
            </p>
        </div>

        <!-- Project cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10 mb-15 w-full max-w-6xl px-4">
            <!-- CARD1 -->
            <div class="border border-gray-400 rounded-lg hover:shadow-xl flex flex-col">
                <img src="assets/Screenshot 2025-08-25 232605.png" alt="Project 1 Landing Page"
                    class="w-full h-fit rounded-tl-lg rounded-tr-lg border-b border-gray-400">

                <h1 class="ml-5 mt-10 font-medium">Food Recipe Website</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    Static food recipe blog site created using HTML, Tailwind CSS, and JavaScript.
                    Includes features like responsive design, modals, and interactive elements to enhance user
                    experience.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap justify-center mx-auto my-5 gap-3">
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">HTML</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Tailwind</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">JavaScript</div>
                </div>

                <!-- fixed bottom button -->
                <div class="mt-auto flex justify-center mb-5">
                    <a href="https://mmmmazing-food-blog.netlify.app/" target="_blank"
                        class="text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md hover:bg-gray-200">
                        Visit project here
                    </a>
                </div>
            </div>

            <!-- CARD2 -->
            <div class="border border-gray-400 rounded-lg hover:shadow-xl flex flex-col">
                <img src="assets/Screenshot 2025-08-27 002256.png" alt="Project 2"
                    class="w-full h-fit rounded-tl-lg rounded-tr-lg border-b border-gray-400">

                <h1 class="ml-5 mt-10 font-medium">NovaEdge Electives</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    A tech startup project that provides innovative IT solutions like custom software development,
                    web and mobile app development, cloud services, and IT consulting to help businesses leverage
                    technology.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap justify-center my-5 gap-3">
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Blade PHP</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Tailwind</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">JavaScript</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Laravel</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">MySQL</div>
                </div>

                <!-- centered link -->
                <div class="flex justify-center mb-5 mt-auto">
                    <a href="" target=""
                        class="text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md hover:bg-gray-200">
                        Visit project here
                    </a>
                </div>
            </div>

            <!-- CARD3 -->
            <div class="border border-gray-400 rounded-lg hover:shadow-xl flex flex-col">
                <img src="assets/download.jpg" alt="Project 3"
                    class="w-full h-fit rounded-tl-lg rounded-tr-lg border-b border-gray-400">

                <h1 class="ml-5 mt-10 font-medium">Library Management System</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    A Desktop Library Management System is a standalone software that helps librarians organize, track,
                    and manage books, members, and borrowing activities digitally.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap justify-center mx-auto my-5 gap-3">
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">C# .NET</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">MySQL</div>
                </div>

                <!-- fixed bottom button -->
                <div class="mt-auto flex justify-center mb-5">
                    <a href="" target=""
                        class="text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md hover:bg-gray-200">
                        Visit project here
                    </a>
                </div>
            </div>
        </div>

        <!-- All project links -->
        <a class="w-fit mx-auto text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md cursor-pointer mb-8">
            View all projects here <i class="fa-solid fa-arrow-right"></i>
        </a>
    </section>

    <div id="techstack" class="px-20 py-10 ">
        <div class="bg-white border border-gray-200 rounded-lg shadow p-6">

            <div class="text-center mb-6 w-fit mx-auto">
                <div class="mx-auto w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
                    <!-- replace with your SVG / icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold">Technology Stack</h3>
                <p class="text-gray-500 text-sm">
                    The tools and technologies I use to build amazing digital experiences
                </p>
            </div>

            <!-- Card content (skills) -->
            <div class="flex flex-wrap justify-center gap-3">
                <?= $stackList ?>
            </div>
        </div>
    </div>

    <div
        class="flex flex-col lg:flex-row items-center justify-center w-full px-6 lg:px-10 mt-10 lg:mt-20 lg:mb-20 lg:space-x-10">

        <!-- Contact Info -->
        <div class="flex flex-col mx-auto justify-center">
            <p class="px-4 text-sm rounded-md font-medium w-fit">Get in touch</p>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-regular fa-envelope bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Email</p>
                    <p>
                        <?= $email ?>
                    </p>
                </div>
            </div>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-solid fa-phone bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Phone</p>
                    <p>
                        <?= $phone ?>
                    </p>
                </div>
            </div>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-solid fa-location-dot bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Address</p>
                    <p>
                        <?= $address ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div id="contact" class="max-w-4xl w-full mt-10 px-4 lg:px-8">
            <div class="bg-white border border-gray-400 rounded-lg shadow-md p-6">
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Send a Message</h3>
                    <p class="text-gray-500">Fill out the form below and I'll get back to you soon</p>
                </div>

                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label for="name" class="text-sm font-medium mb-1">Name</label>
                            <input type="text" id="name" placeholder="Your name"
                                class="border border-gray-300 rounded-md bg-gray-100 p-2 w-full text-sm">
                        </div>

                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-medium mb-1">Email</label>
                            <input type="email" id="email" placeholder="Your email"
                                class="border border-gray-300 rounded-md bg-gray-100 p-2 w-full text-sm">
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label for="subject" class="text-sm font-medium mb-1">Subject</label>
                        <input type="text" id="subject" placeholder="Project inquiry"
                            class="border border-gray-300 rounded-md bg-gray-100 p-2 w-full text-sm">
                    </div>

                    <div class="flex flex-col">
                        <label for="message" class="text-sm font-medium mb-1">Message</label>
                        <textarea id="message" placeholder="Tell me about your project..."
                            class="border border-gray-300 rounded-md bg-gray-100 p-2 w-full h-32 text-sm resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-700 cursor-pointer transition text-sm font-medium">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class=" bg-white border-t py-5 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Name & Role -->
                <div class="mb-4 md:mb-0 text-center md:text-left">
                    <h3 class="text-black font-bold mb-2">
                        <?= $fullname ?>
                    </h3>
                    <p class="text-gray-500">
                        <?= $career ?>
                    </p>
                </div>

                <!-- Social Buttons -->
                <div class="flex space-x-4">
                    <a href="#" class="p-2 rounded hover:bg-gray-100 transition">
                        <i class="fa-brands fa-github cursor-pointer"></i>
                    </a>

                    <a href="#" class="p-2 rounded hover:bg-gray-100 transition">
                        <i class="fa-brands fa-linkedin cursor-pointer"></i>
                    </a>

                    <a href="#" class="p-2 rounded hover:bg-gray-100 transition">
                        <i class="fa-brands fa-facebook cursor-pointer"></i>
                    </a>

                    <a href="#" class="p-2 rounded hover:bg-gray-100 transition">
                        <i class="fa-solid fa-envelope cursor-pointer"></i>
                    </a>


                </div>
            </div>
            <!-- Copyright -->
            <div class="border-t mt-8 pt-8 text-center">
                <p class="text-gray-500 text-sm">
                    © 2025
                    <?= $fullname ?>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>


</body>

</html>