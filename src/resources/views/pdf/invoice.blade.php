<!DOCTYPE html>
<html>
<head>
    <title> Invoice Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div style="width: 100%; max-width: 960px; margin: auto">

        <h1> Product name: {{ $product->name }} </h1>

        <p> Review name: {{ $review->name ?? '-' }} </p>
        <p> Review score: {{ $review->score ?? '-' }} </p>
        <p> Review positive: {{ $review->score ?? '-' }} </p>
        <p> Review negative: {{ $review->score ?? '-' }} </p>

    </div>
</body>
</html>
