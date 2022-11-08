<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentResult;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        // validate request

        // dd($request->input('Body.stkCallback.re'))

        if ($request->input('Body.stkCallback.ResultCode') == 0) {
            // fetch result values from the body object 
            $merchantRequestID = $request->input('Body.stkCallback.MerchantRequestID');
            $checkoutRequestID = $request->input('Body.stkCallback.CheckoutRequestID');
            $resultCode = $request->input('Body.stkCallback.ResultCode');
            $resultDescription = $request->input('Body.stkCallback.ResultDesc');
            $amount = $request->input('Body.stkCallback.CallbackMetadata.Item.0.Value');
            $mpesaReceiptNumber = $request->input('Body.stkCallback.CallbackMetadata.Item.1.Value');
            $transactionDate = $request->input('Body.stkCallback.CallbackMetadata.Item.2.Value');
            $phoneNumber = $request->input('Body.stkCallback.CallbackMetadata.Item.3.Value');

            // find user id associated with merchant and request IDs
            $res = DB::table('payments')
                ->select('user_id')
                ->where('merchantRequestID', $merchantRequestID)
                ->where('checkoutRequestID', $checkoutRequestID)
                ->get();

            $user_id = $res[0]->user_id;

            if ($user_id) {
                // save in database is user_id evaluates to true
                PaymentResult::create([
                    'user_id' => $user_id,
                    'merchantRequestID' => $merchantRequestID,
                    'checkoutRequestID' => $checkoutRequestID,
                    'resultCode' => $resultCode,
                    'resultDescription' => $resultDescription,
                    'amount' => $amount,
                    'mpesaReceiptNumber' => $mpesaReceiptNumber,
                    'transactionDate' => $transactionDate,
                    'phoneNumber' => $phoneNumber,
                ]);
            } else {
                return;
            }

            // create online event
            // retrieve event properties from the database
            $res = DB::table('appointments')
                ->where('user_id', $user_id)
                ->get();

            $localEvent = $res[0];

            if ($localEvent) {
                // create event object
                $event = new Event;

                // set event properties
                $event->name = $localEvent->name;
                $event->description = $localEvent->description;
                $event->startDateTime = Carbon::createFromTimeString($localEvent->startDateTime);
                $event->endDateTime = Carbon::createFromTimeString($localEvent->endDateTime);

                // save event online
                $event->save();
            } else {
                return;
            }
        } else {
            // get merchant and checkout request IDs from the api request
            $merchantRequestID = $request->input('Body.stkCallback.MerchantRequestID');
            $checkoutRequestID = $request->input('Body.stkCallback.CheckoutRequestID');

            // find user id associated with merchant and request IDs
            $res = DB::table('payments')
                ->select('user_id')
                ->where('merchantRequestID', $merchantRequestID)
                ->where('checkoutRequestID', $checkoutRequestID)
                ->get();
            $user_id = $res[0]->user_id;

            if ($user_id) {
                // delete local event from appointments table
                DB::table('appointments')
                    ->where('user_id', $user_id)
                    ->delete();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentResult  $paymentResult
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentResult $paymentResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentResult  $paymentResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentResult $paymentResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentResult  $paymentResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentResult $paymentResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentResult  $paymentResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentResult $paymentResult)
    {
        //
    }
}
