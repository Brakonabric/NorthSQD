<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Return Policy</title>
</head>
<body>
@include('templates/navbar')
<div class="text-block">
    <h1>Return Policy</h1>
    <p>At North Squad, we prioritize your satisfaction. If you need to return a product, please follow the steps below to ensure a smooth and efficient process.</p>
    <h3>How to Return Your Parcel</h3>
    <p>Return via Omniva Parcel Lockers.</p>
    <p>Drop off your return at any Omniva parcel locker, available 24/7 for your convenience.</p>
    <h3>Steps to Create a Return</h3>
    <ol>
        <li>Receive a Return Code:<br /><span class="regular">Once you initiate a return, you will receive a return code via SMS or email.</span></li>
        <li>Create Return:<br /><span class="regular">Click the “Create Return” button below and enter the return code.</span></li>
        <li>Package Your Item:<br /><span class="regular">Securely package the item you are returning. Include all original packaging, tags, and any accessories.</span></li>
        <li>Drop Off:<br /><span class="regular">Use the return code to drop off your parcel at the nearest Omniva parcel locker.</span></li>
    </ol>
    <h3>Processing Time</h3>
    <p>Your return will be processed within approximately 15 calendar days from the date we receive your returned item.</p>
    <h3>Additional Information</h3>
    <ul>
        <li>Ensure the item is in its original condition, unworn, and with all tags attached.</li>
        <li>Refunds will be issued to the original method of payment.</li>
        <li>You will receive an email notification once your return has been processed and your refund has been issued.</li>
    </ul>
    <h3>Contact Us</h3>
    <p>If you have any questions or need assistance with your return, please contact our customer service team. We are here to help!</p>
    <p>Thank you for shopping with North Squad.</p>
</div>
<div class="centered-button"><button class="secondary-button">Create Return</button></div>
<hr class="solid">
@include('templates/footer')
</body>
</html>