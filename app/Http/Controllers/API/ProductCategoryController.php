<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $show_product = $request->input('show_product');

        if ($id) {
            $category = ProductCategory::with(['product'])->find($id);

            if ($category) {
                return ResponseFormatter::success($category, 'Data kategori produk berhasil diambil');
            } else {
                return ResponseFormatter::success(null, 'Data kategori produk tidak ada', 404);
            }
        }

        $category = ProductCategory::query();
        if ($name) {
            $category->where('name', 'like', '%' . $name . '%');
        }
        if($show_product){
            $category->with('product');
        }

        return ResponseFormatter::success($category->paginate($limit), 'Data kategori produk berhasil diambil');
    }
}
