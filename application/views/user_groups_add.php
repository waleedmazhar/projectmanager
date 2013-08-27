<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>

                                    <p><label for="name">Name<span class="required">*</span></label>                                
                                    <input id="name" type="text" name="name" value="<?php echo set_value('name'); ?>"  />
                                    <?php echo form_error('name','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="desc">Description<span class="required">*</span></label>                                
                                    <textarea id="desc" name="desc"><?php echo set_value('desc'); ?></textarea>
                                    <?php echo form_error('desc','<div>','</div>'); ?>
                                    </p>
                                    
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
