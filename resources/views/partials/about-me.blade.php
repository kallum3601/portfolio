@section('about-me')

<section id="about-me-container" class="slideFromRight100" section-name="about-me-container">

    <div id="about-me-image-text-container">

        @if($profileImage)
        <div id="about-me-profile-image-container">
            <img id="about-me-profile-image" src="{{Storage::url($profileImage->image_path)}}" alt="404">
        </div>
        @else
        <div id="about-me-profile-image-container">
            <img id="about-me-profile-image" src="{{asset('images/logo/logo-full.png')}}" alt="404">
        </div>
        @endif

    </div>

    <div id="about-me-text-container">
        <p>
            "An enthusiastic and organized individual with a love for both the great outdoors and the relaxing indoors, as well as everything else life throws my way. I thrive on taking calculated risks, even if some have left me with a few battle scars, and I have a strong focus on personal growth, pushing myself to conquer the things that may give me pause. It was this ambition and drive that led me to forgo the opportunity for a BSc offered by my old employer Dachser and dive headfirst into the world of web development with minimal experience. Within just 12 months, I am filled with excitement and  gratitude for the progress I've made and the incredible people I've had the pleasure of working with. In a whirlwind of self-directed learning, I landed a role at LiveBuzz, an Event Management company, where I was introduced to the Laravel Framework. While enjoyable, the work wasn't as in-depth as I desired, prompting me to transition to a new role as a Junior Fullstack Developer at EA-RS. Here, I dabbled in various programming languages and was enrolled in a Laravel course to deepen my expertise, with the hope of implementing Laravel in a complete project overhaul. Sadly, due to company-wide redundancies, my position, along with many others, was made redundant, and now I'm eagerly seeking new opportunities, I am driven by passion, detail-oriented, and continually strive to enhance my skills. "
        </p>
    </div>


    <div id="about-me-hobbies-container">

        <div>
            <img class="hobby" src="{{asset('images/hobbies/mtb.png')}}" hobby-name="Mountain Biking" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/bouldering.png')}}" hobby-name="Bouldering" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/fitness.png')}}" hobby-name="Fitness" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/muay thai.png')}}" hobby-name="Muay Thai" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/coding.png')}}" hobby-name="Coding" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/science.png')}}" hobby-name="Science" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/travel.png')}}" hobby-name="Travel" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/business.png')}}" hobby-name="Business" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/investing.png')}}" hobby-name="Investing" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/music.png')}}" hobby-name="Music" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/meditation.png')}}" hobby-name="Meditation" alt="404">
        </div>

        <div>
            <img class="hobby" src="{{asset('images/hobbies/writing.png')}}" hobby-name="Writing" alt="404">
        </div>

    </div>

    <div id="about-me-previous-employment-container">

        <div id="previous-employment-dachser">

            <div class="company-job-title">
                <h4 style="text-decoration: underline;">Dachser | Senior IT Coordinator | 2014-2023</h4>
            </div>

            <p>As a member of a small, high-demand IT department at Dachser supporting over 450+ employees, I have gained expertise in multiple facets of the technological sector, from Servers and Networking to Directories and Management Systems. I've had multiple opportunities to work with coding languages such as HTML, CSS, JavaScript, and PHP, which I have utilized to create helpful projects for the department. Additionally, I've researched other technologies like JAVA, Android Studio, and Laravel. <br><br>

                I have successfully executed numerous large-scale initiatives, including software and hardware deployments, asset management projects, and office and facility relocations. Throughout these endeavors, I ensured the seamless integration and ongoing support of junior team members as our team expanded. I took on the responsibility for their training and mentorship. <br><br>
                
                Furthering my professional development, I completed extensive in-house training programs in Germany covering a range of topics, including Cloud Management, Server Systems, Network Services, Network Security, and Mobile Devices, among others. <br><br>
                
                One of the key aspects of my role was cultivating enduring professional relationships with colleagues both nationally and internationally. These relationships have been invaluable in fostering collaboration and achieving successful outcomes in various projects and endeavors. <br><br>
                
                Motivated by a desire for new challenges, I embarked on a journey of self-teaching in web development—an area I've long admired. I ventured into the unknown to pursue it as a career, giving up the opportunity of a BSc that was offered to me by Dachser with an increased tenure.
            </p>

        </div>

        <div id="previous-employment-livebuzz">

            <div class="company-job-title">
                <h4 style="text-decoration: underline;">Livebuzz | Web Developer & Technical Manager | May 2023 - Sep 2023</h4>
            </div>

            <p>As a member of a dynamic team comprising 11 developers, I played an integral role in various projects aimed at delivering innovative solutions to clients in the events industry. Specializing in the creation of form systems and websites using Laravel, I embarked on a journey of personal growth, delving into new realms of development such as team collaboration, database management, and workflow optimization. <br><br>

                The form systems I developed allowed users to seamlessly sign up for events, providing them with discount codes, newsletters, and categorization options for easy identification at shows. This role marked my introduction to the Laravel framework, TWIG for Emails, and our ‘LiveControl’ system, which facilitated database management and deployment to the live environment. <br><br>
                
                In conjunction with our LiveControl system, I ensured the seamless integration of user data, connecting it to our scanners for efficient data capture and management. Additionally, I transitioned into the role of Technical Manager at events, overseeing staff members and addressing any technical issues that arose, as well as any customer or client queries regarding technical issues or queries, ensuring smooth operations throughout. <br><br>
                
                Effective communication was paramount to our team's success, and I maintained regular interaction with senior developers to collaborate on project requirements and resolve technical challenges. Leveraging GitHub and our LiveControl system for project deployment, I facilitated seamless integration and version control throughout the development lifecycle.                
            </p>

        </div>

        <div id="previous-employment-ears">

            <div class="company-job-title">
                <h4 style="text-decoration: underline;">EA-RS Group | Junior Fullstack Developer | Sep 2023 - March 2024</h4>
            </div>

            <p>During my tenure in a small team consisting of two members, later expanded to three, I underwent training in PHP while simultaneously working with Simpro and its API. Despite the limitations of Simpro in accommodating user requirements, I worked with our Chrome extension to implement necessary changes on the Simpro site and navigate around Simpros constraints. This entailed various modifications such as enabling or hiding input fields, updating logos, and implementing warning messages to prevent form submission with empty data.<br><br>

                Primarily focused on backend development, I handled tasks involving the creation of GET requests and organization of received data using PHP. Notably, I spearheaded a project involving data retrieval from multiple Simpro tables, consolidation into required data sets, and data insertion into a new table, followed by task assignment within Simpro using its API.<br><br>
                
                Subsequently, I was enrolled in a Laravel course with the intention of transitioning our system from a vanilla setup to a framework-based architecture. Unfortunately, my journey was cut short due to a mass redundancy within the company.
                
            </p>

        </div>
        
    </div>

</section>

@endsection