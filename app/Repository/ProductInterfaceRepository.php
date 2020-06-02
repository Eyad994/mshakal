<?php

namespace App\Repository;

interface ProductInterfaceRepository
{
    public function getProductsByCategory($id);
    public function getAllCategories();
    public function getProductBySlug($slug);

}