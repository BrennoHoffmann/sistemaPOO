<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>




    <div class="container">
        <div class="col">
            <div class="col-md-6">
                <form action="index.php?People" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">

                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="number" name="cpf" class="form-control" placeholder="CPF">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>

                    <div class="form-group col-md-4">
                        <!-- <label for="inputState">User</label> -->
                        <select onchange="yesnoCheck(this);" id="inputState" class="form-control" name="typePerson">
                            <option value="user">User</option>
                            <option id="employee" value="employee">Employee</option>
                        </select>
                    </div>

                    <div id="ifYes" style="display: none;" class="form-group">
                        <label>Money</label>
                        <input type="number" name="money" class="form-control" placeholder="Money">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User</label>
                        <input type="text" class="form-control" name="user" placeholder="User">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color:black">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function yesnoCheck(that) {
            if (that.value == "employee") {
                alert("New Info added, check the input.");
                document.getElementById("ifYes").style.display = "block";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>