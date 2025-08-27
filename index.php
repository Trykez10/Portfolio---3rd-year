<?php

$navbarlogo = "Tristan Tryke";
$fullname = "Tristan Tryke Malubay";
$career = "Aspiring Software Developer";
$course = "Computer Science";
$email = "tristanmalubay10@gmail.com";
$phone = "+63 9601058031";
$address = "Davao City, Philippines";
$techStacks = [
    "HTML",
    "Tailwind CSS",
    "JavaScript",
    "PHP",
    "Laravel",
    "MySQL",
    "Java",
    "C# .Net",
    "GitHub",
    "Docker"
];

foreach ($techStacks as $stack) {
    $stackList .= "<span class='px-4 py-2 text-xs font-medium rounded-md bg-gray-300 hover:bg-black hover:text-white'>$stack</span>";
}

include 'views/portfolio.php';