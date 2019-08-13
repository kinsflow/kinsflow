<?php

namespace App\Http\Controllers;

use App\Category;
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
        $carts = Auth::user()->cart;
        $category = Category::all();
        $products = Product::where('category_id', $id)->get();
//        dd($product);
        return view('pages.category', compact('category', 'products', 'carts'));
    }

    public function livesearch(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
//            return $query;
            if ($query != '') {
                $data = DB::table('users')->where('first_name', 'like', '%' . $query . '%')
                    ->orWhere('last_name', 'like', '%' . $query . '%')
                    ->orWhere('contact_info', 'like', '%' . $query . '%')
                    ->orWhere('address', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')->get();
            } else {
                $data = DB::table('users')->orderBy('id', 'desc')->get();
            }
            $output = '';
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                            <tr>
                                    <td>' . $row->first_name . '</td>
                                    <td>' . $row->last_name . '</td>
                                    <td>' . $row->contact_info . '</td>
                                    <td>' . $row->address . '</td>
                                    <td>' . $row->email . '</td>
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
}
