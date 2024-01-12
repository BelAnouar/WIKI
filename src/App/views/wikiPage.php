<?php include $this->resolve("partials/_hearderu.php"); ?>
<div class="w-4/5 mx-auto flex flex-col gap-2">
    <div class="flex flex-row w-full gap-4 items-end mt-8 pl-4">
        <h1 class="text-3xl font-medium">kk</h1>
        <p class="text-sm p-1 rounded-xl border border-gray-500 text-gray-500">kk</p>
    </div>
    <div class="flex flex-col w-full shadow-xl rounded-xl border">
        <p class="pl-8 py-4 font-medium text-lg text-gray-600">
            o
        </p>
        <p class="p-8 pt-0">
            kkl
        </p>

    </div>
    <div class="flex flex-col mt-6">
        <h1 class="text-xl font-medium pl-4">Comments</h1>
    </div>
    <div class="flex flex-col gap-4 w-4/5">
        <div class="bg-red-500 mb-3 px-2 rounded-lg w-full">
            <p id="addErr" class="text-white text-lg text-center"></p>
        </div>
        <textarea name="comment" id="comment" cols="30" rows="5" class="w-full resize-none shadow-xl border-t-2 rounded-xl p-4" placeholder="Leave a comment!"></textarea>
        <input type="hidden" name="sessionid" id="sessionid">
        <input type="hidden" name="articleid" id="articleid">
        <div class="self-end">
            <button id="addComment" class="px-8 py-2 bg-gray-500 border border-gray-600 text-white font-semibold rounded-lg ">Comment</button>
        </div>
    </div>

</div>