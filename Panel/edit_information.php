<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['GetId'];
     $editor=$_POST['editor'];
     $query="UPDATE information set editor='".$editor."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل المعلومات بنجاح  ') ;
         location.href='update_information.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <?php 
      include 'connection.php';
      $id=$_GET['ID'];
      $result33 = mysqli_query($link,"select * from sub_pages_names where id='$id'");
     $row33= mysqli_fetch_array($result33);
      ?>
	<title><?php echo $row33['name']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
	  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/wolfgang1983/pen/yNJYYq?q=note&limit=all&type=type-pens" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<style class="cp-pen-styles">.note-editor {
  margin-bottom: 5rem !important;
}</style>
<meta charset="utf-8">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images1/bg-01.jpg');">
	    <form method="post" name="myform" action="">
		<div class="container-contact2">
			<div class="wrap-contact2">
			    
					<span class="contact2-form-title">
						 <?php echo $row33['name']; ?>
					</span>

					
					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<?php 
						include 'connection.php';
						$id=$_GET['GetId'];
						$result55 = mysqli_query($link,"Select * from information where id ='$id'");
						$row55=mysqli_fetch_array($result55);
						?>
                              <?php $content_row=0 ; ?>
                              <textarea class="form-control" id="code_preview0" name="editor" style="height: 300px;">
                                  <?php echo $row55['editor']; ?>
                              </textarea>
                              <?php $content_row++; ?>
<!-- Page - Content End -->
                   </div>
                   <div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="submit" class="contact2-form-btn">
						        عدل المعلومات
							</button>
							
						</div>
					</div>
					<a href="https://unwashed-blast.000webhostapp.com/share/Share1/Panel/panel.php">
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="button" class="contact2-form-btn">
						        العودة الي لوحة التحكم 
							</button>
							
						</div>
					</div>
					</a>
                   

             </div>
            </div>
                </form>
					</div>

			




<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#code_preview0').summernote({height: 300});
    });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js'></script>
<script >var content_row = 1;

function addContent() {
  html = '<div id="content-row">';
  html += '<div class="form-group">';
  html += '<label class="col-sm-2">Page Content</label>';
  html += '<div class="col-sm-10">';
  html += '<textarea class="form-control" id="code_preview' + content_row + '" name="page_code[' + content_row + '][code]" style="height: 300px;"></textarea>';
  html += '</div>';
  html += '</div>';
  html += '</div>';
  $('#content-row').append(html);
  $('#code_preview' + content_row).summernote({height: 300});

  content_row++;
}
//# sourceURL=pen.js
</script>
</body>
</html>
