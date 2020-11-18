<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar Artículo</h2>
            <form class="formulario" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="hidden" value="<?php echo $post['Id']; ?>" name="id">    
                <input type="text" name="titulo" value="<?php echo $post['Titulo']; ?>">
                <input type="text" name="extracto" value="<?php echo $post['Extracto']; ?>">
                <textarea name="texto"><?php echo $post['Texto']; ?></textarea>
                <input type="file" name="thumb">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['Thumb']; ?>">
                <br>
                <br>

                <input type="submit" value="Modificar artículo">
            </form>
        </article>
    </div>
</div>

<?php require 'footer.php'; ?>