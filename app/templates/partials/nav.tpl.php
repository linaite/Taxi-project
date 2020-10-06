<nav class="navbar">
    <?php foreach ($data as $link): ?>
        <a class="<?php print $link['class']; ?>" href="<?php print $link['url']; ?>"><?php print $link['title']; ?></a>
    <?php endforeach; ?>
</nav>