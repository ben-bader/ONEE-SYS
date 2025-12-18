<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONEE-SYS | Bienvenue • مرحباً</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&family=cairo:400,600,700" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('img/Onep.png')}}" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .cairo-font {
            font-family: 'Cairo', sans-serif;
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.6s ease-out forwards;
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }  
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-800">
    <div class="p-8">
        <header
        class="flex mx-auto item-center justify-between bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm lg:max-w-[1100px] w-full text-sm mb-6 py-3 px-6 rounded-lg shadow-lg not-has-[nav]:hidden border border-white/20">
        <div class="flex items-center gap-3">
            <x-application-logo />
        </div>
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="">
                        <x-secondary-button class="flex gap-2">
                        <x-bi-grid class="w-5 h-5 text-blue-900 dark:text-gray-100" />
                        Dashboard
                        </x-secondary-button>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="">
                        
                        <x-secondary-button class="flex gap-2 !text-blue-600 dark:!text-gray-100">
                            <x-ri-login-box-line class="w-5 h-5 text-blue-500 dark:text-gray-100" />
                            Se connecter
                        </x-secondary-button>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">
                            <x-primary-button class="flex gap-2 ">
                                <x-ri-user-add-line class="w-5 h-5 text-white dark:text-gray-800" />
                                S'inscrire
                            </x-primary-button>
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    </div>
        <!-- Page Content -->
        <main class="space-y-10">
            <!-- Hero Section -->
            <div class="min-h-screen overflow-hidden rounded ">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center fade-in">
                        <div class="mb-8">
                            <div
                                class="flex items-center justify-center gab-6 mb-6">
                                <x-ri-water-flash-line class="w-20 h-20 text-blue-500" />
                                <h1 class="text-6xl text-blue-500 font-semibold">ONEE-SYS</h1>
                            </div>
                        </div>

                        
                        <h1 class="text-2xl lg:text-5xl font-semibold text-blue-700 dark:text-gray-300 mb-8">
                            Office National de l'Électricité et de l'Eau Potable - Branche Eau
                        </h1>
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-700 dark:text-blue-400 mb-4 cairo-font"
                            dir="rtl">
                             المكتب الوطني للكهرباء والماء الصالح للشرب - قطاع الماء
                        </h1>
                        
                        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-4xl mx-auto leading-relaxed">
                            Plateforme digitale dédiée aux professionnels IT • منصة رقمية مخصصة لمختصي تكنولوجيا
                            المعلومات
                        </p>
                    </div>
                    <div class="py-1 mt-10">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 slide-up">
                                <div
                                    class="p-6 text-center">
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">24/7</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Support Technique</div>
                                </div>
                                <div
                                    class="p-6 text-center">
                                    <div class="text-3xl font-bold text-green-600 dark:text-blue-400 mb-2">15M+
                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Utilisateurs</div>
                                </div>
                                <div
                                    class="p-6 text-center">
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">99.9%
                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Disponibilité</div>
                                </div>
                                <div
                                    class="p-6 text-center">
                                    <div class="text-3xl font-bold text-red-600 dark:text-blue-400 mb-2">50+
                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Systèmes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Section -->

            <!-- Mission Statement -->
            <div class="relative flex flex-col items-start justify-center h-screen overflow-hidden">
                <img src="{{ asset("img/employe.jpg") }}" alt="" class="w-full h-full object-cover absolute z-0">
                <div class="flex flex-col items-start justify-center px-4 sm:px-6 lg:px-8 text-left text-white z-20 bg-gradient-to-r from-[#1a61a8bf] to-[#00000000] w-full h-full">
                    <h4 class="text-3xl font-bold mb-6">Notre Vision • رؤيتنا</h4>
                    <p class="text-xl mb-4 cairo-font" dir="rtl">
                        الريادة في التحول الرقمي لقطاع الطاقة والمياه في إفريقيا
                    </p>
                    <p class="text-xl mb-8">
                        Pionnier de la transformation digitale énergétique et hydrique en Afrique
                    </p>
                    <div class="flex flex-wrap justify-start gap-4">
                        @foreach (['Innovation', 'Excellence', 'Durabilité', 'Leadership'] as $value)
                            <span
                                class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium backdrop-blur-sm cursor-default">{{ $value }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Access Links -->
           
            <!-- Latest Updates Section -->
            <div class="py-16 h-screen">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between mb-12">
                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-3">
                            <x-heroicon-s-information-circle class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                            <span>Dernières Mises à Jour</span> • <span class="cairo-font" dir="rtl">آخر
                                التحديثات</span>
                        </h4>
                        
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div
                            class="bg-gradient-to-br from-blue-200 to-blue-400 dark:from-gray-700 dark:to-gray-500 p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <x-heroicon-o-server class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                                <span class="text-sm font-medium text-blue-800 dark:text-blue-300">Système</span>
                            </div>
                            <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Mise à jour sécuritaire</h5>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Les derniers correctifs de sécurité ont
                                été appliqués avec succès.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-emerald-200 to-green-400 dark:from-gray-700 dark:to-gray-500 p-6 rounded-lg  hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <x-heroicon-o-signal class="w-5 h-5 text-emerald-600 dark:text-emerald-400" />
                                <span
                                    class="text-sm font-medium text-emerald-800 dark:text-emerald-300">Performance</span>
                            </div>
                            <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Optimisation réseau</h5>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Amélioration de 25% des performances
                                réseau.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-purple-200 to-violet-400 dark:from-gray-700 dark:to-gray-500 p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <x-heroicon-o-academic-cap class="w-5 h-5 text-purple-600 dark:text-purple-400" />
                                <span class="text-sm font-medium text-purple-800 dark:text-purple-300">Formation</span>
                            </div>
                            <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Nouvelle certification</h5>
                            <p class="text-sm text-gray-600 dark:text-gray-200">Programme de certification
                                cybersécurité disponible.</p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-yellow-200 to-amber-400 dark:from-gray-700 dark:to-gray-500 p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <x-heroicon-o-light-bulb class="w-5 h-5 text-yellow-600 dark:text-yellow-400" />
                                <span class="text-sm font-medium text-yellow-800 dark:text-yellow-300">Innovation</span>
                            </div>
                                <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Idée innovante</h5>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Lancement d'une nouvelle plateforme de gestion intelligente de l'énergie.</p>
                            
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="py-16 bg-gray-50 dark:bg-gray-800 mt-5">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div
                        class="inline-flex items-center gap-6 bg-white dark:bg-gray-700 px-8 py-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-envelope class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=onepdrh@onep.ma" target="_blank">
                                <span class="text-gray-700 dark:text-gray-300">onepdrh@onep.ma</span>
                            </a>
                        </div>
                        <div class="w-px h-6 bg-gray-300 dark:bg-gray-500"></div>
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-phone class="w-5 h-5 text-emerald-600 dark:text-emerald-400" />
                            <a href="tel:0528 84 21 76">
                                <span class="text-gray-700 dark:text-gray-300">0528 84 21 76</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe animated elements
            document.querySelectorAll('.slide-up').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.6s ease-out';
                observer.observe(element);
            });

            // Add hover effects for quick access links
            document.querySelectorAll('a[href="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Add subtle click feedback
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });
        });
    </script>
</body>

</html>
