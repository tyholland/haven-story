<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Two New Heroes";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

"Man they're strong together, I wonder if I could just trap one of them. Ohh I know the  perfect plan." T-Mac dashes towards Zero, and Zero creates a box shape with his hands. When T-Mac got close enough, Zero released his energy barrier. Trapping T-Mac in a square shaped barrier. "What did you do to me," says T-Mac. "I trapped you in my barrier that drains your energy," replies Zero. "Yeah Ok," responds T-Mac and he powers up to break the barrier. But the more he powers up, the more power he actually loses. "T-Mac stop, your only losing power," says T-Boom. "Then come and break me free," replies T-Mac. "She'll have to go through me first," says Zero. Back at the Haven house, Mighty-One finally wakes up from his nap. "Hey where's T-Mac and T-Boom," says Mighty-One. "Out saving the world from alien invaders," says Big Dog. "Why didn't you wake me, I wanna go fight," says Mighty-One. "Well go ahead," says Big Dog. "No he can't go, he's only 7 years old," says Mom. "Come on mom, I'm strong too," says Mighty-One. "You'll get hurt," says Mom. "You know T-Mac wouldn't let anyone of his siblings get hurt. He'll be fine, go ahead Mighty-One," says Big Dog. "Fine if it gets too rough you promise to come back," says Mom. "Yes mom," says Mighty-One. Will Mighty-One make a difference? Or Will T-Boom be able to free T-Mac?

</div>


<div id="next">

<a href="zs.php">Zero Saga</a>

</div>

<?php
    include("footer.php");
?>