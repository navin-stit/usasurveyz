<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Usa Surveyz</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<script>
        function Usasurvey(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usasurvey').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function Usasurveyimage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usaimgpopular').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
</script>

<style>

.fa-arrow-up, .fa-arrow-down{
    margin:1rem 1rem;
    font-size: 30px;
}

</style>
</head>
<body>
<!-- Header -->
<div class="top-header">
	<span><a href="#"><img src="../images/amazon_logo.png" class="img-responsive"></a></span>
    <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->
    <p>
	<a href="">Today's Deals |</a>
	<a href="">Gift Cards |</a>
	<a href="">Sell |</a>
	<a href="">Help</a>
	</p>
</div>	