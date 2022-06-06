<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 mt-5">Inventory</h1>
            <p class="lead">Welcome to your Inventory Management!</p>
        </div>
    </div>

    <div class="container mt-5">
        <a href="/inventory/add" class="btn btn-primary" type="submit">
            Add New Item
        </a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Quatity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($tasks as $task)
            <tbody>
                <tr>
                    <th scope="row">{{$task['id']}}</th>
                    <td>{{$task->name}}</td>
                    <td>{{$task->quantity}}</td>
                    <td>        
                        <div class="mt-3 d-flex" >
                        <a 
                            href={{"delete/".$task['id']}} 
                            class="btn btn-primary"
                            > Done </a>
                        <a
                            href={{"edit/".$task['id']}}
                            class="btn btn-warning ms-2"
                            >Edit</a
                        >
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>


    </div>


    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
    ></script>
</body>
</html>