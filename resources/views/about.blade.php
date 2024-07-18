<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">   
    <title>About NorthSQD</title>
</head>
<body>
@include('templates/navbar')
<div class="text-block">
    <h1>About NorthSQD</h1>
    <p>Welcome to North SQD, your destination for unique and stylish  merchandise inspired by the spirit of the North! Our logo, an  upward-pointing compass arrow, symbolizes our journey forward, mirroring  the bold steps taken by explorers to the North Pole and our own  adventure at the bootcamp where we brought this project to life. </p>
    <p>We are a  passionate team of five, each bringing our own special skills and  personality to the table. Here’s a little bit about each of us:</p>
</div>

<div class="about">
    <div class="about-grid">
        <img src="{{ asset("images/man.png") }}" alt="Linass" class="person-image">
        <h3 class="pink">LINASS</h3>
        <h4>The Team Lead</h4>
        <p>Linass is the backbone of North SQD. As the team lead, he's the first  one in the office and the last one to leave. Linass is kind yet strict, always managing to handle conflicts and issues with seamless grace. His  dedication keeps us all on track and moving forward.</p>
    </div>

    <div class="about-grid">
        <img src="{{ asset("images/man.png") }}" alt="Deniss" class="person-image">
        <h3 class="pink">DENISS</h3>
        <h4>The Back-End Wizard</h4>
        <p>Meet Deniss, our friendly and supportive back-end wizard. When he's  not working his magic on the server-side, you can find him dominating the ping-pong table. Deniss's positive attitude and technical expertise  keep our website running smoothly.</p>        
    </div>

    <div class="about-grid">
        <img src="{{ asset("images/man.png") }}" alt="Rodions" class="person-image">
        <h3 class="pink">RODIONS</h3>
        <h4>The Front-End Master</h4>
        <p>Rodions is our front-end guru, crafting beautiful and responsive designs that make our shop a joy to use. A beer lover at heart, he brings creativity and a sense of fun to the team, ensuring our user experience is top-notch.</p>
    </div>

    <div class="about-grid">
        <div class="img-container">
            <img src="{{ asset("images/woman.png") }}" alt="Katerina" class="person-image">
            <img src="{{ asset("images/woman2.png") }}" alt="Katerina" class="hover-person-image">
        </div>
        <h3 class="pink">KATERINA</h3>
        <h4>The Designer and Muse</h4>
        <p>Katerina is the creative force behind our brand. As our designer and muse, she brings ideas to life with her artistic flair and attention to detail. Her designs are not just visually stunning but also deeply inspired by the serene beauty of the North.</p>
    </div>

    <div class="about-grid">
        <img src="{{ asset("images/man.png") }}" alt="Aleks" class="person-image">
        <h3 class="pink">Aleks</h3>
        <h4>The Absent Member</h4>
        <p>Aleks might have missed a lot of the fun due to being under the weather, but his contributions are still vital. His unique perspective and input have helped shape the direction of North SQD, even from afar.</p>
    </div>
</div>

<div class="text-block">
    <img src="{{ asset("images/about.jpeg") }}" alt="team photo" class="about-image">
    <p>Together, we are North SQD, a small but mighty team committed to bringing you high-quality, stylish merchandise. Our logo is a testament to our collective journey, always pointing us forward and upward. We hope you enjoy shopping with us as much as we enjoyed creating this for  you!</p>
    <p>Thank you for supporting North SQD!</p>
</div>
<hr class="solid">
@include('templates/footer')
</body>
</html> 