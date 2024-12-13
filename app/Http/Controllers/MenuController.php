<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Menu_table;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Booking;
use DB;


class MenuController extends Controller
{
    

    // Store Order
    public function storeOrder(Request $request)
    {
        $order = Order::create([
            'order_name' => $request->input('o_name'),
            'order_email' => $request->input('o_email'),
            'order_address' => $request->input('adrs'),
            'order_phone' => $request->input('phn'),
            'order_date' => $request->input('date'),
            'order_time' => $request->input('time'),
            'order_dish' => $request->input('d_name'),
            'order_qty' => $request->input('qtity'),
        ]);
    
        return redirect()->back()->with('success', 'Order added successfully.');
    }

    // Store Contact
    public function storeContact(Request $request)
    {
        $contact = Contact::create([
            'contact_name' => $request->input('f_name'),
            'contact_email' => $request->input('email'),
            'contact_phone' => $request->input('phone'),
            'contact_message' => $request->input('f_message')
        ]);

        return redirect()->back()->with('success', 'Contact message added successfully.');
    }

    // Store Booking
    public function storeBooking(Request $request)
    {
        $booking = Booking::create([
            'book_name' => $request->input('b_name'),
            'book_email' => $request->input('b_email'),
            'book_phone' => $request->input('phno'),
            'book_guest' => $request->input('guest'),
            'book_date' => $request->input('b_date'),
            'book_time' => $request->input('b_time'),
            'book_addition' => $request->input('addtn'),
            'book_status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Booking added successfully.');
    }
}
