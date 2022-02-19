<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    
    <div>
        <div>
            Contacting About: {{ $contact['about'] }}
        </div>
        <div> 
            Name: {{ $contact['firstName'] }} {{ $contact['lastName'] }}
        </div>
        <div>
            Email: {{ $contact['email'] }}
        </div>
        <div>
            Phone Number: {{ $contact['phone'] }}
        </div>
        <div>
            Company: {{ $contact['company'] }}
        </div>
    </div>
    
</body>
</html>