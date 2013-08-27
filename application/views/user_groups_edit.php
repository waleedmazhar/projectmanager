<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>
<?php echo form_hidden('gp_id',$result->gp_id) ?>

                                    <p><label for="name">Name<span class="required">*</span></label>                                
                                    <input id="name" type="text" name="name" value="<?php echo $result->name ?>"  />
                                    <?php echo form_error('name','<div>','</div>'); ?>
                                    </p>
                                    

                                    <p><label for="desc">Description<span class="required">*</span></label>                                
                                    <textarea id="desc" name="desc"><?php echo $result->desc ?></textarea>
                                    <?php echo form_error('desc','<div>','</div>'); ?>
                                    </p>
                                    
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
