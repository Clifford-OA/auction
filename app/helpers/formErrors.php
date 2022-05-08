<?php if (count($erros) > 0) : ?>
    <div class="msg error">
        <?php foreach ($erros as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>