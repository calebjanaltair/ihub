<!-- resources/views/emails/contactus.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Email</title>
</head>
<body>
    <h1>Contact Us Email</h1>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $messages }}</p>
</body>
</html>