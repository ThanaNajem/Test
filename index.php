<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="style.css" rel="stylesheet" >
   </head>
   <body>
      <div class="container">
         <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
               <div class="panel-heading">
                  <div class="panel-title">Sign In</div>
               </div>
               <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  <form id="loginform" class="form-horizontal" role="form">
                     <div style="margin-bottom: 25px;width: 75%;" class="input-group handler">
                        <div class="t-tip" id="login_usernameErr">Required</div>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" >
                        <!-- <span id="login-username-err" class="alert alert-danger" 
                           style="width: 25%;
                                   position: absolute;
                                   height: 24px;
                                   justify-content: center;margin-left: 5px;display: none;" >Err</span>  -->                             
                     </div>
                     <div style="margin-bottom: 25px;width: 75%;" class="input-group handler">
                        <div class="t-tip" id="login_pass_err">Required</div>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        <!--   <span id="login-password-err" class="alert alert-danger" 
                           style="width: 25%;
                                   position: absolute;
                                   height: 24px;
                                   justify-content: center;margin-left: 5px;display: none;">Err</span>  -->
                     </div>
                     <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                           <a id="btn-login" href="#" class="btn btn-success">Login  </a> 
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-12 control">
                           <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                              Don't have an account! 
                              <a href="#" style="display: inline-block;"  onclick="$('#loginbox').hide(); $('#signupbox').show(); $('#signupbox').css('display','block');">
                              Sign Up Here
                              </a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">Sign Up</div>
                  <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" style="display:inline-block;" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
               </div>
               <div class="panel-body" >
                  <form id="signupform" class="form-horizontal" role="form" >
                     <!--  <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                        </div> -->
                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9 handler ">
                           <div class="t-tip" id="emailErr">Required</div>
                           <input type="text" id="email" class="form-control" name="email" placeholder="Email Address" style="width:75%;float: left;">
                           <!--  <span id="login-email-err" class="alert alert-danger" 
                              style="width: 25%;
                                      position: absolute;
                                      height: 24px;
                                      justify-content: center;margin-left: 5px;display: none;
                                      ">Err</span>  -->
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9 handler">
                           <div class="t-tip" id="fnameErr">Required</div>
                           <input type="text" id="firsrtname" class="form-control" name="firstname" placeholder="First Name" style="width:75%;float: left;">
                           <!--  <span id="login-firstname-err" class="alert alert-danger" 
                              style="width: 25%;
                                      position: absolute;
                                      height: 24px;
                                      justify-content: center;margin-left: 5px;display: none;">Err</span>  -->
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9 handler">
                           <div class="t-tip" id="lnameErr">Required</div>
                           <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Last Name"  style="width:75%;float: left;">
                           <!--  <span id="login-lastname-err" class="alert alert-danger" 
                              style="width: 25%;
                                      position: absolute;
                                      height: 24px;
                                      justify-content: center;margin-left: 5px;display: none;">Err</span>  -->
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9 handler">
                           <div class="t-tip"  id="passErr">Required</div>
                           <input type="password" id="pass" class="form-control" name="passwd" placeholder="Password"  style="width:75%;float: left;">
                           <!--   <span id="login-password-err" class="alert alert-danger" 
                              style="width: 25%;
                                      position: absolute;
                                      height: 24px;
                                      justify-content: center;margin-left: 5px;display: none;">Err</span>  -->
                        </div>
                     </div>
                     <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                           <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="custom.js"></script>
   </body>
</html>