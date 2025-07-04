<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Egboon Adugbo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Sign In</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full border rounded p-2" required>
            <input type="password" name="password" placeholder="Password" class="w-full border rounded p-2" required>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Sign In</button>
        </form>
        <p class="text-center text-sm mt-4">Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign up</a></p>
    </div>
</body>
</html>
