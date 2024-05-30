<?php
class ProductManager extends Controller
{
    public $productModel;
    
    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
    }
    
    public function displayIntroduction()
    {
        $this->view("master", ["Page" => "home"]);
    }
    
    public function getProductsbyBand()
    {
        $this->view("master", ["Page" => "getProductsbyBand"]);
    }
    
    public function getProductsbyYear()
    {
        $this->view("master", ["Page" => "getProductsbyYear"]);
    }
    
    public function displayProductByBand()
    {
        if (isset($_POST["btSearch"])){
            $band = $_POST["selectBand"];
            $tblname = 'tblproduct';
            $field1 = "band";
            $products = $this->productModel->getRecordsbyField($tblname, $field1, $band);
            $this->view("master", ["Page" => "getProductsbyBand", "Products" => $products]);
        }
    }
    
    public function displayProductByYear()
    {
        if (isset($_POST["btSearch"])){
            $year = $_POST["selectYear"];
            $tblname = 'tblproduct';
            $field2 = "year";
            $products = $this->productModel->getRecordsbyField($tblname, $field2, $year);
            $this->view("master", ["Page" => "getProductsbyYear", "Products" => $products]);
        }
    }
    
    function impInsertProduct()
    {
        $this->view("master", ["Page" => "insertProduct"]);
    }

    public function insertProduct()
    {
        if (isset($_POST["btInsert"])){
            $id = $_POST["id"];
            $pname = $_POST["pname"];
            $company = $_POST["company"];
            $year = $_POST["year"];
            $band = $_POST["band"];
            if(isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK){
                $pimage = 'data:image/png;base64,'
                .base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
            }
        }
        $result = $this->productModel->
        insertProduct($id, $pname, $company, $year, $band, $pimage);
        $this->view(
            "master",
            [
                "Page" => "insertProduct",
                "result" => $result
            ]
        );
    }
}
?>