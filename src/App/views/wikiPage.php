<?php include $this->resolve("partials/_hearderu.php"); ?>
<?php

$title = $wikis["title"];

$content = $wikis["content"];
$imageWiki = $wikis["imageWiki"];

?>

<div class=" w-3/5 mx-auto flex flex-col gap-4 shadow-2xl rounded-xl border">

    <img src="<?php echo $imageWiki; ?>" alt="Wiki Image" class="w-full h-96 rounded-t-xl">


    <div class="flex flex-row w-full gap-4 items-end mt-4 pl-4">
        <h1 class="text-3xl font-medium"><?php echo $title; ?></h1>
        <?php foreach ($tagsName as $tagName) {
        ?>
            <p class="text-sm p-1 rounded-xl border border-gray-500 text-gray-500"># <?php echo $tagName['tagName']; ?></p>
        <?php } ?>
    </div>


    <div class="w-full   rounded-b-xl ">
        <p class="pl-8 py-4 font-medium text-lg text-gray-600">
            <?php echo $content; ?>
        </p>
    </div>
</div>