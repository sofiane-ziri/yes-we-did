<style>
	.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
padding-top: 100px; /* Location of the box */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
background-color: #fefefe;
margin: auto;
padding: 20px;
border: 1px solid #888;
width: 50% !important;
}

/* The Close Button */
.close {
color: #aaaaaa;
float: right;
font-size: 28px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}
.modalform{
	display: flex;
	flex-direction: column;
	justify-content: center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1>Panel Admin Accueil</h1>
<table>
	<th>Iframe</th><th>Description Image</th><th>Titre Image</th><th>Paragraphe Image</th>

	<?php foreach ($test as $unique_test){
	$url=base_url();
	$url.="admin/crud_accueil/";
	$url.=$unique_test['id'];
	echo form_open($url);?>
<tr>
	<td>
	<textarea  name="iframe"><?=$unique_test['iframe']?></textarea>
	</td>
<!--	<td>-->
<!--	<input type="text" class="form-control" value="--><?//=$unique_test['image'] ?><!-- " name="image">-->
<!--	</td>-->
	<td>
		<input type="text" class="form-control" value="<?=$unique_test['description_image'] ?>" name="description_image">
	</td>
	<td>
	<input type="text" class="form-control" value="<?=$unique_test['titre_image'] ?>" name="titre_image">
	</td>
	<td>
	<input type="text" class="form-control" value="<?=$unique_test['paragraphe_image'] ?>" name="paragraphe_image">
	</td>
	<td>
	<button type="submit" class="btn btn-warning" value="<?=$unique_test['id']?>" name="modifier"> Modifier</button>
	</td>
	<td>
	<button type="submit" class="btn btn-danger" value="<?=$unique_test['id']?>" name="supprimer"> Supprimer</button>
	</td>
<?php  echo form_close();?>
	<td>
		<?php echo form_open_multipart("admin/do_upload/" . $unique_test['id']);?>
		<input type="file" class='form-control' name="userfile" size="20" />
	</td>
	<td>
		<button type="submit" class="btn btn-success"><i class="far fa-images"></i></button>
		</form>
	</td>
</tr>
	<?php };?>

</table>
<button id="myBtn" class="btn btn-success">Ajouter Accueil</button>

<!-- The Modal -->
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<?php $url2=base_url();
		$url2.="admin/add_accueil/";
		echo form_open($url2, array('class'=>'modalform'));?>
		<label class="form-label">Iframe</label>
		<textarea class="form-control" name="iframe"></textarea>
		<label class="form-label">Image </label>
		<input type="text" class="form-control" name="image">
		<label class="form-label">Description image</label>
		<input type="text" class="form-control" name="description_image">
		<label class="form-label">Titre Image</label>
		<input type="text" class="form-control" name="titre_image">
		<label class="form-label"> Paragraphe Image</label>
		<input type="text" class="form-control" name="paragraphe_image">
		<button type="submit"  name="ajouter">Ajouter</button>
		<?php echo form_close() ?>
	</div>

</div>
<script>
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
