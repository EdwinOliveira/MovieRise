</nav>
<link href="assets\CSS\adicionaFilmes.css" rel="stylesheet">
<div class="container mt-5">
    <h6 class="text-primary">Update Movie</h6>
    <small>Insira o nome do Filme que quer Alterar!</small>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php if ($this->session->flashdata('incorrectData')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('incorrectData') ?> </div>
            <?php } ?>
            <form action="<?php echo base_url('ControllerMedia/updateMovie'); ?>" method="post">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title" name="title">
                </div>
                <hr>

                <div class="text-center">
                    <img id="imgSRC" src="" alt="your image" class="w-50 " />

                    <input type="file" id="file-with-current" class="input-default-js " onchange="readURLLogo(this);" name="imgMovie">
                </div>

                <div class="form-group">
                    <label for="movie">Movie</label>
                    <input type="text" class="form-control" id="movie" aria-describedby="movieHelp" placeholder="Enter Movie" name="movie">
                </div>
                <div class="form-group">
                    <label for="descricao">Descricao</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descricao" name="descricao">
                </div>
                <hr>
                <div class="text-right">
                    <?php if ($this->session->flashdata('incorrectDataModel')) { ?>
                        <div class="alert alert-danger"> <?= $this->session->flashdata('incorrectDataModel') ?> </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('validData')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('validData') ?> </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url('backoffice') ?>" class='btn btn-danger'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="assets\JS\adicionaFilme.js" crossorigin="anonymous"></script>