<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Menu_table;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller

{

    public function indexMenu()
    {
        // Fetching special offers and menu items in descending order
        $offers = DB::table('offers')->orderBy('id', 'desc')->get();
        $menuItems = DB::table('menu_tables')->orderBy('id', 'desc')->get();

        // Pass the data to the Blade view
        return view('menu', compact('offers', 'menuItems'));
    }

    // Display the main page with both Menu and Offers
    function index()
    {
        return view('admin.menu');
    }

     // Add a new offer
    public function addOffer(Request $req)
    {
        $offer = new Offer;
        $offer->food_name = $req->title;
        $offer->discount = $req->discount;
        $offer->text = $req->link;

        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $offer->image = $filename;
        }

        $offer->save();
        return redirect()->route('admin.fetch_offers');
    }

    // List all offers
    public function listOffers()
    {
        // Fetching offers in descending order
        $offers = Offer::orderBy('id', 'desc')->get();
        return view('admin.fetch_offers', compact('offers'));
    }

    // Show the form to edit an offer
    public function showOffer($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.edit_offer', compact('offer'));
    }

    // Update an existing offer
    public function updateOffer(Request $req, $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->food_name = $req->title;
        $offer->discount = $req->discount;
        $offer->text = $req->link;
    
        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $offer->image = $filename; // Use the correct syntax for assigning the image
        }
    
        $offer->save();
        return redirect()->route('admin.fetch_offers')->with('success', 'Offer updated successfully.');
    }
    

    // Delete an offer
    public function deleteOffer($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();
        return redirect()->route('admin.fetch_offers');
    }

    

    // Add a new menu item
    public function addMenu(Request $req)
    {
        $menu = new Menu_table;
        $menu->food_name = $req->name;
        $menu->discription = $req->description;
        $menu->price = $req->price;

        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $menu->image = $filename;
        }

        $menu->save();
        return redirect()->route('admin.fetch_menu');
    }

    // List all menu items
    public function listMenus()
    {
        $menus = Menu_table::orderBy('id', 'desc')->get();
        return view('admin.fetch_menu', compact('menus'));
    }

    // Show the form to edit a menu item
    public function showMenu($id)
    {
        $menu = Menu_table::findOrFail($id);
        return view('admin.edit_menu', compact('menu'));
    }

    // Update an existing menu item
    public function updateMenu(Request $req, $id)
    {
        $menu = Menu_table::findOrFail($id);
        $menu->food_name = $req->name;
        $menu->discription = $req->description;
        $menu->price = $req->price;

        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $menu->image = $filename;
        }

        $menu->save();
        return redirect()->route('admin.fetch_menu');
    }

    // Delete a menu item
    public function deleteMenu($id)
    {
        $menu = Menu_table::findOrFail($id);
        $menu->delete();
        return redirect()->route('admin.fetch_menu');
    }
}
