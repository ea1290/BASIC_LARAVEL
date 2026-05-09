<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? "IF21"}}</title>
    <link rel="stylesheet" href="">
    @vite([])
</head>
<body>
    <header>
        
    </header>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                Navbar
            </a>
        </div>
    </nav>
    {{ $slot}} 
    
    
</body>
</html>

