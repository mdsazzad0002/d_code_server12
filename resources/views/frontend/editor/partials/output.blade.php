<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Output Document Dengrweb</title>
    <style>
        {!! (json_decode(json_decode($request->css))) !!}
    </style>
</head>
<body>


    {!! json_decode(json_decode($request->html)) !!}

    <script>
        {!! json_decode(json_decode($request->js)) !!}
    </script>

</body>
</html>
