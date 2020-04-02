<?php require APPROOT . '/views/inc/header.php'; ?>

<h1> <?php echo $data['title']; ?> </h1> <!-- http://localhost/oop/mvc/     gausime welcome  jis gautas controrellio pagalba-->

<!--<?php //echo APPROOT; ?> --> <!--gauname nuoroda po Welcome C:\xampp\htdocs\oop\mvc\app  -->

<ul>
	<?php foreach($data['posts'] as $post) : ?> <!--einam per pasyva-->
		<li><?php echo $post->title; ?></li>
	<?php endforeach; ?>	

</ul>

<?php require APPROOT . '/views/inc/footer.php'; ?>
