@extends('layouts.frontend')
@section('title', 'Al-Ansar University | About Us, departments and courses')
@section('contents')
  <div class="w-full space-y-12">
    <div class="w-full px-4 mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-center bg-black  text-white bg-[url('/img/r1.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">About Us</p>
        </div>
      </div>
    </div>
    <div class="w-full px-4 mx-auto md:px-2 lg:px-0 max-w-7xl">
      <h1 class="my-6 text-2xl font-bold lg:text-3xl 2xl:text-4xl lg:font-extrabold">About Us</h1>
    </div>
    <div class="flex flex-wrap w-full gap-8 mx-auto max-w-7xl">
      

      <div class="w-full  space-y-4">
        <h1 class="text-2xl font-bold uppercase">THE PROPRIETOR
        </h1>
        <img class="float-left w-32 md:w-48 m-5 md:mr-10 ..." src="{{ url('/img/president.jpeg') }}">
        <div class="text-lg">The Proprietor of the proposed Al-Ansar University is the Al-Ansar Foundation. The
          Al-Ansar Foundation is registered with the Corporate Affairs Commission of Nigeria. It was registered on 18
          March, 2015 with <strong>CAC/IT/NO 76373</strong> . The office of the Foundation is located at <address>No. 42A,
            ldanre
            Hills Street,
            Maitama, Abuja.</address>
        </div>
        <p class="text-xl font-medium">The aims and objectives of the Al-Ansar Foundation are to:</p>
        <ol class="list-outside list-roman first-letter:font-medium">
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">promote peaceful coexistence
            of Nigerians through
            education, information,
            and other
            activities aimed at promoting peace;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">promote economic,
            humanitarian, cultural and fundamental human freedoms as enshrined in the extant laws of the Federation;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">promote, undertake and
            execute charitable trusts to reduce poverty, hunger and diseases among less privileged Nigerians;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">provide shelter, food,
            clothing, and good education for children in the society;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">provide succor and hope for
            the helpless;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">facilitate the
            rehabilitation, care and reorientation of children and young people who are victims of social vices in the
            society;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">create and provide
            opportunities for women and children to act as agents of social change through capacity building and advocacy;
          </li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">address environmental and
            climate change effects within different societies in Nigeria; and</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-2xl">network with other
            organisations with similar aims and objectives.</li>
        </ol>
      </div>
    </div>
    <div class="w-full py-8 space-y-8 bg-gray-100 lg:py-12">
      <div class="flex flex-wrap w-full max-w-4xl gap-8 mx-auto text-lg text-gray-500 2xl:max-w-7xl">
        <h1 class="text-2xl font-bold uppercase">Vision
        </h1>
        <p class="text-xl font-medium">The vision of Al-Ansar University is “to be a world-class academic institution
          where faith, innovation and service are nurtured for the advancement of human development”. </p>
      </div>
      <div class="flex flex-wrap w-full max-w-4xl gap-8 mx-auto text-lg text-gray-500 2xl:max-w-7xl">
        <h1 class="text-2xl font-bold uppercase">Mission
        </h1>
        <p class="text-xl font-medium">The mission of Al-Ansar University is “to be a beacon of knowledge and
          transformative learning seeking to advance professionalism, build a diverse and socially inclusive society, and
          be a powerhouse for human capital development.</p>
        <p>The mission of the University is a demonstration of its goal to produce hard Working men and women, who shall
          endure in their goal to develop and offer service to the Nigerian nation and the world at large.</p>
      </div>
      {{-- objective --}}
      <div class="flex flex-wrap w-full max-w-4xl gap-8 mx-auto text-lg text-gray-500 2xl:max-w-7xl">
        <h1 class="w-full text-2xl font-bold uppercase">Objective
        </h1>
        <ul class="list-disc list-outside first-letter:font-medium">
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">encourage the advancement of
            learning and to hold out to all persons without distinction of race, creed, sex or political conviction, the
            opportunity of acquiring a higher and liberal education;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">provide sources of instruction
            and other facilities for the pursuit of learning in all its branches, and to make those facilities available
            on proper terms to such persons as are equipped to benefit from them;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">encourage and promote
            scholarship and conduct research in all fields of learning and human endeavour,</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">evolve academic programmes to
            suit the changing social and economic needs of society through continuous review of curricular and
            developments of new programmes through programme structural flexibility to respond to societal and
            technological changes;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">create and expand access, and
            opportunities for education, attract and retain quality students, researchers, and teachers, thereby assisting
            in developing human capital and mitigating the brain drain currently afflicting Nigeria;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">produce internationally
            acceptable graduates that could compete favourably with their peers anywhere in the world;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">carry out basic and applied
            research leading to the domestication and application of new technology to the Nigerian context through
            collaborative linkages with other academic and research institutions in Africa and the rest of the world;</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">establish a centre for
            entrepreneurial studies to stimulate job creation and innovative abilities in students from onset of their
            studies, in such a way that graduates shall be resourceful, self-reliant and job creators; and</li>
          <li class="first-letter:font-medium first-letter:capitalize first-letter:text-xl">undertake other activities
            appropriate for teaching, research and community service as expected of a University of high standard.</li>
        </ul>
      </div>
      {{-- philosophy --}}
      <div class="flex flex-wrap w-full max-w-4xl gap-8 mx-auto text-lg text-gray-500 2xl:max-w-7xl">
        <h1 class="text-2xl font-bold uppercase">Our PHILOSOPHY
        </h1>

        <p> As a first-class University, Al-Ansar University shall strive to represent the values of its Proprietor of
          hard
          work, commitment, innovation, and integrity. The University serves as a means for innovation, service, Islamic
          development, national integration, and peaceful coexistence where future development, technocrats, experts,
          leaders, and scholars of Nigeria and the world are produced.
        </p>
        <p class="">
          As a University of high quality, it is open to men and women without discrimination on grounds of culture, race,
          religion, disability, gender, and or socio-economic background. The philosophy of the Al-Ansar University is
          also
          built on the need to encourage and motivate young people, especially from the population of Borno State and
          indeed
          Northeast geo-political zone, to open their minds and embrace Western education as means for the growth and
          development of society without fear of neglect of Islam and Islamic values, as well as to offer service to
          humanity.
        </p>
        <p class="">
          The University is geared towards the values of equity, justice, airiness, knowledge, innovation, service, and
          above all the fear of God. The main emphasis of University is the search for knowledge through teaching and
          research, which shall make it attractive to those in search of innovation, ideas and services for the growth and
          development of society and service to humanity.
        </p>
        <p class="">A strong pillar of the philosophy of the Al-Ansar University its Islamic orientation.
          The aim is to achieve an
          excellent environment that combines the best of Western education, functioning within an Islamic cultural
          setting.
          This shall ensure that all students who pass through the University at the undergraduate level are moulded to
          reflect a deep appreciation of Islamic culture. Furthermore, the University shall seek to expand the
          understanding, appreciation and use of Arabic language in core Muslim Northern Nigeria. This is based on the
          belief that a better usage of Arabic language shall make for easier, deeper and better understanding of lslam.
          The
          overall goal is to nurture a University Where people are trained with and made to imbibe the fear of Allah (SWT)
          and the practices of the Prophet (SAW) without discrimination on the basis of religion, tribe,
          Culture, nationality, colour, or gender.</p>
      </div>
    </div>

  </div>
@endsection
