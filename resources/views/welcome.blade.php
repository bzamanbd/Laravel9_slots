<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Welcome Page</h1>
        <x-alert>
   @slot('heading')
       <b>this is heading from welcome page slot</b>
   @endslot
   @slot('subheading')
       <b>this is subheading from welcome page slot</b>
   @endslot
  </x-alert>
    </center>
</body>
</html>