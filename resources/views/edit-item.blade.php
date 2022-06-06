<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3">
                <form method="post" action="/inventory/update">
                    @csrf
                    <input type="hidden" name="id" value="{{$tasks['id']}}">
                    <h3 class="mb-3">Edit Task</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Item Name</label>
                        <input
                            type="text"
                            name="name"
                            value="{{$tasks['name']}}"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <br>
                        <input
                            type="text"
                            name="quantity"
                            value="{{$tasks['quantity']}}"
                        />
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"
    ></script>
</body>
</html>