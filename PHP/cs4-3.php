<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Game Over";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

Back on the ground, T-Mac begins to breathe. He opens his eyes and looks around. "Dude I'm alive, no way." slowly says T-Mac. Still unable to move because of his unbearable pain.
Then he looks up and sees that Mighty-One has transformed into a Super Haven 3, but to his surprise it looks like Cyborg is hugging Mighty-One. "I think you should let me go now." demands Mighty-One. "Nope not until I self-destruct in 10 seconds." replies Cyborg. "Haaaaaa," yells T-Mac who is managing to hold up one hand and send out a blast. Mighty-One sees the blast and positions himself so the blast hits Cyborg. The blast hits Cyborg, loosening his grip on Mighty-One just by a little. Mighty-One turns around to face Cyborg and puts his hands together. "FINAL FLASH!!!!!!!!" yells Mighty-One as a gigantic ball generates between his hands and then he fires it at Cyborg, destroying him before he detonates. Mighty-One flies down to T-Mac. "Bro, your alive." says Mighty-One. "I know bro, but I'm feeling that pain" replies T-Mac. "At least your alive. Hey lets get home, because you know mom is probably worried, plus I'm hungry." says Mighty-One. "Hahaha lets do it," replies T-Mac. "Instant Transmission Time." replies Mighty-One. The two boys save their sister and the world and then head home.

</div>

<div id="next">

<a href="cs.php">Cyborg Saga</a>

</div>

<?php
    include("footer.php");
?>