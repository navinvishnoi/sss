<html>
<head>
<title>Codelgniter pagination</title>
<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
<div id="content">
<h3 id='form_head'>Codelgniter Pagination Example </h3><br/>
<hr>
<div id="form_input">
<?php

// Show data
foreach ($results as $data) {
echo "<label> Id </label>" . "<div class='input_text'>" . $data->Member_id . "</div>"
. "<label> Name</label> " . "<div class='input_name'>" . $data->Member_Name . "</div>"
. "<label> Email </label>" . "<div class='input_email'>" . $data->MA_email . "</div>"
. "<label> Mobile No </label>" . "<div class='input_num'>" . $data->MA_mobile . "</div>"
. "<label> Country </label> " . "<div class='input_country'>" . $data->MA_country . "</div>";
}
?>
</div>
<div id="pagination">
<ul class="tsc_pagination">

<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} ?>
</div>
</div>
</div>
</body>
</html>