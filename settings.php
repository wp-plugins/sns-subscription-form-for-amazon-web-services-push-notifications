<?php
if ($_POST) {
	$key = sanitize_text_field($_POST['hvk_amazon_key']);
	$secret = sanitize_text_field($_POST['hvk_amazon_secret']);
	update_option("hvk_amazon_key", $key);
	update_option("hvk_amazon_secret", $secret);
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

<form method="post"  novalidate="novalidate">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="hvk_amazon_key">Access Key ID</label></th>
<td><input name="hvk_amazon_key" type="text" id="hvk_amazon_key" value="<?=get_option("hvk_amazon_key");?>" class="regular-text"></td>
</tr>
<tr>
<th scope="row"><label for="hvk_amazon_secret">Secret Access Key</label></th>
<td><input name="hvk_amazon_secret" type="text" id="hvk_amazon_secret" value="<?=get_option("hvk_amazon_secret");?>" class="regular-text">

</tr>
	</tbody></table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p></form>

</div>