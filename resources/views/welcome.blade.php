<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NU Online Institute - Project Management</title>

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            'nu-primary': '#007870',
                            'nu-secondary': '#005f59',
                            'nu-light': '#e6f5f4',
                        }
                    }
                }
            }
        </script>
        <style type="text/tailwindcss">
            .gradient-background {
                @apply bg-gradient-to-r from-nu-primary to-nu-secondary;
            }
            .text-gradient {
                @apply bg-gradient-to-r from-nu-primary to-nu-secondary bg-clip-text text-transparent;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        <div class="min-h-screen flex flex-col items-center">
            <header class="w-full py-6 px-6 sm:px-10 flex justify-between items-center border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <svg class="w-10 h-10 text-nu-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <div>
                        <span class="text-xl font-bold text-nu-primary">NU Online Institute</span>
                        <p class="text-xs text-gray-600">Project Management System</p>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="flex items-center space-x-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-nu-primary px-4 py-2 rounded-md text-sm font-medium transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-nu-primary px-4 py-2 rounded-md text-sm font-medium transition">Masuk</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-nu-primary text-white hover:bg-nu-secondary px-5 py-2 rounded-lg text-sm font-medium transition shadow-sm">Daftar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </header>

            <main class="flex-1 flex flex-col items-center justify-center w-full px-6 sm:px-10 py-12">
                <div class="max-w-6xl w-full">
                    <div class="text-center mb-16">
                        <div class="inline-block bg-nu-light text-nu-primary text-sm font-semibold px-4 py-2 rounded-full mb-6">
                            Sistem Manajemen Project Modern
                        </div>
                        <h1 class="text-5xl md:text-6xl font-bold mb-6">
                            Kelola Project <span class="text-gradient">NU Online Institute</span><br />
                            dengan Lebih Efisien
                        </h1>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Platform manajemen project terintegrasi yang dirancang khusus untuk mendukung kegiatan operasional dan pengembangan NU Online Institute
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                        <div class="bg-white p-8 rounded-xl shadow-lg border border-nu-light hover:shadow-xl transition-all">
                            <div class="mb-5">
                                <div class="w-14 h-14 bg-nu-light rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-7 h-7 text-nu-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01"></path>
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Manajemen Tugas</h2>
                            </div>
                            <p class="text-gray-600 leading-relaxed">Buat, delegasikan, dan pantau tugas dengan mudah. Atur prioritas dan deadline untuk menjaga tim tetap produktif.</p>
                        </div>

                        <div class="bg-white p-8 rounded-xl shadow-lg border border-nu-light hover:shadow-xl transition-all">
                            <div class="mb-5">
                                <div class="w-14 h-14 bg-nu-light rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-7 h-7 text-nu-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Kolaborasi Tim</h2>
                            </div>
                            <p class="text-gray-600 leading-relaxed">Tingkatkan kerja sama tim dengan update real-time dan komunikasi terintegrasi untuk semua anggota.</p>
                        </div>

                        <div class="bg-white p-8 rounded-xl shadow-lg border border-nu-light hover:shadow-xl transition-all">
                            <div class="mb-5">
                                <div class="w-14 h-14 bg-nu-light rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-7 h-7 text-nu-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 19V13C9 11.8954 8.10457 11 7 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H7C8.10457 21 9 20.1046 9 19ZM9 19V9C9 7.89543 9.89543 7 11 7H13C14.1046 7 15 7.89543 15 9V19M9 19C9 20.1046 9.89543 21 11 21H13C14.1046 21 15 20.1046 15 19M15 19V5C15 3.89543 15.8954 3 17 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H17C15.8954 21 15 20.1046 15 19Z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-2">Pelacakan Progress</h2>
                            </div>
                            <p class="text-gray-600 leading-relaxed">Visualisasi progress project dengan dashboard intuitif dan laporan detail untuk optimasi workflow.</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-nu-light to-white rounded-2xl p-12 shadow-xl border border-nu-primary/20 mb-12">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Siap Memulai?</h3>
                                <p class="text-gray-600 text-lg">Akses panel admin untuk mengelola project dan tim NU Online Institute Anda</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/admin" class="gradient-background text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 text-lg text-center">
                                    Akses Admin Panel
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="p-6">
                            <div class="text-4xl font-bold text-nu-primary mb-2">100+</div>
                            <p class="text-gray-600">Project Aktif</p>
                        </div>
                        <div class="p-6">
                            <div class="text-4xl font-bold text-nu-primary mb-2">50+</div>
                            <p class="text-gray-600">Tim Member</p>
                        </div>
                        <div class="p-6">
                            <div class="text-4xl font-bold text-nu-primary mb-2">99%</div>
                            <p class="text-gray-600">Tingkat Kepuasan</p>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="w-full py-10 px-6 sm:px-10 bg-gray-100 border-t border-gray-200">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="flex items-center space-x-3">
                            <svg class="w-8 h-8 text-nu-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                            <div>
                                <span class="font-bold text-nu-primary">NU Online Institute</span>
                                <p class="text-xs text-gray-600">Project Management System</p>
                            </div>
                        </div>
                        <div class="text-center md:text-right">
                            <p class="text-gray-600 font-medium">© {{ date('Y') }} NU Online Institute. All rights reserved.</p>
                            <p class="text-sm text-gray-500 mt-1">Powered by Laravel & Filament</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
