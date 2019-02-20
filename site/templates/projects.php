<?php snippet('head'); ?>

<main>

    <section id="grid">

        <?php $projects = $page->children()->visible(); ?>

        <?php foreach($projects as $project): ?>

            <section class="grid-item <?php foreach($project->categories()->split() as $category): ?> <?= $category; ?><?php endforeach ?>">
                <a href="<?= $project->url(); ?>">
                    <img src="<?= $project->images()->sortBy('sort', 'asc')->first()->url() ?>">
                </a>
            </section>

        <?php endforeach ?>

    </section>

</main>

<?php snippet('footer'); ?>