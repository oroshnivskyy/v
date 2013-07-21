<?php
class PurchaseController extends BaseController{
    public function store(){
        
        switch(Input::get('delivery')){
            case 1:
                $delivery = "Кур'єр";
                break;
            case 2:
                $delivery = "Нова пошта";
                break;
            default:
                $delivery = "Самовивоз";
        }
        $product = Product::find(Input::get('id'));
        $purchase = new Purchase();
        $purchase->phone = Input::get('phone');
        $purchase->username = Input::get('username');
        $purchase->delivery = $delivery;
        $purchase->note = Input::get('note');
        $purchase->product_id = $product->id;
        $purchase->save();
        return ['status'=>200];
    }
}
