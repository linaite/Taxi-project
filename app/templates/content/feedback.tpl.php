<main class="bg_main">
    <div class="wrapper">
        <div class="table_block">
            <?php print $data['table']; ?>
        </div>
        <div class="links">
            <span><?php print isset($data['txt']) ? $data['txt'] : null; ?>
                <a href="<?php print isset($data['link']) ? $data['link'] : null; ?>">
                    <?php print isset($data['msg']) ? $data['msg'] : null; ?>
                </a>
            </span>
        </div>
        <div class="feedback_block"><?php print isset($data['form']) ? $data['form'] : null; ?></div>
    </div>
</main>