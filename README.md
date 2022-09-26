
<!DOCTYPE html>
<html lang="en">
<body>
<h1>Installation, and Usage Instructions</h1>
<hr>
<h3> How to Install ?</h3>
<p>composer require dollyviitorcloud/speedoptimization</p>

<h3> Add Middelware in Kernel file </h3>

<p>\Lockwebsitevendor\Lockwebsitepackage\Http\Middleware\RouteAccess::class,</p>

<p>Add above middelware in app\Http\Kernel.php file of  web group.</p>

<h3>Add Send E-Mail detail in ENV file</h3>

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=e3489dabc559f9
MAIL_PASSWORD=398a1395cacf30
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="dolly.sanchaniya@viitor.colud"


<h1>How It's Work ?</h1>
<hr>

<p>Run /locksite URL and you can get mail in your mail ID</p>
<p>Next you can see password verification screen.</p>
<p>If you are developer than you got 1 Mail of password. Using this password you can unlock website.</p>
<p>If You are client you got Mail to contact developer for unlock website.</p>

</body>
</html>