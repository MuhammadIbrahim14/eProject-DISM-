<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    #preloaderrr {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffff; /* Background color */
    z-index: 9999; /* Ensure it's above all content */
    display: flex;
    align-items: center;
    justify-content: center;
}

.spinnerrr {
    border: 5px solid #f3f3f3; /* Light gray */
    border-top: 5px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    </style>
</head>
<body>

<div id="preloaderrr">
    <div class="spinnerrr"></div>
</div>


</body>
<script>
    
    window.onload = function () {
        document.getElementById("preloaderrr").style.display = "none";
    };

</script>
</html>