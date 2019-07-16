<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Title of the project">
        </div>
        <div>
            <input type="text" name="description" placeholder="Description of the project">
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>