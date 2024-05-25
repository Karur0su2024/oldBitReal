<?php

include('header.php');

?>

<div class="card w-100 shadow-sm my-5 rounded" style="width: 18rem;">
    <div class="card-header py-3 text-bg-dark">
        <h3 class="card-title">Vítejte na super shop</h3>
    </div>
    <div class="card-body text-dark">
        Vítejte v našem virtuálním obchodě s jídlem a pitím! Jsme rádi, že jste nás našli a těšíme se, že vám můžeme nabídnout širokou škálu produktů, 
        které vám pomohou udělat si chutnou a zdravou snídani, oběd nebo večeři. U nás najdete vše od čerstvých sezónních plodů a zeleniny až po nejlepší kávu, 
        čaje a další nápoje. Naši dodavatelé jsou pečlivě vybíráni tak, aby vám mohli nabídnout nejvyšší kvalitu, čerstvost a chuť. Pokud máte nějaké dotazy, 
        neváhejte nás kontaktovat. Jsme tu pro vás a rádi vám pomůžeme s výběrem produktů, které nejenom budou chutnat, ale také 
        vám dodají dostatek energie a vitamínů pro celý den.
    </div>

</div>

<?php
include('components/carousel.php');
component('offers');
component('carousel');
include('footer.php');

?>