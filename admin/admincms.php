<?php
session_start();
if($_SESSION['admin']!=1){
  header('Location: logout.php');
}
include('connect.php');
?>

<div class="well" id="generaltable">
        <h3 class="text-center">General Content</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Identifier</th>
          <th class='text-center'>Content</th>
          <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from general";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $id = $res['identifier'];
            $content = $res['content'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            <td><a class="btn btn-default updategen" href="javascript:void(0);" data-id="'.$id.'" data-content="'.$content.'">Update</a></td>
            </tr>';
            $count = $count - 1;
            }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updategeneral">
<?php
$id = $_GET['id'];
$content = $_GET['content'];
?>
<form method="post" class="col-md-10" action="updategeneral.php">
         <label class="text-center">Identifier</label>
         <input type="text" id="gen_id" name="identifier" style="width:100%;" value="<?php echo $id;?>" disabled>
         <br>
         <label>Content</label>
         <textarea rows="10" name="content" id="gen_content" style="width:100%;"><?php echo $content;?></textarea>
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="notabletable">
        <h3 class="text-center">Notable Alumni</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Image No.</th>
          <th class='text-center'>Name</th>
          <th class='text-center'>Achievements</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from notablealumni";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $id = $res['imageno'];
            $content = $res['name'];
            $desc = $res['description'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            <td>'.$desc.'</td>
            <td><a class="btn btn-default updatenot" href="javascript:void(0);" data-id="'.$id.'" data-name="'.$content.'" data-desc="'.$desc.'">Update</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatenotable">
<?php
$id = $_GET['id'];
$content = $_GET['name'];
$desc = $_GET['desc'];
?>
<form method="post" class="col-md-10" action="updategeneral.php">
         <label class="text-center">Image No.</label>
         <input type="text" id="not_id" name="imageno" style="width:100%;" value="<?php echo $id;?>">
         <br>
         <label>Name</label>
         <input type="text" name="name" id="not_name" style="width:100%;" value="<?php echo $content;?>">
         <br>
         <label>Description</label>
         <input type="text" name="desc" id="not_desc" style="width:100%;" value="<?php echo $desc;?>">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="eventstable">
        <h3 class="text-center">Events</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Day</th>
          <th class='text-center'>Month</th>
          <th class='text-center'>Year</th>
          <th class="text-center">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from upcomingevents";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $dd = $res['dd'];
            $mm = $res['mm'];
            $yy = $res['yyyy'];
            $text = $res['text'];
            echo '<tr>
            <td>'.$dd.'</td>
            <td>'.$mm.'</td>
            <td>'.$yy.'</td>
            <td>'.$text.'</td>
            <td><a class="btn btn-default updateevents" href="javascript:void(0);" data-dd="'.$dd.'" data-mm="'.$mm.'" data-yy="'.$yy.'" data-text="'.$text.'">Update</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updateevents">
<?php
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$text = $_POST['text'];
?>
<form method="post" class="col-md-10" action="updategeneral.php">
         <label class="text-center">Day</label>
         <input type="number" id="events_dd" name="dd" style="width:100%;" value="<?php echo $dd;?>">
         <br>
         <label>Month</label>
         <input type="text" name="mm" id="events_mm" style="width:100%;" value="<?php echo $mm;?>">
         <br>
         <label>Year</label>
         <input type="number" name="yy" id="events_yy" style="width:100%;" value="<?php echo $yy;?>">
         <br>
         <label>Desctiption</label>
         <input type="text" name="desc" id="events_text" style="width:100%;" value="<?php echo $text;?>">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="btwtable">
        <h3 class="text-center">Beyond The Walls</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Lecture No.</th>
          <th class='text-center'>Speaker</th>
          <th class='text-center'>Topic</th>
          <th class="text-center">Date</th>
          <th class="text-center">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from beyondthewall";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $lno = $res['lectureno'];
            $speaker = $res['speaker'];
            $topic = $res['topic'];
            $date = $res['date'];
            $content = $res['content'];
            echo '<tr>
            <td>'.$lno.'</td>
            <td>'.$speaker.'</td>
            <td>'.$topic.'</td>
            <td>'.$date.'</td>
            <td>'.$content.'</td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="gallerytable">
        <h3 class="text-center">Photo Gallery</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Image No</th>
          <th class='text-center'>Caption</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from photogallery";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $id = $res['imageno'];
            $content = $res['caption'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>