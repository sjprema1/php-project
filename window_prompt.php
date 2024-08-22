<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>

    <body style="text-align: center">
        <h2>Window prompt() Method</h2>

        <button onclick="geek()">
            Click me!
        </button>
        <p id="g"></p>

        <script>
            function geek() {
                let doc = prompt(
                    "Please enter some text",
                    "GeeksforGeeks"
                );

                if (doc != null) {
                    document.getElementById(
                        "g"
                    ).innerHTML =
                        "Welcome to " + doc;
                }
            }
        </script>
    </body>
</html>