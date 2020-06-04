<?php
	require_once 'reCaptcha/autoload.php';
	if(isset($_POST['submitForm'])) {

		if(isset($_POST['g-recaptcha-response'])) {

			$recaptcha = new \ReCaptcha\ReCaptcha('6LeVB-oUAAAAAD4ZZN0P33fpJEF3aXmSK-qX1ijT');
			$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
							->verify($_POST['g-recaptcha-response']);
			if ($resp->isSuccess()) {
				// Verified!
			} else {
				$errors = $resp->getErrorCodes();
			}
		} else {
			var_dump('Captcha non rempli');
		}

	}
?>

<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form method="POST">
      <div class="g-recaptcha" data-sitekey="6LeVB-oUAAAAAM1zomM4w8Uhgj5DICI0HxhyH66b"></div>
      <br/>
      <input type="submit" value="Valider" name="submitForm">
    </form>
  </body>
</html>