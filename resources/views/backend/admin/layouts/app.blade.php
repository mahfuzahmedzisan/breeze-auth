<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin Layout</h1>
                <p>This is the Admin layout.</p>
            </div>
        </div>
    </div>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2023 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
