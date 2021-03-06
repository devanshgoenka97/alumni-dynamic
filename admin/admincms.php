<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: src/logout.php');
}
include('src/connect.php');
?>

<div class="well" id="userstable">
        <h3 class="text-center">Pending Users Waiting for Approval</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Year of Passing</th>
          <th>Degree</th>
          <th>Department</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from temp_users";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $firstname = $res['firstname'];
            $lastname = $res['lastname'];
            $year = $res['yearofpassing'];
            $degree = $res['degree'];
            $department = $res['department'];
            echo '<tr>
            <td>'.$firstname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$year.'</td>
            <td>'.$degree.'</td>
            <td>'.$department.'</td>
            <td><a class="btn btn-default approve" href="javascript:void(0);" data-uid="'.$uid.'">Approve</a></td>
            </tr>';
            $count = $count - 1;
            }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="generaltable">
        <h3 class="text-center">General Content</h3>
        <a class="btn btn-default" id="addgeneral">Add</a>
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
            <td><a class="btn btn-default updategen" href="javascript:void(0);" data-uid="'.$uid.'" data-id="'.$id.'" data-content="'.$content.'">Update</a></td>
            <td><a class="btn btn-default deletegen" href="javascript:void(0);" data-uid="'.$uid.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
            }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updategeneral">
<?php
$uid = $_GET['uid'];
$id = $_GET['id'];
$content = $_GET['content'];
?>
<form method="post" class="col-md-10" action="src/updategeneral.php">
         <label class="text-center">Identifier</label>
         <input type="text" name="identifier" style="width:100%;" value="<?php echo $id;?>" disabled>
         <br>
         <label>Content</label>
         <textarea rows="10" name="content" style="width:100%;"><?php echo $content;?></textarea>
         <br>
         <input type="hidden" name="uid" style="width:100%;" value="<?php echo $uid;?>">
         <input type="submit">
 </form>
</div>

<div class="well addgeneral">
<form method="post" class="col-md-10" action="src/addgeneral.php">
         <label class="text-center">Identifier</label>
         <input type="text" name="identifier" style="width:100%;">
         <br>
         <label>Content</label>
         <textarea rows="10" name="content" style="width:100%;"></textarea>
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="notabletable">
        <h3 class="text-center">Notable Alumni</h3>
        <a class="btn btn-default" id="addnotable">Add</a>
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
            $uid = $res['id'];
            $id = $res['imageno'];
            $content = $res['name'];
            $desc = $res['description'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            <td>'.$desc.'</td>
            <td><a class="btn btn-default updatenot" href="javascript:void(0);" data-id="'.$id.'" data-uid="'.$uid.'" data-name="'.$content.'" data-desc="'.$desc.'">Update</a></td>
            <td><a class="btn btn-default deletenot" href="javascript:void(0);" data-id="'.$uid.'" data-ino="'.$id.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatenotable">
<?php
$uid = $_GET['uid'];
$id = $_GET['id'];
$content = $_GET['name'];
$desc = $_GET['desc'];
?>
<form method="post" class="col-md-10" action="src/updatenotable.php">
         <label class="text-center">Image No.</label>
         <input type="text" id="not_id" name="imageno" style="width:100%;" value="<?php echo $id;?>">
         <br>
         <label>Name</label>
         <input type="text" name="name" style="width:100%;" value="<?php echo $content;?>">
         <br>
         <label>Description</label>
         <textarea rows="6" name="desc" style="width:100%;" ><?php echo $desc;?></textarea>
         <br>
         <input type="hidden" name="uid" style="width:100%;" value="<?php echo $uid;?>">
         <input type="submit">
 </form>
</div>

<div class="well addnotable">
<form method="post" class="col-md-10" action="src/addnotable.php" enctype="multipart/form-data">
         <label class="text-center">Image No</label>
         <input type="text" name="imageno" style="width:100%;">
         <br>
         <label>Name</label>
         <input type="text" name="name" style="width:100%;">
         <br>
         <label>Description</label>
         <input type="text" name="desc" style="width:100%;">
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="eventstable">
        <h3 class="text-center">Events</h3>
        <a class="btn btn-default" id="addevents">Add</a>
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
            $uid = $res['id'];
            $dd = $res['dd'];
            $mm = $res['mm'];
            $yy = $res['yyyy'];
            $text = $res['text'];
            echo '<tr>
            <td>'.$dd.'</td>
            <td>'.$mm.'</td>
            <td>'.$yy.'</td>
            <td>'.$text.'</td>
            <td><a class="btn btn-default updateevents" href="javascript:void(0);" data-id="'.$uid.'" data-dd="'.$dd.'" data-mm="'.$mm.'" data-yy="'.$yy.'" data-text="'.$text.'">Update</a></td>
            <td><a class="btn btn-default deleteevents" href="javascript:void(0);" data-id="'.$uid.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updateevents">
<?php
$id = $_POST['id'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$text = $_POST['text'];
?>
<form method="post" class="col-md-10" action="src/updatevents.php">
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
         <input type="hidden" name="id" id="events_uid" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addevents">
<form method="post" class="col-md-10" action="src/addevents.php">
         <label class="text-center">Day</label>
         <input type="number" id="events_dd" name="dd" style="width:100%;">
         <br>
         <label>Month</label>
         <input type="text" name="mm" id="events_mm" style="width:100%;">
         <br>
         <label>Year</label>
         <input type="number" name="yy" id="events_yy" style="width:100%;">
         <br>
         <label>Desctiption</label>
         <input type="text" name="desc" id="events_text" style="width:100%;">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="btwtable">
        <h3 class="text-center">Beyond The Walls</h3>
        <a class="btn btn-default" id="addbtw">Add</a>
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
            $uid = $res['id'];
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
            <td><a class="btn btn-default updatebtw" href="javascript:void(0);" data-id="'.$uid.'" data-speaker="'.$speaker.'" data-topic="'.$topic.'" data-date="'.$date.'" data-lectureno="'.$lno.'" data-content="'.$content.'">Update</a></td>
            <td><a class="btn btn-default deletebtw" href="javascript:void(0);" data-id="'.$uid.'" data-lno="'.$lno.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatebtw">
<?php
$lectureno = $_POST['lectureno'];
$topic = $_POST['topic'];
$id = $_POST['id'];
$speaker = $_POST['speaker'];
$desc = $_POST['desc'];
$date = $_POST['date'];
?>
<form method="post" class="col-md-10" action="src/updatebtw.php">
         <label class="text-center">Lecture No</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;" value="<?php echo $lectureno;?>">
         <br>
         <label>Topic</label>
         <input type="text" name="topic" id="btw_topic" style="width:100%;" value="<?php echo $topic;?>">
         <br>
         <label>Speaker</label>
         <input type="text" name="speaker" id="btw_topic" style="width:100%;" value="<?php echo $speaker;?>">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;" value="<?php echo $date;?>">
         <br>
         <label>Topic</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"><?php echo $desc;?></textarea>
         <br>
         <input type="hidden" name="uid" id="btw_id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addbtw">
<form method="post" class="col-md-10" action="src/addbtw.php" enctype="multipart/form-data">
         <label class="text-center">Lecture No</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;">
         <br>
         <label>Topic</label>
         <input type="text" name="topic" id="btw_topic" style="width:100%;">
         <br>
         <label>Speaker</label>
         <input type="text" name="speaker" id="btw_topic" style="width:100%;">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;">
         <br>
         <label>Topic</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"></textarea>
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="iiiptable">
        <h3 class="text-center">Industry Institute Interaction Programme</h3>
        <a class="btn btn-default" id="addiiip">Add</a>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Programme No.</th>
          <th class='text-center'>Speaker</th>
          <th class='text-center'>Topic</th>
          <th class="text-center">Date</th>
          <th class="text-center">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from iiiprogramme";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
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
            <td><a class="btn btn-default updatebtw" href="javascript:void(0);" data-id="'.$uid.'" data-speaker="'.$speaker.'" data-topic="'.$topic.'" data-date="'.$date.'" data-lectureno="'.$lno.'" data-content="'.$content.'">Update</a></td>
            <td><a class="btn btn-default deleteiiip" href="javascript:void(0);" data-id="'.$uid.'" data-lno="'.$lno.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updateiiip">
<?php
$lectureno = $_POST['lectureno'];
$topic = $_POST['topic'];
$id = $_POST['id'];
$speaker = $_POST['speaker'];
$desc = $_POST['desc'];
$date = $_POST['date'];
?>
<form method="post" class="col-md-10" action="src/updateiiip.php">
         <label class="text-center">Programme No.</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;" value="<?php echo $lectureno;?>">
         <br>
         <label>Topic</label>
         <input type="text" name="topic" id="btw_topic" style="width:100%;" value="<?php echo $topic;?>">
         <br>
         <label>Speaker</label>
         <input type="text" name="speaker" id="btw_topic" style="width:100%;" value="<?php echo $speaker;?>">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;" value="<?php echo $date;?>">
         <br>
         <label>Topic</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"><?php echo $desc;?></textarea>
         <br>
         <input type="hidden" name="uid" id="btw_id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addiiip">
<form method="post" class="col-md-10" action="src/addiiip.php" enctype="multipart/form-data">
         <label class="text-center">Programme No</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;">
         <br>
         <label>Topic</label>
         <input type="text" name="topic" id="btw_topic" style="width:100%;">
         <br>
         <label>Speaker</label>
         <input type="text" name="speaker" id="btw_topic" style="width:100%;">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;">
         <br>
         <label>Topic</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"></textarea>
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="gallerytable">
        <h3 class="text-center">Photo Gallery</h3>
        <a class="btn btn-default" id="addgallery">Add</a>
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
            $uid = $res['id'];
            $id = $res['imageno'];
            $content = $res['caption'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            <td><a class="btn btn-default updategallery" href="javascript:void(0);" data-imageno="'.$id.'" data-caption="'.$content.'" data-id="'.$uid.'">Update</a></td>
            <td><a class="btn btn-default deletegallery" href="javascript:void(0);" data-id="'.$uid.'" data-imageno="'.$id.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updategallery">
<?php
$imageno = $_POST['imageno'];
$caption = $_POST['caption'];
$id = $_POST['id'];
?>
<form method="post" class="col-md-10" action="src/updategallery.php">
         <label class="text-center">Image No</label>
         <input type="text" id="gallery_imno" name="imageno" style="width:100%;" value="<?php echo $imageno;?>">
         <br>
         <label>Caption</label>
         <input type="text" name="caption" id="gallery_caption" style="width:100%;" value="<?php echo $caption;?>">
         <br>
         <input type="hidden" name="uid" id="gallery_id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addgallery">
<form method="post" class="col-md-10" action="src/addgallery.php" enctype="multipart/form-data">
         <label class="text-center">Image No</label>
         <input type="text" id="gallery_imno" name="imageno" style="width:100%;">
         <br>
         <label>Caption</label>
         <input type="text" name="caption" id="gallery_caption" style="width:100%;">
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="volunteerstable">
        <h3 class="text-center">Student Volunteers</h3>
        <a class="btn btn-default" id="addvolunteer">Add</a>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Image No</th>
          <th class='text-center'>Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from volunteers";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $id = $res['imageno'];
            $content = $res['caption'];
            echo '<tr>
            <td>'.$id.'</td>
            <td>'.$content.'</td>
            <td><a class="btn btn-default updatevolunteer" href="javascript:void(0);" data-imageno="'.$id.'" data-caption="'.$content.'" data-id="'.$uid.'">Update</a></td>
            <td><a class="btn btn-default deletevolunteer" href="javascript:void(0);" data-id="'.$uid.'" data-imageno="'.$id.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatevolunteer">
<?php
$imageno = $_POST['imageno'];
$caption = $_POST['caption'];
$id = $_POST['id'];
?>
<form method="post" class="col-md-10" action="src/updatevolunteer.php">
         <label class="text-center">Image No</label>
         <input type="text" name="imageno" style="width:100%;" value="<?php echo $imageno;?>">
         <br>
         <label>Name</label>
         <input type="text" name="caption" style="width:100%;" value="<?php echo $caption;?>">
         <br>
         <input type="hidden" name="uid" id="gallery_id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addvolunteer">
<form method="post" class="col-md-10" action="src/addvolunteer.php" enctype="multipart/form-data">
         <label class="text-center">Image No</label>
         <input type="text" name="imageno" style="width:100%;">
         <br>
         <label>Name</label>
         <input type="text" name="caption" style="width:100%;">
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="newslettertable">
        <h3 class="text-center">E - Newsletter</h3>
        <a class="btn btn-default" id="addnewsletter">Add</a>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Lecture No.</th>
          <th class="text-center">Date</th>
          <th class="text-center">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from newsletter";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $lno = $res['lectureno'];
            $date = $res['date'];
            $content = $res['content'];
            echo '<tr>
            <td>'.$lno.'</td>
            <td>'.$date.'</td>
            <td>'.$content.'</td>
            <td><a class="btn btn-default updatenewsletter" href="javascript:void(0);" data-id="'.$uid.'" data-date="'.$date.'" data-lectureno="'.$lno.'" data-content="'.$content.'">Update</a></td>
            <td><a class="btn btn-default deletenewsletter" href="javascript:void(0);" data-id="'.$uid.'" data-lno="'.$lno.'">Delete</a></td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatenewsletter">
<?php
$lectureno = $_POST['lectureno'];
$id = $_POST['id'];
$desc = $_POST['desc'];
$date = $_POST['date'];
?>
<form method="post" class="col-md-10" action="src/updatenewsletter.php">
         <label class="text-center">Lecture No</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;" value="<?php echo $lectureno;?>">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;" value="<?php echo $date;?>">
         <br>
         <label>Topic</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"><?php echo $desc;?></textarea>
         <br>
         <input type="hidden" name="uid" id="btw_id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addnewsletter">
<form method="post" class="col-md-10" action="src/addnewsletter.php" enctype="multipart/form-data">
         <label class="text-center">Lecture No</label>
         <input type="number" id="btw_lno" name="imageno" style="width:100%;">
         <br>
         <label>Date</label>
         <input type="text" name="date" id="btw_date" style="width:100%;">
         <br>
         <label>Content</label>
         <textarea rows="6" name="desc" id="btw_desc" style="width:100%;"></textarea>
         <br>
         <label>Image</label>
         <input type="file" name="img" value="Choose an image">
         <br>
         <input type="submit">
 </form>
</div>

<div class="well" id="regiontable">
        <h3 class="text-center">Regional Coordinator Applications</h3>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>City</th>
          <th class='text-center'>Name</th>
          <th class='text-center'>Contact</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from region";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $city = $res['city'];
            $name = $res['name'];
            $contact = $res['contact'];
            echo '<tr>
            <td>'.$city.'</td>
            <td>'.$name.'</td>
            <td>'.$contact.'</td>
            </tr>';
            $count = $count - 1;
          }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="statstable">
        <h3 class="text-center">Alumni At A Glance</h3>
        <a class="btn btn-default" id="addstats">Add</a>
        <table class="table table-striped table-responsive">
        <thead>
          <tr>
          <th class='text-center'>Year</th>
          <th class='text-center'>Btech</th>
          <th class="text-center">Mtech</th>
          <th class="text-center">Others</th>
          <th class="text-center">PhD</th>
          <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * from stats ORDER BY id";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          while($count>0){
            $res = mysqli_fetch_assoc($result);
            $uid = $res['id'];
            $year = $res['year'];
            $btech = $res['btech'];
            $mtech = $res['mtech'];
            $others = $res['others'];
            $phd = $res['phd'];
            echo '<tr>
            <td>'.$year.'</td>
            <td>'.$btech.'</td>
            <td>'.$mtech.'</td>
            <td>'.$others.'</td>
            <td>'.$phd.'</td>
            <td><a class="btn btn-default updatestats" href="javascript:void(0);" data-id="'.$uid.'" data-year="'.$year.'" data-btech="'.$btech.'" data-mtech="'.$mtech.'" data-others="'.$others.'" data-phd="'.$phd.'">Update</a></td>
            <td><a class="btn btn-default deletestats" href="javascript:void(0);" data-id="'.$uid.'">Delete</a></td> 
            </tr>';
            $count = $count - 1;
            }
          ?>
        </tbody>
        </table>
</div>

<div class="well" id="updatestats">
<?php
$id = $_POST['id'];
$year = $_POST['year'];
$btech = $_POST['btech'];
$mtech = $_POST['mtech'];
$others = $_POST['others'];
$phd = $_POST['phd'];
?>
<form method="post" class="col-md-10" action="src/updatestats.php">
         <label class="text-center">Year</label>
         <input type="text" name="year" style="width:100%;" value="<?php echo $year;?>" />
         <br>
         <label>B.Tech</label>
         <input type="number"  name="btech" style="width:100%;" value="<?php echo $btech;?>" />
         <br>
         <label>M.Tech</label>
         <input type="number"  name="mtech" style="width:100%;" value="<?php echo $mtech;?>" />
         <br>
         <label>Others</label>
         <input type="number"  name="others" style="width:100%;" value="<?php echo $others;?>" />
         <br>
         <label>PHD</label>
         <input type="number"  name="phd" style="width:100%;" value="<?php echo $phd;?>" />
         <br>
         <input type="hidden" name="id" style="width:100%;" value="<?php echo $id;?>">
         <input type="submit">
 </form>
</div>

<div class="well addstats">
<form method="post" class="col-md-10" action="src/addstats.php">
         <label class="text-center">Year</label>
         <input type="text" name="year" style="width:100%;" value="">
         <br>
         <label>B.Tech</label>
         <input type="number"  name="btech" style="width:100%;" value="" />
         <br>
         <label>M.Tech</label>
         <input type="number"  name="mtech" style="width:100%;" value="" />
         <br>
         <label>Others</label>
         <input type="number"  name="others" style="width:100%;" value="" />
         <br>
         <label>PHD</label>
         <input type="number"  name="phd" style="width:100%;" value="" />
         <br>
         <input type="submit">
 </form>
</div>