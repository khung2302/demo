<?php
require_once 'BaseController.php';
require_once 'model/IndexModel.php';

class IndexController extends BaseController{

    function getHomePage(){
        $model = new IndexModel();
        $slide = $model->selectSlide();
        $specialProduct = $model->selectSpecialProduct();
        $bestSeller = $model->selectBestSeller();
        $newProduct = $model->selectNewProduct();
        $promtProduct = $model->selectPromtProduct();
        $data = ['slide'=>$slide,
                 'specialProduct'=>$specialProduct,
                 'bestSeller'=>$bestSeller,
                 'newProduct'=>$newProduct,
                 'promtProduct'=>$promtProduct
                ];
        return $this->loadView('index','Trang chủ',$data);
    }
}



?>