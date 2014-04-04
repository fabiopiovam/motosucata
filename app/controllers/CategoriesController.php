<?php
/*
|--------------------------------------------------------------------------
| Admin Products Controller Template
|--------------------------------------------------------------------------
*/

class CategoriesController extends BaseController {
    
    protected $layout = 'layouts.admin';
    
    public function __construct()
    {
        // Apply the admin auth filter
        $this->beforeFilter('auth');
    }
    
    public function index(){
        $categories = Categories::all()->toJson();
        
        return $categories;
    }
}
