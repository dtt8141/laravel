<?php namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Sales;
use App\Distributors;
use App\Customers;
class HomeController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
            $data = [];
            $data['users'] = User::all();
            $data['products'] = Product::all();                        
            $data['sales'] = Sales::all();  
            $data['customers'] = Customers::all(); 
            $data['distributors'] = Distributors::all(); 
            return view('home', compact('data'));           
            
	}
        
        public function product_seeder()
        {
            Product::create(['name' => 'Alaxan', 'price' => 500, 'description' => 'hymen breaker', 'stocks' => 100000, 'distributor'=>'Tribu Wakwak']);
            Product::create(['name' => 'Solmux', 'price' => 900, 'description' => 'cough syrup', 'stocks' => 1000, 'distributor'=>'Tribu Mumu']);
            Product::create(['name' => 'Decolgen', 'price' => 1, 'description' => 'pampa high', 'stocks' => 1000, 'distributor'=>'Tribu Tiki']);
        }
        
        public function sale_seeder() {
            Sales::create(['name' => 'Alaxan', 'amount' => '5']);
            Sales::create(['name' => 'Alaxan', 'amount' => '50']);
            Sales::create(['name' => 'Alaxan', 'amount' => '500']);
            Sales::create(['name' => 'Alaxan', 'amount' => '5000']);
            Sales::create(['name' => 'Alaxan', 'amount' => '1']);
            Sales::create(['name' => 'Solmux', 'amount' => '2']);
            Sales::create(['name' => 'Alaxan', 'amount' => '5']);
            Sales::create(['name' => 'Alaxan', 'amount' => '500']);
            Sales::create(['name' => 'Alaxan', 'amount' => '50']);
            Sales::create(['name' => 'Decolgen', 'amount' => '5']);
            Sales::create(['name' => 'Solmux', 'amount' => '50']);
            Sales::create(['name' => 'Decolgen', 'amount' => '500']);
        }
         public function customer_seeder() {
            Customers::create(['name' => 'Eubien', 'address' => 'Ozamis City', 'phone' => '09193300645']);
            Customers::create(['name' => 'Jhunax ', 'address' => 'Tangub City', 'phone' => '09112626010']);
        }
         public function distributor_seeder() {
            Distributors::create(['name' => 'Pfizer', 'address' => 'Ozamis City', 'phone' => '091234567']);
            Distributors::create(['name' => 'Unilever ', 'address' => 'Iligan City', 'phone' => '09197654321']);
        }
}
