<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Egboon Adugbo – Empowering African Careers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <header class="bg-white shadow-md py-6">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Egboon Adugbo</h1>
            <nav>
                <a href="{{ route('login') }}" class="text-indigo-700 hover:underline mr-4">Login</a>
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Register</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <section class="text-center mb-12">
            <h2 class="text-4xl font-extrabold mb-4">Empowering African Careers</h2>
            <p class="text-lg max-w-2xl mx-auto">Egboon Adugbo is a transformative HR tech platform helping job seekers and professionals across Africa take control of their careers with expert tools and support.</p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-bold mb-2">Career Path Discovery</h3>
                <p>Personalized assessments to match your strengths with thriving industries like tech, finance, healthcare, and more.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-bold mb-2">CV & LinkedIn Optimization</h3>
                <p>Get expert feedback to refine your professional profiles, highlight achievements, and attract recruiters.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-bold mb-2">Interview Preparation</h3>
                <p>Access question banks, mock interviews, and negotiation guides tailored to your industry and goals.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-bold mb-2">Educational Content Hub</h3>
                <p>Grow your career knowledge with articles on planning, branding, and job search strategies.</p>
            </div>
        </section>

        <section class="text-center bg-indigo-100 p-10 rounded-lg">
            <h3 class="text-2xl font-bold mb-4">A Vision for Africa's Workforce</h3>
            <p class="max-w-xl mx-auto mb-6">We’re building more than a platform — we’re creating an HR ecosystem tailored for Africa. Join thousands advancing their careers with tools powered by technology and purpose.</p>
            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-6 py-3 rounded text-lg hover:bg-indigo-700">Get Started</a>
        </section>
    </main>

    <footer class="text-center py-6 text-sm text-gray-600">
        &copy; {{ date('Y') }} Egboon Adugbo. Empowering African Careers.
    </footer>
</body>
</html>
