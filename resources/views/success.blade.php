<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibbadulrrahman E-Academy</title>
    <link id="custom" href="{{asset('frontend/css/success.css')}}" rel="stylesheet" />
    <link id="custom" href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180"  href="{{asset('frontend/favicon_io/apple-touch-icon.png')}}"/>
  <link rel="icon" type="image/png" sizes="32x32"  href="{{asset('frontend/favicon_io/favicon-32x32.png')}}"/>
  <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('frontend/favicon_io/favicon-16x16.png')}}"/>
  <link rel="manifest" href="{{asset('frontend/favicon_io/site.webmanifest')}}"/>
</head>
<body>
    <section class="success-page section">
        <div class="content">
         <h1>Congratulations! You have successfully submitted your application</h1>
        <p class="proceed">Proceed to application fee payment</p>
        <div class="bank-details">
            <p>Bank: Guaranty Trust Bank</p>
            <p>Account name: I.R. Educational Services</p>
            <p>Account No: 0655538726</p>
        </div>
        <p class="last">After payment confirmation, further information shall be communicated to you via the email and/or phone number you provided.</p>
        <a href="{{route('welcome')}}" class="home-btn">Back home</a>
        </div>
    </section>
</body>
</html>
