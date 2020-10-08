<nav class="navbar">
    <?php foreach ($data as $link): ?>
        <a class="<?php print $link['class']; ?>
        <?php $_SERVER['REQUEST_URI'] === $link['url'] ? print 'active' : null; ?>"
           href="<?php print $link['url']; ?>"><?php print $link['title']; ?></a>
    <?php endforeach; ?>
</nav>
