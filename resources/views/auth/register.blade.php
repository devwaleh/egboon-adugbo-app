<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Egboon Adugbo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Create Account</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Name" class="w-full border rounded p-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border rounded p-2" required>
            <input type="password" name="password" placeholder="Password" class="w-full border rounded p-2" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full border rounded p-2" required>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Sign Up</button>
        </form>
        <p class="text-center text-sm mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign in</a></p>
    </div>
</body>
</html>
