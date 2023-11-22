<!-- resources/views/emails/feedback.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Email</title>
</head>
<body>
    <h1>Feedback Email</h1>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $messages }}</p>
</body>
</html>
