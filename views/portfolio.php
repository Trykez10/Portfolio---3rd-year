<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/output.css">
    <script src="https://kit.fontawesome.com/a59df86d25.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <!-- MOBILE -->
    <div class="fixed inset-0 flex items-center justify-center bg-gray-100 lg:hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-gray-800 font-bold">
                OPEN MO SA LAPTOP, TINATAMAD AKO MAG RESPONSIVE.
            </p>
        </div>
    </div>

    <nav class="hidden h-20 bg-white/20 backdrop-blur-3xl border-b border-gray-500 lg:flex sticky top-0 z-50  ">
        <div class="w-full max-w-7xl mx-auto flex items-center justify-between px-10 ">
            <h1 class="text-xl font-medium"> <?= $navbarlogo ?></h1>
            <ul class="flex space-x-4">
                <div class="w-15 pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">Home</li>
                </div>
                <!-- 
                <div class="w-15 pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">About</li>
                </div> -->

                <div class="w-15 pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">Projects</li>
                </div>

                <div class="w-15 pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">Skills</li>
                </div>

                <div class="w-fit pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">Experience</li>
                </div>

                <div class="w-15 pb-2 active:border border-b-2 text-center">
                    <li class="text-gray-700 cursor-pointer text-xs">Contact</li>
                </div>
            </ul>
            <button class="border border-gray-400 px-5 py-1 text-sm rounded-md">
                <i class="fa-solid fa-download mr-2"></i>Resume
            </button>
        </div>
    </nav>

    <!-- Landing Page -->
    <!-- Container -->
    <div class="mx-30 hidden lg:flex px-10 lg:mt-30 lg:mb-20 space-x-40">
        <div class="flex flex-col justify-center ml-15">
            <p class="border border-gray-400 px-4 text-sm rounded-md font-medium w-fit">Available for new opportunities
            </p>
            <div class="mt-2">
                <h1 class="text-lg">Hi, I'm <?= $fullname ?></h1>
                <h1 class="text-lg"><?= $career ?></h1>
            </div>

            <div class="mt-2 max-w-xl text-gray-500 text-lg">
                I create functional and user-focused web applications. As a <?= $course ?> student, I’m developing my
                skills in Laravel and modern web development through hands-on projects and continuous learning.
            </div>

            <div class="mt-5 space-x-4">
                <button class="bg-black text-white px-4 py-1 text-md rounded-md">View my work
                    <i class="fa-classic fa-solid fa-arrow-right-to-bracket ml-2"></i></button>
                <button class="border border-gray-400 px-3 py-1 text-md rounded-md">Get in touch</button>
            </div>

            <div class="mt-5 space-x-4">
                <i class="fa-brands fa-github cursor-pointer"></i>
                <i class="fa-brands fa-linkedin cursor-pointer"></i>
                <i class="fa-brands fa-facebook cursor-pointer"></i>
                <i class="fa-solid fa-envelope cursor-pointer"></i>
            </div>

        </div>

        <div>
            <img src="assets\photo-1719400471588-575b23e27bd7.jpg" alt="My Photo" class="w-75 h-fit rounded-2xl">
        </div>
    </div>

    <!-- Projects Container -->
    <div class="mx-30 hidden lg:flex flex-col px-10 lg:mt-40 lg:mb-20 space-x-40">
        <div class="flex flex-col mx-auto">
            <h1 class="mx-auto text-xl font-medium">Featured Projects</h1>
            <p class="mt-5 text-gray-500">Here are some of my recent projects that showcase my skills and experience
            </p>
        </div>

        <!-- Project cards -->
        <div class="hidden lg:grid grid-cols-3 gap-10 mt-20 mb-15 mx-10">

            <div class="border border-gray-400 rounded-lg max-w-100 hover:shadow-xl flex flex-col">
                <img src="assets/Screenshot 2025-08-25 232605.png" alt="Project 1 Landing Page"
                    class="w-100 h-fit rounded-tl-lg rounded-tr-lg border-b border-gray-400">

                <h1 class="ml-5 mt-10 font-medium">Food Recipe Website</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    Static food recipe blog site created using HTML, Tailwind CSS, and JavaScript.
                    Includes features like responsive design, modals, and interactive elements to enhance user
                    experience.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap mx-auto my-5 gap-3">
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
            <div class="border border-gray-400 rounded-lg max-w-100 hover:shadow-xl">
                <img src="assets/Screenshot 2025-08-27 002256.png" alt="Project 1 Landing Page"
                    class="w-100 h-fit rounded-tl-lg rounded-tr-lg">

                <h1 class="ml-5 mt-10 font-medium">NovaEdge Electives</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    A tech startup project that provides innovative IT solutions like custom software development,
                    web and mobile app development, cloud services, and IT consulting to help businesses leverage
                    technology.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap mx-9 my-5 gap-3">
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Blade PHP</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Tailwind</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">JavaScript</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Laravel</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">Mysql</div>
                </div>

                <!-- centered link -->
                <div class=" flex justify-center mb-5">
                    <a href="" target=""
                        class="text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md hover:bg-gray-200">Visit
                        project here</a>
                </div>
            </div>

            <!-- CARD3 -->
            <div class="border border-gray-400 rounded-lg max-w-100 hover:shadow-xl flex flex-col">
                <img src="assets\download.jpg" alt="Project 1 Landing Page"
                    class="w-100 h-35 rounded-tl-lg rounded-tr-lg border-b border-gray-400">

                <h1 class="ml-5 mt-10 font-medium">Library Management System</h1>

                <p class="ml-5 mt-2 text-gray-500 text-xs leading-5">
                    A Desktop Library Management System is a standalone software that helps librarians organize, track,
                    and manage books, members, and borrowing activities digitally. It simplifies traditional manual
                    tasks, making library operations faster, more accurate, and efficient even without internet access.
                </p>

                <!-- tech stack used -->
                <div class="flex flex-wrap mx-auto my-5 gap-3">
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">C# .NET</div>
                    <div class="text-[9px] border border-gray-400 px-3 py-0.5 font-medium rounded-md">MySQL</div>
                </div>

                <!-- fixed bottom button -->
                <div class="mt-auto flex justify-center mb-4">
                    <a href="" target=""
                        class="text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md hover:bg-gray-200">
                        Visit project here
                    </a>
                </div>
            </div>
        </div>

        <!-- All project links -->
        <a class="w-fit mx-auto text-xs border border-gray-400 px-3 py-0.5 font-medium rounded-md cursor-pointer">View
            all projects
            here <i class="fa-solid fa-arrow-right"></i></a>
    </div>


    <div class="mx-30 hidden lg:flex flex-col px-10 lg:mt-20 lg:mb-20 space-x-40 bg-white">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="mx-auto w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">Technology Stack</h3>
                <p class="text-gray-400">
                    The tools and technologies I use to build amazing digital experiences
                </p>
            </div>

            <!-- Skills -->
            <div class="flex flex-wrap justify-center gap-3 mb-5">
                <?= $stackList ?>

            </div>
        </div>
    </div>

    <div class="mx-30 hidden lg:flex px-10 lg:mt-30 lg:mb-20 space-x-40">
        <div class="flex flex-col justify-center ml-15">
            <p class="px-4 text-sm rounded-md font-medium w-fit">Get in touch</p>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-regular fa-envelope bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Email</p>
                    <p><?= $email ?></p>
                </div>
            </div>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-solid fa-phone bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Phone</p>
                    <p><?= $phone ?></p>
                </div>
            </div>

            <div class="mt-2 flex space-x-2 items-center">
                <i class="fa-solid fa-phone bg-gray-300 p-2 rounded-lg"></i>
                <div class="ml-2">
                    <p class="text-xs text-gray-500">Address</p>
                    <p><?= $address ?></p>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

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
    <footer class="hidden lg:block bg-white border-t py-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Name & Role -->
                <div class="mb-4 md:mb-0 text-center md:text-left">
                    <h3 class="text-black font-bold mb-2"><?= $fullname ?></h3>
                    <p class="text-gray-500"> <?= $career ?></p>
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
                    © 2025 <?= $fullname ?>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>


</body>

</html>