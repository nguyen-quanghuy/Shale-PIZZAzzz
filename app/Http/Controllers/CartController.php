<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Mail;
use App\Model\tbl_delivery;
use App\Model\tbl_product;
use App\Model\tbl_order;
use App\Model\tbl_order_details;
use Auth;
use DB;

class CartController extends Controller
{
    public function getAddCart($id){
        $product = tbl_product::find($id);
        Cart::add(array(
            'id' => $id, // unique row ID
            'name' => $product->dish_name,
            'price' => $product->price	,
            'quantity' => 1,
            'attributes' => array('img' => $product->prd_img)
        ));
        return back();
    }
    public function getShowCart(){
        $cartCollection = Cart::getContent();
        $total = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();
        return view("Frontend.shoppingcart", compact('cartCollection', 'total', 'cartTotalQuantity'));
    }
    // public function updateCart(Request $request){
    //     Cart::update($request->quantity, $request->id);
    // }
    public function removeCart($id){
        if($id == 'all'){
            Cart::clear();
        }
        else{
            Cart::remove($id);
        }
        return back();
    }
    public function postCommit(Request $request, $id){
            $request->validate([
                'txtFirstName' => 'required',
                'txtLastName' => 'required',
                'txtEmail' => 'required|email',
                'nbrPhone' => 'required',
                'txtCmt' => 'required',
            ]);
            //insert table order details
            $getNameProductOne = Cart::getContent();
            $cartTotalQuantityOne = Cart::getTotalQuantity();
            $totalPriceOne = Cart::getTotal();
            foreach($getNameProductOne as $row){
                $stg[] = $row['name'];
            }
            $stg1 = implode(',', $stg);
            $add = new tbl_order_details;
            $add->prd_name = $stg1;
            $add->quantity = $cartTotalQuantityOne;
            $add->total_price = $totalPriceOne;
            $add->save();
            //insert table order
            // $getIdDetailOne = DB::table('tbl_order_details')->select('id')->orderBy('id', 'desc')->latest('id')->limit(1)->get();
            $getIdDetailOne = tbl_order_details::all()->sortDesc()->first();
            $idDtOne = $getIdDetailOne['id'];
            $insert = new tbl_order;
            $insert->id_user = $id;
            $insert->id_details = $idDtOne;
            $insert->status = 'pending';
            $insert->save();
            // insert table delivery
            // $getIdDetailOne = DB::table('tbl_order')->select('id')->orderBy('id', 'desc')->latest('id')->limit(1)->get();
            $getIdOrderOne = tbl_order::all()->sortDesc()->first();
            $idOrOne = $getIdOrderOne['id'];
            $store = new tbl_delivery;
            $store->id_user = $id;
            $store->first_name = $request->txtFirstName;
            $store->last_name = $request->txtLastName;
            $store->email = $request->txtEmail;
            $store->phone_numbers = $request->nbrPhone;
            $store->customer_address = $request->txtAddress."-".$request->txtDistrict."-".$request->txtCity;
            // $store->district = $request->txtDistrict;
            // $store->address = $request->txtAddress;
            $store->comment = $request->txtCmt;
            $store->order_code = $idOrOne;
            $store->save();
            // dd($store);
            // stop tbl_delivery
            $data['info'] = $request->all();
            $data['order_code'] = $idOrOne;
            // dd(env('MAIL_USERNAME'));
            // dd($data);
            $data['cart'] = Cart::getContent();
            $data['total'] = Cart::getTotal();
            // $email = $request->txtEmail;
            // Mail::send('Frontend.email', $data, function($message) use ($email){
            //     $message->from('nguoitot3@gmail.com', 'TRUONGSA');

            //     $message->to($email, $email);

            //     $message->cc('quanghuyabc2k@gmail.com', 'TRUONGSA');

            //     $message->subject('Xác nhận đơn hàng pizza shop');
            // });
            // Cart::clear();
            return redirect('payment');
    }
    public function postCommits(){
        return back()->with('falseOne', 'You must Login to use this function');
    }
    public function postCommitTwo(Request $request, $id){
            $request->validate([
                'FirstName' => 'required', 
                'LastName' => 'required',
                'Email' => 'required|email',
                'Phone' => 'required',
                'Cmt' => 'required',
            ]);
            $addTwo = new tbl_order_details;
            $getNameProduct = Cart::getContent();
            $total = Cart::getTotal();
            $cartTotalQuantity = Cart::getTotalQuantity();
            foreach($getNameProduct as $row){
                $stg[] = $row->name;
            }
            $stg1 = implode(',', $stg);
            $addTwo->prd_name = $stg1;
            $addTwo->total_price = $total;
            $addTwo->quantity = $cartTotalQuantity;
            $addTwo->save();
            //insert table order
            //$getIdDetail = DB::table('tbl_order_details')->select('id')->orderBy('id', 'desc')->latest('id')->limit(1)->get();
            $getIdDetail = tbl_order_details::all()->sortDesc()->first();
            $idDt = $getIdDetail['id'];
            $insertTwo = new tbl_order;
            $insertTwo->id_user = $id;
            $insertTwo->id_details = $idDt;
            $insertTwo->status = 'pending';
            $insertTwo->save();
            //insert table delivery
            // $getIdOrder = DB::table('tbl_order')->select('id')->orderBy('id', 'desc')->latest('id')->limit(1)->get();
            $getIdOrder = tbl_order::all()->sortDesc()->first();
            $idOr = $getIdOrder['id'];
            $storeTwo = new tbl_delivery;
            $storeTwo->store_name = $request->CarryOrder;
            $storeTwo->first_name = $request->FirstName;
            $storeTwo->last_name = $request->LastName;
            $storeTwo->email = $request->Email;
            $storeTwo->id_user = $id;
            $storeTwo->phone_numbers = $request->Phone;
            $storeTwo->comment = $request->Cmt;
            $storeTwo->order_code = $idOr;
            $storeTwo->save();
            // dd($storeTwo);
            //send Email
            $data['infoTwo'] = $request->all();
            $data['order_code'] = $idOr;
            $data['cartTwo'] = Cart::getContent();
            $data['totalTwo'] = Cart::getTotal();
            // $emailTwo = $request->Email;
            // Mail::send('Frontend.emailTwo', $data, function($messageTwo) use ($emailTwo){
            //     $messageTwo->from('nguoitot3@gmail.com', 'TRUONGSA');

            //     $messageTwo->to($emailTwo, $emailTwo);

            //     $messageTwo->cc('quanghuyabc2k@gmail.com', 'TRUONGSA');

            //     $messageTwo->subject('Xác nhận đơn hàng pizza shop');
            // });
            return redirect('payment'); 
    }
    public function postCommitTwos(){
        return back()->with('falseTwo', 'You must Login to use this function');
    }
    public function contentCheckout(){
        $cartContent = Cart::getContent();
        $cartTotalQuantity = Cart::getTotalQuantity();
        $totalPrice = Cart::getTotal();
        $getIDORDER = tbl_order::all()->sortDesc()->first();
        $IDORDER = $getIDORDER['id']+1;
        return view("Frontend.checkout", compact('cartContent', 'cartTotalQuantity', 'totalPrice', 'IDORDER'));
    }
    public function contentCheckoutTwo(){
        $cartContent = Cart::getContent();
        $cartTotalQuantity = Cart::getTotalQuantity();
        $totalPrice = Cart::getTotal();
        $getIDORDER = tbl_order::all()->sortDesc()->first();
        $IDORDER = $getIDORDER['id'];
        return view("Frontend.payment", compact('cartContent', 'cartTotalQuantity', 'totalPrice', 'IDORDER'));
    }
    public function checkPay(Request $request, $id){
        $checkout = $request->txtCheck;
        $totalPrice = Cart::getTotal();
        if($checkout==''){
            return back()->with('fail', "Enter money to Payment");
        }
        else{
            if($checkout==$totalPrice){
                // $update = tbl_order::find($id);
                // $update->id_user = $id;
                // $update->status = 'complete';
                // $update->save();
                // $update->status = 'complete';
                // dd($update);
                // $update->save();
                // DB::table('tbl_order')->where('id_user', $id)->update(['status'=>'pending']);
                $getIdOrderTwo = tbl_order::all()->sortDesc()->first();
                $IdOrTwo = $getIdOrderTwo['id'];
                DB::table('tbl_order')->where('id', $IdOrTwo)->update(['status'=>'complete']);
                Cart::clear();
                return redirect('completed');
            }
            if($checkout>$totalPrice){
                $getIdOrderTwo = tbl_order::all()->sortDesc()->first();
                $IdOrTwo = $getIdOrderTwo['id'];
                DB::table('tbl_order')->where('id', $IdOrTwo)->update(['status'=>'vip']);
                Cart::clear();
                return redirect('completed');
            }
            if($checkout<$totalPrice){
                $getIdOrderTwo = tbl_order::all()->sortDesc()->first();
                $IdOrTwo = $getIdOrderTwo['id'];
                DB::table('tbl_order')->where('id', $IdOrTwo)->update(['status'=>'pending']);
                Cart::clear();
                return redirect('completed');
            }
        }
    }
    public function test1(){
        //$test = DB::table('tbl_order_details')->select('id')->orderBy('id', 'desc')->latest('id')->limit(1)->get();
        // $test1 = $test['id'];
        $test1 = tbl_order::all()->sortDesc()->first();
        $test = $test1['id'];
        dd($test);
    }
}
