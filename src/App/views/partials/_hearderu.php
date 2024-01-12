<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="py-6 mb-12 border-b">
        <div class="container mx-auto flex md:justify-between justify-around items-center">
            <div class="dropdown dropdown-bottom ">
                <div tabindex="0" role="button" class="dark:bg-neutral bg-primary-content   da rounded-full p-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow-xl border border-black/10 bg-base-100 rounded-box w-52">

                    <li>
                        <a href="/">
                            <span>HOME</span>
                        </a>
                    </li>

                    <li>
                        <a href="/categories">
                            <span>Category</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- <ul class="font-poppins text-black text-sm list-none [&>*]:inline-block [&>*]:mr-3 hidden md:block">


                <li>
                    <a href="./../index.php">
                        <span class="text-black ">HOME</span>
                    </a>
                </li>

                <li>
                    <a href="./themes.php">
                        <span class="text-black dark:text-white">BLOG</span>
                    </a>
                </li>

            </ul> -->
            <div class="flex items-center md:gap-8 gap-4  ">
                <label class="swap swap-rotate">

                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" class="theme-controller" value="light" />

                    <!-- sun icon -->
                    <svg class="swap-on fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg class="swap-off fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>

                </label>
                <?php
                if (isset($_SESSION["user"])) { ?>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-4 open-cart-btn cursor-pointer">
                            <!-- SVG path content -->
                        </svg>
                        <svg id="userIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="user w-6 h-6 hover:shadow-xl cursor-pointer">
                            <!-- SVG path content -->
                        </svg>
                        <div id="dropdownContent" class="hidden absolute right-10 mt-24  w-62.5  rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <form action="./../logout.php" method="post">
                                <button class="flex items-center gap-3.5 py-4 px-6 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                    <svg class="fill-current " width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- SVG path content -->
                                    </svg>
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                <?php } else { ?>
                    <a class="hover:text-violet-900 transition" href="../../../login.php">Log in</a>
                    <a class="bg-[#68672b]/80 hover:bg-[#68672b] text-white transition px-4 py-2  rounded-lg" href="../../../register.php">Sign Up</a>
                <?php } ?>
            </div>
    </header>