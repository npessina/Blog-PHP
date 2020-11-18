<?php require 'header.php'; ?>

    <div class="contenedor">
        <h2><?php echo $titulo; ?></h2>
        <?php foreach($resultados as $post): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['Id']; ?>"><?php echo $post['Titulo'] ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['Fecha']); ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['Id']; ?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['Thumb']; ?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['Extracto']; ?></p>
                    <a href="#" class="continuar">Leer más</a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>

<?php require 'footer.php'; ?>
