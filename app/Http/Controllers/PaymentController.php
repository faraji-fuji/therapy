<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate user input
        $validated = $request->validate([
            'time' => 'required',
            'date' => 'required|date',
            'phoneNumber' => 'required|numeric|digits:12',
        ]);

        // daraja authorization api
        // create a request to fetch access token and save the response
        $response = Http::withHeaders([
            "authorization" => "Basic M1BUeUtlbENhZTBwOTg0OWVteUFuQ053ZVhUZm1INks6VjRQQWdRbVR6ejFGZFdQdg==",
        ])->get("https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials");

        // create a response object and save access token
        $accessToken = $response->object()->access_token;

        // daraja Lipa na mpesa api
        // create and format timestamp
        $timeStamp = Carbon::now();
        $timeStamp = str_replace(":", "", $timeStamp);
        $timeStamp = str_replace("-", "", $timeStamp);
        $timeStamp = str_replace(" ", "", $timeStamp);

        // geneate password
        $BusinessShortCode = 174379;
        $passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $password = base64_encode($BusinessShortCode . $passkey . $timeStamp);

        //fetch phone number
        $phoneNumber = $request->input('phoneNumber');

        // create request and save response
        $response = Http::withHeaders([
            "Content-Type" => "application/json",
            "authorization" => "Bearer $accessToken",
        ])->post("https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest", [
            "BusinessShortCode" => 174379,
            "Password" => "$password",
            "Timestamp" => "$timeStamp",
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => 1,
            "PartyA" => $phoneNumber,
            "PartyB" => 174379,
            "PhoneNumber" => $phoneNumber,
            "CallBackURL" => "https://polite-moose-tan-154-159-237-115.loca.lt/result",
            "AccountReference" => "Therapy",
            "TransactionDesc" => "Payment of Therapy Services"
        ]);

        // proceed to store appointment of response code is okay
        if (isset($response->object()->ResponseCode)) {
            // create a response object
            $apiResponse = $response->object();

            // store oject properties in variables
            $merchantRequestID = $apiResponse->MerchantRequestID;
            $checkoutRequestID = $apiResponse->CheckoutRequestID;
            $responseCode = $apiResponse->ResponseCode;
            $responseDescription = $apiResponse->ResponseDescription;
            $customerMessage = $apiResponse->CustomerMessage;

            // store api response in database
            Payment::create([
                'user_id' => $request->user()->id,
                'merchantRequestID' => $merchantRequestID,
                'checkoutRequestID' => $checkoutRequestID,
                'responseCode' => $responseCode,
                'responseDescription' => $responseDescription,
                'customerMessage' => $customerMessage,
            ]);

            $appointmentController = new AppointmentController;
            return $appointmentController->store($request);

            // return redirect()->back()->with('statusSuccess', 'Payment Initialized succesfuly. Enter your pin to confirm. Your session will be booked after the payment is confirmed');
        } else {
            return redirect()->back()->with('statusFail', 'Failed to initialize payment.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
