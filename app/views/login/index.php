<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/custom.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6" style="background-image: url('<?= BASEURL; ?>img/background.jpg'); background-size: cover; background-position: center;"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <img src="<?= BASEURL; ?>img/logoptpwl.png" alt="logoPTPWL" style="width:440px;" class="img-fluid">

                            <!-- Sign In Form -->
                            <form class="row g-3" style="margin-top: 10px; position: center; padding-left: 5px;" action="<?= BASEURL; ?>login/index" method="POST">
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username *">
                                    <label for=" floatingInput">Username</label>
                                    <span class="invalidFeedback" style="color:red">
                                        <?php echo $data['usernameError']; ?>
                                    </span>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
                                    <label for="floatingPassword">Password</label>
                                    <span class="invalidFeedback" style="color:red">
                                        <?php echo $data['passwordError']; ?>
                                    </span>
                                </div>


                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
<div class="container-sm col-4 shadow" style="margin: 100px auto;">

    <form class="row g-3" style="margin-top: 10px; position: center; padding-left: 5px;" action="<?= BASEURL; ?>login/index" method="POST">
        <div class="col-12 mb-3">
            <h2>
                PT. Purna Wahana Lestari
            </h2>
        </div>
        <div class="col-12 mb-1">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username *">
            <span class="invalidFeedback" style="color:red">
                <?php echo $data['usernameError']; ?>
            </span>
        </div>
        <div class="col-12 mb-1">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password *">
            <span class="invalidFeedback" style="color:red">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <div class="col-12 mb-1">
            <button type="submit" id="submit" class="btn btn-primary container-fluid" style=" font-family: 'Poppins', sans-serif; background-color: #54BAB9;">Login</button>
        </div>
        <div class="col-12 mb-3">
        </div>
    </form>

</div> -->