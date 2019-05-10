<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Sign In</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('createAccount') ?>">Sign Up</a>
    </li>
</ul>

</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url("assets/Imagens/Slider_1.jpg") ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url("assets/Imagens/Slider_2.jpg") ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url("assets/Imagens/Slider_3.jpg") ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<hr class="w-75">
<h1 class="text-primary text-center mb-2">Movies</h1>

<div class="container-fluid mb-2">
    <div class="row text-center">
        <?php foreach ($movies as $media) : ?>
            <div class="col-12 col-lg-4 mt-2">
                <div class="card">
                <img src="assets\Imagens\<?php echo $media->foto?>" class="w-100" alt="">
                    <div class="card-body text-left">
                        <h4 class="text-primary"><?php echo $media->titulo ?></h4>
                        <hr class="w-100">
                        <h6 class="text-primary"><?php echo $media->filme ?></h6>
                        <p><?php echo $media->descricao ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-primary">
                    Login Data
                </h6>
                <small class="ml-1">Input the Data to Log in MovieRise</small>
                <hr>
                <form action="<?php echo base_url('ControllerPages/login'); ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="">
                        <br>
                        <a href="<?php echo base_url('forgotPassword') ?>" class="ml-1">Forgot Password?</a>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Enter</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>