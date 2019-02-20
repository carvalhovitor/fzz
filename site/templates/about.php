<?php snippet('head'); ?>

<main class="about">

    <section class="contact">
        <?= page()->text()->kirbytext(); ?>

        <table>

            <tr>
                <td><i><?= $site->language() == 'pt' ? 'Fale comigo' : 'Talk to me' ?></i></td>
                <td><a href="mailto: <?= page()->email(); ?>"><?= page()->email(); ?></a></td>
            </tr>

            <tr>
                <td><i><?= $site->language() == 'pt' ? 'Siga-me' : 'Follow me' ?></i></td>
                <td>
                    <?php foreach($page->links()->toStructure() as $link): ?>
                        <span>
                            <a target="_blank" href="<?= $link->url() ?>"><?= $link->title() ?></a>
                        </span>
                    <?php endforeach ?>
                </td>
            </tr>

            <tr>
                <td><i><?= $site->language() == 'pt' ? 'Currículo' : 'Curriculum' ?></i></td>
                <td>
                    <span><a target="_blank" href="<?= page()->linkedin(); ?>">Fabrizia Posada <?= $site->language() == 'pt' ? 'no' : 'on' ?> Linkedin</a></span>
                </td>
            </tr>

        </table>
        
        <p><?= $site->language() == 'pt' ? 'Site desenvolvido por' : 'Site developed by' ?> <a target="_blank" href="http://vitorcarvalho.net">Vitor Carvalho</a></p>

    </section>

    <section class="image">
        <img src="<?= page()->image()->url(); ?>">
    </section>

</main>

<?php snippet('footer'); ?>