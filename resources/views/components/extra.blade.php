<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @if (Request::path() === 'login')
        <title>Uniquewallarts - Sign up</title>
    @endif

    @if (Request::path() === 'register')
        <title>Uniquewallarts - Sign in</title>
    @endif

    @if (Request::path() === 'password/reset')
        <title>Uniquewallarts - password/reset</title>
    @endif
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/unique.css') }}" rel="stylesheet">
    <style>
    .sign-cover
    {
      width:48.5%;
      margin:0 auto;
    }
    .hr
    {
        width:35%;
    }

    @media (max-width:568px)
    {
        .sign-cover
        {
        width:100%;
        margin:0 auto;
        }
       .hr
        {
            width:33%;
        }
    }
    @media (max-width:280px)
    {
        
       .hr
        {
            width:15%;
        }
    }
    @media (max-width:450px)
    {
        
       .hr
        {
            width:30%;
        }
    }

    .hr-shadow 
    {
        width:100%;
        height:10px;
        box-shadow: 5px 15px 10px #eee;
    }
    
    
    </style>
</head>
<body>
        <h3 class="text-center text-small text-justify text-secondary mt-2">Uniquewallarts</h3>

  <!-- the body content components -->
            <main class="py-2">
                {{$slot}}           
            </main>
            <footer>
            <center>
                <a href="#">
                    Help
                </a>
            </center>
                <p class="text-center text-secondary text-small text-justify">
                    &copy; Uniquewallarts {{date('Y')}}. All rights reserved.
                </p>
                
                
            </footer>
</body>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>