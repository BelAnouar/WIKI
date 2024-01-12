<?php include $this->resolve("partials/_header.php"); ?>

<section class='grid lg:grid-cols-6 gap-3 px-4 py-4'>
    <div class='lg:col-span-2 col-span-1 bg-blue-200 flex justify-between w-full border p-4 rounded-lg'>
        <div class='flex flex-col w-full pb-4'>
            <p class='text-2xl font-bold'><?= $Authors ?></p>
            <p class='text-gray-600'>Author</p>
        </div>
        <div class='bg-blue-400 flex justify-center items-center p-4 rounded-lg'>
            <span class='text-blue-700 text-lg'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>

            </span>
        </div>
    </div>

    <div class='lg:col-span-2 col-span-1 bg-rose-200 flex justify-between w-full border p-4 rounded-lg'>
        <div class='flex flex-col w-full pb-4'>
            <p class='text-2xl font-bold'>44</p>
            <p class='text-gray-600'><?= $wiki ?></p>
        </div>
        <div class='bg-rose-400 flex justify-center items-center p-4 rounded-lg'>
            <span class='text-rose-700 text-lg'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>

            </span>
        </div>
    </div>
    <div class='lg:col-span-2 col-span-1 bg-slate-200 flex justify-between w-full border p-4 rounded-lg'>
        <div class='flex flex-col w-full pb-4'>
            <p class='text-2xl font-bold'><?= $category ?></p>
            <p class='text-slate-600'>category</p>
        </div>
        <div class='bg-slate-400 flex justify-center items-center p-4 rounded-lg'>
            <span class='text-slate-700 text-lg'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>

            </span>
        </div>
    </div>
    <div class='lg:col-span-2 col-span-1 bg-indigo-200 flex justify-between w-full border p-4 rounded-lg'>
        <div class='flex flex-col w-full pb-4'>
            <p class='text-2xl font-bold'><?= $archived ?></p>
            <p class='text-gray-600'>Archive</p>
        </div>
        <div class='bg-indigo-400 flex justify-center items-center p-4 rounded-lg'>
            <span class='text-indigo-700 text-lg'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                </svg>

            </span>
        </div>
    </div>
</section>


<section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6 py-4 px-4">
    <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">

        <div class="row-span-3 bg-white shadow rounded-lg width-full">


            <div class="overflow-y-auto" style="max-height: 24rem;">
                <ul class="p-6 space-y-6">

                    <li class="flex items-center">
                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                            <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="Annette Watson profile picture">
                        </div>
                        <span class="text-gray-600">Annette Watson</span>
                        <span class="ml-auto font-semibold">9.3</span>
                    </li>

                </ul>
            </div>
        </div>


    </div>




</section>



</main>
</div>