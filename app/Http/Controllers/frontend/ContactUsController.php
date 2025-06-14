<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use App\Mail\ContactMail;
use App\Models\PartnerForm;
use App\Models\CustomerForm;
use Illuminate\Http\Request;
use App\Mail\PartnerFormMail;
use App\Mail\CustomerFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function customerFormSubmit(Request $request)
    {
        // dd($request);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3|max:30',
                'phone_no' => 'required|string|digits:10',
                'email' => 'required|string|email:rfc,dns|min:5|max:40',
                'what_brings_you_here' => 'required|in:leasing services,fleet management services,charging and parking subscription,
                fleet management software subscription,fleet analytics',
                'i_am_a' => 'required|in:cargo delivery fleet operator,employee transportation operator,cab aggregator,cargo aggregator,others',
                'company_name' => 'required|min:3|max:150',
                'job_title' => 'required|in:promoter,partner,founder,cfo,business head,others',
                'vehicle_category' => 'required|in:commercial car,3W cargo,3W passenger,4W cargo,others',
                'requirement_date' => 'required|date',
                'quantity_of_vehicles' => 'required|numeric',
                'city' => 'required|min:3|max:50',
                'your_requirements' => 'required|min:3|max:150',
                'how_did_you_get_to_know_about_driveo' => 'required|in:car dealer outlet,email from driveo,driveo representative,magazine / newspaper article,linkedin,online / google search,others',
                'recaptcha_response' => 'required',
            ],
            [],
            [
                'recaptcha_response' => 'google recaptcha'
            ]
        );
        // dd($response);
        if ($validator->fails()) {
            session()->flash('customer-form-error', true);
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify' . '?secret=' . config('app.google_captcha_secret_key') . '&response=' . $request->recaptcha_response)->json();
        if ($response && $response['success'] == true && $response['score'] >= 0.5 && $response['action'] == 'submit') {
            $data =  (object) array();
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->phone_no = $request->get('phone_no');
            $data->what_brings_you_here = $request->get('what_brings_you_here');
            $data->i_am_a = $request->get('i_am_a');
            $data->company_name = $request->get('company_name');
            $data->job_title = $request->get('job_title');
            $data->vehicle_category = $request->get('vehicle_category');
            $data->requirement_date = $request->get('requirement_date');
            $data->quantity_of_vehicles = $request->get('quantity_of_vehicles');
            $data->city = $request->get('city');
            $data->your_requirements = $request->get('your_requirements');
            $data->how_did_you_get_to_know_about_driveo = $request->get('how_did_you_get_to_know_about_driveo');

            $contact =  new CustomerForm();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_no = $request->phone_no;
            $contact->what_brings_you_here = $request->what_brings_you_here;
            $contact->i_am_a = $request->i_am_a;
            $contact->company_name = $request->company_name;
            $contact->job_title = $request->job_title;
            $contact->vehicle_category = $request->vehicle_category;
            $contact->requirement_date = $request->requirement_date;
            $contact->quantity_of_vehicles = $request->quantity_of_vehicles;
            $contact->city = $request->city;
            $contact->your_requirements = $request->your_requirements;
            $contact->how_did_you_get_to_know_about_driveo = $request->how_did_you_get_to_know_about_driveo;
            $contact->ip_address = $_SERVER['REMOTE_ADDR'];
            if ($contact->save()) {
                Mail::to(config('app.mail_to_address'))->send(new CustomerFormMail($data));
                return redirect()->back()->with([
                    "message" => "Message Sent Successfully",
                    "alert-type" => "success"
                ]);
            }
            return redirect()->back()->with([
                "message" => "Something Went Wrong",
                "alert-type" => "error"
            ]);
        } else {
            session()->flash('customer-form-error', true);
            return redirect(url()->previous() . "#contact")->with(['alert-type' => 'error', 'message' => 'Google Captcha is Invalid'])->withInput();
        }
    }

    public function partnerFormSubmit(Request $request)
    {
        // dd($request);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3|max:30',
                'phone_no' => 'required|string|digits:10',
                'email' => 'required|string|email:rfc,dns|min:5|max:40',
                'what_brings_you_here' => 'required|in:charging,fleet management,iot,parking,vehicle manufacturer,',
                'i_am_a' => 'required|in:charging aggregator/operator,iot device/software provider,parking space provider,workshop,vehicle manufacturer',
                'company_name' => 'required|min:3|max:150',
                'job_title' => 'required|in:promoter,partner,founder,cfo,business head,others',
                'vehicle_category' => 'required|in:commercial car,3W cargo,3W passenger,4W cargo,others',
                'city' => 'required|min:3|max:50',
                'your_services' => 'required|min:3|max:150',
                'how_did_you_get_to_know_about_driveo' => 'required|in:car dealer outlet,email from driveo,driveo representative,magazine / newspaper article,linkedin,online / google search,others',
                'recaptcha_response' => 'required',
            ],
            [],
            [
                'recaptcha_response' => 'google recaptcha'
            ]
        );

        if ($validator->fails()) {
            session()->flash('partner-from-error', true);
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $response = Http::get('https://www.google.com/recaptcha/api/siteverify' . '?secret=' . config('app.google_captcha_secret_key') . '&response=' . $request->recaptcha_response)->json();
        if ($response && $response['success'] == true && $response['score'] >= 0.5 && $response['action'] == 'submit') {
            $data =  (object) array();
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->phone_no = $request->get('phone_no');
            $data->what_brings_you_here = $request->get('what_brings_you_here');
            $data->i_am_a = $request->get('i_am_a');
            $data->company_name = $request->get('company_name');
            $data->job_title = $request->get('job_title');
            $data->vehicle_category = $request->get('vehicle_category');
            $data->city = $request->get('city');
            $data->your_services = $request->get('your_services');
            $data->how_did_you_get_to_know_about_driveo = $request->get('how_did_you_get_to_know_about_driveo');

            $contact =  new PartnerForm();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_no = $request->phone_no;
            $contact->what_brings_you_here = $request->what_brings_you_here;
            $contact->i_am_a = $request->i_am_a;
            $contact->company_name = $request->company_name;
            $contact->job_title = $request->job_title;
            $contact->vehicle_category = $request->vehicle_category;
            $contact->city = $request->city;
            $contact->your_services = $request->your_services;
            $contact->how_did_you_get_to_know_about_driveo = $request->how_did_you_get_to_know_about_driveo;
            $contact->ip_address = $_SERVER['REMOTE_ADDR'];
            if ($contact->save()) {
                Mail::to(config('app.mail_to_address'))->send(new PartnerFormMail($data));
                return redirect()->back()->with([
                    "message" => "Message Sent Successfully",
                    "alert-type" => "success"
                ]);
            }
            return redirect()->back()->with([
                "message" => "Something Went Wrong",
                "alert-type" => "error"
            ]);
        } else {
            session()->flash('partner-from-error', true);
            return redirect(url()->previous() . "#contact")->with(['alert-type' => 'error', 'message' => 'Google Captcha is Invalid'])->withInput();
        }
    }
}
