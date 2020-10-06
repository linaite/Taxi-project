<div class="container">
    <?php foreach ($data as $pixel): ?>
        <span class="pixel"
              style="background-color:<?= $pixel['color']; ?>;
                  top:<?php print $pixel['x']; ?>px;
                  left:<?php print $pixel['y']; ?>px"
        ></span>
    <?php endforeach; ?>
</div>