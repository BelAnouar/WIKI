<?php include $this->resolve("partials/_header.php"); ?>



<table class="w-full table-fixed">
    <thead>
        <tr class="bg-gray-100">
            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">image</th>
            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Title</th>
            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Descreption</th>
            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <?php

        foreach ($wikis as $wiki) :
        ?>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">
                    <img src="<?php echo $wiki["imageWiki"]; ?>" alt="wiki">

                </td>
                <td class="py-4 px-6 border-b border-gray-200"><?php echo $wiki['title']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200 truncate"><?php echo $wiki['content'] ?></td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <?php
                    if ($wiki["isArchived"] === "0") { ?>
                        <form method="post" action="/archive/archived/<?= $wiki["wikiId"] ?>">
                            <button type="submit" class="pointer bg-green-500 text-white py-1 px-2 rounded-full text-xs" name="archive" value="<?= $wiki["wikiId"] ?>">Archive</button>
                        </form>
                    <?php } else { ?>
                        <form method="post" action="/archive/inarchive/<?= $wiki["wikiId"] ?>">


                            <button type="submit" class="pointer bg-red-500 text-white py-1 px-2 rounded-full text-xs" name="unarchive" value="<?= $wiki["wikiId"] ?>">Unarchive</button>
                        </form>
                    <?php } ?>
                </td>
            </tr> <?php endforeach; ?>
    </tbody>

</table>

</main>
</div>