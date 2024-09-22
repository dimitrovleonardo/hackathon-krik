<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f7;
            color: #51545e;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 0 20px;
        }
        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #333333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
        }
        .email-body {
            padding: 30px;
        }
        .email-body h2 {
            color: #333;
            margin-top: 0;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            margin: 20px 0;
        }
        .email-body a {
            display: inline-block;
            background-color: #ff6f61;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .email-body a:hover {
            background-color: #ff5a4b;
        }
        .email-footer {
            background-color: #f4f4f7;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
        .email-footer a {
            color: #555;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-content">
        <!-- Header -->
        <div class="email-header">
            <h1 style="color: #fff;">Крик</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            {!! $messageContent !!}
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>© 2024 Крик. Сите права се задржани.</p>
            <p><a href="https://yourwebsite.com/privacy-policy">Политика за приватност</a> | <a href="https://yourwebsite.com/unsubscribe">Откажи се од претплатата</a></p>
        </div>
    </div>
</div>
</body>
</html>
