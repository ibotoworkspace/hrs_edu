<?php
# ------------------------------
# START CONFIGURATION SECTION
#
$launch_url = "http://www.testout.com/orbispartner/basiclti.aspx?labsim_course_id=978-1-935080-66-4";// ?labism_class_id=@context_title
$key = "HRS_CustomLMS";
$secret = "t1CXdiFnhDw4";
$launch_data = array(
        "user_id" => "2",
        "roles" => "1",
);
#
# END OF CONFIGURATION SECTION
# ------------------------------
date_default_timezone_set("Europe/London");
$now = new DateTime();
$launch_data["lti_version"] = "LTI-1p0";
$launch_data["lti_message_type"] = "basic-lti-launch-request";
# Basic LTI uses OAuth to sign requests
# OAuth Core 1.0 spec: http://oauth.net/core/1.0/
$launch_data["oauth_callback"] = "about:blank";
$launch_data["oauth_consumer_key"] = $key;
$launch_data["oauth_version"] = "1.0";
$launch_data["oauth_nonce"] = uniqid('', true);
$launch_data["oauth_timestamp"] = $now->getTimestamp();
$launch_data["oauth_signature_method"] = "HMAC-SHA1";
# In OAuth, request parameters must be sorted by name
$launch_data_keys = array_keys($launch_data);
sort($launch_data_keys);
$launch_params = array();
foreach ($launch_data_keys as $key) {
  array_push($launch_params, $key . "=" . rawurlencode($launch_data[$key]));
}
$base_string = "POST&" . urlencode($launch_url) . "&" . rawurlencode(implode("&", $launch_params));
$secret = urlencode($secret) . "&";
$signature = base64_encode(hash_hmac("sha1", $base_string, $secret, true));
?>

<html>
<head></head>
<!-- <body onload="document.ltiLaunchForm.submit();"> -->
<body>
<form id="ltiLaunchForm" name="ltiLaunchForm" method="POST" action="<?php printf($launch_url); ?>">
<?php foreach ($launch_data as $k => $v ) { ?>
        <input type="hidden" name="<?php echo $k ?>" value="<?php echo $v ?>">
<?php } ?>
        <input type="hidden" name="oauth_signature" value="<?php echo $signature ?>">
        <input type="hidden" name="oauth_consumer_key" value="<?php echo $key ?>">
        <button type="submit">Launch</button>
</form>
<body>
</html>
