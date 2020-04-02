<!doctype html>
<html>
<head>
    <title>Login :: MIIT Internship</title>
    <link rel="stylesheet" href="<?=base_url() ?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>public/css/style.css" />



    <script src="<?=base_url() ?>public/js/jquery.js"></script>
    <script src="<?=base_url() ?>public/js/bootstrap.js"></script>

    <script src="<?=base_url() ?>public/js/showpass.js"></script>

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div>
                <div class="alert <?php if(!empty($status_type)){
                                            if($status_type === 'success'){
                                                echo "alert-success";
                                            }else if ($status_type === 'fail'){
                                                echo "alert-danger";
                                            }
                                        }
                     ?>" style="<?php if(empty($status_type)){echo 'display:none;';} ?>">
                    <strong><?php if(!empty($status_type)){
                            echo $status_message;
                    } ?></strong>
                </div>
                <div id="divLogin" class="col-sm-4 absolute-center">
                    <form action="<?=base_url() ?>index.php/login/CheckLogin" method="post">
                        <h3>Please Log In</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User Name" name="user_name" id=="txt_username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="user_password" id="txt_password" />
                            <button type="button"   onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" id="eye" class="pull-right">
				            <span class="glyphicon glyphicon-eye-open "></span>
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="javascript: LoadRegister()" class="pull-left" name="txtcolor" style="color:#ffffff;">Register</a>
                            <a href="javascript: LoadFg()" class=" forgetpwd" name="txtcolor" style="color:#ff0000;"> Forget Password ? </a>
                            <input type="submit" class="btn btn-primary pull-right" name="btnSubmit" value="Log In" />
                        </div>
                    </form>
                </div>
            </div>
            

            <div id="divRegister" class="col-sm-4 absolute-center" style="display:none;">
                <form action="<?=base_url() ?>index.php/login/Register" method="post">
                    <h3>User Registeration</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Name" name="user_name" id=="txt_username" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address"  name="user_email" id=="txt_username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="user_password" id="txt_password" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="user_confirm_password" id="txt_password" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="dateofbirth" value="" class="form-control " placeholder="Date Of Birth (dd/mm/yyyy)" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="" class="form-control " placeholder="Address" required />
                    </div>
                    <div class="form-group">
                        <select  name="select" class="form-control" placeholder="Choose a security question" value="">
                            <option>Choose a security question</option>
                            <option>Whay is your favourite animal</option>
                            <option>What is your mother name</option>
                            <option>Your Best Friend Name</option>
                            <option>Your Hobby </option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <input id="name" type="text"  class="form-control "  placeholder="answer" required>
                    </div>
                    <div class="form-group" style="color:#ffffff;">
                        <label >Gender : </label>                    
                        <label class="radio-inline" required>
                            <input type="radio" name="gender" value="M" id=male />Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="F" id=female />Female
                        </label>
                        <br />
         
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary pull-center" name="btnSubmit" value="Register" />
                    </div>
                    <div class="form-group">
                        <a href="javascript: Back()" class="back" style="color:#ffffff;">Back</a>
                    </div>
                </form>
            </div>

            <div id="fgpass" class="col-sm-4 absolute-center" style="display:none;">
                <div class="text-center">
   <!--               <h3><i class="fa fa-lock fa-4x"></i></h3>     -->
                  <h2 class="text-center">Forgot Password?</h2>
                  <h4>Please Enter Your Email Address.</h4>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Confirm" type="submit">
                        </div>
                        <div class="form-group">
                            <a href="javascript: Backfg()" class="back" style="color:#ffffff;">Back</a>
                        </div>
                    <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
                  </div>
                </div>
            </div>

            <div id="confpass" class="col-sm-4 absolute-center" style="display:none;">
                <form action="<?=base_url() ?>index.php/login/Register" method="post">
            </div>


        </div>
    </div>
</body>

<script type="text/javascript">
    function LoadRegister(){
        $('#divLogin').hide();
        $('#divRegister').fadeIn();
    }
    function LoadFg(){
        $('#divLogin').hide();
        $('#fgpass').fadeIn();
    }
    function Back(){
        $('#divRegister').hide();
        $('#divLogin').fadeIn();
    }
    function Backfg(){
        $('#fgpass').hide();
        $('#divLogin').fadeIn();
    }
</script>
</html>

