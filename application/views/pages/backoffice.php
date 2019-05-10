</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <h5 class="text-primary">Movies</h5>
            <small>Here are all the movies that you have in the website.</small>
        </div>
        <div class="col-4 mt-3 text-right">
            <a href="adicionaFilme" class="btn btn-primary">Adiciona Filme</a>
        </div>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Picture</th>
                <th scope="col">Movie</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($movies as $media) : ?>
                <th scope="row"><?php echo $media->id?></th>
                <td><img src="assets\Imagens\<?php echo $media->foto?>" class="" style="width:75px" alt="" ></td>
                <td><?php echo $media->filme ?></td>
                <td><?php echo $media->titulo?></td>
                <td><?php echo $media->descricao?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>