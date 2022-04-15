<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body class="antialiased">
    <input type="text" id="">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.4.1/socket.io.min.js"
        integrity="sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            let socket = io("127.0.0.1:3000");
            socket.on("connection", (ress) => {
                console.log(ress.id);
            });

            let dataInput = $("#dataInput")
            dataInput.keypress(function(e) {
                socket.emit("dataInput", "Hallo");

                return false;
            })

            data = "{{ $data }}";

            // socket.emit("dataInput", )
            console.log(data);

            socket.on('hello', (ress) => {
                console.log(ress, socket.id);
            })
        });
    </script>
</body>

</html>
