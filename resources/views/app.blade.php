<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
@inertia
{{--same as above--}}
{{--<div id="app" data-page="{{json_encode($page)}}"> </div>--}}
</body>
</html>
