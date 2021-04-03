<body data-spy="scroll" data-target=".mainmenu-area">

    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>

    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/home/images/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">About</a></li>
                    <li><a href="#prosedur_page">Prosedur Mutasi</a></li>
                    <li><a href="#questions_page">FAQ</a></li>
                    <li><a href="#gallery_page">Gallery</a></li>
                    <li><a href="#contact_page">Contacts</a></li>
                </ul>
                <?php if ($this->session->userdata('username') == null) { ?>
                    <div class="right-button hidden-xs">
                        <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login/Daftar</a>
                    </div>
                <?php } else { ?>
                    <div class="right-button hidden-xs">
                        <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Halo, <?= $this->session->userdata('username'); ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="modal fade login" style="margin-top: 100px;" id="loginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content" style="width: 400px;margin-left: -50px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Login with</h4>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="error"></div>
                            <div class="form loginBox">
                                <!-- LOGIN -->
                                <form method="post" action="<?= base_url() ?>login/login_process" accept-charset="UTF-8">
                                    <input id="username" name="username" class="form-control" type="text" placeholder="Username" name="email">
                                    <input id="password" class="form-control" type="password" name="password"  placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox" style="display:none;">
                            <div class="form">
                            <!-- REGISTER -->
                                <form method="" action="" accept-charset="UTF-8">
                                    <input id="username" class="form-control" type="text" placeholder="Username" name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                    <input class="btn btn-default btn-register" type="button" value="Create account" name="commit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                        <span>Looking to
                            <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                    </div>
                    <div class="forgot register-footer" style="display:none">
                        <span>Already have an account?</span>
                        <a href="javascript: showLoginForm();">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>