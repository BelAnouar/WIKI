<?php include $this->resolve("partials/_hearderu.php");


?>



<main class="m-14 ">

    <section class="py-4">

        <div class="relative text-black text-base-100">
            <h3 class="text-lg font-black after:content-oval after:absolute after:left-[50%] after:-bottom-2.5 after:-z-10 md:text-4xl">
                The last Categories </h3>
        </div>

        <div class="container mx-auto my-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-14 card-plant">
                <?php foreach ($categories as $categorie) {

                ?>
                    <div class="card  bg-neutral shadow-xl">
                        <figure><img src="<?= $categorie['categoryImg'] ?>" alt="Shoes" /></figure>
                        <div class="card-body -m-5">
                            <h2 class="card-title"><?= $categorie['categoryName'] ?></h2>
                            <p><?= $categorie['categoryDesc'] ?></p>
                            <div class="card-actions py-2 ">
                                <a href="/Wiki/<?= $categorie['categoryId'] ?>" class="link link-hover">See Wikis &#8594; </a>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
                <!-- <div class="card  bg-neutral shadow-xl">
                    <figure><img src="https://static.techspot.com/images2/news/bigimage/2018/10/2018-10-25-image-10.jpg" alt="Shoes" /></figure>
                    <div class="card-body -m-5">
                        <h2 class="card-title">News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit error harum ipsa corporis ut, maiores odio cumque voluptas voluptate rem veritatis sequi dolores aspernatur quis, dicta nobis necessitatibus eos totam.</p>
                       
                    </div>
                </div> -->

            </div>
        </div>

    </section>
</main>

<?php include $this->resolve("partials/_footer.php");
