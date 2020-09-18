<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="/savetask" method="POST">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task5" placeholder="Enter Your Task">
                        <br>
                    <button type="submit" class="btn btn-primary" value="Save">Save</button>
                    <button type="button" class="btn btn-warning" value="Clear">Clear</button>
                    <hr>

                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task</th>
                            <th scope="col">Complate</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Not Yet</td>
                          </tr>

                        </tbody>
                      </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>