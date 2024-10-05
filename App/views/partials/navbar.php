 <!-- NaaavBaaaaaaaar -->
 <nav class="px-10 py-5 fixed w-full bg-black bg-opacity-25">
     <div class="flex justify-between items-center px-10 relative">
         <ul class="flex justify-center items-center gap-3" style="z-index: 10;">
             <li><a href="/matches">Matches</a></li>
             <li><a href="/leaderboard">Leaderboard</a></li>
         </ul>
         <a href="/" class="flex justify-center items-center" style=" position: absolute; right: 0; left: 0;">
             <img src="/Assets/White.png" style="width: 20%;" alt="">
         </a>
         <ul class="flex justify-center items-center gap-3" style="z-index: 10;">
             <li><a href="/profile/<?= $_SESSION['user_id'] ?>">Hi, <?= $_SESSION['user_name'] ?></a></li>
         </ul>
     </div>
 </nav>
 <!-- NaaavBaaaaaaaar -->