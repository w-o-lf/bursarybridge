<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bursary Bridge</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles/Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html, body {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-blue-900 text-white">

    <!-- Nav -->
    <nav class="fixed w-full bg-blue-800 p-4 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-12 mr-2">
                <span class="text-white font-bold text-xl">BursaryBridge</span>
            </div>
            <!-- Nav Links -->
            <div>
                <a href="#home" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Dashboard</a>
                <a href="#aboutus" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">About Us</a>
                <a href="#services" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Services</a>
                <a href="#contact" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Contact</a>
                <a href="auth/login" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">login</a>
                <a href="auth/register" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">register</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div id="home" class="pt-20 max-w-5xl mx-auto">
        <section class="min-h-screen flex flex-col justify-center items-center bg-cover bg-center" style="background-image: url('{{ asset("images/student.png") }}');">
            <h1 class="text-5xl font-bold mb-4">Welcome to Bursary Bridge</h1>
            <p class="text-xl mb-8">Bridging the Gap Between Students and Financial Aid.</p>
            <p class="text-xl mb-8">Invest in Tomorrow's Leaders: Support Bursaries Here.</p>
            <a href="#services" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700">Learn More</a>
        </section>

        <section class="min-h-screen flex flex-col items-center bg-blue-700 text-white py-10">
            <h1 class="text-4xl font-bold py-10">Featured Content</h1>
            <div class="max-w-5xl mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Success story -->
                <div class="bg-blue-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/success.jpg') }}" alt="Success Story" class="w-full h-60 object-cover rounded-t-lg mb-4">
                    <h2 class="text-2xl font-bold mb-4">Success Story</h2>
                    <p class="mb-4">Diana was a student with a dream of becoming a doctor but she comes from a poor background. Thanks to the support from Bursary Bridge, she was able to enrol and start pursuing her medical degree at one of the top colleges and so far is producing outstanding results.</p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500">Read More</a>
                </div>

                <!-- Events -->
                <div class="bg-blue-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/bb logo.png') }}" alt="Upcoming Event" class="w-full h-60 object-cover rounded-t-lg mb-4">
                    <h2 class="text-2xl font-bold mb-4">Upcoming Event</h2>
                    <p class="mb-4">Join us for our annual fundraising gala to support students in need. Enjoy an evening of entertainment and philanthropy. Date: October 20, 2024.</p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500">Buy Tickets</a>
                </div>

                <!-- Patners -->
                <div class="bg-blue-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/helb logo.png') }}" alt="Our Partners" class="w-full h-60 object-cover rounded-t-lg mb-4">
                    <h2 class="text-2xl font-bold mb-4">Our Partners</h2>
                    <p class="mb-4">Partner 1 is a leading organization in educational support, providing resources and funding for students in need. Partner 2 offers scholarships and grants to support students pursuing higher education.</p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500">Learn More</a>
                </div>
            </div>
        </section>

       

        <section id="aboutus" class="min-h-screen flex flex-col items-center bg-blue-500 text-white">
            <h1 class="text-4xl font-bold py-10">About Us</h1>
            <div class="max-w-4xl mx-auto p-4">
                <!-- Mission Statement -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold">Mission Statement</h2>
                    <p>Bursary Bridge is dedicated to bridging the financial gap in education by connecting 
                       generous donors with students in need, ensuring that financial constraints do not hinder academic potential.</p>
                </div>

                <!-- Vision Statement -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold">Vision Statement</h2>
                    <p>To create a world where every deserving student has access to the educational
                       opportunities they need to succeed, regardless of their financial background.</p>
                </div>

                <!-- History -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold">Our History</h2>
                    <p>Founded in 2024 and despite the website being new it has grown and so far
                       has made a significant impact on students on their educational journeys and future prospects.
                    </p>
                </div>

                <!-- Core Values -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold">Core Values</h2>
                        <p>Integrity: We operate with the highest level of integrity, ensuring transparency and accountability in all our processes.</p>
                        <p>Empathy: We understand the financial struggles students face and are committed to providing compassionate support.</p>
                        <p>Excellence: We strive for excellence in everything we do, from our user-friendly platform to our personalized support services.</p>
                </div>

                <!-- Customer Testimonials -->
                <div class="mb-8">
                     <h2 class="text-2xl font-bold">Customer Testimonials</h2>
                     <blockquote class="italic">"Bursary Bridge changed my life. Without their support, I wouldn't have been able to continue my education. I'm forever grateful." - Sarah K., Student</blockquote>
                     <blockquote class="italic">"As a donor, I am confident that my contributions are making a real difference. Bursary Bridge's transparency and dedication are commendable." - John D., Donor</blockquote>
                     <blockquote class="italic">"The process was so easy and efficient. Thanks to Bursary Bridge, I can focus on my studies without worrying about finances." - Michael L., Student</blockquote>
                </div>

                <!-- Social Responsibility -->
                 <div class="mb-8">
                     <h2 class="text-2xl font-bold">Social Responsibility</h2>
                     <p>At Bursary Bridge, we are committed to making a positive impact in the community. We actively engage in various initiatives to support education and financial literacy. Our programs include workshops for students on financial management and scholarship application processes, and we partner with local organizations to reach students in underserved communities. By fostering a culture of giving and support, we aim to create lasting change and help build a more educated and equitable society.</p>
                 </div>
            </div>
        </section>

        <section id="services" class="min-h-screen flex flex-col items-center bg-blue-400 text-white">
            <h1 class="text-4xl font-bold py-10">Our Services</h1>
             <div class="max-w-4xl mx-auto p-4">
                <!-- Service for Donors -->
             <div class="mb-8">
             <h2 class="text-2xl font-bold">Services for Donors</h2>
                 <p>We provide a streamlined platform for donors to easily find and support deserving students. Donors can browse student profiles, review their academic achievements, and choose the students they wish to support. Our secure payment system ensures that your contributions are safely and directly delivered to the selected students.</p>
             </div>

                <!-- Service for Students -->
             <div class="mb-8">
                 <h2 class="text-2xl font-bold">Services for Students</h2>
                  <p>Bursary Bridge offers students a chance to connect with potential donors who are willing to support their educational goals. Students can create detailed profiles, showcasing their academic achievements, extracurricular activities, and future aspirations. Our platform makes it easy for students to apply for bursaries and secure the financial aid they need to succeed.</p>
             </div>

             <!-- Matching Service -->
             <div class="mb-8">
                 <h2 class="text-2xl font-bold">Matching Services</h2>
                 <p>Our advanced matching algorithm pairs donors with students whose needs and aspirations align with the donor’s values and goals. This ensures that the support provided has a meaningful and lasting impact.</p>
             </div>

             <!-- Monitoring and Reporting -->
             <div class="mb-8">
                 <h2 class="text-2xl font-bold">Monitoring and Reporting</h2>
                  <p>We offer comprehensive monitoring and reporting services to keep donors informed about the progress of the students they support. Regular updates include academic reports, personal development milestones, and the overall impact of the financial aid.</p>
             </div>

             <!-- Support and Guidance -->
             <div class="mb-8">
                 <h2 class="text-2xl font-bold">Support and Guidance</h2>
                 <p>Bursary Bridge provides ongoing support and guidance to both donors and students. Our team is available to assist with any queries or issues, ensuring a smooth and positive experience for all users.</p>
             </div>

             <!-- Community Engagement -->
             <div class="mb-8">
                 <h2 class="text-2xl font-bold">Community Engagement</h2>
                 <p>We believe in building a strong community of donors and students. Our platform offers opportunities for interaction and engagement through events, webinars, and forums, fostering a network of like-minded individuals committed to making a difference in education.</p>
             </div>
         </div>
         </section>

         <section id="contact" class="min-h-screen flex flex-col items-center bg-blue-300 text-white">
                <h1 class="text-4xl font-bold py-10">Contact Us</h1>
                <div class="max-w-4xl mx-auto p-4 space-y-8">

                    <!-- Display success message -->
                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold">Contact Form</h2>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium">Your Name:</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium">Your Email:</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium">Your Message:</label>
                                <textarea id="message" name="message" class="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700">Send Message</button>
                        </form>
                    </div>

                    <!-- Additional Contact Information -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold">Additional Contact Information</h2>
                        <p>Email: <a href="mailto:support@bursarybridge.com" class="underline">support@bursarybridge.com</a></p>
                        <p>Phone: <a href="tel:+123456789" class="underline">+123456789</a></p>
                        <p>Address: 1234 Education Lane, Learning City, 56789</p>
                    </div>

                </div>
            </section>

    </div>

    <!-- Footer -->
    <footer class="bg-blue-800 py-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center text-sm">
            <p>&copy; 2024 BursaryBridge. All Rights Reserved.</p>
            <ul class="flex space-x-4">
                <li><a href="#home" class="hover:underline">Dashboard</a></li>
                <li><a href="#aboutus" class="hover:underline">About Us</a></li>
                <li><a href="#services" class="hover:underline">Services</a></li>
                <li><a href="#contact" class="hover:underline">Contact</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>