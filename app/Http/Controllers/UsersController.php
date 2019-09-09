<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Product;
use App\User;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function signup()
    {
//        $carts = Auth::user()->cart;
        $category = Category::all();
//        dd($category);
        return view('auth.signup', compact('category', 'carts'));
    }

    public function register(Request $data)
    {

        $val = $data->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:35',
            'address' => 'required|string|max:435',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);


        if ($val) {
            $user = User::create([
                'first_name' => $data->first_name,
                'last_name' => $data->last_name,
                'contact_info' => $data->contact_info,
                'address' => $data->address,
                'email' => $data->email,
                'password' => Hash::make($data->password),
            ]);
            if ($user) {
                DB::table('role_user')->insert([
                    'user_id' => $user->id,
                    'role_id' => 0,
                ]);

                $auth = Auth::attempt(['email' => $user->email, 'password' => $data->password]);
                if ($auth) {
                    return redirect('/home');
                } else {
                    return redirect()->back();
                }
            }
        }

    }


    public function category($id)
    {
        $wishlists = Auth::user()->wishlist;
        $carts = Auth::user()->cart;
        $category = Category::all();
        $products = Product::where('category_id', $id)->get();
//        dd($product);
        return view('pages.category', compact('category', 'products', 'carts', 'wishlists'));
    }

    public function livesearch(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
//            return $query;
            if ($query != '') {
                $data = DB::table('products')->where('counter', 'like', '%' . $query . '%')
                    ->orWhere('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->orWhere('slug', 'like', '%' . $query . '%')
                    ->orWhere('price', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')->get();
            } else {
                $data = DB::table('products')->orderBy('id', 'desc')->get();
            }
            $output = '';
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                            <tr>
                                    <td>' . $row->name . '</td>
                                    <td>' . $row->description . '</td>
                                    <td>' . $row->slug . '</td>
                                    <td>' . $row->price . '</td>
                                    <td>' . $row->created_at. '</td>
                            </tr>
                            ';
                }
            } else {
                $output = '<tr><td align="center" colspan="5">No Data Found</td></tr>';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row,
            );

            return json_encode($data);
        }
    }


    public  function photos(Request $request)
    {

        if($file = $request->file('photos'))
        {
            $file_name = time().$file->getClientOriginalName();
            $file->move('images/', $file_name);
            $input = Photo::create([
                'file_path' => $file_name ,
                'imageable_id' => Auth::id(),
                'imageable_type' => 'App\User'
            ]);

            if($input)
            {
                return redirect()->back();
            }
         }

    }
}
