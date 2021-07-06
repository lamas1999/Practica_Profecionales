<?php require_once 'header.php'; ?>

<body>
 

   <section class="material-half-bg"></section> 
    
    <section class="login-content">
        <div class="login-box">

        
            <form class="login-form" action="#">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Iniciar Seccion</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" placeholder="Email" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox"><span class="label-text">Stay Signed in</span>
                            </label>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn1 btn-primary1 btn-block1"><i class="fas fa-sign-in-alt"></i> SIGN IN</button>
                </div>
            </form>

        </div>
    </section>
    <?php require 'footer.php';?>