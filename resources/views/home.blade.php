<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egboon Adugbo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-white shadow py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Egboon Adugbo</a>
            <div>
                @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="mr-4 text-blue-600 hover:underline">Sign In</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>
    <main class="flex-grow">
        <section class="py-20 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Egboon Adugbo</h1>
            <p class="text-gray-600">Empowering professionals to achieve their career goals.</p>
        </section>
    </main>
</body>
</html>
