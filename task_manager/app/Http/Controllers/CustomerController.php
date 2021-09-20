<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){

    }


    public function index(){
        //hien thi danh sach khach hang(get)
        return view('modules.customer.index');
    }


    public function show($id){
        // lay ra thong tin 1 khach hang voi id cu the
        return view('modules.customer.show');
    }



    public function edit($id){
        // sua thong tin 1 khach hang(phuong thuc post)
        return view('modules.customer.edit');
    }



    public function create()
    {
        //show form them khach hang(get)
        return view('modules.customer.create');
    }



    public function add(){
        // them moi 1 khach hang (phuong thuc post)
        return view('modules.customer.add');
    }



    public function delete($id){
        // xoa 1 khach hang voi id cu the
        return view('modules.customer.delete');
    }

}
