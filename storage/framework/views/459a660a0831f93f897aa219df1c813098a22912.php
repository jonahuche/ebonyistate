<?php $__env->startSection('title'); ?>
	Ebonyi State Stimulus Project Signup Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register With Your Bio-Data</div>
                <span id="uploaded_image"></span>
                <div class="panel-body">
                    <form id="signupform" class="form-horizontal" method="POST"  enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="alert " id="message" style="display: none"></div>
                         <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="photo" class="col-md-3 control-label">Upload A recent Passport</label>
                            <span id="uploaded_image"></span>
                            <div class="col-md-9">
                                <input id="photo" type="file" class="form-control" name="photo" >

                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-3 control-label">Name</label>

                            <div class="col-md-3">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo e(old('firstname')); ?>" placeholder="Firstname" autofocus>

                                <?php if($errors->has('firstname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-3">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="<?php echo e(old('middlename')); ?>" placeholder="Middlename" autofocus>

                                <?php if($errors->has('middlename')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('middlename')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-3">
                                <input id="lastnname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" placeholder="Lastname" autofocus>

                                <?php if($errors->has('lastname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<!-- ################################################# -->
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" >

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('phone_no') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-3 control-label">Phone&nbspNumber</label>

                            <div class="col-md-9">
                                <input id="phone_no" type="phone" class="form-control" name="phone_no" value="<?php echo e(old('phone_no')); ?>" >

                                <?php if($errors->has('phone_no')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone_no')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control" name="password" >

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="col-md-3 control-label">Confirm Password</label>

                            <div class="col-md-9">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>
                        
						<div class="row form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                        	<label for="gender" class="col-md-3 control-label">Gender</label>

                        	<!-- <div class="col-md-3"></div> -->
						<div class="col-md-3 col-xs-3 col-sm-6 col-lg-3">
<!--								 <label for="state">State</label> -->
								 <select name="gender" id="gender" class="form-control" >
									<option selected value="<?php echo e(old('gender')); ?>">Selet Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option> 
									
            					</select>
						</div>
							<label for="marital_status" class="col-md-2 control-label">Marital&nbspStatus</label>
								<div class="col-md-4 col-xs-9 col-sm-3 col-lg-4">
									
<!--								 <label for="lga">L.G.A</label> -->
								 <select name="marital_status" class="form-control<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>" id="marital_status" value="<?php echo e(old('marital_status')); ?>" >

									<option selected>Marital Status</option>
									<option value="Abakaliki">Single</option>
									<option value="Afikpo North">Married</option>
									<option value="Afikpo North">Others</option>
									
            					</select>
            					 <?php if($errors->has('marital_status')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('marital_status')); ?></strong>
                                    </span>
                                <?php endif; ?>
							</div>
						</div>
						<div class="form-group<?php echo e($errors->has('date_of_birth') ? ' has-error' : ''); ?>">
                            <label for="dob" class="col-md-3 control-label"> D.O.B</label>

                            <div class="col-md-9">
                                <input id="dob" type="date" placeholder="D.O.B" class="form-control" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>" 
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('residential_address') ? ' has-error' : ''); ?>">
                            <label for="residential_address" class="col-md-3 control-label"> Residential Address</label>

                            <div class="col-md-9">
                                <input id="residential_address" type="text" placeholder="Where do you live?" class="form-control" name="residential_address" value="<?php echo e(old('residential_address')); ?>" 
                            </div>
                        </div>

                        <div class="row form-group<?php echo e($errors->has('state_of_origin') ? ' has-error' : ''); ?>">
                        	<label for="state" class="col-md-3 control-label">State</label>

                        	<!-- <div class="col-md-3"></div> -->
						<div class="col-md-3 col-xs-3 col-sm-6 col-lg-3">
<!--								 <label for="state">State</label> -->
								 <select name="state_of_origin" class="form-control" id="state" >
									<option selected value="<?php echo e(old('state_of_origin')); ?>">Choose State</option>
									
									<option value="ebonyi">Ebonyi</option> 
									
            					</select>
            					   <?php if($errors->has('state_of_origin')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('state_of_origin')); ?></strong>
                                    </span>
                                <?php endif; ?>
							</div>
							<label for="lga" class="col-md-2 control-label">Local Govt.</label>
								<div class="col-md-4 col-xs-9 col-sm-3 col-lg-4">
									<select name="lga" class="form-control" id="lga" >
									<option selected>Choose L.G.A.</option>
									<option value="Abakaliki">Abakaliki</option>
									<option value="Afikpo North">Afikpo North</option>
									<option value="Afikpo South">Afikpo South</option> 
									<option value="Ebonyi">Ebonyi</option> 
									<option value="Ezza South">Ezza South</option> 
									<option value="Ikwo">Ikwo</option> 
									<option value="Ishielu">Ishielu</option> 
									<option value="Ivo">Ivo</option> 
									<option value="Izzi">Izzi</option> 
									<option value="Ohaozara">Ohaozara</option> 
									<option value="Onicha">onicha</option>
            					</select>
							</div>
						</div>
						<div class="form-group<?php echo e($errors->has('date_of_birth') ? ' has-error' : ''); ?>">
                            <label for="Village" class="col-md-3 control-label">Village</label>

                            <div class="col-md-9">
                                <input id="Village" placeholder="Village" type="text" class="form-control" value="<?php echo e(old('village')); ?>" name="village" >
                                <?php if($errors->has('village')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('village')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                        <div class="form-group<?php echo e($errors->has('date_of_birth') ? ' has-error' : ''); ?>">
                            <label for="autonomous_comm" class="col-md-3 control-label">Autonomus Community</label>

                            <div class="col-md-9">
                                <input id="autonomous_comm" type="text" placeholder="Autonomous Community" class="form-control" value="<?php echo e(old('autonomous_comm')); ?>" name="autonomous_comm" >
                            <?php if($errors->has('autonomous_comm')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('autonomous_comm')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row form-group<?php echo e($errors->has('category') ? ' has-error' : ''); ?>">
                        	<label for="category" class="col-md-3 control-label">Category</label>

                        	<!-- <div class="col-md-3"></div> -->
						<div class="col-md-3 col-xs-3 col-sm-6 col-lg-3">
<!--								 <label for="state">State</label> -->
								 <select name="category" id="category" class="form-control" >
									<option selected value="<?php echo e(old('category')); ?>">Select Category</option>
									<option value="Female">Business Interest</option>
									<option value="enngineer_and_tech">Engineering And Technologists</option>
									<option value="Other">Elders Seeking Business</option> 
									<option value="Female">Medicine</option>
									<option value="Other">Teachers</option>
									<option value="Male">Traders</option> 
									
            					</select>
						</div>
					</div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#signupform').on('submit', function(e){
			e.preventDefault();
			$.ajax({
				url:'<?php echo e(route('signup')); ?>',
				method:'POST',
				data: new FormData(this),
				dataType:'JSON',
				contentType:false,
				cache:false,
				processData:false
				success:function(data){
					$('#message').css('display','block');
					$('#message').html(data.message);
					$('#message').addClass(data.class_name);
					$('#uploaded_image').html(data.uploaded_image);
				}
			});
		})
	})

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>