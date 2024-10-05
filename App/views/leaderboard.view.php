
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeroG - Leaderboard</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body class="bg-[#000e14]">




<?= loadPartial('navbar') ?>

    <div class="min-h-[90vh] pt-24">
        <h1 class="py-5 text-center text-2xl">Leaderboard</h1>
        <table class="w-[60%] m-auto">
            <tr>
                <td class="text-center">#</td>
                <td >User Name</td>
                <td class="text-center">Score</td>
            </tr>
            <?php $i=1 ?>
            <?php foreach ($lists as $list) : ?>
            <tr class="h-14">
                <td class="text-center"><?=$i++?></td>
                <td><?=$list['name']?></td>
                <td class="text-center"><?=$list['points']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>



    <?=loadPartial('footer') ?>





</body>

</html>