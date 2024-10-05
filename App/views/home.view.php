<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeroG</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body
    style="background-image: url('./Assets/MacBook\ Pro\ 16_\ -\ 3.png'); background-attachment: fixed; background-size: cover;">




    <?= loadPartial('navbar') ?>


    <div class="h-[90vh] flex justify-center items-center">
        <h1 class="text-center text-9xl">Daily Challenge</h1>
    </div>

    <div class="bg-[#000e14] rounded-t-xl px-20 ">

        <div class="w-full pt-20">
            <div class="w-[45%] rounded-lg m-auto flex justify-between flex-wrap px-10 py-10 bg-[#222627]">
                <div class="flex justify-center w-1/2">
                    <div class="flex justify-start w-full">
                        <div>
                            <p id="dailyChallengeName" class="text-2xl"><?= $challenge['title'] ?></p>
                            <p id="dailyChallengeNumber" class="text-2xl">Day #<?= $challenge['id'] ?></p>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 flex justify-end">
                    <?php if ($_SESSION['daily_challenge'] !== true): ?>
                        <form action="/daily_challenge" method="POST">
                            <button class=" text-xl rounded-lg" style="padding: 8px 20px; background-color: #229922;">I DID IT!</button>
                        </form>
                    <?php else: ?>
                        <div>
                            <button class=" text-xl rounded-lg" style="padding: 8px 20px; background-color: #222299; cursor: default;">DONE!</button>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="w-full my-3 h-[3px] bg-black bg-opacity-25"></div>
                <div class="flex w-full justify-between items-center">
                    <p id="dailyChallangeDescription"><?= $challenge['description'] ?></p>
                </div>
            </div>
        </div>

        <div class="flex py-20 w-[50%] m-auto flex-wrap">
            <h2 class="w-full text-center py-3 text-xl"> Watch a game</h2>
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