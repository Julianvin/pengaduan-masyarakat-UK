<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    <main class="relative min-h-screen overflow-hidden">
        <!-- Background container -->
        <div class="absolute inset-0 flex">
            <!-- Orange gradient section -->
            <div class="w-[55%] bg-gradient-to-r from-orange-500 to-orange-400"></div>
            <!-- Image section -->
            <div class="w-[45%] relative">
                <img src="/path-to-your-image.jpg" alt="Background" class="h-full w-full object-cover opacity-60">
                <!-- Diagonal divider -->
                <div class="absolute inset-0 -left-32">
                    <div class="h-full w-64 bg-white transform -skew-x-12"></div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="relative z-10 flex min-h-screen">
            <!-- Left content -->
            <div class="w-1/2 p-16 flex flex-col justify-center">
                <h1 class="text-white text-5xl font-bold mb-6">
                    Pengaduan<br/>
                    Masyarakat
                </h1>
                <p class="text-white text-lg mb-8 max-w-xl">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi perspiciatis aut pariatur doloremque laborum quis in praesentium at, recusandae obcaecati dicta accusantium delectus asperiores illum minima veritatis iure quidem amet rerum fugit quaerat illo!
                </p>
                <button class="bg-teal-800 text-white px-8 py-3 rounded-md hover:bg-teal-700 transition-colors w-fit">
                    BERGABUNG
                </button>
            </div>

            <!-- Right floating buttons -->
            <div class="absolute right-8 top-1/2 -translate-y-1/2 flex flex-col gap-4">
                <button class="w-12 h-12 bg-teal-800 rounded-full flex items-center justify-center hover:bg-teal-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </button>
                <button class="w-12 h-12 bg-teal-800 rounded-full flex items-center justify-center hover:bg-teal-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <button class="w-12 h-12 bg-teal-800 rounded-full flex items-center justify-center hover:bg-teal-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </button>
            </div>
        </div>
    </main>
</body>
</html>