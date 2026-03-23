<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Http, Log, Auth, Validator};
use Razorpay\Api\Api;
use Exception;

class RechargeController extends Controller {
    public function index() { return view('dashboard'); }

    public function processRecharge(Request $request) {
        $request->validate(['mobile' => 'required|digits:10', 'amount' => 'required|numeric', 'operator' => 'required']);
        try {
            $response = Http::withoutVerifying()->get(env('SUPAY_BASE_URL'), [
                'member_id' => env('SUPAY_MEMBER_ID'),
                'api_password' => env('SUPAY_API_PASSWORD'),
                'api_pin' => env('SUPAY_API_PIN'),
                'number' => $request->mobile,
                'amount' => $request->amount,
                'operator' => $request->operator
            ]);
            Log::info("Recharge Success", ['user' => Auth::user()->username, 'res' => $response->body()]);
            return response()->json(['status' => 'success', 'data' => $response->body()]);
        } catch (Exception $e) {
            Log::error("Recharge Failed: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Server Error'], 500);
        }
    }

    public function createOrder(Request $request) {
        $key = env('RAZORPAY_KEY');
        $secret = env('RAZORPAY_SECRET');
        try {
            $api = new Api($key, $secret);
            $order = $api->order->create(['amount' => $request->amount * 100, 'currency' => 'INR', 'receipt' => 'rcpt_1']);
            return response()->json($order->toArray());
        } catch (Exception $e) {
            Log::error("Razorpay Order Error: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Payment Gateway Error'], 500);
        }
    }

    public function verifyPayment(Request $request) {
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $api->utility->verifyPaymentSignature([
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ]);
            return response()->json(['status' => 'success', 'message' => 'Payment Verified!']);
        } catch (Exception $e) {
            Log::error("Razorpay Signature Error: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Invalid Signature'], 400);
        }
    }
}