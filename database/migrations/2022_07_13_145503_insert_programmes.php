<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    private   $programmes = array(
        [
            'course_id' =>  '1',
            'overview' => 'Biotechnology is a compound word derived from two words: Biology and technology. As a programme of study, Biotechnology is the science of modifying organisms t improve their functions, usability and benefits for society.

                As a technology that is based on biology, it combines biological disciplines like genetics, molecular biology, biochemistry, embryology and cell biology with technical disciplines like chemical engineering, information technology, and robotics.

                A biotechnologist must be well versed in genetics, molecular biology, biochemistry, cell biology, microbiology, plant sciences, physiology, immunology, toxicology, and pharmacology. As a student, you will need to understand the principles of biological systems, and the interactions between them.

                Increasingly, biotechnology is also being applied to problems in the environment and energy. Genetically engineered micro-organisms and plants clean up toxic wastes from industrial production and oil spills. Genetic methods are used to identify particular populations of endangered species.

                The B.Sc Biotechnology programme at Al-Ansar University enables students to acquire both theoretical and practical knowledge and skills in the field of biotechnology and bioengineering, and acquire skills in the design of equipment, processes, product development and enhancement.',
            'opportunity_text' => 'Biotechnology has a significant role in every sector of scientific research, making it inevitable that the number of jobs on offer will be increasingly high in the future. It is an interesting and dynamically evolving area that continues to create ever-new job opportunities. As a graduate of Biotechnology, you can explore suitable opportunities in any of these areas among others.'
        ],[
            'course_id' =>  "2",
            'overview' => "As a biochemistry major at Al-Ansar University Students will gain an excellent education in cellular biology, molecular biology and organic chemistry with a focus on scientific discovery and hands-on learning through laboratory exercises.

You will understand how molecules function in cells, from DNA and RNA to proteins and lipids. You will also learn about the basic processes that govern life, including cell division, growth and death.

The study of biochemistry incorporates so many branches, from General Chemistry to Organics. There are so many areas within biochemistry - from physical chemistry and analytical chemistry to organic chemistry. Biochemistry is an extremely important subject because it helps us understand life.

Our B.Sc Biochemistry gives you an excellent grounding in the fundamentals of biology and chemistry, enabling you to pursue further studies towards a postgraduate degree at the master's level or PhD. You'll get hands-on experience working alongside scientists to translate discoveries made using our state-of-the-art research facilities into novel treatments for disease.",
            'opportunity_text' => "Here are some career opportunities open to candidates with a degree in Biochemistry" 
        ],[
            'course_id' =>  "3",
            'overview' => "The Petroleum Chemistry program of Al-Ansar University provides the opportunity for students to acquire knowledge and skills and consequently become professionals in Petroleum and Petrochemical fields.

We provide students with cutting-edge training that is focused on innovations, and modern concepts in the petroleum and petrochemical industries that will prepare them to work in multi-disciplinary teams. If you are prepared to learn, we give you the opportunity, enabling environment and facilities to help you grasp what it takes to make a difference in this field of study.

Graduates of this program will be qualified to have secured jobs in multi-national oil and gas companies, as well as in many chemical and related areas.",
            'opportunity_text' => "As a Chemists, you will have the opportunity to test your skills and expertise in many fields including:"
        ],[
            'course_id' =>  "4",
            'overview' => "21st-century Computer Science has undergone a series and rapid changes that allows you to be at the cutting edge of major technological advancement. A degree in Computer Science today is a great asset because the array of technological advancements in the industry directly translates to increased opportunities and a huge impact on society.

Experts in Computer Science are in great demand, and the scalability ratio is high. What you need is the right training that arms you with the brass tacks of Computer Science, delivers the unfair advantage, and set you up for a head-on start in the IT industry.

Through this programme, you will develop your ability to implement and manage cyber defences. Our robust syllabus for this programme will give you a concentrated perspective on the complex field of Cybersecurity. The programme is designed to provide students with skills to analyze and resolve security issues in networks and computer systems to secure an IT infrastructure, design, develop, test and evaluate secure software

a concentrated perspective into the complex field of Cybersecurity. It is designed to provide students with skills to analyze and resolve security issues in networks and computer systems to secure an IT infrastructure, design, develop, test, and evaluate secure software

You will consider technical approaches as well as commercial and human factors that affect how organizations respond to cyber-attacks. Developing these technical skills and knowledge will prepare you to successfully start your cybersecurity career",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "6",
            'overview' => "Software continues to be a core part of computer systems, It is the set of instructions or programs that tell a computer what to do. Without it, computers will lack meaningful contributions to the technological advancements that are associated with the 21st century. In recent years it has become a fundamental part of the services offered to people and organizations.

Software development as a programme of study, refers to the learning of a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software.

If you are passionate about software development with an interest in backend systems and solving complex problems then this programme is for you. In this programme, you'll learn about the concepts of programming languages such as Java or Python. You'll also get a taste of object-oriented programming using classes and inheritance. You'll discover more about server-side, client-side and mobile application development. You'll be taught about the important modules used while developing an app like networking. Finally, you'll learn the concept of secure coding techniques.

Your programming skills will grow as you work through this programme. You'll understand the methods that are used to design software. You'll use these techniques to create programs and solve real-world problems. You'll develop secure code by using best practices. You'll also learn discrete mathematics to help you solve problems efficiently",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "7",
            'overview' => "Industrial mathematics is a broad discipline that overlaps many fields of study. It includes subjects such as applied mathematics, statistics, economics, engineering, operations research, control theory, game theory, etc. Students who major in this subject usually choose a specific branch within the field (e.g., financial mathematics or optimization) depending upon what interests them most.

Mathematics is important in many fields including engineering, physics, biology, medicine, economics, business, finance, computer science, operations research and statistics. Mathematical knowledge helps us plan, simulate and control processes. Mathematical concepts and models are necessary to understand increasingly complex problems

In this programme, students learn how to apply their Mathematical Knowledge to solve theoretical and real-life problems equations and inequalities. They also understand why they need math as well as what math can do for them. Students work together to create businesses, invent new products, and become leaders in modern society",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "8",
            'overview' => "The program offers a broad study of most aspects of physics. Students will gain a solid foundation of basic science principles. They will also be prepared for advanced studies in many fields including engineering, medicine, biochemistry, materials science, computer science and other technological fields.

our undergraduate program in Physics and electronics offers students an opportunity to understand the fundamental principles of natural phenomena. Those who study physics get a chance to explore further in applied physics or astrophysics and other related areas such as electronic medicine, and computational physics.

Physics makes up the foundation of understanding the natural world. It uses mathematics and provides us with a comprehensive view of how things work. It deals with a variety of things from atomic particles to astronomical formations such as stars and galaxies, and other natural compounds.

Our ability to design new technologies based on the laws of physics also enables us to develop new ways of communicating. Physics is used not only to advance science but also to make people more comfortable in their daily lives.",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "9",
            'overview' => "The Accounting Science degree train students to become accountants. A graduate of the program will be qualified to manage the accounts and incomes of companies and individuals, by registering all income, expenses and profits, and risks.

The student will learn theoretical and specific concepts of accounting and develop proficiency in the administration of General Tax Management, Public Accounting, as well as Legislation

This unique, professionally-oriented programme has been designed to integrate the study of the theory and practice of accounting. Provides an overview of accounting principles and practices as well as management accounting issues such as financial reporting, performance measurement, budgeting, control systems, business planning and risk management.

At Al-Ansar university, we offer you a fully-rounded accounting degree which prepares you for a career in any suitable industry. You then have an opportunity to select from several optional units to suit your interests. ",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "10",
            'overview' => "The BSc in Islamic Studies aims to provide a thorough grounding in all aspects of Islamic studies, including both classical and modern aspects. Students will engage in research in at least two areas of Islamic studies - either Islamic law or ethics and/or comparative religion. All students will undertake an intensive core module in Arabic language and literature.

Our B.Sc programme in Islamic studies unveils the multidisciplinary view of all aspects of Islam. It focuses on the role of religion in society and culture, as well as its impact on politics and economics. Islamic Studies also address questions about the history of ideas and philosophy in Islam and the Islamic world

while programmes in Islamic law examine the religious laws of Islam, including jurisprudence, the Qur'an, Hadith, Fiqh, and Tafsir. History programmes focus on the political history of Muslims

The programme also deals extensively with information about the Arabic language, religion, political systems, social structure, culture, and other aspects of Islam. Students may also gain an insight into the evolution of the Islamic faith and the relationship between Islam and other religions.

As well as offering a broad and flexible syllabus, the programme provides opportunities for academic development through participation.",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "11",
            'overview' => "Arabic is spoken by over 300 million people worldwide, making it the third most widely spoken language. Its roots lie in the Middle East, North Africa and Central Asia. While there are many different dialects of Arabic, Modern Standard Arabic (MSA) is the official language of 22 countries, including Egypt, Algeria, Morocco, Iraq, Libya, Bahrain, Djibouti, Jordan, Kuwait, Lebanon, Oman, Palestine, Qatar, Saudi Arabia, Sudan, Syria, Tunisia, Yemen, United Arab Emirates and Egypt. MSA is also taught in schools across the globe.

Learning Arabic is an enriching experience because it exposes students not just to a rich culture and civilisation, but also to the multidimensional facets and complexities of the Arab/Islamic worlds.

This programme covers a wide range of topics including grammar, vocabulary, pronunciation, and literature. Students are taught how to read and write in classical style. There are many jobs available for those who master Arabic. Jobs include teaching Arabic, translation, interpreting, journalism and research.",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "12",
            'overview' => "At Al-Ansar University, we pride ourselves on providing practical experience and hands-on opportunities for students to gain real-world experience through internships and placements

Our goal is to prepare students for a career or further study in an ever-changing global economy. We help our students gain confidence and experience working independently through hands-on projects, internships, research opportunities and professional development programs.

Graduates from our B.Sc procurement programme should be prepared to manage procurement in the private sector, including small businesses and mid-sized organizations, while also managing procurement in the public sector toward improving service delivery, business performance, and profitability.

Graduates from the MBA program will also be equipped with skills to lead procurement in large corporations. The graduate will understand the role of procurement in strategic planning to achieve organizational objectives. He/she will also possess deep knowledge of the theory, practice, and tools of procurement management that apply across all relevant areas of the supply chain.

This programme is designed to give a comprehensive knowledge of entrepreneurship to all kinds of students. This programme will help the student achieve success in their chosen career path. It is meant to prepare students for a challenging career in the field of entrepreneurship. ",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "13",
            'overview' => "Our Bachelor of Science in Procurement programme aims to equip students with knowledge about the procurement practices and processes required to effectively manage the supply chain activities in local and global markets. Students will gain an insight into the role of procurement professionals within organisations as well as develop skills in the areas of market research, negotiation and contracting.
Students will also acquire experience working within organisational teams, managing budgets and project implementation schedules.

Our goal is to prepare students for a career or further study in an ever-changing global economy. We help our students gain confidence and experience working independently through hands-on projects, internships, research opportunities and professional development programs.

This programme will provide an opportunity to explore the concept of an Entrepreneurial Mindset. This mindset is needed not just in individuals but also in organizations. Students will learn about different aspects of entrepreneurship like Business Model, Market Analysis, Idea Generation, Validation, Customer Acquisition, Sales, Marketing, Operations, Finance, HR, Leadership, Communication etc. Students will get hands-on experience in working on real-time projects.

This will help them to gain exposure to various aspects of entrepreneurship. This programme will allow the students to connect with other entrepreneurs around the country and abroad. This will help them build a network and access the global market.

This programme is designed to give a comprehensive knowledge of entrepreneurship to all kinds of students. This programme will help the student achieve success in their chosen career path. It is meant to prepare students for a challenging career in the field of entrepreneurship. ",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "14",
            'overview' => "This programme focuses on understanding how economics works in everyday life. You will see how economic theory can inform your decision-making, while also helping you to understand why there are sometimes disagreements about what should be done to address problems.

Economics is an interdisciplinary subject looking at how societies function. Students will gain an overview of economic theory, analysis, concepts and tools. A big focus is on understanding how money works within the economy and exploring the forces affecting the global marketplace.

Students will also study specific areas such as banking, finance, taxation, macroeconomics, microeconomics, monetary policy, trade & investment, competition, supply chains and public sector management. These topics will then be applied using examples drawn from real-world scenarios.

When you study economics at Al-Ansar university you get an insight into how the world works. You also learn how to think differently about problems and solve them. By changing the way you think about things you can help to create a better world.

Economics is a great choice for students looking to get into a career that combines math and science. You'll learn about markets, consumer behaviour, international trade, and accounting. If you're interested in the field of entrepreneurship, economics offers a comprehensive view of the economy.",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "15",
            'overview' => "The Bachelor of Science in Mass communications produces graduates who mostly can meet global demands in all fields of media studies. Students are trained to become problem solvers, critical thinkers and independent professionals. They are also equipped with strong analytical and writing skills, along with presentation and marketing skills.

Graduates are trained to be proficient researchers, self-reliant and competitively competent in functional communication skills. As a student of Mass Communications at Al-Ansar university, you will learn the basics of the industry as well as have an option to take classes in other journalism fields including print, broadcast, visual communication, public relation, and advertising. ",
            'opportunity_text' => "Majoring in Mass communication will prepare you to pursue several different careers. The list below provides some of the career paths available to you, but they are not exhaustive. "
        ],[
            'course_id' =>  "16",
            'overview' => "At Al-Ansar University, We offer a range of courses in International Peace and Conflict management including Humanitarian Response, Gender Advocacy, Community Development, Peace Building, Governance, Media Reporting, and ADR. Our programs prepare our students for dream jobs in international peacemaking, conflict resolution, and international relations.

This programme will explore the intricate details surrounding issues of peace, governance and conflict as well as provide an insight into the various tools available to those trying to resolve them. These tools include negotiation, mediation, peacekeeping operations, peacemaking, truth commissions, elections, etc.

Through exploring these concepts and looking at how they are applied in different contexts we hope to provide learners with a deeper understanding of the subject.

The objective of this programme is;

    1 To equip practitioners in Peace and Conflict Management with theoretical and practical knowledge in advocacy and dispute resolution.
    2 To assess the operations of supra-national institutions and their role in sustainable developments.
    3 This programme seeks to develop students whose careers will allow them to advise policymakers, international organisations, national governments and global institutions on issues relating to peace, conflict and good governance.
    4 This programme will help you understand governance problems and their relationship with conflict in Africa and globally.
",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "17",
            'overview' => "Criminology is the science that studies criminal behaviour and the legal systems that attempt to prevent criminal acts. It also examines the individuals who commit crimes, what factors contribute to crime, and how society should respond when someone violates its laws.

The Bachelor of Science in Criminology and Security Studies at Al-Ansar university provides students with knowledge and skills in security management, loss prevention, crime prevention, computer forensics, cybercrime investigation, and other related fields. Students will also gain an understanding of the legal implications surrounding these issues.

Criminal behaviour is caused by various factors. Criminologists understand the ways criminals think about themselves, others and society. They also study what motivates people to commit crimes. Criminology includes both theory and practice.

You will study theories and research methodologies while working with law enforcement agencies and other professionals. Your job may involve developing tools for police departments, prosecutors and judges. You could also conduct scientific studies to help identify risk factors for future crime.

The curriculum focuses on developing skills and knowledge in a given discipline while at the same time providing a solid foundation for any future career path.",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "18",
            'overview' => "Anatomy is about the structure of living organisms, often in great detail. The anatomical study encompasses a broad spectrum of disciplines including biology, biochemistry, cell biology, genetics, neuroscience, pathology, physiology, pharmacology, radiology, surgery, toxicology, and veterinary science. Anatomy is also an important component of many medical specialities, especially those involving surgical procedures.

Our Bachelor of Science Degree program in Anatomy offers students an opportunity to earn a bachelor's degree while developing knowledge through hands-on experience in the dissection room and extensive research projects.

The course covers the basic concepts of human physiology, including gross anatomy. It will provide learners with an overview of the basic principles underlying organ function, the circulatory system, nervous system, musculoskeletal system, endocrine system, respiratory system, digestive system, urinary system and reproductive system.

Students will also gain insight into the mechanisms of disease and injury, especially through the lens of medical imaging and pathology. Emphasis will be placed upon the application of basic science to clinical practice and the formation of professional attitudes.

Students complete a series of core courses and electives that help them acquire critical thinking skills, prepare them for future careers, and enhance their academic achievement. Students also engage in research projects that allow them to explore topics related to anatomy and physiology, including clinical practice, health policy, epidemiology, forensic science, and public health.

Graduates in anatomy can pursue careers in biomedical research; Forensic Anthropology; Embalming and Mortuary Sciences; Histopathology and laboratories Pathology",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "19",
            'overview' => "The study of fundamental physiological principles is essential to medicine. Understanding them will enable you to effectively diagnose illnesses and other possible mal-functionalities in the body.

In this programme, you will study how cells communicate using chemical or electrical signals. We also investigate how cells move around within our body during development and repair processes.

Our B.Sc in Human Physiology prepares you for a successful career in medicine, whether you want to pursue a residency at a hospital or become a doctor on your own. You'll have a great foundation for success in anatomy and physiology courses and will graduate with a solid background in general science.

Our B.Sc in Human Physiology Premed program includes introductory courses in anatomy and physiology, physics, chemistry, microbiology, organic chemistry, mathematics, statistics, and English. Students then choose electives from our list of alternative courses

In addition to getting a broad science and healthcare background, you’re also going to get an opportunity to examine specific functions of the human anatomy through the lens of research and clinical practice. You will gain hands-on experience working with diverse professionals in the medical field. ",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "20",
            'overview' => "Whether you're just starting out or looking to advance your nursing career, our accredited Bachelor of Nursing Science degree program will help you become an expert registered nurse — and we'll help you get there.

Our carefully designed curriculum equips you with the knowledge and skills you need to excel as a professional nurse.

Registered Nurses are the backbone of any healthcare team, working closely with physicians and allied healthcare professionals. As a nursing Science student, you will gain hands-on experience through a range of clinical placements.

You will gain experience in areas such as clinical practice, leadership, health policy, and research while advancing your personal development and earning industry credentials. You will also benefit from ongoing education and mentorship through specialized courses

After completing the program, you'll receive a Bachelor of Nursing Science (B.NSe) degree in nursing. The Bachelor of Nursing science prepares you for a job in a variety of medical fields. You'll be prepared to practice as a nurse when you graduate from university.

Our highly trained and dedicated lecturers will help you achieve your goals by offering individualised support at every stage of your programme.

We understand what you need to get started and continue successfully in your nursing career. ",
            'opportunity_text' => ""
        ],[
            'course_id' =>  "21",
            'overview' => "A degree program in Public Health aims at providing students with the knowledge and skills necessary to understand and protect people's health, while also improving and promoting healthy lifestyles.

This degree provides you with an insight into the current state of global health and the various ways to address global health issues. You will gain knowledge about the relationship between health and social determinants of health, such as poverty, education, employment, climate change etc. You will also learn about the need for coordination across multiple sectors and levels to achieve sustainable improvements in health care systems and health outcomes.

You'll also get hands-on experience through interactive exercises, problem-solving activities, and real-world projects. You'll explore topics like epidemiology, biostatistics, environmental health, nutrition, and health policy.

We offer our learners an exciting programme of study that will enable them to apply the latest research findings to help people understand how to maintain and improve their health.

Our students gain a broad knowledge base across all aspects of public health, including health promotion, illness prevention and treatment, environmental protection, occupational safety and healthy environments. We also encourage students to consider personal responsibility in making healthie",
            'opportunity_text' => ""
        ],
[
            'course_id' =>  "22",
            'overview' => "Medical laboratory science is a very dynamic profession, with constant changes in technology and practice. New procedures and equipment are constantly emerging, requiring practitioners to keep abreast of current developments in the field

Medical laboratory Science plays an essential role in healthcare decision-making. Laboratory technicians are the backbones of healthcare. Their work helps doctors diagnose diseases, prescribe treatment, track drug efficacy, and ensure patient safety. It is a profession that utilizes medical testing to detect, diagnose, and monitor diseases.

This program provides you with foundational knowledge about the current state of medical laboratory science. We offer courses that cover the basic sciences, clinical diagnosis and management, and advanced topics including molecular diagnostics, microbiology, immunoassays, genetic testing, transplantation biology, and transfusion medicine.

The Medical Lab Science program at Al-Ansar university offers students a broad range of opportunities to study courses in medical laboratory science. ",
            'opportunity_text' => ""
        ],
    );
    

    public function up()
    {

        foreach ($this->programmes as $programme) {
            
            DB::table('programmes')->insert(
                array(
                    'course_id' => $programme['course_id'],
                    'overview' => $programme['overview'],
                    'opportunity_text' => $programme['opportunity_text']
                )
            );

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
