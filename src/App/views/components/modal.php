<div class="fixed left-0 top-0 flex h-full w-full items-center justify-center  bg-black bg-opacity-50 py-10  " id="modal">
    <div class="max-h-full w-full max-w-xl overflow-y-auto  bg-white">
        <div class="w-full">

            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <div class="w-full flex justify-start text-gray-600 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg>
                </div>
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Add your own wiks</h1>
                <form method="post" enctype='multipart/form-data'>
                    <label for="imageWiki" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Image Wiki</label>
                    <input id="imageWiki" name="imageWiki" type="file" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />

                    <label for="Tilte" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Title Wiki</label>
                    <input id="Tilte" name="Tilte" type="text" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                    <label for="Content" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Title Wiki</label>

                    <textarea name="Content" id="Content" cols="20" class="py-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full  flex items-center pl-3 text-sm border-gray-300 rounded border" rows="10"></textarea>

                    <div class="flex flex-col mb-3 w-full">
                        <label for="Tilte" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Title Wiki</label>
                        <div class="flex justify-evenly flex-wrap">
                            <?php
                            foreach ($tags as $row) {
                                $tagId = $row['tagId'];
                                $tagName = $row['tagName'];
                            ?>
                                <div class="mb-4 checkTags">
                                    <input type="checkbox" name="tags[]" id="tag" class="peer hidden taglist TagTheme" value="<?= $tagId ?>">
                                    <label class="namTags w-full p-1 border-2 rounded-xl select-none cursor-pointer peer-checked:border-amber-600 peer-checked:text-amber-600">
                                        <?= $tagName ?>
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>


                    </div>

                    <div class="flex items-center justify-start w-full">
                        <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Add Wiki</button>
                        <button type="button" class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancel</button>
                    </div>
            </div>
            <!-- Close Modal -->
            <button type="button" class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
            </form>
        </div>

    </div>
</div>