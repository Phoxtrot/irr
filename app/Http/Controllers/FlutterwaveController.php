<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize(Request $request, Student $student)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'language' => 'required',
            'number' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'quran_level' => 'required',
            'class_days' => 'required',
            'nok_name' => 'required',
            'nok_number' => 'required',
            'nok_email' => 'required',
            'nok_relationship' => 'required',
            'email' => ['required', 'email','unique:students']
        ]);
        $request->session()->put('email',$request->email);
        $student->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'language' => $request->language,
            'number' => $request->number,
            'email' => $request->email,
            'dob' => $request->dob,
            'country' => $request->country,
            'quran_level' => $request->quran_level,
            'preffered_days' => $request->class_days,
            'nok_name' => $request->nok_name,
            'nok_number' => $request->nok_number,
            'nok_email' => $request->nok_email,
            'nok_relationship' => $request->nok_relationship,
        ]);
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => 5000,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => request()->email,
                "phone_number" => request()->number,
                "name" => request()->lastname,
                "firstname" => request()->firstname
            ],

            "customizations" => [
                "title" => 'Ibadur-Rahman Institute (IR Institute)',
                "description" => "Start Your Journey with the Glorious Quran this Ramadan"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return $payment;
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback(Request $request, Student $student)
    {
        $email = $request->session()->get('email');
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {

        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        $student = Student::where('email',$email)->first();
        $student->paid = '1';

        return redirect()->route('welcome')->with('status', 'Payment Succesful. Please check your mail for transaction details!' );

        }
        elseif ($status ==  'cancelled'){
            return redirect()->route('welcome')->with('status', 'Payment was Cancelled. Please try again');
        }
        else{
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
