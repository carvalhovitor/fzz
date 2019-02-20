<?php snippet('head'); ?>

<main>

    <div class="project-wrapper">

        <section class="mobile-title" aria-hidden="true">
            <h2 {% if page.text-color %} style="color: <?= $page->textcolor(); ?>" {% endif %}><?= page()->title(); ?></h2>
        </section>

        <div class="project-description-wrapper">
            <section class="project-description" style="color: <?= $page->textcolor(); ?>">
                <h2><?= page()->title(); ?></h2>
                <?= page()->text()->kirbytext(); ?>
            </section>
        </div>

        <section class="project-images">
            <?php foreach($page->images()->sortBy('sort', 'asc')->offset(1) as $image): ?>
                <img src="<?= $image->url(); ?>">
            <?php endforeach ?>
        </section>

    </div>

</main>

<?php snippet('footer'); ?>