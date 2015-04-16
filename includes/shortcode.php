<?php
$msg = "";
require "functions.php";
$AmazonSNS = new AmazonSNS(get_option("hvk_amazon_key"), get_option("hvk_amazon_secret"));

if ($_POST && $_POST['protocol'] != "" && $_POST['detail'] != "" && $_POST['tarn'] != "") {

	$detail = sanitize_text_field($_POST['detail']);
	$protocol = sanitize_text_field($_POST['protocol']);
	$tarn = sanitize_text_field($_POST['tarn']);
	$topic = sanitize_text_field($_POST['topic']);
	if ($protocol == "sms") {
		$detail = "1-" . substr($detail, 0, 3) . "-" . substr($detail, 3, 3) . "-" . substr($detail, -4);
	}
	try {
		$check = $AmazonSNS->subscribe($tarn, $protocol, $detail);
		if ($check) {
			if ($protocol == "sms") {
				$msg = "<h2>you will now receive a TEXT message from >>>>" . $topic . "<<<< simply reply with YES to confirm</h2>";
			} else {
				$msg = "<h2>You will now receive an email from: no-reply@sns.amazonaws.com, simply click on the confirmation link to finish the subscription process</h2>";
			}

		}
	} catch (SNSException $e) {
		// Amazon SNS returned an error
		$msg = '<h5>This form works with U.S. cell phone numbers only and you do NOT need to enter your country code. So if your phone number for example is 1-702-898-2545 you would simple enter "7028982545" without the country code or dashes.</h5>';
	} catch (APIException $e) {
		// Problem with the API
		$msg = '<h5>There was an unknown problem with the API, returned code ' . $e->getCode() . '</h5>';
	}

}
if ($msg == ""):

	$data = $AmazonSNS->getTopicAttributes($attr['topic_id']);

	?>
										<form action="" method="post" class="basic-grey">
										<input type="hidden" name="tarn" value="<?php echo $attr['topic_id'];?>" />
										<label for="protocol">
										<span>Subscribe ON :</span></label>
										<select name="protocol" id="protocol" required>
										<option value="email">EMAIL</option>
										<option value="sms">CELLPHONE</option>
										</select>

										<label>
										<span id="label">Your Email :</span>
										<input id="field" type="text" name="detail" required placeholder="eg: name@example.com" />
										</label>

										<label>
										<span>Topic :</span>

										<input type="text" name="topic" value="<?php echo $data['DisplayName'];?>" readonly />
										</label>
										<label>
										<span>&nbsp;</span>
										<input type="submit" class="button" value="Subscribe" />
										</label>

										<?php if (get_option("hvk_branding") == "yes"): ?>
												<br/>
												Powered by <a href="http://www.snsplugin.com" title="Powered by SNSplugin.com">SNSplugin.com</a>
												<?php endif;?>
		</form>

		<?php else:
	echo $msg;

endif;?>