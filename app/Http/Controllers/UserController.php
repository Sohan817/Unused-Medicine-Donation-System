<?php

namespace App\Http\Controllers;

use App\http\controllers\controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\requ;
use App\ngor;
use App\donate;
use App\userstable;
use App\admin;
use App\contact;
use App\event;
use App\feedback;
use App\rating;
use App\sellrequest;

class UserController extends Controller
{
    public function reg(request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert(
            'insert into userstables(id,name,gender,age,city,phone,email,password) values(?,?,?,?,?,?,?,?)',
            [null, $name, $gender, $age, $city, $phone, $email, $password]
        );
        $request->session()->flash('status2',"Registration Successful");
        return redirect('/register');
    }
    public function logs(request $request)
    {
        $logindata = $request->input();

        $data = $request->input('email');
        if (userstable::where('email', $data)->doesntExist()) {
            $request->session()->flash('status1','Wrong Email');
            return redirect('login');
        } else {
            $data = userstable::where('email', $request->input('email'))->first();
            if ($request->input('password') == $data->password) {
                $request->session()->put('user', $logindata['email']);
                return redirect('hom');
            } else {
                $request->session()->flash('status1', 'Wrong Email or Password');
                return redirect('/login');
            }
        }
    }
    public function ngoreg(request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $mobile = $request->input('mobile');
        $establish = $request->input('establish');
        $ntam = $request->input('ntam');
        DB::insert(
            'insert into ngors(id,name,email,password,address,mobile,establish,ntam) values(?,?,?,?,?,?,?,?)',
            [null, $name, $email, $password, $address, $mobile, $establish, $ntam]
        );
        echo "NGO/NPO Registration Successful";
    }
    public function ngolog(request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from ngors where email=? and password =?', [$email, $password]);
        if (count($data)) {
            $request->session()->put('ngo', $request['email']);
            return redirect('/ngoi');
        } else {

            $request->session()->flash('status2', 'Wrong Email or Password');
            return redirect('/ngol');
        }
    }
    public function salogs(request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from superadmin where email=? and password =?', [$email, $password]);
        if (count($data)) {
            $request->session()->put('super', $request['email']);
            $request->session()->flash('status', 'You logged in');
            return redirect('/sap');
        } else {
            $request->session()->flash('status1', 'Wrong Email or Password');
            return redirect('/salogin');
        }
    }
    public function adminsreg(request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $phone = $request->input('phone');
        $age = $request->input('age');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert(
            'insert into admins(id,name,address,gender,phone,age,email,password) values(?,?,?,?,?,?,?,?)',
            [null, $name, $address, $gender, $phone, $age, $email, $password]
        );
        echo "Admins Registration Successful";
    }
    public function adminslog(request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from admins where email=? and password =?', [$email, $password]);
        if (count($data)) {
            $request->session()->put('admin', $request['email']);
            $request->session()->flash('status', 'You logged in');
            return redirect('/adminspage');
        } else {
            $request->session()->flash('status1', 'Wrong Email or Password');
            return redirect('/alogin');
        }
    }
    public function req(request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $address = $request->input('address');
        $brandname = $request->input('brandname');
        $genericname = $request->input('genericname');
        $quantity = $request->input('quantity');
        $phone = $request->input('phone');
        $medicinetype = $request->input('medicinetype');
        DB::insert(
            'insert into requs(id,fullname,email,address,brandname,genericname,quantity,phone,medicinetype)
         values(?,?,?,?,?,?,?,?,?)',
            [null, $fullname, $email, $address, $brandname, $genericname, $quantity, $phone, $medicinetype]
        );
        $request->session()->flash('status3','Request Successful');
        return redirect('/request');

    }
    public function don(request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $brandname = $request->input('brandname');
        $genericname = $request->input('genericname');
        $quantity = $request->input('quantity');
        $expirydate = $request->input('expirydate');
        $phone = $request->input('phone');
        $medicinetype = $request->input('medicinetype');
        $donationtype = $request->input('donationtype');
        $receiversname = $request->input('receiversname');
        $receiversad = $request->input('receiversad');
        $receiversmail = $request->input('receiversmail');
        DB::insert('insert into donates(id,name,email,address,brandname,genericname,quantity,
        expirydate,phone,medicinetype,donationtype,receiversname,receiversad,receiversmail) 
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
            [
                null, $name, $email, $address, $brandname, $genericname, $quantity, $expirydate, $phone,
                $medicinetype, $donationtype, $receiversname, $receiversad, $receiversmail
            ]
        );
        $request->session()->flash('status4','Donate Successful');
        return redirect('/donatem');

    }
    function vrm()
    {
        $data = requ::all();
        return view('vrm', ['Requs' => $data]);
    }
    function vrn()
    {
        $data = ngor::all();
        return view('vrn', ['ngors' => $data]);
    }
    function md(Request $request)
    {
        $userdonate = donate::where('email', $request->session()->get('user'))->get('*');

        return view('md', compact('userdonate'));
    }
    function profile(Request $request)
    {

        $userdata = userstable::where('email', $request->session()->get('user'))->get('*');

        return view('profile', compact('userdata'));
    }
    function useredit(Request $request)
    {
        $userp = userstable::where('email', $request->session()->get('user'))->get('*');

        return view('useredit', compact('userp'));
    }
    public function update(request $request)
    {
        $data = userstable::find($request->id);
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->age = $request->age;
        $data->city = $request->city;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect('/profile');
    }
    function ngopro(Request $request)
    {

        $ngodata = ngor::where('email', $request->session()->get('ngo'))->get('*');

        return view('ngopro', compact('ngodata'));
    }
    function ngoedit(Request $request)
    {
        $ngoe = ngor::where('email', $request->session()->get('ngo'))->get('*');

        return view('ngoedit', compact('ngoe'));
    }
    public function ngoupdate(request $request)
    {
        $data = ngor::find($request->id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->establish = $request->establish;
        $data->ntam = $request->ntam;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect('/ngopro');
    }
    function nd(Request $request)
    {
        $ngodonate = donate::where('receiversmail', $request->session()->get('ngo'))->get('*');

        return view('nd', compact('ngodonate'));
    }
    function rm(Request $request)
    {
        $receive = donate::where('receiversmail', $request->session()->get('user'))->get('*');

        return view('rm', compact('receive'));
    }
    function regadmin()
    {
        $data = admin::all();
        return view('regadmin', ['admins' => $data]);
    }
    function manageadmin()
    {
        $data = admin::all();
        return view('manageadmin', ['admins' => $data]);
    }
    function delete(Request $request)
    {
        $data = admin::find($request->id);
        $data->delete();
        return redirect('/manageadmin');
    }
    function mu()
    {
        $data = userstable::all();
        return view('mu', ['userstables' => $data]);
    }
    function deleteu(Request $request)
    {
        $data = userstable::find($request->id);
        $data->delete();
        return redirect('/mu');
    }
    function mnp()
    {
        $data = ngor::all();
        return view('mnp', ['ngors' => $data]);
    }
    function deleten(Request $request)
    {
        $data = ngor::find($request->id);
        $data->delete();
        return redirect('/mnp');
    }
    public function contacta(request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        DB::insert(
            'insert into contacts(id,name,phone,email,subject,message) values(?,?,?,?,?,?)',
            [null, $name, $phone, $email, $subject, $message]
        );
        echo "Contact Successful";
    }
    function cont()
    {
        $data = contact::all();
        return view('cont', ['contacts' => $data]);
    }
    public function even()
    {

        return view('ce');
    }
    public function estore(Request $request)
    {
        $ev = new event();
        $ev->ngoname = $request->input('ngoname');
        $ev->eventsname = $request->input('eventsname');
        $ev->articles = $request->input('articles');

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $ev->image = $filename;
        } else {
            return $request;
            $ev->image = '';
        }
        $ev->save();
        $request->session()->flash('status6','Event Created');
        return redirect('/ce');
    }
    function createevents()
    {
        $data = event::all();
        return view('createevents', ['events' => $data]);
    }
    public function feed(request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $feedback = $request->input('feedback');
        DB::insert(
            'insert into feedbacks(id,name,email,feedback) values(?,?,?,?)',
            [null, $name, $email, $feedback]
        );
        echo "Feedback Successful";
    }
    function feedb()
    {
        $data = feedback::all();
        return view('feedb', ['feedbacks' => $data]);
    }
    public function rat(Request $request)
    {
        $rt = new rating();
        $rt->name = $request->input('name');
        $rt->rating = $request->input('rating');
        $rt->save();
        echo "rating Successful";
    }
    function apd()
    {
        $data = donate::all();
        return view('apd', ['donates' => $data]);
    }
    function deleted(Request $request)
    {
        $data = donate::find($request->id);
        $data->delete();
        return redirect('/apd');
    }
    function apr()
    {
        $data = requ::all();
        return view('apr', ['requs' => $data]);
    }
    function deleter(Request $request)
    {
        $data = requ::find($request->id);
        $data->delete();
        return redirect('/apr');
    }
    public function sell(request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $address = $request->input('address');
        $brandname = $request->input('brandname');
        $genericname = $request->input('genericname');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $phone = $request->input('phone');
        $medicinetype = $request->input('medicinetype');
        DB::insert(
            'insert into sellrequests(id,fullname,email,address,brandname,genericname,quantity,price,phone,medicinetype)
         values(?,?,?,?,?,?,?,?,?,?)',
            [null, $fullname, $email, $address, $brandname, $genericname, $quantity, $price,$phone, $medicinetype]
        );
        $request->session()->flash('status5','Sell Request Created Successfully');
        return redirect('/sellrequest');        
    }
    public function buym(request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $brandname = $request->input('brandname');
        $genericname = $request->input('genericname');
        $quantity = $request->input('quantity');
        $medicinetype = $request->input('medicinetype');
        $sellername = $request->input('sellername');
        $selleraddress = $request->input('selleraddress');
        $semail = $request->input('semail');
        DB::insert(
            'insert into buytables(id,fullname,email,address,brandname,genericname,quantity,medicinetype,
            sellername,selleraddress,semail)
         values(?,?,?,?,?,?,?,?,?,?,?,?)',
            [null, $fullname, $email, $address,$phone, $brandname, $genericname, $quantity,$medicinetype,
             $sellername,$selleraddress, $semail]
        );
      echo"Buy Successful";    
    }
    public function vsr()
    {
        $data = sellrequest::all();
        return view('vsr', ['seller' => $data]);
    }
    function buy($id)
    {
        $data = sellrequest::whereId($id)->first();
        return view('buy', ['seller' => $data]);
    }
}
