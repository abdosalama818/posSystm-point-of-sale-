<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_store(Request $request)
    {
        $validated =  $request->validate([
            'client_name' =>'required|string|max:255',
            'phone' =>'string|min:11',

            'address' =>'required|string|max:255',


        ]);
            $text = filter_var($request->address, FILTER_SANITIZE_STRING);// FILTER_SANITIZE_STRING is deprecated but i use it because it noramal process
        Client::create([
            'name'=>$request->client_name,
            'address'=>$text ,
            'phone' => $request->phone
        ]);

        return redirect(url('dashboard/clients'));


    }

    public function clients_show()
    {
        $clitns = Client::all();
        return view('dashboard.clients.clients',[
            'clients'=>$clitns
        ]);
    }

    public function client_edit($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.clients.edit_client',[
            'client'=>$client
        ]);
    }

    public function update_client($id,Request $request)
    {
        $client = Client::findOrFail($id);
        $text = filter_var($request->address, FILTER_SANITIZE_STRING);// FILTER_SANITIZE_STRING is deprecated but i use it because it noramal process
        $client->update([
            'name'=>$request->client_name,
            'address'=>$text ,
            'phone' => $request->phone
        ]);
        return redirect(url('dashboard/clients'));
    }

    public function client_delete($id)
    {
        $client = Client::findOrFail($id);

        $client->delete();
        return redirect(url('dashboard/clients'));

    }

    public function search_client(Request $request)
    {
        $keyword = $request->search;
        $clients= Client::where('name','like',"%$keyword%")->get();
        return view('dashboard.clients.clients',[
            'clients'=>$clients
        ]);
    }
}
