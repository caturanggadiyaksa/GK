<?php
include_once("server/connection.php");


session_start();

if (!isset($_SESSION['Nim'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}

$nim = $_SESSION['Nim'];

// $nim = $_GET['nim'];


$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `Nim` = '$nim'");



while ($row = mysqli_fetch_assoc($query)) {
    $nimUser = $row["Nim"];
    $tahunmasukUser = $row["tahun_masuk"];
    $jurusan = $row["Jurusan"];
    $namaUser = $row["Nama"];
    $image = $row['img'];
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
</head>

<body>
    <section class="w-full h-screen bg-slate-50">
        <div class="container">
            <div class="pt-8 pb-24">
                <div class="flex flex-col justify-center items-center">


                    <div id="logo" class="pb-8">
                        <img width="150px" src="img/logo.png" alt="" />
                    </div>





                    <div id="card" class=" w-full">

                        <div class="mx-6 flex flex-col justify-center items-center">

                            <div class="w-full  bg-white border border-gray-200 rounded-xl shadow-md dark:bg-gray-800 dark:border-gray-700 sm:w-[80%] md:w-[70%] lg:w-[60%] xl:[50%]">
                                

                                <div class="flex flex-col items-center pb-10">
                                    <div class="w-full sm:w-[80%] md:w-[90%] lg:w-[90%] xl:w-[80%] mt-8">
                                        <div class="flex flex-row items-center justify-between mx-6">
                                            <div class="w-2/6 mb-3">
                                                <div class="rounded-full bg-cover bg-center w-14 h-14  md:w-24 md:h-24 lg:w-28 lg:h-28" style="background-image: url('img/user/<?php echo $image;?>');">
                                                    
                                                </div>

                                                <!-- <img class="rounded-full  bg-center w-14 h-14  md:w-24 md:h-24 lg:bg-center lg:w-28 lg:h-28" style="background-image: url('img/user/<?php echo $image;?>');"  /> -->

                                            </div>
                                            <div class=" w-4/6 mb-3 ">

                                                <h5 class="text-base text-slate-700 uppercase font-medium  dark:text-white md:text-xl lg:text-2xl"><?php echo $namaUser; ?></h5>
                                                <span class="text-xs text-gray-500 dark:text-gray-400 lg:text-lg"><?php echo $jurusan; ?></span>


                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="flex justify-center items-center">
                                                <h5 class="text-gray-700 dark:text-slate-100 text-base pt-4 lg:text-xl">Profil</h5>
                                            </div>
                                        </div>

                                        <div class="mx-6">
                                        <div class=" py-4">
                                            <h5 class="text-gray-500 dark:text-white text-base lg:text-lg">Nim</h5>
                                            <p class="text-slate-400 text-sm lg:text-base"><?php echo $nim; ?></p>
                                        </div>
                                        <div class="py-4">
                                            <h5 class="text-gray-500 dark:text-white text-base lg:text-lg">Major</h5>
                                            <p class="text-slate-400 text-sm lg:text-base"><?php echo $jurusan ?></p>
                                        </div>
                                        <div class=" py-4">
                                            <h5 class="text-gray-500 dark:text-white text-base lg:text-lg">Tahun Masuk</h5>
                                            <p class="text-gray-400 text-sm lg:text-base"><?php echo $tahunmasukUser ?></p>
                                        </div>
                                        </div>
                                        <!-- </div>
                                    <div class="flex mt-4 space-x-3 md:mt-6">
                                        <a href="#"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                            friend</a>
                                        <a href="#"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                                    </div>
                                </div> -->
                                    </div>

                                </div>

                            </div>
                            <!-- <div id="pencarian" class="mx-6">
                        <form>
                            <div
                                class="bg-slate-200 rounded-full py-2 px-4 block w-full appearance-none leading-normal">
                                <div class="flex flex-row">
                                    <input type="text"
                                        class="bg-gray-200 text-gray-500 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" value="find by nim or name" />
                                    <button type="submit"
                                        class=" text-gray-500 font-bold py-2 px-4 rounded-full">
                                        <i class="fa-thin fa-magnifying-glass fa-xl"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> -->

                            <div id="About" class="pt-20   ">
                                <div>
                                    <h4 class="text-gray-500 font-light text-lg  border-b-2 border-gray-500 ">About</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</body>

</html>