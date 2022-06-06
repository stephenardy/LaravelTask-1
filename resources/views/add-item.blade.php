<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Item</title>
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
                <form method="post" action="/inventory/create">
                    @csrf
                    <h3 class="mb-3">Add New Item</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Item Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                        />
                    </div>
                    
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input
                            type="text"
                            class="form-control"
                            id="quantity"
                            name="quantity"
                        />
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            Submit
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