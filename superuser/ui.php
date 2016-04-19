<?php function select($options, $default, $name, $class = "form-control") { ?>
<select name="<?php echo $name?>" class="<?php echo $class?>">
<?php foreach ($options as $key=>$value) {?>
<?php if ($default != $key) {?>
<option value="<?php echo $key?>"><?php echo $value?></option>
<?php } else {?>
<option selected="selected" value="<?php echo $key?>"><?php echo $value?></option>
<?php }?>
<?php }?>
</select>
<?php }?>