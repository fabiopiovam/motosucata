<?php
/*
|--------------------------------------------------------------------------
| Admin Products Controller Template
|--------------------------------------------------------------------------
*/

class ProductsController extends BaseController {
    
    protected $layout = 'layouts.admin';
    
    public function __construct()
    {
        // Apply the admin auth filter
        $this->beforeFilter('auth');
    }
    
    public function create(){
        $this->layout->content = View::make('admin.products.create');
    }
}
