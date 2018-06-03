<?php
/**
 * Created by PhpStorm.
 * User: Maneiraweb
 * Date: 31/05/2018
 * Time: 18:09
 * @message: Esse Controller é responsavel por buscar os produtos no ERP MAINO e atualizar na Loja Magento 1.9.x via API.
 */
namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

	#API KEY MAINO
    private $codigo = "";
    #URL para ler os produtos cadastrados no ERP
    private $API_URL = 'https://comexnfe.com.br/api/v2/produtos.json?api_key=';
    #URL do Dominio do ERP
    private $DOMAIN = 'https://comexnfe.com.br';
   
    public function ShowProduct()
    {
	$json = file_get_contents('https://comexnfe.com.br/api/v2/produtos.json?api_key=');
	$products = (json_decode($json,true));

	
    return View('Products/product-list')->with(compact('products', $products));
    	   

    }

}
