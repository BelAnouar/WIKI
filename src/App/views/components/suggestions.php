<div>
    <h6 class="text-sm font-medium text-gray-700 mb-2">Tags</h6>
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