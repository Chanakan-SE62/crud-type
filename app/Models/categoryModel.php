<?php

namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model{
    protected $table = 'category';
    protected $primarykey = 'categoryId';
    protected $allowedFields = ['name_category'];
}