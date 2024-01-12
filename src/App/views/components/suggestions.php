<div>
    <div class="flex flex-row  gap-2">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
        </svg>
        <h6 class="text-sm font-medium text-gray-700 mb-2">

            Tags
        </h6>
    </div>
    <?php
    foreach ($tags as $tag) { ?>
        <div class="tag-suggestion cursor-pointer py-2 px-3 hover:bg-slate-100">
            <a href="">
                <p class="text-sm font-medium text-gray-600"><?= $tag["tagName"] ?></p>
            </a>

        </div>
    <?php  } ?>
</div>
<!-- Category suggestions -->
<div>
    <h6 class="text-sm font-medium text-gray-700 mb-2">Category</h6>
    <?php foreach ($categories as $category) {
    ?>
        <div class="category-suggestion cursor-pointer py-2 px-3 hover:bg-slate-100">
            <a href="/Wiki/<?= $category['categoryId'] ?>">
                <p class="text-sm font-medium text-gray-600"><?= $category["categoryName"] ?></p>
            </a>
        </div>
    <?php  } ?>
</div>
<!-- Wikis suggestions -->
<div>
    <h6 class="text-sm font-medium text-gray-700 mb-2">Wikis</h6>
    <?php foreach ($wikis as $wiki) {
    ?>
        <div class="category-suggestion cursor-pointer py-2 px-3 hover:bg-slate-100">
            <a href="">
                <p class="text-sm font-medium text-gray-600"><?= $wiki["title"] ?></p>
            </a>
        </div>
    <?php  } ?>
</div>