<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function addData(Request $req)
    {
        # insert data in the database ;

        $user = $req->user;
        $email = $req->email;
        $address = $req->address;
        $password = $req->password;
        // DB::insert('insert into members (user ,email, address, password) values(?, ?, ?, ?)', [$user, $email, $address, $password]);
        DB::table('members')->insert([
            'user' => $user,
            'email' => $email,
            'address' => $address,
            'password' => $password,
        ]);
        return redirect('list');
       
    }

    public function regPage()
    {
        return view('form');
    }

       function lists()
       {

        // $data = DB::select('select * from members ');
        $data = DB::table('members')->get();



        return view('list', ['members' => $data]);

       }

        function delete($id)
        {

            // $data = DB::delete('delete from members where id = ?', [$id]);
            DB::table('member')->delete();
            
           
            return redirect('list')->with('message', 'One record deleted successfully');
        }

        function showData($id)
        {
            
            // $data = DB::select('select * from members where id = ?', [$id]);
            $data = DB::table('members')->where('id', $id)->get();
            return view('edit', ['data' => $data]);
        }

        function change(){
            return view('edit');
        }

        function update(Request $req, $id)
        {
           
            $password = $req->input('password');
            // DB::update('update  members set password = ? where id = ?', [$password, $id]);
             DB::table('members')->where('id', $id)->update([
                'id' => $id,
                'password' => $password
            ]);
            return redirect('list')->with('message', 'One record updated successfully');

        }
}
