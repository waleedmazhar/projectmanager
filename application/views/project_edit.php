<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>
<?php echo form_hidden('project_id',$result->project_id) ?>

                                    <p><label for="name">Project Name<span class="required">*</span></label>                                
                                    <input id="name" type="text" name="name" value="<?php echo $result->name ?>"  />
                                    <?php echo form_error('name','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="nature">Nature of Business<span class="required">*</span></label>                                
                                    <input id="nature" type="text" name="nature" value="<?php echo $result->nature ?>"  />
                                    <?php echo form_error('nature','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="targetaudience">Target Audience<span class="required">*</span></label>                                
                                    <textarea id="targetaudience" name="targetaudience"><?php echo $result->targetaudience ?></textarea>
                                    <?php echo form_error('targetaudience','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="examplesites">Example Sites/Competitor Site<span class="required">*</span></label>                                
                                    <textarea id="examplesites" name="examplesites"><?php echo $result->examplesites ?></textarea>
                                    <?php echo form_error('examplesites','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="looknfeel">Look and Feel<span class="required">*</span></label>                                
                                    <textarea id="looknfeel" name="looknfeel"><?php echo $result->looknfeel ?></textarea>
                                    <?php echo form_error('looknfeel','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="websitetitle">Title of your Website<span class="required">*</span></label>                                
                                    <input id="websitetitle" type="text" name="websitetitle" value="<?php echo $result->websitetitle ?>"  />
                                    <?php echo form_error('websitetitle','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="slogan">Tagline / Slogan<span class="required">*</span></label>                                
                                    <input id="slogan" type="text" name="slogan" value="<?php echo $result->slogan ?>"  />
                                    <?php echo form_error('slogan','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="contactinfo">Contact Info<span class="required">*</span></label>                                
                                    <textarea id="contactinfo" name="contactinfo"><?php echo $result->contactinfo ?></textarea>
                                    <?php echo form_error('contactinfo','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="socialnetworkinglinks">Social Networking Links<span class="required">*</span></label>                                
                                    <textarea id="socialnetworkinglinks" name="socialnetworkinglinks"><?php echo $result->socialnetworkinglinks ?></textarea>
                                    <?php echo form_error('socialnetworkinglinks','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="backgroundtype">Background Type<span class="required">*</span></label>                                
                                    <input id="backgroundtype" type="text" name="backgroundtype" value="<?php echo $result->backgroundtype ?>"  />
                                    <?php echo form_error('backgroundtype','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="colorscheme">Color Scheme<span class="required">*</span></label>                                
                                    <input id="colorscheme" type="text" name="colorscheme" value="<?php echo $result->colorscheme ?>"  />
                                    <?php echo form_error('colorscheme','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="bodylayouts">Body Layouts<span class="required">*</span></label>                                
                                    <input id="bodylayouts" type="text" name="bodylayouts" value="<?php echo $result->bodylayouts ?>"  />
                                    <?php echo form_error('bodylayouts','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="innerpagelayout">Inner Page layout<span class="required">*</span></label>                                
                                    <input id="innerpagelayout" type="text" name="innerpagelayout" value="<?php echo $result->innerpagelayout ?>"  />
                                    <?php echo form_error('innerpagelayout','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="navigationmenu">Navigation Menu / Pages<span class="required">*</span></label>                                
                                    <textarea id="navigationmenu" name="navigationmenu"><?php echo $result->navigationmenu ?></textarea>
                                    <?php echo form_error('navigationmenu','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="designdescription">Design Description<span class="required">*</span></label>                                
                                    <textarea id="designdescription" name="designdescription"><?php echo $result->designdescription ?></textarea>
                                    <?php echo form_error('designdescription','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="assets">Assets/Content<span class="required">*</span></label>                                
                                    <textarea id="assets" name="assets"><?php echo $result->assets ?></textarea>
                                    <?php echo form_error('assets','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="headerimages">Header Images (for Slider)<span class="required">*</span></label>                                
                                    <textarea id="headerimages" name="headerimages"><?php echo $result->headerimages ?></textarea>
                                    <?php echo form_error('headerimages','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="logoimages">Logo Image<span class="required">*</span></label>                                
                                    <textarea id="logoimages" name="logoimages"><?php echo $result->logoimages ?></textarea>
                                    <?php echo form_error('logoimages','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="otherstuff">Other Stuff<span class="required">*</span></label>                                
                                    <textarea id="otherstuff" name="otherstuff"><?php echo $result->otherstuff ?></textarea>
                                    <?php echo form_error('otherstuff','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="status">Status<span class="required">*</span></label>
                                    <?php
                                    $enum = array('active'=>'Active','completed'=>'Completed','inactive'=>'Inactive','inprogress'=>'In Progress','onhold'=>'On Hold','pending'=>'Pending');                                                                    
                                    echo form_dropdown('status', $enum,$result->status); ?>
                                    <?php echo form_error('status','<div>','</div>'); ?>
                                    </p>
                                    
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
