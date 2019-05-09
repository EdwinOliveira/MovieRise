</nav>

<div class="container mt-5">
    <h6 class="text-primary">Register Account</h6>
    <small>Insert the data to register your Account</small>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php if ($this->session->flashdata('incorrectData')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('incorrectData') ?> </div>
            <?php } ?>
            <form action="<?php echo base_url('ControllerPages/createAccount'); ?>" method="post">
                <div class="form-group">
                    <label for="inputuserName">UserName</label>
                    <input type="text" class="form-control" id="userName" aria-describedby="userNameHelp" placeholder="Enter userName" name="userName">
                    <small id="userNameHelp" class="form-text text-muted">We'll never share your userName with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <hr>
                <div class="text-right">
                    <?php if ($this->session->flashdata('validData')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('validData') ?> </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="<?php echo base_url('home')?>" class='btn btn-danger'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>