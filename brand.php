<?php
if ($_POST) {
	foreach ($_POST as $key => $value) {
		update_option($key, sanitize_text_field($value));
	}

	$url = admin_url("admin.php?page=hvk_sns");
	?>
<script type="text/javascript">
window.location="<?php echo $url;?>";
</script>
<?php
}
?>
<div class="wrap">
<img src="<?php echo plugins_url('../images/snss.png', __FILE__);?>" width="150" height="60"/>
<h2>AMAZON SNS SETTINGS</h2>

<form method="post">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="hvk_amazon_key">Keep Branding?</label></th>
<td>
<select name="hvk_branding">
<option value="yes" <?php echo (get_option("hvk_branding") == "yes") ? "selected='selected'" : "";?> >YES</option>
<option value="no" <?php echo (get_option("hvk_branding") == "no") ? "selected='selected'" : "";?>>NO</option>

</td>
</tr>


	</tbody></table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p></form>

</div>