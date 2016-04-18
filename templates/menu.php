<?php if (isset ( $class )) {?>
<ul class="<?php echo $class?>">
<?php } else { ?>
<ul>
<?php }?>
<?php foreach ($options as $page=>$label) {?>
	<li><a href="<?php echo $page?>"><?php echo $label?></a></li>
<?php }?>
</ul>