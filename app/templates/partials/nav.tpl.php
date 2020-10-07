
<nav class="navbar">
    <?php foreach ($data as $link): ?>
        <a  onclick="highlite(this);" class="<?php print $link['class']; ?>"
           href="<?php print $link['url']; ?>"><?php print $link['title']; ?></a>
    <?php endforeach; ?>
</nav>