<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>InsertProduct</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newAction = "";
    } else {
        $newAction = "./insertProduct";
    }
    if (isset($data["result"])) {
        if ($data["result"]) {
            echo "Thêm mới thành công.";
        } else {
            echo "Thêm mới không thành công.";
        }
    }
    ?>
    <form action= "<?php echo $newAction; ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
            <input type="text" class="form-control" name="id" id="" aria-describedby="helpId"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="pname" id="" aria-describedby="helpId"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Company</label>
            <input type="text" class="form-control" name="company" id="" aria-describedby="helpId"/>
        </div>
        Select Band:
        <select class="form-select form-select-lg" name="selectBand" id="">
            <option value="Minocin">Minocin</option>
            <option value="AeroGreen Antibac">AeroGreen Antibac</option>
            <option value="Bodycology">Bodycology</option>
            <option value="ibuprofen">ibuprofen</option>
        </select>
        Select Year:
        <select class="form-select form-select-lg" name="selectYear" id="">
            <?php
            for ($year = 2015; $year <= 2025; $year++){
                echo '<option value="'. $year .'">'. $year .'</option>';
            }
            ?>
        </select>
        <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
            <input type="file" class="form-control" name="imageFile">
        </div>
        <button type="submit" name="btInsert" class="btn btn-primary">
            Insert
        </button>
    </form>
</body>
</html>