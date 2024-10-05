<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeroG - Matches</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body style="background-image: url('/Assets/home.png'); background-attachment: fixed; background-size: cover;">




    <?= loadPartial('navbar') ?>


    <div class="h-[90vh] flex justify-center items-center" style="flex-direction: column">
        <h1 class="text-center text-9xl"><?=$sport['name']?></h1>
        <!-- <h1 class="text-center text-3xl">kjhkjkj</h1> -->
    </div>

    <div class="bg-[#000e14] rounded-t-xl px-20 ">

        <div class="flex py-20 w-[50%] m-auto">
            <a class="w-1/4 flex justify-center items-center px-8" href="/matches/1">
                <img src="/Assets/microgravity-tag-white.png" class="w-full" alt="">
            </a>
            <a class="w-1/2 flex justify-center items-center px-8" href="/matches/2">
                <img src="/Assets/IWF-white.png" class="w-full" alt="">
            </a>
            <a class="w-1/4 flex justify-center items-center px-8" href="/matches/3">
                <img src="/Assets/GWRF.png" class="w-full" alt="">
            </a>
        </div>
        <div class="py-10">
            <p class="text-3xl">All Matches</p>
        </div>


        <?php foreach ($matches as $match):  ?>
            <div class="flex justify-center items-center px-5">
                <div class="w-[90%] flex justify-start-start">
                    <p id="matchDate" class="pe-2"><?= $match['date'] ?></p>
                    <p id="SportNameForMatch"><?= $match['sport_name'] ?></p>
                </div>
                <div class="w-[10%] flex justify-center">
                </div>
            </div>



            <!-- match row -->
            <div class="flex justify-center items-center px-5 py-5">

                <!-- players data -->
                <div class="w-[85%] flex justify-center items-center">

                    <!-- player one -->
                    <div class="w-1/2 flex pe-1">
                        <div class="bg-[#191e24] w-[90%] py-2 px-2">
                            <p class="text-center w-full" id="playerOneName"><?= $match['player1_name'] ?></p>
                        </div>
                        <div class="w-[10%] bg-[#34383c] py-2 px-2">
                            <p class="w-full text-center" id="playerOneResult"><?= $match['score1'] ?></p>
                        </div>
                    </div>
                    <!-- player one -->

                    <!-- player two -->
                    <div class="w-1/2 flex ps-1">
                        <div class="w-[10%] bg-[#34383c] py-2 px-2">
                            <p class="w-full text-center" id="playerTwoResult"><?= $match['score2'] ?></p>
                        </div>
                        <div class="bg-[#191e24] w-[90%] py-2 px-2">
                            <p class="text-center w-full" id="playerTwoName"><?= $match['player2_name'] ?></p>
                        </div>
                    </div>
                    <!-- player two -->

                </div>
                <!-- players data -->

                <!-- match type -->
                <div class="w-[15%] flex justify-center ps-1">
                    <p class="w-full text-center py-2 bg-[#191e24]" id="matchType"><?= $match['tournment'] ?></p>
                </div>
                <!-- match type -->


            </div>
            <!-- match row -->
        <?php endforeach ?>


    </div>



    <?= loadPartial('footer') ?>





</body>

</html>