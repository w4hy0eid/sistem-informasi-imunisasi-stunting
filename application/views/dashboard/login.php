<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('dashboard/_partials/css') ?>
    <title>Login</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>SIPENTING</h1>
        </div>
        <div class="login-box">
            <form id="loginform" class="login-form">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>MASUK</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" onclick="SavePost();"><i class=" fa fa-sign-in fa-lg fa-fw"></i>MASUK</button>
                </div>
            </form>

        </div>
    </section>
    <?php $this->load->view('dashboard/_partials/js') ?>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>