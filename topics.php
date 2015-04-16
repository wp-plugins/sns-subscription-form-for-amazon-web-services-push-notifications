<?php
require "functions.php";
$AmazonSNS = new AmazonSNS(get_option("hvk_amazon_key"), get_option("hvk_amazon_secret"));

$topics = $AmazonSNS->listTopics();
?>
<div class="wrap">
<img src="<?php echo plugins_url('../images/snss.png', __FILE__);?>" width="150" height="60"/>
<h2>SNS Topics </h2>
<br/>

<table class="wp-list-table widefat fixed posts">
<thead>
<tr>

<th scope="col" id="title" class="manage-column column-title sortable desc" style=""> <a href="#"> <span>Title</span> </a></th>
<th scope="col" id="topicarn" class="manage-column column-title sortable desc" style=""> <a href="#"> <span>Topic Arn</span> </a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Confirmed</span></a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Deleted</span></a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Pending</span></a></th>

</tr>
</thead>

<tfoot>
<tr>
<th scope="col" id="title" class="manage-column column-title sortable desc" style=""><a href="#"> <span>Title</span></a></th>
<th scope="col" id="topicarn" class="manage-column column-title sortable desc" style=""> <a href="#"> <span>Topic Arn</span> </a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Confirmed</span></a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Deleted</span></a></th>
<th scope="col" id="Subscribers" class="manage-column column-author" style=""><a href="#"> <span>Subscriptions Pending</span></a></th>
</tr>
</tfoot>

<tbody id="the-list">
<?php foreach ($topics as $topic):
	$data = $AmazonSNS->getTopicAttributes($topic['TopicArn']);
	?>
								<tr id="post-1" class="post-1 type-post status-publish format-standard hentry category-uncategorized alternate iedit author-self level-0">

								<td class="post-title page-title column-title"><strong><?php echo $data['DisplayName'];?></strong>

								(<span class="trash"><a href="javascript:void(0);" class="get_code" data-arn="<?php echo $data['TopicArn'];?>" >GET CODE</a></span>)
								</td>
								<td class="post-title page-title column-title"><strong><?php echo $data['TopicArn'];?></strong></td>
								<td class="post-title page-title column-title"><strong><?php echo $data['SubscriptionsConfirmed'];?></strong></td>
								<td class="post-title page-title column-title"><strong><?php echo $data['SubscriptionsDeleted'];?></strong></td>
								<td class="post-title page-title column-title"><strong><?php echo $data['SubscriptionsPending'];?></strong></td>
								</tr>
								 <?php endforeach;?>
</tbody>
</table>



</form>

</div>
<script type="text/javascript">
jQuery(function($){
$(".get_code").click(function(){
var arn=$(this).data("arn");
var text='[sns_form topic_id="'+arn+'"]';
 window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
});
});
function copyToClipboard(text) {

}
</script>