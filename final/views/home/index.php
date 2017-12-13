<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Alex Eberly's Final Project</h1>
	<h2><?php echo $title;?></h2>
	<img src="sports.jpg" alt="Sports!!!" style="width:1000px;height:250px;">
  </div>
    <?php
    echo $data;
    ?>
</div>

<?php include('views/elements/footer.php');?>