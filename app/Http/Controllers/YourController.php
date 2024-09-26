<?php
namespace App\Http\Controllers;

use App\Events\tester;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function triggerEvent(Request $request)
    {
        // Prepare the data to send with the event
        $data = ['message' => 'Hello, world!'];
        
        // Trigger the event
        event(new tester($data));

        return response()->json(['status' => 'Event triggered!']);
    }
}