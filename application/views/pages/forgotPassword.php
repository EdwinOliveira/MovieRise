</nav>

<div class="container mt-5">
    <h6 class="text-primary">Forgot Password</h6>
    <small>Insert the data to change your Password</small>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php if ($this->session->flashdata('incorrectData')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('incorrectData') ?> </div>
            <?php } ?>
            <form action="<?php echo base_url('ControllerPages/forgotPassword'); ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="password2">Reintroduza Password</label>
                    <input type="password" class="form-control" id="password2" placeholder="Reintroduza Password" name="password2">
                </div>
                <hr>
                <div class="text-right">
                    <?php if ($this->session->flashdata('validData')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('validData') ?> </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <a href="<?php echo base_url('home')?>" class='btn btn-danger'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>