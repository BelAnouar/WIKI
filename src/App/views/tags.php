<?php include $this->resolve("partials/_header.php");


?>


<section class=" lg:h-[40vh] h-[15vh] mx-4 my-4 p-7 border border-black shadow-xl rounded-lg bg-white">

    <form class="grid lg:grid-cols-3 w-6/7 gap-5" method="post">
        <div class="input-type">
            <label class="block text-gray-700 text-md font-bold mb-2">
                Tags
            </label>
            <input type="text" id="Tags" name="Tags" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Tags" />
        </div>


        <div>
            <button type="submit" class="flex justify-center text-md w-2/6 py-2 mt-[2.5rem] bg-green-500 text-white border rounded-md hover:text-black hover:bg-gray-50 hover:border-green-500">
                Add <span class="px-1"></span>
            </button>
        </div>
    </form>

</section>


<section class=" lg:h-[40vh] h-[15vh] mx-4 my-4 p-7 border border-black shadow-xl rounded-lg bg-white">

    <div class="overflow-x-auto">
        <table class="table">

            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>

                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag) {

                ?>
                    <tr>
                        <th>1</th>
                        <td><?= $tag['tagName']; ?></td>
                        <td class="flex flex-row gap-6"> <button value="<?php echo e($tag['tagId']); ?>" class="EditT bg-transparent hover:bg-green-700 text-green-700 font-semibold hover:text-black py-2 px-3 border border-green-500 hover:border-transparent rounded">
                                Edit
                            </button>
                            <form action="/tag/<?php echo e($tag['tagId']); ?>" method="POST">

                                <input type="hidden" name="_METHOD" value="DELETE" />
                                <button type="submit" class="bg-transparent hover:bg-rose-500 text-rose-700 font-semibold hover:text-black py-2 px-3 border border-rose-500 hover:border-transparent rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php     }   ?>
            </tbody>
        </table>
    </div>

</section>


</main>
</div>


<dialog id="my_modal_3" class="modal">
    <div class="modal-box  bg-white">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Update Tag</h3>
        <p class="py-4">Press ESC key or click on ✕ button to close</p>
        <form method="POST">
            <div class="input-type">
                <label class="block text-gray-700 text-md font-bold mb-2">
                    Tag
                </label>
                <input type="text" name="eTag" id="Tag" class="border w-full px-4 py-3 focus:outline-none rounded-md" placeholder="Tag" />
            </div>


            <div>
                <button id="btnEdit" type="submit" class="flex justify-center text-md w-2/6 py-2 mt-[2.5rem] bg-cyan-500 text-white border rounded-md hover:text-black hover:bg-gray-50 hover:border-cyan-500">
                    update <span class="px-1"></span>
                </button>
            </div>
        </form>
    </div>
</dialog>

<script src="/assets/js/featchTag.js"></script>