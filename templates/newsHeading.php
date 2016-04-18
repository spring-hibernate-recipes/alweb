<div class="padded">
<?php if (isset($date)) {?>
<div class="green small"><?php echo $date?></div>
<?php }?>
<div class="heading2 dark-gray"><?php echo $heading?></div>
<?php if (isset($summary)) {?>
<p class="justified">
<?php echo $summary?>
</p>
<?php }?>
<a href="newsDetails.php?id=<?php echo $id?>" class="red">Read More</a>
<?php if (isset($sign)) {?>
<div class="orange small" style="text-align: <?php echo $signAlign?>"><?php echo $sign?></div>
<?php }?>
</div>