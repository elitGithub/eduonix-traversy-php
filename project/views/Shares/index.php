<div>
    <a href="<?php echo ROOT_PATH ?>shares/add" class="btn btn-success btn-share">Share something</a>
    <?php
    foreach($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title'] ?></h3>
        </div>
    <?php endforeach; ?>
</div>