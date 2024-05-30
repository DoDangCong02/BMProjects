<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Select Year</h1>
    <form method="post" action="<?php echo $newAction; ?>">
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $newAction = "";
    }else{
        $newAction = "displayProductbyBand";
    }
    if(isset($data["Products"])){
        // Hiển thị kết quả
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        $fieldNames = $data["Products"]->fetch_fields(); //Products lấy từ CSDL Products
        foreach ($fieldNames as $field){
            echo "<th class=\"text-center\">".strtoupper($field->name). "</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($data["Products"])){
            echo "<tr>";
            echo "<td class=\"text-left\">".$row["id"]."</td>";
            echo "<td class=\"text-left\">".$row["pid"]."</td>";
            echo "<td class=\"text-left\">".$row["pname"]."</td>";
            echo "<td class=\"text-left\">".$row["company"]."</td>";
            echo "<td class=\"text-left\">".$row["year"]."</td>";
            echo "<td class=\"text-left\">".$row["band"]."</td>";
            echo "<td class=\"text-left\">".'<img src="'.$row["pimage"].'" alt=Image>'. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    ?>
    <div class="mb-3">
        <label for="" class="form-label">Select Year</label>
        <select class="form-select form-select-lg" name="selectYear" id="">
            <?php
            for ($year = 2015; $year <= 2025; $year++){
                echo '<option value="'. $year .'">'. $year .'</option>';
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label>
        <select class="form-select form-select-lg" name="selectBand" id="">
            <option value="Minocin">Minocin</option>
            <option value="AeroGreen Antibac">AeroGreen Antibac</option>
            <option value="Bodycology">Bodycology</option>
            <option value="ibuprofen">ibuprofen</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
    </form>
</body>
</html>