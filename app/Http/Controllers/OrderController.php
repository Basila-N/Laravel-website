<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Booking;

class OrderController extends Controller
{
     // Admin Dashboard: Show All Orders and Bookings
    public function dashboard()
    {
        $orders = Order::all();
        $bookings = Booking::all();
        return view('admin.ordbook', compact('orders', 'bookings'));
    }

   // Update Order Status
    public function updateOrderStatus(Request $request)
    {
        \Log::info("Order status update triggered", $request->all());

        $request->validate([
            'order_id' => 'required|exists:orders,order_id',
            'status' => 'required|string',
        ]);

        $order = Order::find($request->order_id);

        // Define the status that cannot be changed once set
        $lockedStatus = 'completed'; // Or 'cancelled' or any status you want to lock

        if ($order) {
            // Check if the order status is already in a locked state
            if ($order->order_status === $lockedStatus) {
                return redirect()->route('admin.dashboard')->with('error', 'This order status is locked and cannot be changed.');
            }

            // Update the status if it’s not locked
            $order->order_status = $request->status;
            $order->save();

            return redirect()->route('admin.dashboard')->with('success', 'Order status updated successfully.');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Order not found.');
        }
    }

    // Update Booking Status
    public function updateBookingStatus(Request $request)
    {
        \Log::info("Booking status update triggered", $request->all());

        $request->validate([
            'booking_id' => 'required|exists:bookings,booking_id',
            'status' => 'required|string',
        ]);

        $booking = Booking::find($request->booking_id);

        // Define the status that cannot be changed once set
        $lockedStatus = 'confirmed'; // Or any other status you want to lock

        if ($booking) {
            // Check if the booking status is already in a locked state
            if ($booking->book_status === $lockedStatus) {
                return redirect()->route('admin.dashboard')->with('error', 'This booking status is locked and cannot be changed.');
            }

            // Update the status if it’s not locked
            $booking->book_status = $request->status;
            $booking->save();

            return redirect()->route('admin.dashboard')->with('success', 'Booking status updated successfully.');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Booking not found.');
        }
    }

    public function destroy($order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Order deleted successfully.');
    }

    public function destroyed($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
        $booking->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Booking deleted successfully.');
    }
}
