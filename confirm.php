<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0">
    <title>Window confirm() Method</title>
</head>
 
<body style="text-align: center;">
    <h1 style="color:green;">
        GeeksforGeeks
    </h1>
    <h2>Window confirm() Method</h2>
    <p>
        Click the button to display a confirm box.
    </p>
    <p id="add"></p>
 
    <button onclick="geek()">
        Click me!
    </button>
 
    <script>
        function geek() {
            let result = confirm("Press OK to close this option");
            if (result === true) {
 
                document.getElementById("add").textContent = 
                "User clicked OK";
                console.log("User clicked OK");
            } else {
                document.getElementById("add").textContent = 
                "User clicked Cancel";
                console.log("User clicked Cancel");
            }
        }
    </script>
</body>