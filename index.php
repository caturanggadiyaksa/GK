

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GK</title>
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
</head>

<body>
    <section class="w-full h-screen bg-slate-50">
        <div class="container">
            <div class="pt-24 pb-24">
                <div class="flex flex-col justify-center items-center">

                    <div id="logo" class="pb-20">
                        <img width="150px" src="img/logo.png" alt="" />
                    </div>
                    <div id="pencarian" class="mx-6">
                        <form action="proses/proses-cari.php" method="POST">
                            <div
                                class="bg-slate-200 rounded-full py-2 px-4 block w-full appearance-none leading-normal">
                                <div class="flex flex-row">
                                    <input name="cari" type="text" class="bg-gray-200 text-gray-500 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" value="find by nim or name" />
                                    <button name="Submit" type="Submit"
                                        class=" text-gray-500 font-bold py-2 px-4 rounded-full">
                                        <i class="fa-thin fa-magnifying-glass fa-xl"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="About" class="pt-20 mt-20">
                        <div>
                            <h4 class="text-gray-600 font-semibold text-lg">About</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>