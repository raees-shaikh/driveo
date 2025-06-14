@component('mail::message')
    - **Details**:
    - **Full Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Phone no.**: {{ $data->phone_no }}
    - **What Brings You Here**: {{ $data->what_brings_you_here }}
    - **I Am A**: {{ $data->i_am_a }}
    - **Company Name**: {{ $data->company_name }}
    - **Job Title**: {{ $data->job_title }}
    - **Vehicle Category**: {{ $data->vehicle_category }}
    - **City**: {{ $data->city }}
    - **Your Services**: {{ $data->your_services }}
    - **How Did You Get To Know About Driveo**: {{ $data->how_did_you_get_to_know_about_driveo }}
@endcomponent
