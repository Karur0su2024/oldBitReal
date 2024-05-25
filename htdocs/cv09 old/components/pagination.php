<?php $products = getProducts() ?>

<div class="row m-4">
    <?php if (!empty($products)) : ?>

        <?php foreach ($products as $product) : ?>
            <?php component('productCard') ?>
        <?php endforeach; ?>
        <nav aria-label="Page navigation"class="mx-auto">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                <?php for ($i = 1; $i <= $noPages; $i++) : ?>

                    <li class="page-item"><a class="page-link" href="http://localhost/www/cv09?page=<?php echo $i ?>"><?php echo $i ?></a></li>

                <?php endfor; ?>

                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    <?php else : ?>

        <div class="text-center">
            <img class="w-25 mb-3" src="error.png" alt="" srcset="">
            <h3>Žádné produkty :/</h3>
        </div>

    <?php endif ?>
</div>