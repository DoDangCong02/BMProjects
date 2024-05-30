<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width-device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!--Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
    <header id = "header">
        <?php
            require_once "layout/top.php";
        ?>
    </header>
<main>
    <div class= "container-fluid">
        <div class= "row flex-nowrap">
            <div class = "col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
                <?php
                require_once "layout/left.php";
                ?>
            </div>
            <div id = "" class="col py-3">
                <?php
                    require_once "./MVC/views/pages/" . $data["Page"]. ".php";
                ?>
            </div>
        </div>
    </div>
</main>
<footer id="footer">
    <?php
        require_once "layout/bottom.php";
    ?>
</footer>
<!-- Bootstrap Javascript Libraries -->
    <script>
        src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity = "sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin = "anonymous"
    </script>
    <script>
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity = "sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin = "anonymous"
    </script>
</body>
</html>