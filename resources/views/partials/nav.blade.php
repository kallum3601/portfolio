@section('nav')
<section id="nav-container" section-name="nav-container">

    <nav>

        <div id="nav-logo-container">
            <a href="/"><img src="{{asset('images/logo/logo-full.png')}}" alt="404"></a>
        </div>
        
        <div id="nav-skills-container">
            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/vscode.png')}}" skill-name="Visual Studio Code" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/html.png')}}" skill-name="HTML" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/css.png')}}" skill-name="CSS" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/js.png')}}" skill-name="JavaScript" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/php.png')}}" skill-name="PHP" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/laravel.png')}}" skill-name="Laravel" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/node-js.png')}}" skill-name="Node JS" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/java.png')}}" skill-name="Java" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/android-studio.png')}}" skill-name="Android Studio Code" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/sql.png')}}" skill-name="SQL" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/filezilla.png')}}" skill-name="FileZilla" alt="404">
            </div>

            <div class="nav-skills-img-container">
                <img class="nav-skills-img" src="{{asset('images/skills/ps.png')}}" skill-name="PhotoShop" alt="404">
            </div>
        
        </div>

        <div id="nav-menu-container">
            <div class="nav-menu-item-container">
                <img class="nav-menu-item" menu-item-name="About Me" relative-section="about-me-container" src="{{asset('images/nav-items/about-me.png')}}" alt="404">
            </div>

            <div class="nav-menu-item-container">
                <img class="nav-menu-item" menu-item-name="Portfolio" relative-section="portfolio-container" src="{{asset('images/nav-items/portfolio.png')}}" alt="404">
            </div>

            <div class="nav-menu-item-container">
                <img class="nav-menu-item" href="#" menu-item-name="References" relative-section="references-container"  src="{{asset('images/nav-items/references.png')}}" alt="404">
            </div>

            <div class="nav-menu-item-container">
                <img class="nav-menu-item" menu-item-name="Blog" relative-section="blog-all-container" src="{{asset('images/nav-items/blog.png')}}" alt="404">
            </div>

            <div class="nav-menu-item-container">
                <img id="nav-notifications" class="nav-menu-item" menu-item-name="Notifications" relative-section="notifications-container" src="{{asset('images/nav-items/notifications.png')}}" alt="404"> 
            </div>
            
        </div>

    </nav>

</section>

@endsection