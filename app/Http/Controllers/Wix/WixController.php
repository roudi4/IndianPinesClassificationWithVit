<?php
// app ID af454cba-1db7-4d93-a920-27a74889bbd2
//secret key 320e4b10-30f1-4d33-a20a-da8f5fccbe9e
namespace App\Http\Controllers\Wix;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\models\Wix;

class WixController extends Controller{
    
    function index(){
      return Http::get('http://127.0.0.1:8000/api/wix_chanels_user');
    }
    function aff_formulaire(){
        return view('wix_plateforme.welcome_wix');
    }
    function product_list(){
       $t=DB::table('wix_products')->get();
        return view('wix_plateforme.product_list',['wix_products'=>$t]);
    }
    function Mapping_wix(){
        return view('wix_plateforme.Mapping_wix');
    }
    function Marge_wix(){
        return view('wix_plateforme.Marge_wix');
    }
    
  function connectionapi(Request $a){
    $response=Http::post('https://www.wix.com/oauth/access ',
    
        '[
           "grant_type": "authorization_code",
           "client_id"=> "af454cba-1db7-4d93-a920-27a74889bbd2>"
           "client_secret"=> "320e4b10-30f1-4d33-a20a-da8f5fccbe9e>"
          ]');
        dd($a->all());
        
        
        $prod_id=DB::table('wix_chanels_users')->insertGetId([

          'email'=>$a->email,
          'password'=>$a->password,
          'created_at'=>now()
        ]);
        dd($prod_id);
            return redirect ('/aff_formulaire');
         
                              
                      
  }}
                             

  
        // $apii='https://www.wixapis.com/stores/v1/products';
      /*  function crier_produit(Request $re){
          $client_id=$re->session()->get('user_info');
          //dd($client->id);
          $userid=$client_id->id;
         
          $coordonnee_boutique=DB::table('wix_chanels_users')->select('*')
          ->where('user_id',$userid)->first();
          $shop_id=$coordonnee_boutique->shop_id;
          $token= $coordonnee_boutique->token;
          
          $resp=$re->session()->get('key');
          $shop_id = $resp['default_shop_id'];
          $token = $resp['token'];
          $api = 'https://www.wixapis.com/stores/v1/products'.$id_prod_wix.'/product_list';
          //debut creation produit
          $response = Http::withToken($token)->post('https://www.wixapis.com/stores/v1/products'.$id_prod_wix.'/product_list',[
            ["product"=> [ 
              "id"=> "91f7ac8b-2baa-289c-aa50-6d64764f35d3",
              "name"=> "Colombian Arabica",
              "slug"=> "colombian-arabica-1",
              "visible"=> true,
              "productType"=> "physical",
              "description"=> "<p>The best organic coffee that Colombia has to offer.<\/p>",
              "stock"=>   [ 
                "trackInventory"=> false,
                "inStock"=> true
              ],
              "price"=>   [ 
                "currency"=> "USD",
                "price"=> 35,
                "discountedPrice"=> 30,
                "formatted"=>     [ 
                  "price"=> "$35.00",
                  "discountedPrice"=> "$30.00",
                  "pricePerUnit"=> "$0.12"
              ],
                "pricePerUnit"=> 0.12
            ],
              "priceData"=>   [ 
                "currency"=> "USD",
                "price"=> 35,
                "discountedPrice"=> 30,
                "formatted"=>     [ 
                  "price"=> "$35.00",
                  "discountedPrice"=> "$30.00",
                  "pricePerUnit"=> "$0.12"
                ],
                "pricePerUnit"=> 0.12
              ],
              "convertedPriceData"=>   [ 
                "currency"=> "USD",
                "price"=> 35,
                "discountedPrice"=> 30,
                "formatted"=>     [ 
                  "price"=> "$35.00",
                  "discountedPrice"=> "$30.00",
                  "pricePerUnit"=> "$0.12"
              ],
                "pricePerUnit"=> 0.12
            ],
              "pricePerUnitData"=>   [ 
                "totalQuantity"=> 250,
                "totalMeasurementUnit"=> "G",
                "baseQuantity"=> 1,
                "baseMeasurementUnit"=> "G"
              ],
              "additionalInfoSections"=> [  [ 
                "title"=> "Storage recommendations",
                "description"=> "<p>air-tight container at room temperature.<\/p>\n"
              ]],
              "ribbons"=> [["text"=> "Organic and Fair trade"]],
              "ribbon"=> "Organic and Fair trade",
              "brand"=> "Coffee Company",
              "media"=>   [ 
                "mainMedia"=>     [ 
                  "thumbnail"=>       [ 
                    "url"=> "https://static.wixstatic.com/media/nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg/v1/fit/w_50,h_50,q_90/file.jpg",
                    "width"=> 50,
                    "height"=> 50
                  ],
                  "mediaType"=> "image",
                  "title"=> "",
                  "image"=>       [ 
                    "url"=> "https://static.wixstatic.com/media/nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg/v1/fit/w_6000,h_3376,q_90/file.jpg",
                    "width"=> 6000,
                    "height"=> 3376
                  ],
                  "id"=> "nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg"
                  ],
                "items"=> [    [ 
                  "thumbnail"=>       [ 
                    "url"=> "https://static.wixstatic.com/media/nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg/v1/fit/w_50,h_50,q_90/file.jpg",
                    "width"=> 50,
                    "height"=> 50
                ],
                  "mediaType"=> "image",
                  "title"=> "",
                  "image"=>       [ 
                    "url"=> "https://static.wixstatic.com/media/nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg/v1/fit/w_6000,h_3376,q_90/file.jpg",
                    "width"=> 6000,
                    "height"=> 3376
                ],
                  "id"=> "nsplsh_5033504669385448625573~mv2_d_6000_3376_s_4_2.jpg"
                ]]
                ],
              "customTextFields"=> [  [ 
                "title"=> "What would you like us to print on the custom label?",
                "maxLength"=> 200,
                "mandatory"=> false
              ]],
              "manageVariants"=> true,
              "productOptions"=>   [
                    [ 
                  "optionType"=> "drop_down",
                  "name"=> "Weight",
                  "choices"=>       [
                            [ 
                      "value"=> "250g",
                      "description"=> "250g",
                      "media"=> ["items"=> []],
                      "inStock"=> true,
                      "visible"=> true
                            ],
                            [ 
                      "value"=> "500g",
                      "description"=> "500g",
                      "media"=> ["items"=> []],
                      "inStock"=> true,
                      "visible"=> true
                            ]
                  ]
                  ],
                    [ 
                  "optionType"=> "drop_down",
                  "name"=>"Ground for",
                  "choices"=>       [
                            [ 
                      "value"=> "Stovetop",
                      "description"=> "Stovetop",
                      "media"=> ["items"=> []],
                      "inStock"=> true,
                      "visible"=> true
                            ],
                            [ 
                      "value"=> "Filter",
                      "description"=> "Filter",
                      "inStock"=> true,
                      "visible"=> true
                            ]
                  ]
                  ]
              ],
              "productPageUrl"=>   [ 
                "base"=> "https://roysha.wixsite.com/roycoffeestore",
                "path"=> "/product-page/colombian-arabica-1"
            ],
              "numericId"=> "1586693639134000",
              "inventoryItemId"=> "6e085374-d455-d763-55af-929b89b0ca2c",
              "discount"=>   [ 
                "type"=> "AMOUNT",
                "value"=> 5
            ],
              "collectionIds"=> ["32fd0b3a-2d38-2235-7754-78a3f819274a"],
              "variants"=>   [
                    [ 
                  "id"=> "00000000-0000-0020-0005-a316e6ba5b37",
                  "choices" =>      [[ 
                    "Weight"=> "250g",
                    "Ground for"=> "Stovetop"
                  ],
                  "variant"=>       [ 
                    "priceData"=>         [ 
                      "currency"=> "USD",
                      "price"=> 35,
                      "discountedPrice"=> 30,
                      "formatted"=>           [ 
                        "price"=> "$35.00",
                        "discountedPrice"=> "$30.00",
                        "pricePerUnit"=> "$0.12"
                      ],
                      "pricePerUnit"=> 0.12
                    ],
                    "convertedPriceData"=>         [ 
                      "currency"=> "USD",
                      "price"=> 35,
                      "discountedPrice"=> 30,
                      "formatted"=>           [ 
                        "price"=> "$35.00",
                        "discountedPrice"=> "$30.00",
                        "pricePerUnit"=> "$0.12"
                      ],
                      "pricePerUnit"=> 0.12
                    ],
                    "weight"=> 0.25,
                    "sku"=> "10001",
                    "visible"=> true
                  ],
                   
          //dd($resp->body( )); 
         $result=$response->body( );
         $result=json_decode($rr);
        // dd($rr);
        if(isset($result->code)){
             echo"erreur";
         }
         else{
          $productid=$re->productid;
             $envoyer="Envoyer";
             $t=['status'=>$envoyer];
             DB::table('wix_products')->where('id',3)->update($t);
             //return redirect("/updateproductpage/".$productid);
             echo"creer";
         }
                // dd($resp->reasonPhrase);
      }}
return view('wix_plateforme.product_list');*/

            
      /*  function DeleteProductFromOct(Request $e){
            $idprod=$e->id;
              DB::table('wix_products')->where('id',$idprod)->delete();
              $tt= DB::table('product_list')->where("user_id",$user_id)->first();
              $id_prod_dropizi=$chanel->id_product_dropizi;
        $token=$t->token;
        $shopid=$tt->droipzi_shop_id;
        //get inforamtion from the table  products
        // $product= DB::table('dropizi_channels_users')->where("product_id",$product_id)->first();
        return redirect('/product_list')->with(['msgx'=>'produit supprimé de la boutique dropizi']);


            }*/
            /*function updateProd(){
              $user_id=1;
              $product_id=12;
              //get inforamtion from the table  dropizi_channels_users
              $chnel= DB::table('wix_channels_users')->where("user_id",$user_id)->first();
              $chanel= DB::table('wix_product')->where("user_id",$user_id)->first();
      
              $id_prod_dropizi=$chanel->id_product_dropizi;
              $token=$chnel->token;
              $shopid=$chnel->droipzi_shop_id;
              //get inforamtion from the table  products
              // $product= DB::table('dropizi_channels_users')->where("product_id",$product_id)->first();
            }*/
                    
          