<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Here are the ten latest images from the Curiosity rover on Mars</h2>



@foreach ($images as $imgSrc)


<img src="{{$imgSrc}}" alt="">


@endforeach
    
</body>
</html>