=== SNS Plugin FREE ===

Contributors: PartyPlugins
Donate link: http://www.snsplugin.com/donations/
Tags: SNS, Plugin, Amazon Web Services, AWS, Push Notification Service, Simple Notification service
Requires at least: 4.1.1
Tested up to: 4.1.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use this SNS Plugin form with Amazon's Simple Notification Service to keep in touch with customers easily.

== Description ==


This plugin requires that the webmaster already have an "ACTIVE" Amazon Web Services account which is referred to as an AWS account. The SNS Plugin will then allow you to implement a subscription web form via shortcode that will allow visitors to subscribe to topics you have created via Amazon's Push Notification Service in the AWS console, front end users can subscribe with either their email address or cell phone number to topics you have created.

Amazon's Push Notification service right now allows you to send 1,000 emails and 100 SMS Messages as pat of their FREE Tier service. So it's a good way to keep in touch with Topic Subscribers at little to no charge. *See Amazons SNS Pricing for more details.

The FREE SNS Plugin version right now is just the subscription form that allows front end users to subscribe to already created Amazon SNS topics. It will require your amazon aws access key and secret access key to allow users to subscribe to your topics and activate the topic subscription form shortcodes.

Requirements:

ACTIVE Amazon Web Services Account (AWS)

AWS Acess Key

AWS Secret Access Key

after the SNS Plugin has been activated you should see your Amazon SNS Topics listed with a quick and easy "GET CODE" link which will generate the shortcode needed for the subscription forms to the corresponding topics.

We will be releasing a PRO Version of the SNS Plugin shortly that will allow users to do even more from the WP ADMIN then just create subscription forms.

== Installation ==

Before following the steps below please have an ACTIVE Amazon Web Services (AWS) account and have your access key and secret access key available.
For Instructions on obtaining your Amazon Web services (AWS) keys visit: http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSGettingStartedGuide/AWSCredentials.html

STEP #1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory.

STEP #2. Activate the plugin through the 'Plugins' menu in WordPress.

STEP #3. Under the "SETTINGS" menu in WP Admin look for "SNS Plugin Settings" and click on it.

STEP #4. Enter your Amazon Web Services (AWS) Access key & Secret Access Key and click SAVE CHANGES.
(*NOTE If successful you will now see the SNS Plugin Icon under the main menu of your wp admin dashboard)

STEP #5. Under the SNS Plugin icon you will click on "SNS Topics" you will see a list of your already create AWS Topics.

STEP #6. Click on any of the "GET CODE" links underneath the SNS Topics and you will see the WP Shortcode to create the necessary subscription form. 
It should look similar to... [sns_form topic_id="arn:aws:sns:us-east-1:892438541545:04112015_TEST_6AM"] 

STEP #7. Paste your SNS Topic shortcode into any page/post of your website and you're now able to receive subscribed to you Amazon SNS Topics :-)

In the FREE Version of the SNS Plugin you will use Amazon Web Service's (AWS's) control panel to create topics, send to subscribers etc....

== Frequently Asked Questions ==

= What is the purpose of this plugin? =

To create the necessary subscription form to use with AWS push notification sevice. 

= How much does Amazon charge for their Push Notification Service? =

As og 04/11/2015 Amazon allows you to send the first 1,000 emails and 100 SMS messages every month as part of their FREE Tier. For the most current pricing please visit: http://aws.amazon.com/sns/pricing/

= How do I send notifications to Topic Subscribers =

With the FREE Version of the Plugin you will need to use Amazon Web Services (AWS) control panel.
 
*The PRO Version of this plugin which will be available by 04/20/2015 will have functions that allow you to create topics, send to topic subscribers, and much more. 


= Is this plugin compatible with 3rd party themes? =

We have tested the plugin with most genesis and elegant themes for wordpress without issue. BUT if you run into an issue with a certain theme please don't hesitate to contact us and we'll do our best to rectify the issue. With so many themes and other plugins running we're sure that we will see some bugs with Version #1, but our goal is to handle these bugs right away and rectify any known issues ASAP.


== Screenshots ==

1. SNS Plugin Topics screenshot this is wehre you will see topics from your AWS account and be able to grab corresponding topic shortcodes for the subscription forms assets/sns-screenshot-1.png 

2. SNS Plugin branding screenshot which is easy to disable, but we appreciate anyone who supports the plugin and allows the branding assets/sns-screenshot-2.png

3. SNS Plugin unsettings tab for access key and secret access key information assets/sns-screenshot-3.png

== Changelog ==

= 1.0 =
*No changes this is version 1.0

== Upgrade Notice ==
No upgrades at this time

== Arbitrary section ==

The SNS Plugin FREE version will alow users to simply and easily onbtain subscription forms for their Amazon Web Services (AWS) Push Notification topics, ideal for sending short messages to your subscribers and keeping your newsletter content on your blog. Instead of sending users a long html newsletter, simply put that information into a NEW Blog post or page and send your subscribers a link to the information so that you keep that new content on your blog.

== A brief Markdown Example ==

Ordered list:

1. Easily create amazon SNS topic subscription form
2. allow users to subcribe to your topics via email
3. allow users to subcribe to your topics via sms

Unordered list:

* requires amazon aws account
* requires amazon sns tpics created
* requires you to use amazon aws control panel to send to subscribers
