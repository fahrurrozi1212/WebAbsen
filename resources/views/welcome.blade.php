<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Absensi</title>
    <link rel="icon" href="{{ asset('img/LogoTitle.png') }}" type="image/png" sizes="32x32">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 h-screen flex flex-col">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#"><img src="{{ asset('img/LogoNav.png') }}" class="h-8" alt=""></a>
            <div class="space-x-4">
                <a href="#" class="hover:text-gray-400">Home</a>
                <a href="#" class="hover:text-gray-400">About Us</a>
                <a href="#" class="hover:text-gray-400">Services</a>
                <a href="#" class="hover:text-gray-400">Contact</a>
                <a href="#" class="hover:text-gray-400">Login</a>
            </div>
        </div>
    </nav>
    
    <header class="text-white p-4 py-32" style="background-image: url('/img/A.png'); background-size: cover; background-position: center;">
        <h4 class="text-5xl text-center typing-animation">Welcome to My Absensi</h4>
        <p class="text-2xl text-center fade-in-animation">Kami Senang bisa Melayani Anda</p>
        
        <style>
            @keyframes typing {
                from { width: 0; }
                to { width: 100%; }
            }
            @keyframes fade-in {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .typing-animation {
                overflow: hidden;
                white-space: nowrap;
                border-right: 3px solid;
                width: 0;
                animation: typing 3s steps(30, end) forwards;
            }
            .fade-in-animation {
                opacity: 0;
                animation: fade-in 2s forwards;
                animation-delay: 3s;
            }
        </style>
    </header>
    
    <div class="flex-1 p-4">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center text-white">Our Features</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-white">Easy to Use</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi.</p>
                    <ul class="list-disc list-inside text-gray-300">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Quaerat, excepturi.</li>
                        <li>Vel, corporis?</li>
                    </ul>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-white">Faster than Before</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi.</p>
                    <ol class="list-decimal list-inside text-gray-300">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Quaerat, excepturi.</li>
                        <li>Vel, corporis?</li>
                    </ol>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-white">Reliable</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi.</p>
                    <a href="#" class="text-blue-400 hover:text-blue-600 hover:underline">Learn more</a>
                </div>
            </div>
            
            <div class="mt-6">
                <h1 class="text-4xl font-bold text-center text-white">What our users say</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/100" class="rounded-full mr-4 w-12 h-12" alt="John Doe">
                            <div class="flex flex-col">
                                <p class="text-white">John Doe, CEO at ABC</p>
                                <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                                <div class="flex text-yellow-500 space-x-1">
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/101" class="rounded-full mr-4 w-12 h-12" alt="Jane Doe">
                            <div class="flex flex-col">
                                <p class="text-white">Jane Doe, Manager at DEF</p>
                                <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                                <div class="flex text-yellow-500 space-x-1">
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/102" class="rounded-full mr-4 w-12 h-12" alt="Bob Smith">
                            <div class="flex flex-col">
                                <p class="text-white">Bob Smith, Developer at GHI</p>
                                <p class="text-gray-300">"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                                <div class="flex text-yellow-500 space-x-1">
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                    <i class="fas fa-star text-lg" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    
</body>
</html>

