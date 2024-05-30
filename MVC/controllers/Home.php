<?php
    class Home extends Controller
    {
        public $productModel;
        public function __construct()
        {
            $this->productModel = $this->model("ProductModel");
        }
        function displayIntroduction()
        {
            $this->view("master", ["Page" => "home"]);
        }
    }
?>