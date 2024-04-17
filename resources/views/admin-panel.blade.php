<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kallum Brett | Admin Panel</title>

        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">        

        {{-- Scripts --}}

        {{-- @Includes --}}

        {{-- VITE Manifest --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>

        <div id="admin-panel-container">

            <section id="admin-visitors-container">

                <h2>Visitors</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Type/Company</th>
                            <th>I.P. Address</th>
                            <th>Device Details</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($visitors as $visitor)
                        <tr>
                            <th>{{$visitor->company}}</th>
                            <th>{{$visitor->ip_address}}</th>
                            <th>{{$visitor->device}}</th>
                            <th>{{$visitor->created_at}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </section>
    
            <section id="admin-testimonials-container">

                <h2>Testimonials</h2>
    
                <table>
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Company</th>
                            <th>Job Title</th>
                            <th>Testimonial</th>
                            <th>Reaction</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <th>{{$testimonial->name}}</th>
                            <th>{{$testimonial->company}}</th>
                            <th>{{$testimonial->job_title}}</th>
                            <th>{{$testimonial->testimonial}}</th>
                            <th>{{$testimonial->reaction}}</th>
                            <th>{{$testimonial->created_at}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </section>
    
            <section id="admin-references-container">

                <h2>References</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Company</th>
                            <th>Job Title</th>
                            <th>Reference</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($references as $reference)
                        <tr>
                            <th>{{$reference->fullname}}</th>
                            <th>{{$reference->company}}</th>
                            <th>{{$reference->job_title}}</th>
                            <th>{{$reference->reference}}</th>
                            <th>{{$reference->email}}</th>
                            <th>{{$reference->phone}}</th>
                            <th>{{$reference->created_at}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
    
            <section id="admin-add-notification-container">
    
                <form action="{{route('submit-notification')}}" method="POST">
                    <h2>Create Notification</h2>
                    @csrf
                    <select name="notification-type">
                        <option value="holiday">Holiday</option>
                        <option value="alert">Alert</option>
                        <option value="blog-entry">Blog Entry</option>
                    </select>
    
                    <input type="text" name="notification" placeholder="Notification...">
    
                    <button type="submit">Submit</button>
                </form>
    
            </section>
    
            <section id="admin-add-portfolio-entry-container">
    
                <form action="{{route('submit-portfolio-entry')}}" method="POST" enctype="multipart/form-data">
                    <h2>Add Portfolio Entry</h2>
                    @csrf
                    <input type="file" name="video">
                    <input type="text" name="title" placeholder="Portfolio Title...">
                    <textarea name="description" cols="30" rows="10" placeholder="Portfolio Description..."></textarea>
    
                    <select name="focus">
                        <option value="Front End">Front End</option>
                        <option value="Back End">Back End</option>
                        <option value="Fullstack">Fullstack</option>
                    </select>
    
                    <select name="status">
                        <option value="Conceptual">Conceptual</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                        <option value="Live">Live</option>
                        <option value="Old">Old</option>
                    </select>
    
                    <select name="build">
                        <option value="HTML & CSS">HTML & CSS</option>
                        <option value="HTML, CSS & JS">HTML, CSS & JS</option>
                        <option value="HTML, SCSS & JS">HTML, SCSS & JS</option>
                        <option value="Laravel & SCSS">Laravel & SCSS</option>
                        <option value="Laravel">Laravel</option>
                        <option value="Laravel & VITE">Laravel & VITE</option>
                    </select>
    
                    <input type="text" name="address" placeholder="GitHub Link...">
                    <input type="text" name="blog" placeholder="Blog Link...">
    
                    <button type="submit">Submit</button>
                </form>
    
            </section>
    
            <section id="admin-add-blog-post-container">
                <form action="{{route('submit-post')}}" method="POST" enctype="multipart/form-data">
                    <h2>Add Blog Post</h2>
                    @csrf
                    <input type="file" name="image">
                    <input type="title" name="title" placeholder="Title...">
                    <select name="type">
                        <option value="Personal">Personal</option>
                        <option value="Investing">Investing</option>
                        <option value="Project">Project</option>
                        <option value="Travel">Travel</option>
                        <option value="Music">Music</option>
                    </select>
                    <textarea name="body" cols="30" rows="10" placeholder="Post Body..."></textarea>
                    <button type="submit">Submit</button>
                </form>
            </section>

            <section id="admin-create-user">
                <form action="{{route('create-user')}}" method="POST">
                    <h2>Create User</h2>
                    @csrf
                    <input type="text" name="username" placeholder="Username..."><br>
                    <input type="text" name="password" placeholder="Password..."><br>
                    <input type="number" name="admin"><br>
                    <button type="submit">Submit</button>
                </form>

            </section>
    
            <section id="admin-update-profile-image">
                <form action="{{route('update-image')}}" method="POST" enctype="multipart/form-data">
                    <h2>Change Profile Image</h2>
                    @csrf
                    @if($profileImage)
                    <img style="width: 10%;" src="{{Storage::url($profileImage->image_path)}}" alt="404">
                    @else
                    <img style="width: 10%;" src="{{asset('images/logo/logo-full.png')}}" alt="404">
                    @endif
                    <input type="file" name="image">
                    <button type="submit">Submit</button>
                </form>
            </section>

        </div>

    </body>
</html>