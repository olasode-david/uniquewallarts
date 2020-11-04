<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    body
    {
        background-color:#eee;
        color:#444;
    }

    h2
    {
        text-align:center;
        font-weight:bold;
        color:#444;
    }
    .contain
    {
        width:40%;
        margin:0 auto;
    }
    @media (max-width:568px)
    {
        .contain
        {
            width:100%;
            margin:0 auto;
        }
    }
    .border
    {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        overflow:hidden;
        margin-top:8px;
        border-radius:5px;
        border:0.6px solid #ccc;        
    }
    p
    {
        color:#555;
    }
    .home
    {
       display:inline-block;
       padding:8px;
       background-color:#888;
       color:white;
       text-transform:uppercase;
       letter-spacing:1px;
       font-size:13px;
       font-weight:bold;
       border-radius:5px;
       box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
       text-decoration:none;
    }
    .home:hover
    {
         background-color:#bbb;
    }
    .p
    {
        font-weight:700;
        letter-spacing:0.8px;
    }
    .tags
    {
        padding: 1.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        overflow:hidden;
        border-radius:5px;
        border:0.6px solid #ccc;
        width:250px;
        background-color:white;
    }
    .title
    {
        font-weight:bold;
        color:#444;
        font-size:22px;
        letter-spacing:1px;
    }
    .status
    {
        font-weight:bold;
        color:#555;
        margin-top:8px;
    }
    .size
    {
        font-weight:bold;
        color:#888;
        font-size: 0.75rem;
        margin-left:5px;
    }
    .price
    {
        font-weight:bold;
        color:#444;
        letter-spacing:1px;
        margin-top:5px;
    }
    .extra
    {
        position:relative; 
        padding-left: 1.5rem; 
        padding-right: 1.5rem;
        margin-top:-4rem;
        margin-left: calc(50% - 11rem);
        
    }
    .flex
    {
        display: flex;
        align-items: baseline;
    }
    .badge
    {
        display:inline-block;
        --bg-opacity: 1;
        background-color: #b2f5ea;
        background-color: rgba(178, 245, 234, var(--bg-opacity));
        --text-opacity: 1;
        color: #319795;
        color: rgba(49, 151, 149, var(--text-opacity));
        text-transform:uppercase;
        border-radius: 9999px;
        letter-spacing: 0.025em;
        font-weight: 600;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        font-size: 0.75rem;
        padding-top: 0.16rem;
        padding-bottom: 0.02rem;
    }
    </style>
</head>
<body>
    

    <div class="contain">
    
                    <h2>
                        Uniquewallarts
                    </h2>
            <div class="p" >
                These are four of our latest Canvas wall arts. 
            </div>
            <div class="p" style="margin-top:5px;">Click to 
                <a class="home" href="{{route('welcome')}}">
                    shop now
                </a> 
            </div>

        @foreach ($image as $item)
            <div>                
                <div class="border">
                    <img src="{{ $item->image }}" width="100%" style="object-fit:cover;">
                </div>
                <div class="extra">
                    <div class="tags">

                        <div class="flex">
                            <span class="badge">
                                new
                            </span>
                            <div class="size">
                                {{$item->size}} 
                            </div>
                        </div>
                        

                        <div class="title">
                            {{$item->title}} 
                        </div> 

                        <div class="status">
                            <img src="https://img.icons8.com/color/48/000000/verified-badge.png" width="20px"/>
                            {{$item->status}} 
                        </div>

                        <div class="price">
                            &#x20a6;{{number_format($item->price)}} 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach        

    </div>

    <center>
        <p >want to stop getting this mail <a href="{{route('unsubscribe',$email)}}" style="color:#444;">Unsubscribe</a></p>

        <footer>
            <p>&copy; Uniquewallarts {{date('Y')}}. All rights reserved.</p>
        </footer>
    </center>
</body>
</html>