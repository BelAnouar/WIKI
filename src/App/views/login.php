<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <section>

        <div class="min-h-screen">
            <div class="flex   md:flex-row">
                <div class="md:w-1/2 hidden md:flex flex-col px-10 py-28 bg-[url('/assets/images/k.jpg')] bg-center h-[100vh]   ">
                    <h1 class="text-white text-4xl font-semibold mb-6 ">Welcome</h1>

                    <p class="text-white pl-3 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam illo eius vero odio harum laboriosam amet autem. Similique magni iusto exercitationem perferendis architecto saepe! Esse nemo velit vero dolore rerum.</p>
                </div>
                <div class="md:w-1/2 w-full  py-16 px-16">
                    <h2 class="text-3xl mb-4 font-semibold">Login</h2>
                    <p class="mb-3 font-light">
                        Welcome back! Sign in here
                    </p>

                    <form method="post">

                        <div class="mt-5">
                            <input placeholder="Email" type="email" name="email" id="email" class="border border-gray-400 py-2.5 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input placeholder="Password" type='password' name="pass" id="pass" class="border border-gray-400 py-2.5 px-2 w-full">
                        </div>


                        <div class="mt-5">

                            <button class="w-full bg-[#414046] text-white py-3.5" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>



</body>

</html>