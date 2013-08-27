<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>

                                    <p><label for="module_name">Module_name<span class="required">*</span></label>                                
                                    <input id="module_name" type="text" name="module_name" value="<?php echo set_value('module_name'); ?>"  />
                                    <?php echo form_error('module_name','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="action_name">Action_name<span class="required">*</span></label>                                
                                    <input id="action_name" type="text" name="action_name" value="<?php echo set_value('action_name'); ?>"  />
                                    <?php echo form_error('action_name','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="status">Status<span class="required">*</span></label>                                
                                    <input id="status" type="text" name="status" value="<?php echo set_value('status'); ?>"  />
                                    <?php echo form_error('status','<div>','</div>'); ?>
                                    </p>
                                    
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
