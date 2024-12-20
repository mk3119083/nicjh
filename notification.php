<?php
/**
 * Template Name: Notification
 */
get_header();
global $wpdb;
 ?>
 
<div class="row">
	<div class="container">
		<div class="notification_cover">
<?php 
if(get_current_user_id() == 1 && isset($_POST['submit'])){
	$notification_no = $_POST['notification_no'];
	$query = "select id from notification where notification_no = '".$notification_no."'";
	$ndata = $wpdb->get_results($query);
	if(count($ndata) >= 1){
		echo "<script>alert('Notification Already Available.')</script>";
		echo '<script>window.location="notification"</script>';
		exit;
	}
	$particulars = $_POST['particulars'];
	
	$fileName 	= basename($_FILES["file"]["name"]);
	$fileTmp 	= $_FILES['file']['tmp_name'];
	$fileSize 	= $_FILES['file']['size'];
	if($fileSize>512000){
		echo "<script>alert('Doc should be jpg and under 500KB.')</script>";
		echo '<script>window.location="notification.php"</script>';
		exit;
	}
	$fileType=$_FILES['file']['type'];
	$fileExt = substr($fileName, strrpos($fileName, ".") + 1);
	$file = "/wordpress/wp-content/themes/nicjh/upload/notification_".date('d-m-Y-h-i-s').".".$fileExt;
	
	//$url = bloginfo('template_url');
	$sfile = bloginfo('template_url')."upload/notification_".date('d-m-Y-h-i-s').".".$fileExt;
	$notification_date = date('Y-m-d',strtotime($_POST['notification_date']));
	if(move_uploaded_file($fileTmp,$_SERVER['DOCUMENT_ROOT'].$file)){
		if(file_exists($_SERVER['DOCUMENT_ROOT'].$file)){
			$a = 1;
			$wpdb->insert('notification', array(
				'notification_no' => $notification_no,
				'particulars' => $particulars,
				'file' => $sfile,
				'notification_date' => $notification_date,
				'created_by' => get_current_user_id(),
				'time' => date('Y-m-d H:i:s'),
				'ip' => $_SERVER['REMOTE_ADDR']
			));
			echo "<script>alert('Notification Added.')</script>";
			echo '<script>window.location="notification"</script>';
			exit;
		}
	}
}
if(get_current_user_id() == 1){ ?>
			<div class="notification_title">
				<span>Add Notification</span>
			</div>
			<div class="Notification_Form">
				<form action="" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-12 col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<label>Notification No.</label>
						<input type="text" name="notification_no" class="form-control" alt="Notification No" title="Notification No" Placeholder="Enter Notification No" required />
					</div>
					<div class="col-12 col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<label>Particulars</label>
						<input type="text" name="particulars" class="form-control" alt="Particulars" title="Particulars" Placeholder="Enter Particulars" required />
					</div>
					<div class="col-12 col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<label>Attachment</label>
						<input type="file" name="file" class="form-control" alt="Notification No" title="Notification No" Placeholder="Enter Notification No" required accept=".pdf" />
					</div>
					<div class="col-12 col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<label>Notification Date</label>
						<input type="date" name="notification_date" class="form-control" alt="Notification Date" title="Notification Date" Placeholder="Enter Notification Date" required accept=".pdf" />
					</div>
					<div class="submit">
						<input type="submit" name="submit" class="button" alt="submit" title="submit" />
					</div>
				</div>
				</form>
			</div>
<?php } ?>
			<table>
				<tr>
					<td><b>Sl No.</b></td>
					<td><b>Notification No.</b></td>
					<td><b>Particulars</b></td>
					<td><b>Notification Date</b></td>
					<td><b>Notification File</b></td>
				</tr>
<?php 
$ndata = $wpdb->get_results('select * from notification');
$a=1;
foreach($ndata as $data){
 ?>
				<tr>
					<td><?php echo $a++; ?></td>
					<td><?php echo $data->notification_no; ?></td>
					<td><?php echo $data->particulars; ?></td>
					<td><?php echo $data->notification_date; ?></td>
					<td><a href="<?php echo bloginfo('template_url')."/".$data->file; ?>" target="_blank">View</a></td>
				</tr>
<?php } ?>
			</table>
		</div>
	</div>
</div>
<?php get_footer(); ?>
