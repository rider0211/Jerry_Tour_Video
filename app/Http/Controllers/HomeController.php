<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Customers;
use App\Models\Clients;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menu = 'video';
        $customers = Customers::orderBy('id', 'asc')->limit(25)->get();
        return view('index', compact('customers', 'menu'));
    }

    public function showClients(Request $req)
    {
        $menu = 'video';
        $clients = Clients::where('Customer_ID', $req['id'])->orderBy('Timestamp','desc')->get();
        $customer = Customers::where('id', $req['id'])->first();

        return view('clients', compact('clients', 'customer', 'menu'));
    }

    public function playVideo(Request $req)
    {
        $menu = 'video';
        $videos = Video::where('Client_ID', $req['clientid'])->get();
        $client = Clients::where('ID',$req['clientid'])->first();
        if($req['videoid'] == 1){
            $playVideo = Video::where('Client_ID', $req['clientid'])->first();
        }else{
            $playVideo = Video::where('ID', $req['videoid'])->first();
        }
        return view('video', compact('videos', 'playVideo','client', 'menu'));
    }

    public function search(Request $req){
        $search_type = $req['searchType'];
        $search_word = $req['searchWord'];
        if($search_type == "customer"){
            $customers = Customers::where('Customer_Name','like', '%'.$search_word.'%')->get();
            return ['status'=>true, 'payload'=>json_decode($customers)];
        }else if($search_type == "client"){
            $customer_id = $req['customer_id'];
            $clients = Clients::where('Customer_ID',$customer_id)->where('Client_Name', 'like', '%'.$search_word.'%')->get();
            return ['status'=>true, 'payload'=>json_decode($clients)];
        }

    }
    public function showAll(Request $req){
        $search_type = $req['searchType'];
        if($search_type == "customer"){
            $customers = Customers::orderBy('ID', 'asc')->limit(25)->get();
            return ['status'=>true, 'payload'=>json_decode($customers)];
        }else if($search_type == "client"){
            $customer_id = $req['customer_id'];
            $clients =Clients::where('Customer_ID', $customer_id)->orderBy('Timestamp','desc')->get();
            return ['status'=>true, 'payload'=>json_decode($clients)];
        }
    }
    public function about()
    {
        $menu = 'about';
        $customers = Customers::orderBy('id', 'asc')->limit(25)->get();
        return view('about', compact('customers', 'menu'));
    }
}
