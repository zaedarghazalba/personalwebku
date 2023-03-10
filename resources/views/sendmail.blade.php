<!DOCTYPE html>
<html>

<head>
    <title>Message from {{$details['name']}}</title>
</head>

<body>
    <h2>You have received a new message from {{$details['name']}}</h2>
    <p><strong>Name:</strong> {{$details['name']}}</p>
    <p><strong>Email:</strong> {{$details['email']}}</p>
    <p><strong>Message:</strong> {{$details['message']}}</p>
</body>

</html>