<h2>Categories</h2>
<?php include_once 'functions.php';?>
<?php $query = 'select category from articles where type=4'?>
<?php $categories = query($query)?>
<ul>
<?php foreach ($categories as $category) {?>
	<li><a href="readDoc.php?id=<?php echo $category['category']?>"><?php echo $category['category']?></a></li>
<?php }?>
</ul>