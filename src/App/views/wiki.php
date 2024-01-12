<?php include $this->resolve("partials/_hearderu.php"); ?>
<section class="hero h-[67vh] -mt-12" style="background-image: url(<?= $categorie["categoryImg"] ?>);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold"><?= $categorie["categoryName"] ?></h1>
            <p class="mb-5"><?= $categorie["categoryDesc"] ?></p>

        </div>
    </div>
</section>


<main class="m-14 ">
    <section class="py-4">
        <div class="flex flex-row items-center justify-between">
            <div class="relative text-black text-base-100">
                <h3 class="text-lg font-black after:content-oval after:absolute after:left-[50%] after:-bottom-2.5 after:-z-10 md:text-4xl">
                    WIKIS </h3>
            </div>
            <div id="button">
                <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">add wiki</button>
            </div>


        </div>
        <div class="container mx-auto my-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-14 card-plant">
                <?php foreach ($wikis as $wiki) { ?>

                    <div class="card  bg-neutral dark:bg-base-100 shadow-xl">

                        <div class="card-body -m-5">
                            <div class=" flex justify-between items-center">
                                <div>
                                    <img class="rounded-full bg-cover w-12 h-12 " src="<?= $wiki["imageWiki"] ?>" alt="wiki" />
                                </div>
                                <div class="dropdown dropdown-right">
                                    <div tabindex="0" role="button" class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                        <li><button value="<?= e($wiki['wikiId']); ?>" class="edit">edit</button></li>
                                        <li>
                                            <form action="/Wiki/<?php echo e($wiki['wikiId']); ?>" method="POST">

                                                <input type="hidden" name="_METHOD" value="DELETE" />
                                                <button type="submit">delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="/Wiki/view/<?= $wiki['wikiId']  ?>">
                                <h2 class="card-title"><?= $wiki["title"] ?></h2>
                                <p><?= $wiki["content"] ?>...</p>
                            </a>
                        </div>

                        <figure><img src="<?= $wiki["imageWiki"] ?>" alt="wiki" /></figure>
                        <div class="card-actions py-2 px-3">
                            <?php if (isset($wiki['tagName'])) {

                                $tagsName = explode(',', $wiki['tagName']);

                                foreach ($tagsName as $tagName) { ?>
                                    <div class="badge badge-outline"># <?php echo $tagName; ?></div>
                            <?php  }
                            } ?>
                        </div>

                    </div>
                <?php  } ?>
            </div>
        </div>
    </section>

    <?php include $this->resolve("components/modal.php"); ?>
    </div>

</main>

<?php include $this->resolve("partials/_footer.php"); ?>
<script>
    const FormTheme = document.querySelector("#formTheme");
    const namesTag = document.querySelectorAll(".namTags");

    const themeName = document.querySelector("#themeName");
    const themeDesc = document.querySelector("#themeDesc");
    namesTag.forEach(item => {
        item.addEventListener('click', () => {

            const prTags = item.closest(".checkTags");
            let key = prTags.getAttribute("data-key");
            const tags = prTags.querySelector(`#tag${key}`);

            tags.checked ? tags.removeAttribute("checked") : tags.setAttribute("checked", "checked");
        });
    });
    let modal = document.getElementById("modal");

    function modalHandler(val) {
        if (val) {
            fadeIn(modal);
        } else {
            fadeOut(modal);
        }
    }

    function fadeOut(el) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.1) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }
    fadeOut(modal)

    function fadeIn(el, display) {
        el.style.opacity = 0;
        el.style.display = display || "flex";
        (function fade() {
            let val = parseFloat(el.style.opacity);
            if (!((val += 0.2) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }




    const edit = document.querySelectorAll(".edit");
    const imageWikiInput = document.getElementById('imageWiki');
    const titleInput = document.getElementById('Tilte');
    const contentTextarea = document.getElementById('Content');
    const tagsCheckboxes = document.getElementsByClassName('taglist');
    const addwiki = document.querySelector("#addwiki");
    const formWiki = document.querySelector("#formWiki");

    edit.forEach(el =>
        el.addEventListener("click", function(e) {
            e.preventDefault();
            let idTag = e.target.value

            console.log("kk");
            fetch(`/Wiki/edit/${idTag}`, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",

                    },

                }).then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    console.log(data);

                    let {
                        authorId,
                        categoryId,
                        content,
                        imageWiki,
                        isArchived,
                        tagId,
                        title,
                        wikiId
                    } = data
                    let idTags = tagId.split(',');
                    idTags.forEach(id => {
                        const tags = document.getElementById(`tag${id}`);
                        tags.setAttribute("checked", "checked")
                    });
                    titleInput.value = title
                    contentTextarea.value = content
                    addwiki.textContent = 'Edit Wiki'
                    addwiki.setAttribute('value', wikiId)
                    addwiki.setAttribute("id", "editWiki")
                    formWiki.setAttribute("action", `/Wiki/update/${wikiId}`);
                    fadeIn(modal)



                })


        }))

    function editWiki() {
        const editwiki = document.querySelector("#editWiki")


    }
</script>