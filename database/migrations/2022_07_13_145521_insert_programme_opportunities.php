<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    private   $opportunities = array(
        [
            'programme' =>  '1',
            'opportunity' => array(   
                "Healthcare",
                "Disease diagnostic",
                "Genetic Engineering",
                "Mari-culture/Aquaculture",
                "Food and Nutrition",
                "Pharmaceutical Biotechnology",
                "Desert Biotechnology",
                "Industrial Biotechnology",
                "Cosmetics R and D",
                "Bioinformatics",
                "Nano Biotech",
                "Textile Industry",
                "Agriculture and Environment biotechnology"
            )
        ], 
        [
            'programme' =>  '2',
            'opportunity' => array(   
                "Research and development (life sciences, pharmaceutical and biomedical research)",
                "Clinical biochemistry",
               " Health professions (dentistry, medicine, optometry, veterinary medicine, pharmacy, etc.)",
                "Laboratory management",
                "Biofuels",
                "Patent law",
                "Quality control in the food industry",
                "Science teacher",
                "Science communication",
                "Sales representative for life science products and instruments",
                "Bioinformatics"
            )
        ], 
        [
            'programme' =>  '3',
            'opportunity' => array(   
                "Medicinal chemistry",
                "Nuclear Chemistry",
                "A chemist undertaking research and development",
                "Environmental advisory",
                "Scientific institutes and universities",
                "Petroleum and natural gas production companies",
                "Refinery laboratories",
                "Biofuel companies",
                "Petrochemical industries"
            )
        ], 
        [
            'programme' =>  '4',
            'opportunity' => array(   
                "Security Engineer.",
                "Computer Network Support Specialist",
                "Information Security Analyst",
                "Computer Systems Analyst",
                "Information Security Specialist",
                "Security Architect",
                "Security Administrator",
                "Security Software Developer",
                "Cryptographer.",
                "CryptoAnalyst.",
                "Security Consultant."
            )
        ], 
        [
            'programme' =>  '5',
            'opportunity' => array(   

                "Software developer",
                "Systems analyst",
                "Web Developer",
                "Web Designer",
                "Data Science",
                "Site Reliability Engineer",
                "Database Administrator",
                "Applications Developer",
                "Cyber Security Analyst",
                "Information Systems Manager",
                "IT consultant"
            )
        ], 
        [
            'programme' =>  '6',
            'opportunity' => array(   

                "Actuarial analyst",
                "Actuary",
                "Astronomer",
                "Data scientist",
                "Investment analyst",
                "Research Analysts",
                "Research scientist (maths)",
                "Scientific programmer",
                "Secondary school teacher",
                "Software engineer",
                "Sound engineer",
                "Statistician",
                "Systems Engineers Operations",
                "Technical consultant"

            )
        ], 
        [
            'programme' =>  '7',
            'opportunity' => array(   

                "Academic researcher",
                "Acoustic Consultant",
                "Astronomer",
                "Clinical scientist, Medical Physics",
                "Geophysicist",
                "Higher education lecturer",
                "Metallurgist",
                "Nanotechnologist",
                "Radiation Protection Practitioner",
                "Research Scientist (Physical Sciences)",
                "Secondary School Teacher",
                "Sound Engineer",
                "Technical Author"

            )
        ], 
        [
            'programme' =>  '8',
            'opportunity' => array(   
                "Personal Financial Advisor",
                "Financial Manager",
                "Management Consultant",
                "Controller",
                "Senior Tax Accountant",
                "Financial Analyst",
                "Accounting Manager",
                "Budget Analyst",
                "Credit Analyst",
                "Accountant",
                "Auditor",
                "Treasury Analyst"
            )
        ], 
        [
            'programme' =>  '9',
            'opportunity' => array(   

                "Islamic teacher.",
                "Islamic lecturer in the university.",
                "Work with embassies.",
                "Work with broadcasting companies e.g VOA, etc",
                "Jobs in Educational and research institutes.",
                "Civil Services.",
                "Jobs such as Religious officers, Khatib's etc. in the Armed forces.",
                "Religious scholar.",
                "Islamic researcher.",
                "Islamic banker.",
                "An employee of foreign Islamic centres.",
                "Mystic writer.",
                "Islamic columnists."
            )
        ], 
        [
            'programme' =>  '10',
            'opportunity' => array(   
                "Legal assistant",
                "Political risk analyst",
                "Corporate consultant",
                "Contract consultant",
                "Foreign correspondent",
                "Reporter",
                "Translator",
                "Interpreter"
            )
        ], 
        [
            'programme' =>  '11',
            'opportunity' => array(   
                "Financial Analyst",
                "Finance manager",
                "Chief Executive Officer",
                "Sales manager"
            )
        ], 
        [
            'programme' =>  '12',
            'opportunity' => array(   
                "Financial Analyst",
                "Finance manager",
                "Chief Executive Officer",
                "Sales manager"
            )
        ], 
        [
            'programme' =>  '13',
            'opportunity' => array(   
                "Economics",
                "Financial Risk Analyst",
                "Financial planner",
                "Economic Researcher",
                "Investment Analyst",
                "Financial consultant",
                "Actuary",
                "Public sector roles"
            )
        ], 
        [
            'programme' =>  '14',
            'opportunity' => array(   

                "Campaign Manager",
                "Community Mediator",
                "Community Relations Specialist",
                "Conflict Manager",
                "Consultant",
                "Consumer Advocate",
                "Diplomat/Ambassador",
                "Dispute Resolution Specialist",
                "Lobbyist",
                "Mediation Program Director",
                "Negotiator",
                "Non-profit Director",
                "Ombudsperson"

            )
        ], 
        [
            'programme' =>  '15',
            'opportunity' => array(   
                "Researcher",
                "Human resource & Trauma Specialist",
                "Conflict Resolution Expert",
                "Consultant",
                "Intelligence Analyst",
                "Diplomat or Field officer",
                "Policy Officer or Legal Advocate"
            )
        ], 
        [
            'programme' =>  '16',
            'opportunity' => array(   

                "Community development worker",
                "Detective",
                "Police officer",
                "Prison officer",
                "Probation officer",
                "Social worker",
                "Youth worker",
                "Adult guidance worker",
                "Charity officer",
                "Data scientist",
                "Housing manager/officer",
                "Local government officer",
                "Paralegal",
                "Social researcher"

            )
        ], 
        [
            'programme' =>  '17',
            'opportunity' => array(   

                "Medical Laboratory Technician",
                "Physical therapist assistant",
                "Personal trainer",
                "Massage therapist",
                "MRI Technologist",
                "Medical technologist",
                "Biomedical engineer",
                "Science teacher",
                "Research scientist",
                "Pharmacologist"

            )
        ], 
        [
            'programme' =>  '18',
            'opportunity' => array(   
                "Psychologist",
                "Psychotherapist",
                "Counsellor",
                "Educational Psychologist",
                "Human resource manager",
                "Research roles",
                "Teacher/Lecturer"
            )
        ], 
        [
            'programme' =>  '19',
            'opportunity' => array(   

                "Nurse Practitioner",
                "Nurse Researcher",
                "Certified Nurse Midwife",
                "Nurse Educator",
                "Pediatric Endocrinology Nurse",
                "Clinical Nurse Specialist",
                "Specialised Dialysis Nurse",
                "Certified Legal Nurse Consultant"

            )
        ], 
        [
            'programme' =>  '20',
            'opportunity' => array(   
                "Epidemiology",
                "Environmental health",
                "Biostatistics and informatics",
                "Public Health Education",
                "Global infectious disease Analyst",
                "Public health Physician",
                "Vaccine Researcher",
                "Disease Ecologist",
                "Social and Behavioural Scientist"
            )
        ],  
        [
            'programme' =>  '21',
            'opportunity' => array(   
                "Blood Bank Technologist",
                "Clinical Chemistry Technologist",
                "Cytotechnologist",
                "EEG Technician/ Technologist",
                "EMT",
                "Histology Technologist",
                "Immunology Technologist",
                "Laboratory Administrator",
                "Medical Lab Manager",
                "Medical Lab Scientist",
                "Medical Technologist",
                "Microbiology Technologist",
                "Phlebotomist",
                "Radiologic Technicians",
                "Radiologic Technologist",
                "Regulatory Affairs",
                "Research Assistant"

            )
        ], 


    );

    public function up()
    {
        foreach ($this->opportunities as $opportunity) {
            
            for ($x=0; $x < count($opportunity['opportunity']); $x++) { 
                
                DB::table('programme_opportunities')->insert(
                    array(
                        'programme_id' => $opportunity['programme'],
                        'opportunity' => $opportunity['opportunity'][$x],
                    )
                );
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
