<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alder Mangaliman | IT Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { darkMode: 'class', }</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        .dark ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #10b981; border-radius: 4px; }
        html { scroll-behavior: smooth; }
        .skill-bar { transition: width 1.5s ease-out; }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-300 font-sans antialiased selection:bg-emerald-500 selection:text-white flex flex-col md:flex-row min-h-screen transition-colors duration-300">

    <!-- Left Sidebar -->
    <aside class="md:fixed md:w-1/3 lg:w-1/4 h-screen bg-white dark:bg-slate-950 border-r border-slate-200 dark:border-slate-800 p-8 flex flex-col justify-between z-10 overflow-y-auto transition-colors duration-300">
        <div>
            <!-- Dark Mode Toggle -->
            <div class="flex justify-end mb-4">
                <button onclick="document.documentElement.classList.toggle('dark')" class="text-slate-500 hover:text-emerald-600 dark:hover:text-emerald-400 transition text-xl">
                    <i class="fas fa-adjust"></i>
                </button>
            </div>

            <!-- Profile Image -->
            <img src="{{ asset('images/profile.jpg') }}" 
                 alt="Alder Mangaliman" 
                 onerror="this.src='https://ui-avatars.com/api/?name=Alder+Mangaliman&background=10b981&color=fff&size=200'"
                 class="w-32 h-32 rounded-2xl object-cover border-b-4 border-emerald-500 shadow-lg shadow-emerald-500/20 mb-6">
            
            <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-1 tracking-tight">Alder Mangaliman</h1>
            <h2 class="text-emerald-600 dark:text-emerald-500 font-medium text-md mb-4">BSIT Student</h2>
            
            <!-- Contact Info -->
            <div class="text-sm text-slate-600 dark:text-slate-400 mb-8 space-y-2">
                <p><i class="fas fa-map-marker-alt text-emerald-500 w-5"></i> Zone 7 Bangued, Abra</p>
                <p><i class="fas fa-phone text-emerald-500 w-5"></i> 09223343157</p>
                <p><i class="fas fa-envelope text-emerald-500 w-5"></i> mangalimanalder@gmail.com</p>
            </div>

            <!-- Navigation -->
            <nav class="flex flex-col space-y-4">
                <a href="#about" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-300 dark:bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> About
                </a>
                <a href="#education" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-300 dark:bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> Education
                </a>
                <a href="#skills" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-300 dark:bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> Skills
                </a>
                <a href="#experience" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-300 dark:bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> Experience
                </a>
            </nav>
        </div>

        <!-- Social Links -->
        <div class="mt-8 flex space-x-5 text-xl pb-4">
            <a href="https://github.com/mangalimanalder96-netizen/alder-portfolio" target="_blank" class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition"><i class="fab fa-github"></i></a>
            <a href="https://www.facebook.com/alder.tabaniag.mangaliman.2024" target="_blank" class="text-slate-400 hover:text-blue-600 dark:hover:text-blue-500 transition"><i class="fab fa-facebook"></i></a>
        </div>
    </aside>

    <!-- Right Content Area (Scrollable) -->
    <main class="md:ml-[33.333333%] lg:ml-[25%] w-full md:w-2/3 lg:w-3/4 p-8 md:p-16 lg:p-24 overflow-y-auto">
        
        <!-- About Section -->
        <section id="about" class="mb-24 pt-8">
            <h3 class="text-sm font-bold text-emerald-600 dark:text-emerald-500 tracking-widest uppercase mb-4">About Me</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6">Maintaining Data Integrity & System Reliability.</h2>
            <div class="text-lg text-slate-700 dark:text-slate-400 leading-relaxed space-y-4">
                <p>
                    I am a highly motivated 4th-year Bachelor of Science in Information Technology student at Data Center College of the Philippines Bangued, seeking an On-the-Job Training (OJT) position. I am eager to apply my academic knowledge in real-world environments while mastering new technologies.
                </p>
                <p>
                    I possess a strong foundation in application development, and hardware/software troubleshooting. My capabilities extend to data privacy, technical translation, and system documentation, backed by excellent analytical problem-solving skills.
                </p>
                <p>
                    As a fluent trilingual communicator (Ilocano, Tagalog, and English), I am committed to maintaining data integrity, facilitating clear communication, and contributing to organizational success.
                </p>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="mb-24">
            <h3 class="text-sm font-bold text-emerald-600 dark:text-emerald-500 tracking-widest uppercase mb-8">Education</h3>
            <div class="space-y-6">
                <div class="border-l-4 border-emerald-500 pl-6 py-2">
                    <h4 class="text-xl font-bold text-slate-900 dark:text-white">Bachelor of Science in Information Technology</h4>
                    <p class="text-emerald-600 dark:text-emerald-400 font-medium">Data Center College of the Philippines - Bangued</p>
                    <p class="text-sm text-slate-500 mt-1">2023 - Present</p>
                </div>
                <div class="border-l-4 border-amber-500 pl-6 py-2">
                    <h4 class="text-xl font-bold text-slate-900 dark:text-white">Humanities and Social Sciences (HUMSS)</h4>
                    <p class="text-amber-600 dark:text-amber-500 font-medium">Holy Spirit Academy of Bangued</p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="mb-24">
            <h3 class="text-sm font-bold text-emerald-600 dark:text-emerald-500 tracking-widest uppercase mb-8">Core Skills</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                
                <div class="skill-container">
                    <div class="flex justify-between text-sm text-slate-900 dark:text-white mb-2 font-medium">
                        <span>Teamwork</span> <span class="text-amber-600 dark:text-amber-500">50%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="50%"></div>
                    </div>
                </div>

                <div class="skill-container">
                    <div class="flex justify-between text-sm text-slate-900 dark:text-white mb-2 font-medium">
                        <span>Communication</span> <span class="text-amber-600 dark:text-amber-500">45%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="45%"></div>
                    </div>
                </div>

                <div class="skill-container">
                    <div class="flex justify-between text-sm text-slate-900 dark:text-white mb-2 font-medium">
                        <span>Hardware</span> <span class="text-amber-600 dark:text-amber-500">41%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="41%"></div>
                    </div>
                </div>

                <div class="skill-container">
                    <div class="flex justify-between text-sm text-slate-900 dark:text-white mb-2 font-medium">
                        <span>Basic Troubleshooting</span> <span class="text-amber-600 dark:text-amber-500">32%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full skill-bar" style="width: 0%" data-width="32%"></div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="mb-12">
            <h3 class="text-sm font-bold text-emerald-600 dark:text-emerald-500 tracking-widest uppercase mb-8">Job Experience</h3>
            
            <div class="space-y-8">
                <!-- Bishop's House Card -->
                <div class="bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 p-6 rounded-2xl shadow-sm">
                    <div class="flex flex-col md:flex-row justify-between md:items-center mb-4">
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white">Work Immersion</h4>
                        <span class="text-sm text-amber-600 dark:text-amber-500 font-mono mt-2 md:mt-0">2022 - 2023</span>
                    </div>
                    <p class="text-sm text-emerald-600 dark:text-emerald-400 font-medium mb-4">
                        <i class="fas fa-church mr-1"></i> Bishop's House | Zone 5, Bangued, Abra
                    </p>
                    
                    <ul class="space-y-4 text-slate-700 dark:text-slate-400 text-sm leading-relaxed">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-emerald-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="text-slate-900 dark:text-slate-300">Clerical & Administrative Assistance:</strong> Handled office clerical tasks, prepared documents/reports using Microsoft Office, and supported daily administrative workflows.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-emerald-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="text-slate-900 dark:text-slate-300">Data Management & Documentation:</strong> Digitized, organized, and archived physical files into digital databases with a high standard of data accuracy and confidentiality.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-emerald-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="text-slate-900 dark:text-slate-300">Technical & Hardware Support:</strong> Assisted staff with basic computer maintenance, software updates, and hardware troubleshooting to ensure smooth daily operations.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="pt-8 border-t border-slate-200 dark:border-slate-800 text-sm text-slate-500 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; 2026 Alder Mangaliman. Built with Laravel.</p>
            <p class="mt-2 md:mt-0"><i class="fas fa-map-marker-alt text-emerald-500 mr-1"></i> Zone 7 Bangued, Abra</p>
        </footer>

    </main>

    <!-- Script for Skill Bars Animation -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const skillBars = document.querySelectorAll('.skill-bar');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.width = entry.target.getAttribute('data-width');
                    }
                });
            }, { threshold: 0.5 });
            
            skillBars.forEach(bar => observer.observe(bar));
        });
    </script>
</body>
</html>