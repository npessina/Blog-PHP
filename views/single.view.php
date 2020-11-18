<?php require 'header.php'; ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['Titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($post['Fecha']); ?></p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['Thumb']; ?>" alt="<?php echo $post['Titulo']; ?>">
                    </a>
                </div>
                <p class="extracto"><?php echo nl2br($post['Texto']); ?></p>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>
