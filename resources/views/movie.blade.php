<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <div class="container p-5">
    
        <div class="row">
    
            
            @foreach($movies as $movie)
            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">TTOLO: {{ $movie['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">TITOLO ORIGINALE: {{ $movie['original_title'] }}</h6>
                        <p class="card-text">NAZIONALITA: {{ $movie['nationality'] }}</p>
                        <p class="card-link">DATA: {{ $movie['date'] }}</p>
                        <p class="card-link">VOTO: {{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>



    