<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Supay Recharge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#f8fafc] min-h-screen flex items-center justify-center p-4 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
    <div class="glass p-10 rounded-[2rem] shadow-2xl w-full max-w-md transform transition-all duration-500 hover:scale-[1.02]">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold gradient-text mb-2">SUPAY</h1>
            <p class="text-gray-500 font-medium">Recharge Portal Login</p>
        </div>
        
        @if($errors->has('msg'))
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-xl text-sm animate-bounce" role="alert">
                <p class="font-bold">Error</p>
                <p>{{ $errors->first('msg') }}</p>
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Username</label>
                <div class="relative">
                    <input type="text" name="username" class="w-full px-5 py-4 rounded-2xl bg-gray-50 border-2 border-gray-100 focus:border-purple-500 focus:bg-white outline-none transition-all duration-300" placeholder="Enter your username" required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Password</label>
                <div class="relative">
                    <input type="password" name="password" class="w-full px-5 py-4 rounded-2xl bg-gray-50 border-2 border-gray-100 focus:border-purple-500 focus:bg-white outline-none transition-all duration-300" placeholder="••••••••" required>
                </div>
            </div>
            
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-2xl shadow-xl shadow-purple-200 hover:shadow-purple-300 hover:-translate-y-1 transition-all duration-300 font-bold text-lg">
                Sign In
            </button>
        </form>

    </div>
</body>
</html>