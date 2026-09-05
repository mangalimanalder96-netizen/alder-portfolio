<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alder | IT Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom Scrollbar for a clean look */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #10b981; border-radius: 4px; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-slate-900 text-slate-300 font-sans antialiased selection:bg-emerald-500 selection:text-white flex flex-col md:flex-row min-h-screen">

    <!-- Left Sidebar (Fixed on Desktop) -->
    <aside class="md:fixed md:w-1/3 lg:w-1/4 h-screen bg-slate-950 border-r border-slate-800 p-8 flex flex-col justify-between z-10">
        <div>
            <!-- Profile Image -->
            <img src="{{ asset('images/profile/alder.jpg') }}" 
                 alt="Alder" 
                 onerror="this.src='https://ui-avatars.com/api/?name=Alder&background=10b981&color=fff&size=200'"
                 class="w-32 h-32 rounded-2xl object-cover border-b-4 border-emerald-500 shadow-lg shadow-emerald-500/20 mb-6">
            
            <h1 class="text-4xl font-bold text-white mb-2 tracking-tight">Alder</h1>
            <h2 class="text-emerald-500 font-medium text-lg mb-6">IT Student & Developer</h2>
            
            <p class="text-sm text-slate-400 mb-8 leading-relaxed">
                Dedicated Information Technology student based in Bangued, Abra. Focused on network administration, web development, and hardware solutions.
            </p>

            <!-- Navigation -->
            <nav class="flex flex-col space-y-4">
                <a href="#about" class="text-slate-400 hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> About
                </a>
                <a href="#skills" class="text-slate-400 hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> Skills
                </a>
                <a href="#experience" class="text-slate-400 hover:text-emerald-400 font-medium transition flex items-center group">
                    <span class="w-8 h-1 bg-slate-700 mr-4 group-hover:bg-emerald-500 group-hover:w-12 transition-all"></span> Experience
                </a>
            </nav>
        </div>

        <!-- Social/Contact Links -->
        <div class="mt-8 flex space-x-5 text-xl">
            <a href="#" class="text-slate-500 hover:text-white transition"><i class="fab fa-github"></i></a>
            <a href="#" class="text-slate-500 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-slate-500 hover:text-emerald-500 transition"><i class="fas fa-envelope"></i></a>
        </div>
    </aside>

    <!-- Right Content Area (Scrollable) -->
    <main class="md:ml-[33.333333%] lg:ml-[25%] w-full md:w-2/3 lg:w-3/4 p-8 md:p-16 lg:p-24 overflow-y-auto">
        
        <!-- About Section -->
        <section id="about" class="mb-24">
            <h3 class="text-sm font-bold text-emerald-500 tracking-widest uppercase mb-4">About</h3>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Building reliable systems and clean code.</h2>
            <div class="text-lg text-slate-400 leading-relaxed space-y-4">
                <p>
                    I am a 4th-year BSIT student with a strong foundation in both the physical hardware that powers our technology and the code that runs it. My academic journey in Bangued has equipped me with practical problem-solving skills and a deep understanding of network architectures.
                </p>
                <p>
                    Whether I'm configuring a local network for a small business or developing a responsive web application, I approach every project with a focus on efficiency, security, and scalability.
                </p>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="mb-24">
            <h3 class="text-sm font-bold text-emerald-500 tracking-widest uppercase mb-8">Technical Arsenal</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                
                <div>
                    <div class="flex justify-between text-sm text-white mb-2">
                        <span>Network Administration</span> <span class="text-amber-500">90%</span>
                    </div>
                    <div class="w-full bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-white mb-2">
                        <span>Hardware & Troubleshooting</span> <span class="text-amber-500">95%</span>
                    </div>
                    <div class="w-full bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-white mb-2">
                        <span>PHP & Database Management</span> <span class="text-amber-500">80%</span>
                    </div>
                    <div class="w-full bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-white mb-2">
                        <span>Web Design (HTML/Tailwind)</span> <span class="text-amber-500">85%</span>
                    </div>
                    <div class="w-full bg-slate-800 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-500 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="mb-12">
            <h3 class="text-sm font-bold text-emerald-500 tracking-widest uppercase mb-8">Experience</h3>
            
            <div class="space-y-8">
                <!-- OJT Card -->
                <div class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-emerald-500 p-6 rounded-2xl transition-all duration-300">
                    <div class="flex flex-col md:flex-row justify-between md:items-center mb-4">
                        <h4 class="text-xl font-bold text-white group-hover:text-emerald-400 transition">IT Infrastructure Intern</h4>
                        <span class="text-sm text-amber-500 font-mono mt-2 md:mt-0">2025</span>
                    </div>
                    <p class="text-sm text-slate-300 font-medium mb-3">Provincial Government Office | Bangued, Abra</p>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        Assisted the IT department in maintaining local networks, configuring office workstations, and providing technical support to various departments. Managed database backups and updated system logs.
                    </p>
                    <div class="flex gap-2">
                        <span class="text-xs bg-slate-900 text-emerald-500 px-3 py-1 rounded-full border border-slate-700">Networking</span>
                        <span class="text-xs bg-slate-900 text-emerald-500 px-3 py-1 rounded-full border border-slate-700">Tech Support</span>
                    </div>
                </div>

                <!-- Project Card -->
                <div class="group bg-slate-800/50 hover:bg-slate-800 border border-slate-700 hover:border-emerald-500 p-6 rounded-2xl transition-all duration-300">
                    <div class="flex flex-col md:flex-row justify-between md:items-center mb-4">
                        <h4 class="text-xl font-bold text-white group-hover:text-emerald-400 transition">Academic Capstone Developer</h4>
                        <span class="text-sm text-amber-500 font-mono mt-2 md:mt-0">2025 - 2026</span>
                    </div>
                    <p class="text-sm text-slate-300 font-medium mb-3">University Project</p>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        Co-developed an inventory and asset tracking web application for local school laboratories using PHP and MySQL. Implemented responsive design principles for mobile compatibility.
                    </p>
                    <div class="flex gap-2">
                        <span class="text-xs bg-slate-900 text-emerald-500 px-3 py-1 rounded-full border border-slate-700">PHP</span>
                        <span class="text-xs bg-slate-900 text-emerald-500 px-3 py-1 rounded-full border border-slate-700">MySQL</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="pt-8 border-t border-slate-800 text-sm text-slate-500 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; 2026 Alder. Built with Laravel.</p>
            <p class="mt-2 md:mt-0"><i class="fas fa-map-marker-alt text-emerald-500 mr-1"></i> Bangued, Abra, Philippines</p>
        </footer>

    </main>
</body>
</html>