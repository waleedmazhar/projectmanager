<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>
<?php echo form_hidden('id',$result->id) ?>

                                    <p><label for="username">User Name<span class="required">*</span></label>                                
                                    <input id="username" type="text" name="username" value="<?php echo $result->username ?>"  />
                                    <?php echo form_error('username','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="password">Password<span class="required">*</span></label>                                
                                    <input id="password" type="password" name="password" value="<?php echo $result->password ?>"  />
                                    <?php echo form_error('password','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="firstname">First Name<span class="required">*</span></label>                                
                                    <input id="firstname" type="text" name="firstname" value="<?php echo $result->firstname ?>"  />
                                    <?php echo form_error('firstname','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="middlename">Middle Name<span class="required">*</span></label>                                
                                    <input id="middlename" type="text" name="middlename" value="<?php echo $result->middlename ?>"  />
                                    <?php echo form_error('middlename','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="lastname">Last Name<span class="required">*</span></label>                                
                                    <input id="lastname" type="text" name="lastname" value="<?php echo $result->lastname ?>"  />
                                    <?php echo form_error('lastname','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="email">Email<span class="required">*</span></label>                                
                                    <input id="email" type="text" name="email" value="<?php echo $result->email ?>"  />
                                    <?php echo form_error('email','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="address">Address<span class="required">*</span></label>                                
                                    <textarea id="address" name="address"><?php echo $result->address ?></textarea>
                                    <?php echo form_error('address','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="phone">Phone<span class="required">*</span></label>                                
                                    <input id="phone" type="text" name="phone" value="<?php echo $result->phone ?>"  />
                                    <?php echo form_error('phone','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="mobile">Mobile<span class="required">*</span></label>                                
                                    <input id="mobile" type="text" name="mobile" value="<?php echo $result->mobile ?>"  />
                                    <?php echo form_error('mobile','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="gender">Gender<span class="required">*</span></label>
                                    <?php
                                    $enum = array('0'=>'--Select Gender--','male'=>'Male','female'=>'Female');                                                                    
                                    echo form_dropdown('gender', $enum,$result->gender); ?>
                                    <?php echo form_error('gender','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="group_id">Group_id<span class="required">*</span></label>                                
                                    <input id="group_id" type="dropdown" name="group_id" value="<?php echo $result->group_id ?>"  />
                                    <?php echo form_error('group_id','<div>','</div>'); ?>
                                    </p>
                                    
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
