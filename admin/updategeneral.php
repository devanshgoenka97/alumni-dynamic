<?php
include('connect.php');
$id = $_GET['id'];
$content = $_GET['content'];
?>
<form method="post" class="col-md-10" action="updategeneral.php">
         <label class="text-center">Identifier</label>
         <input type="text" id="gen_id" name="identifier" style="width:100%;" value="<?php echo $id;?>" disabled>
         <br>
         <label>Content</label>
         <textarea rows="6" name="content" id="gen_content" style="width:100%;"><?php echo $content;?></textarea>
         <br>
         <input type="submit">
 </form>