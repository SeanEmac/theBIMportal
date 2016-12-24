<div class="register_back_container">
    	<div class="main">
            <div class="logo">
                <img src="<?php echo base_url('images/BIMportal1.png')?>" alt="VolkerFitzpatrick - Experience Excellence" />
            </div>
        	<div class="details_back registration" style="display:none;">
                <h1>Register</h1>
            	<form action="#" method="post" validate="validate" class="regform" >
                <div class="middle_back">
                    <div class="clear"></div>
                    <div class="clear"></div>
                    <h1 style="display: none;" class="reg_success">Registration successful. Please check your email.</h1>
                    <div class="form_back">
                    	<div class="details">
                            	<input type="text" placeholder="Email Address" data-validation-engine="validate[required,custom[email]]" name="email" id="email"/>
                                <input type="password" placeholder="Password" name="password" id="password" data-validation-engine="validate[required]"/>
                                <input type="password" placeholder="Confirm Password" id="cpassword" data-validation-engine="validate[required,equals[password]]"/>
                                <input type="text" placeholder="Name" data-validation-engine="validate[required]" name="name" id="name" />
                                <input type="text" placeholder="Company" data-validation-engine="validate[required]" name="company" id="company" />
                                <select name="discipline" class="select-discipline" data-validation-engine="validate[required]" id="disicipline">
                                    <option disabled selected>Select Discipline</option>
                                   <?php
                                   echo getDicisiplineOption('html', '');
								   ?>
                                   <!--<option>DISCIPLINE</option>
                                   <option>DISCIPLINE 1</option>
                                   <option>DISCIPLINE 2</option>
                                   <option>DISCIPLINE 3</option>
                                   <option>DISCIPLINE 4</option>
                                   <option>DISCIPLINE 5</option>
                                   <option>DISCIPLINE 6</option>
                                   <option>DISCIPLINE 7</option>
                                   <option>DISCIPLINE 8</option>-->
                              	</select>

                                <input type="text" placeholder="Mobile Number" data-validation-engine="validate[required,custom[phone]]" name="phone" id="phone"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class=" clear"></div>
                    <div class="sub_details">
                    <a href="javascript:void(0)" class="login toggle grey-button">Login</a>
                    <p><input type="submit" class="blue-button action register" value="Register" /></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                </form>
            </div>
            <div class="details_back login">
                <h1>Login</h1>
            	<form action="#" method="post" validate="validate" class="login_form">
                <div class="middle_back">
                    <div class="clear"></div>
                    <div class="clear"></div>
                    <h1 style="display: none;" class="log_error">Registration successful. Please check your email.</h1>
                    <div class="form_back">
                    	<div class="details">
                            	<input type="text" placeholder="Email Address" data-validation-engine="validate[required,custom[email]]" name="email" id="email"/>
                                <input type="password" placeholder="Password" name="password" id="password" data-validation-engine="validate[required]"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class=" clear"></div>
                    <div class="sub_details">
                    	<a href="javascript:void(0);" class="registration toggle grey-button">Register</a>
                    	<p><input type="submit" class="blue-button action login" value="Login" /></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <p id="forgot-password"><a href="javascript:void(0)" class="forgotpass action toggle">Forgot password?</a></p>
                <div class="clear"></div>
                </form>
            </div>
			 <div class="details_back forgotpass"  style="display:none;">
                <h1>Forgot Password</h1>
				<form action="#" method="post" validate="validate" class="forgotpass_form">
				<div class="middle_back">
					<div class="clear"></div>
					<div class="clear"></div>
					<h1 style="display: none;" class="forgotpass_error">Please check your email.</h1>
                    <h1>Enter your email below to retrieve your password.</h1>
					<div class="form_back">
						<div class="details">
						        <input type="text" placeholder="Email Address" name="uname" id="uname" data-validation-engine="validate[required]"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class=" clear"></div>
					<div class="sub_details">
    					<input type="submit" class="submit blue-button action" value="Send" />
                        <a href="javascript:void(0);" class="login toggle grey-button">Login</a>
    					<p>
                            <a href="javascript:void(0)" class="registration toggle grey-button" style="margin-left:20px;">Register</a>
                        </p>
					</div>
				</div>
				<div class="clear"></div>
				</form>
			</div>
        </div>
    </div>
