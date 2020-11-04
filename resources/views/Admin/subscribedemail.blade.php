<x-master>
    <div class="container">
        <ul class="list-group list-group-flush">
            @foreach ($emails as $email)
                <li class="list-group-item">{{$email->id .'.  '. $email->email}}</li>                
            @endforeach
            
        
        </ul>
    </div>
</x-master>