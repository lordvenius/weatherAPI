<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Mickels weather API</h1>
<h3></h3>

    <p>Search location</p>
    <form action="/search">
        <input type="text" name="location">
        <input type="submit" value="search">
    </form>

    <p>Location: {{$location ?? ""}}</p>
    <p>Temp: {{$temp ?? ""}}</p>
    <p>Description: {{$desc ?? ""}}</p>
    <p>Wind: {{$wind ?? ""}} m/s</p>
    <p>Humidity: {{$humidity ?? ""}}</p>


    <h3>Click here to see the ten latest images from mars, from NASAs api</h3>

    <form action="/planets">
    <input type="submit" name="" id="" value="Click me">
    </form>
    

    




    
</body>
</html>