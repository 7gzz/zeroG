<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeroG - Profile</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-[#000e14]">




    <?= loadPartial('navbar') ?>

    <div class="min-h-[90vh] pt-24">
        <div class="py-10">
            <div class="w-[10%] m-auto rounded-xl overflow-hidden ">
                <img src="/Assets/Rectangle 19.png" class="w-full" alt="">
            </div>
            <h3 class="text-center text-3xl my-4"><?= $profile['name'] ?></h3>
            <h3 class="text-center text-xl my-4"><?= $profile['rank'] ?> at <?= $profile['mission'] ?></h3>
            <div class="flex flex-wrap w-[50%] m-auto items-center justify-center">
                <div class="w-1/3">
                    <p class="py-3 mb-3 px-5 block w-[50%] bg-black rounded-lg text-2xl text-center m-auto"><?= $profile['country'] ?></p>
                    <p class="px-5 block w-[50%] text-center m-auto">Country</p>
                </div>
                <div class="w-1/3">
                    <p class="py-3 mb-3 px-5 block w-[50%] bg-black rounded-lg text-2xl text-center m-auto"><?= $profile['age'] ?></p>
                    <p class="px-5 block w-[50%] text-center m-auto">Age</p>
                </div>
                <div class="w-1/3">
                    <p class="py-3 mb-3 px-5 block w-[50%] bg-black rounded-lg text-2xl text-center m-auto"><?= $profile['points'] ?></p>
                    <p class="px-5 block w-[50%] text-center m-auto">Points</p>
                </div>
            </div>
        </div>
        <form action="/logout" method="POST">
            <div class="m-auto my-4 py-2" style="width: 30%; ">
                <button type="submit" class="text-center block bg-white w-full text-black py-2 rounded-lg" style="font-family: 'Far5a';" id="logoutBtn">Logout</button>
            </div>
        </form>
    </div>


    <?= loadPartial('footer') ?>





</body>

</html>