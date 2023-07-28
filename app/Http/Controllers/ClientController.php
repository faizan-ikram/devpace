<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::get();
        $clients = [];
        
        foreach ($data as $key => $client) {
            $clients[] = [
                "first_name" =>  $client->first_name,
                "last_name" =>  $client->last_name,
                "email" =>  $client->email,
                "active"    =>  $client->is_active,
                "subscription"  =>  $client->subscription_id,
                "expiration_date"   =>  !is_null($client->expiration_date)? Carbon::parse($client->expiration_date)->format("M d, Y"):null,
                "current_balance"   =>  $client->balance
            ];
        } 

        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'dateOfBirth' => 'nullable',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
            'phone' => 'nullable|array',
            'subscription' => 'nullable|string',
            'expiration_date' => 'nullable|required_with:subscription',
            'active' => 'boolean',
        ]);

        $dob = $request->input('dateOfBirth');
        $expDate = $request->input('expiration_date');
        $dobParsed = !is_null($dob)? $dob['year'].'-'.$dob['month'].'-'.$dob['day'] : null;
        $expDateParsed = !is_null($expDate)? $expDate['year'].'-'.$expDate['month'].'-'.$expDate['day'] : null;

        $client = Client::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'date_of_birth' => !is_null($dobParsed)? Carbon::parse($dobParsed)->format('D M d Y H:i:s \G\M\TO (T)'):null,
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phones' => json_encode($request->input('phone')),
            'subscription_id' => $request->input('subscription'),
            'expiration_date' => !is_null($expDateParsed)? Carbon::parse($expDateParsed)->format('D M d Y H:i:s \G\M\TO (T)'):null,
            'is_active' => $request->input('active', false),
        ]);

        return response()->json(['message' => 'Client created successfully', 'client' => $client]);
    }
}
