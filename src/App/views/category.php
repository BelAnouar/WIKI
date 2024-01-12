<?php include $this->resolve("partials/_header.php");


?>

<section class=" lg:h-[40vh] h-[15vh] mx-4 my-4 p-7 border border-black shadow-xl rounded-lg bg-white">

    <form class="grid lg:grid-cols-3 w-6/7 gap-5" method="post" enctype='multipart/form-data'>
        <div class="input-type">
            <label class="block text-gray-700 text-md font-bold mb-2">
                Img Category
            </label>
            <input type="file" id="ImgCategory" name="ImgCategory" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Category" />
        </div>
        <div class="input-type">
            <label class="block text-gray-700 text-md font-bold mb-2">
                Category
            </label>
            <input type="text" id="Category" name="Category" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Category" />
        </div>
        <div class="input-type">
            <label class="block text-gray-700 text-md font-bold mb-2">
                Description Category
            </label>
            <input type="text" id="DbCategory" name="DbCategory" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="    Description Category" />
        </div>


        <div>
            <button type="submit" class="flex justify-center text-md w-2/6 py-2 mt-[2.5rem] bg-green-500 text-white border rounded-md hover:text-black hover:bg-gray-50 hover:border-green-500">
                Add <span class="px-1"></span>
            </button>
        </div>
    </form>

</section>
<div class="grid lg:grid-cols-2 gap-2 px-4 py-4">
    <?php foreach ($categories as $category) { ?>
        <div class="group mx-2 mt-10 grid max-w-xl grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
            <div class="grid h-16 w-16 ml-4 rounded-lg  place-items-center uppercase text-2xl font-bold ">
                <img src="<?= $category['categoryImg'];  ?>" alt="img">
            </div>
            <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
                <h3 class=" text-lg font-semibold text-gray-600"> <?= $category['categoryName'] ?></h3>
                <p></p>
            </div>





            <div class="mt-3 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                <button value="<?php echo e($category['categoryId']); ?>" class="EditC bg-transparent hover:bg-green-700 text-green-700 font-semibold hover:text-black py-2 px-3 border border-green-500 hover:border-transparent rounded">
                    Edit
                </button>


                <form action="/category/<?php echo e($category['categoryId']); ?>" method="POST">

                    <input type="hidden" name="_METHOD" value="DELETE" />
                    <button type="submit" class="bg-transparent hover:bg-rose-500 text-rose-700 font-semibold hover:text-black py-2 px-3 border border-rose-500 hover:border-transparent rounded">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>

</div>
<dialog id="my_modal_3" class="modal">
    <div class="modal-box  bg-white">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Update Category</h3>
        <p class="py-4">Press ESC key or click on ✕ button to close</p>
        <form id="formE_C" action="" method="POST" enctype='multipart/form-data'>
            <div class="input-type">
                <label class="block text-gray-700 text-md font-bold mb-2">
                    Img Category
                </label>
                <input type="file" id="ImgCategoryE" name="ImgCategoryE" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Category" />
            </div>
            <div class="input-type">
                <label class="block text-gray-700 text-md font-bold mb-2">
                    Category
                </label>
                <input type="text" name="CategoryE" id="CategoryE" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Category" />
            </div>
            <div class="input-type">
                <label class="block text-gray-700 text-md font-bold mb-2">
                    Description Category
                </label>
                <input type="text" id="DbCategoryE" name="DbCategoryE" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="    Description Category" />
            </div>

            <div>
                <button id="btnEdit" type="submit" class="flex justify-center text-md w-2/6 py-2 mt-[2.5rem] bg-cyan-500 text-white border rounded-md hover:text-black hover:bg-gray-50 hover:border-cyan-500">
                    update <span class="px-1"></span>
                </button>
            </div>
        </form>
    </div>
</dialog>

</main>
</div>


<script src="/assets/js/featch.js"></script>