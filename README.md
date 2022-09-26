
<!DOCTYPE html>
<html lang="en">
<body>
<h1>Installation, and Usage Instructions</h1>

<h3> How to Install ?</h3>
<p>composer require dollyviitorcloud/speedoptimization</p>

<h3> Add Middelware in Kernel file </h3>

<p>\Lockwebsitevendor\Lockwebsitepackage\Http\Middleware\RouteAccess::class,</p>

<p>Add above middelware in web group of app\Http\Kernel.php file .</p>

<h3>Add Send E-Mail detail in ENV file</h3>

<p>MAIL_MAILER=smtp</p>
<p>MAIL_HOST=smtp.mailtrap.io</p>
<p>MAIL_PORT=2525</p>
<p>MAIL_USERNAME=e3489dabc559f9</p>
<p>MAIL_PASSWORD=398a1395cacf30</p>
<p>MAIL_ENCRYPTION=tls</p>
<p>MAIL_FROM_ADDRESS="dolly.sanchaniya@viitor.colud"</p>


<h1>How It's Work ?</h1>


<p>Run /locksite URL and you can get mail in your mail ID</p>
<p>Next you can see password verification screen.</p>
<p>If you are developer than you got 1 Mail of password. Using this password you can unlock website.</p>
<p>If You are client you got Mail to contact developer for unlock website.</p>

</body>
</html>