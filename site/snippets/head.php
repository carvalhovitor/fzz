<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
    <title><?= $site->title()->html() ?> – <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= site()->description() ?>">
    <?php echo krb('assets/css/index.css', 'css', 1.1, false, false, false); ?>
    <?php echo krb('assets/css/normalize.css', 'css', 1.0, true, false, false); ?>
    <link rel="shortcut icon" type="image/png" href="assets/favicon/fzz-favicon.png">

</head>

<body <?php if($page->bgcolor())?> style="background-color: <?= $page->bgcolor(); ?>" >

<header>

  <nav>

      <div class="language-change">
        <?php foreach($site->languages() as $language): ?>
          <a <?php e($site->language() == $language, ' class="active"') ?> href="<?= $page->url($language->code()) ?>">
            <?= html($language->name()) ?>
          </a>

          <?= e($language->code() == 'pt', '/') ?>
        <?php endforeach ?>
      </div>

      <?php if($site->language() == 'pt'): ?>

        <p>Olá! Sou <a <?= e($page->id() == 'sobre', ' class="active"') ?> title="Sobre" href="/sobre">FZZ</a>, uma <a title="Projetos de design" href="/#design">designer</a> e <a title="Projetos de ilustração" href="/#illustration">ilustradora</a> que também <a title="Psicographia por Fabrizia Posada" href="http://psicographia.tumblr.com/" target="_blank">escreve uns contos</a>.</p>

      <?php else: ?>

        <p>Olá! I&rsquo;m <a <?= e($page->id() == 'sobre', ' class="active"') ?> title="About" href="/en/about">FZZ</a>, a Brazilian <a title="Design projects" href="/en/#design">designer</a> and <a title="Illustration projects" href="/en/#illustration">illustrator</a> who also <a title="Psicographia por Fabrizia Posada" href="http://psicographia.tumblr.com/" target="_blank">writes some tales</a>.</p>

      <?php endif; ?>

      <?php snippet('fzz-button'); ?>
      
  </nav>

</header>