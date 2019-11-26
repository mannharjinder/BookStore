<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $fillable = ['category_id', 'code', 'description', 'image', 'name', 'price', 'supplier_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
//    public function getBooks($session)
//    {
//        if (!$session->has('books')) {
//            $this->createDummyData($session);
//        }
//        return $session->get('books');
//    }
//
//    public function getBook($session, $id)
//    {
//        if (!$session->has('books')) {
//            $this->createDummyData();
//        }
//        return $session->get('books')[$id];
//    }
//
//    public function addBook($session, $categoryId, $code, $description, $image, $name, $orderId, $price, $shoppingCartId, $supplier_id)
//    {
//        if (!$session->has('books')) {
//            $this->createDummyData();
//        }
//        $books = $session->get('books');
//        array_push($books, ['categoryId' => $categoryId, 'code' => $code, 'description' => $description,
//            'image' => $image, 'name' => $name, 'orderId' => $orderId, 'price' => $price,
//            'shoppingCartId' => $shoppingCartId, 'supplierId' => $supplierId]);
//        $session->put('books', $books);
//    }
//
//    public function editPost($session, $id, $categoryId, $code, $description, $image, $name, $orderId, $price, $shoppingCartId, $supplierId)
//    {
//        $books = $session->get('books');
//        $books[$id] = ['categoryId' => $categoryId, 'code' => $code, 'description' => $description,
//            'image' => $image, 'name' => $name, 'orderId' => $orderId, 'price' => $price,
//            'shoppingCartId' => $shoppingCartId, 'supplierId' => $supplierId];
//        $session->put('posts', $books);
//    }
//
//    private function createDummyData($session)
//    {
//        $books = [
//            [
//                'categoryId' => 1,
//                'code' => 001,
//                'description' => 'description',
//                'image' => 'image',
//                'name' => 'name',
//                'orderId' => 01,
//                'price' => 2,
//                'shoppingCartId' => 01,
//                'supplierId' => 01
//            ]
//        ];
//        $session->put('books', $books);
//    }
}
