<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Faculty;
use Livewire\Component;
use App\Mail\ContactMail;
use App\Models\Admission;
use App\Models\Department;
use App\Mail\AdmissionMail;
use Illuminate\Support\Facades\Mail;

class Admissions extends Component
{
    public $name, $middle_name, $last_name, $gender, $dob, $email, $phone, $guardian_name, $guardian_phone, $guardian_email, $address, $nationality, $state, $faculty, $department, $course, $jamb_regno, $jamb_score, $status, $type;
    public $states = [
        "Abia",
        "Adamawa",
        "Anambra",
        "Akwa Ibom",
        "Bauchi",
        "Bayelsa",
        "Benue",
        "Borno",
        "Cross River",
        "Delta",
        "Ebonyi",
        "Enugu",
        "Edo",
        "Ekiti",
        "FCT",
        "Gombe",
        "Imo",
        "Jigawa",
        "Kaduna",
        "Katsina",
        "Kebbi",
        "Kogi",
        "Kwara",
        "Nasarawa",
        "Ogun",
        "Ondo",
        "Osun",
        "Oyo",
        "Plateau",
        "Rivers",
        "Sokoto",
        "Taraba",
        "Yobe",
        "Zamfara"
    ];
    public $countries = [
        "Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bhutan",
        "Bolivia",
        "Bosnia and Herzegovina",
        "Botswana",
        "Brazil",
        "Brunei",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cabo Verde",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Central African Republic (CAR)",
        "Chad",
        "Chile", "China",
        "Colombia",
        "Comoros",
        "Congo, Democratic Republic of the Congo",
        "Republic of the Costa Rica",
        "Cote d'Ivoire",
        "Croatia",
        "Cuba",
        "Cyprus",
        "Czechia",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Eritrea",
        "Estonia",
        "Eswatini",
        "Ethiopia",
        "Fiji",
        "Finland",
        "France",
        "Gabon",
        "Gambia",
        "Georgia",
        "Germany",
        "Ghana",
        "Greece",
        "Grenada",
        "Guatemala",
        "Guinea",
        "Guinea-Bissau",
        "Guyana",
        "Haiti",
        "Honduras",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran",
        "Iraq",
        "Ireland",
        "Israel",
        "Italy",
        "Jamaica",
        "Japan",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kiribati",
        "Kosovo",
        "Kuwait",
        "Kyrgyzstan",
        "Laos",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Namibia",
        "Nauru",
        "Nepal",
        "Netherlands",
        "New Zealand",
        "Nicaragua",
        "Niger",
        "Nigeria",
        "North Korea",
        "North Macedonia",
        "Norway",
        "Oman",
        "Pakistan",
        "Palau",
        "Palestine",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines",
        "Poland",
        "Portugal",
        "Qatar",
        "Romania",
        "Russia",
        "Rwanda",
        "Saint Kitts and Nevis",
        "Saint Lucia",
        "Saint Vincent and the Grenadines",
        "Samoa",
        "San Marino",
        "Sao Tome and Principe",
        "Saudi Arabia",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Slovakia",
        "Slovenia",
        "Solomon Islands",
        "Somalia",
        "South Africa",
        "South Korea",
        "South Sudan",
        "Spain",
        "Sri Lanka",
        "Sudan",
        "Suriname",
        "Sweden",
        "Switzerland",
        "Syria",
        "Taiwan",
        "Tajikistan",
        "Tanzania",
        "Thailand",
        "Timor-Leste",
        "Togo",
        "Tonga",
        "Trinidad and Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Tuvalu",
        "Uganda",
        "Ukraine",
        "United Arab Emirates (UAE)",
        "United Kingdom (UK)",
        "United States of America (USA)",
        "Uruguay",
        "Uzbekistan",
        "Vanuatu",
        "Vatican City (Holy See)",
        "Venezuela",
        "Vietnam",
        "Yemen",
        "Zambia",
        "Zimbabwe"

    ];


    protected $messages = [];

    public function refreshInputs()
    {
        $this->name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->guardian_name = '';
        $this->gender = '';
        $this->dob = '';
        $this->email = '';
        $this->guardian_email = '';
        $this->phone = '';
        $this->guardian_phone = '';
        $this->address = '';
        $this->nationality = '';
        $this->state = '';
        $this->faculty = '';
        $this->department = '';
        $this->course = '';
        $this->type = '';
        $this->jamb_regno = '';
        $this->jamb_score = '';
    }


    function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'guardian_name' => 'required',
            'gender' => 'required',
            'dob' => 'required|before_or_equal:today',
            'email' => 'required|email',
            'guardian_email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'guardian_phone' => 'required|numeric|digits:10',
            'address' => 'required',
            'nationality' => 'required',
            'state' => 'required',
            'faculty' => 'required',
            'department' => 'required',
            'course' => 'required',
            'type' => 'required',
            'jamb_regno' => 'required',
            'jamb_score' => 'nullable|integer|required',
        ]);
        $data['status'] = 'Processing';

        $done = Admission::create($data);
        if ($done) {
            // Mail::to('bukarusman2013@gmail.com')->send(new AdmissionMail($done));
            // Mail::to('registrar@aum.edu.ng')->cc('admissions@aum.edu.ng')->bcc('bukarusman2013@gmail.com')->send(new AdmissionMail($done));
            $this->refreshInputs();
            session()->flash('success', 'Thank you. Your application has been successfully submitted, we will contact you shortly via the email you provided.');
        }
    }

    public function render()
    {
        $faculty = Faculty::where('college', $this->faculty)->get();
        $faculties = Faculty::with('departments')->get();
        $departments = Department::all();
        $courses = Course::all();
        $states = $this->states;
        $countries = $this->countries;
        return view('livewire.admissions', compact(['states', 'faculties', 'departments', 'courses', 'countries']));
    }
}