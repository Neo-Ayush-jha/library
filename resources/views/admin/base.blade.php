<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container mx-5">
            <a href="" class="navbar-brand border rounded-3 border-warning border-3 p-1 fs-4">|| <i class="bi bi-vimeo text-warning  me-1">Admin panal Library ||</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/" class="nav-link underline hover:decoration-dashed">Home</a></li>
                <li class="nav-item"><a href="/create" class="nav-link underline hover:decoration-dashed">About</a></li>
                <li class="nav-item"><a href="" class="nav-link underline hover:decoration-dashed">logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="list-grout mt-5 border fs-4" style="border-radius: 8px">
                    <a href="/admin" class="list-group-item bg-dark text-light list-group-item-action">Dashboard</a>
                    <a href="/admin/store" class="list-group-item list-group-item-action">New Books</a>
                    <a href="/admin/store" class="list-group-item list-group-item-action">Add Books</a>
                    <a href="/admin/pass" class="list-group-item list-group-item-action">Add Pass</a>
                    <a href="/admin/manage_book" class="list-group-item list-group-item-action">Manage Books</a>
                    <a href="/admin/manage_book" class="list-group-item list-group-item-action">Manage Books</a>
                    <a href="/admin/fee" class="list-group-item list-group-item-action">Manage Payments</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Book issues</a>
                </div>
                
            </div>
            <div class="col-9">
                @section('content')
        
                @show
            </div>
        </div>
    </div>
   
</body>
</html>