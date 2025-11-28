<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Kaindoy - Technical Problem Solver</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Keyframe for the "Alive" Effect */
        @keyframes subtle-pulse {
            0%, 100% {
                transform: translateY(0);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
            }
            50% {
                transform: translateY(-1px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
            }
        }
    </style>
    <script>
        // Customizing Tailwind colors and fonts and adding animation
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#3B82F6', // Tailwind blue-500
                        'dark-bg': '#0D1117', // Even darker for a modern Github/Vercel feel
                        'dark-card': '#161B22', // Slightly lighter card for depth
                        'text-light': '#F0F6FC', // Near-white text
                        'accent-cyan': '#22D3EE', // Tailwind cyan-400
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-dark-bg text-text-light font-sans antialiased">

    <nav class="bg-dark-card/80 backdrop-blur-md shadow-2xl fixed w-full top-0 z-50 border-b border-gray-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="text-3xl font-extrabold tracking-tight transition duration-300 hover:text-accent-cyan">
                    <span class="text-white">Alex</span><span class="text-primary-blue">Kaindoy</span>
                </a>

                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">About Me</a>
                    <a href="#experience" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">Background</a>
                    <a href="#projects" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">Demonstrations</a>
                    <a href="#skills" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">Skills Inventory</a>
                    <a href="#education" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">Education</a>
                    <a href="#contact" class="text-lg font-semibold text-gray-300 hover:text-primary-blue transition duration-300 hover:scale-105">Connect</a>
                </div>

                <button id="mobile-menu-btn"
                    class="md:hidden p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-dark-card border-t border-gray-700/50">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">About Me</a>
                <a href="#experience" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">Background</a>
                <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Demonstrations</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Skills Inventory</a>
                <a href="#education" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Education</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Connect</a>
            </div>
        </div>
    </nav>

    <main>
        <section id="hero" class="pt-48 pb-32 px-4 relative overflow-hidden bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-br from-dark-bg via-gray-900 to-gray-950 opacity-90"></div>
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary-blue/30 rounded-full blur-3xl opacity-20 animate-pulse-slow"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-accent-cyan/30 rounded-full blur-3xl opacity-20 animate-pulse-slow delay-1000"></div>

            <div class="max-w-7xl mx-auto text-center relative z-10">
                <p class="text-lg md:text-xl text-primary-blue font-medium mb-4 uppercase tracking-widest">
                    Process Documentation & Digital Prototyping
                </p>
                <h1 class="text-6xl sm:text-7xl lg:text-9xl font-extrabold text-white leading-none mb-6">
                    Hello, I'm <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-accent-cyan">Alex
                        Kaindoy</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 mb-12 max-w-4xl mx-auto">
                    A dedicated Problem Solver focused on developing elegant, efficient technical solutions to
                    complex organizational and digital challenges.
                </p>

                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#projects"
                        class="group bg-primary-blue text-white px-10 py-4 rounded-lg font-bold text-xl shadow-2xl shadow-primary-blue/30 hover:shadow-primary-blue/60 transition duration-300 transform hover:scale-[1.03] hover:translate-y-[-2px] border-2 border-primary-blue">
                        View Project Demonstrations
                        <span class="ml-2 inline-block transition-transform group-hover:translate-x-1 ease-out duration-200">→</span>
                    </a>
                    <a href="{{ asset('resume.pdf') }}" download
                        class="border-2 border-gray-600 text-gray-300 px-10 py-4 rounded-lg font-semibold text-xl hover:border-accent-cyan hover:text-accent-cyan transition duration-300 transform hover:scale-[1.03] hover:shadow-lg hover:shadow-gray-700/40">
                        Download Professional CV
                    </a>
                </div>
            </div>
        </section>

        <div class="bg-gray-950">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="about" class="py-24 bg-dark-bg">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-5xl font-extrabold text-white mb-2 text-center">
                    My Approach
                </h2>
                <p class="text-xl text-primary-blue font-medium mb-16 text-center">// Technical Focus & Mindset</p>
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div class="order-2 md:order-1">
                        <div
                            class="w-full h-80 bg-dark-card rounded-2xl shadow-2xl border-2 border-gray-700/50 overflow-hidden transform hover:scale-[1.01] transition duration-500">
                            
                            <img src="{{ asset('Kaindoy.jpg') }}" alt="Alex Kaindoy professional portrait"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="text-gray-400 text-lg space-y-7 leading-relaxed order-1 md:order-2">
                        <p class="text-white text-2xl font-semibold border-l-4 border-primary-blue pl-4">
                            "Bridging complex technical requirements with clear, tangible user benefits is my primary goal."
                        </p>
                        <p>
                            Motivated professional with hands-on experience in technical analysis, process documentation, and user support. I excel at deconstructing organizational challenges into efficient technical blueprints.
                        </p>
                        <p>
                            Possesses foundational programming knowledge in languages like C++ and full-stack development using environments such as Laravel, XAMPP, and MySQL. This blend of front-end and back-end understanding allows for comprehensive problem-solving.
                        </p>
                        <p>
                            Committed to optimizing technical workflows, integrating disparate systems, and delivering effective, user-centric solutions that drive measurable business or operational improvements.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-dark-bg">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="experience" class="py-24 bg-dark-bg">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-5xl font-extrabold text-white mb-2 text-center">
                    Professional Background
                </h2>
                <p class="text-xl text-primary-blue font-medium mb-16 text-center">// Roles & Responsibilities</p>
                
                <div class="max-w-4xl mx-auto space-y-12">

                    <div class="bg-dark-card p-8 rounded-xl border border-gray-700/70 shadow-2xl hover:shadow-primary-blue/20 transition duration-300 transform hover:translate-y-[-4px]">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-3">
                            <h3 class="text-2xl font-bold text-primary-blue">Consultant (Staff Augmentation)</h3>
                            <span class="text-sm font-medium text-gray-500 mt-1 sm:mt-0">February 2025 - August 2025</span>
                        </div>
                        <p class="text-xl text-white font-semibold mb-4">Black Box, supporting Maxicare</p>
                        <ul class="list-disc text-gray-400 space-y-3 ml-6">
                            <li class="pl-2">Documented and optimized Oracle Health Insurance (OHI) system processes, serving as a key resource in a staff augmentation setup.</li>
                            <li class="pl-2">Analyzed and mapped business processes and workflows to identify critical improvement areas and enhance operational efficiency (e.g., Business Process Analysis).</li>
                            <li class="pl-2">Developed comprehensive user reference guides and workflow documentation, improving clarity and consistency for cross-functional teams.</li>
                            <li class="pl-2">Provided Level 1/2 technical support for OHI system users, ensuring system stability and user proficiency.</li>
                        </ul>
                    </div>

                    <div class="bg-dark-card p-8 rounded-xl border border-gray-700/70 shadow-2xl hover:shadow-accent-cyan/20 transition duration-300 transform hover:translate-y-[-4px]">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-3">
                            <h3 class="text-2xl font-bold text-accent-cyan">SEO & Content Management Intern</h3>
                            <span class="text-sm font-medium text-gray-500 mt-1 sm:mt-0">January - May 2024</span>
                        </div>
                        <p class="text-xl text-white font-semibold mb-4">CDL Innovative IT Solutions</p>
                        <ul class="list-disc text-gray-400 space-y-3 ml-6">
                            <li class="pl-2">Executed SEO optimization efforts and maintained digital presence by updating site content via WordPress and MyRealPage CMS.</li>
                            <li class="pl-2">Monitored website performance using Google Search Console, proactively identifying and resolving technical site issues.</li>
                            <li class="pl-2">Performed essential IT tasks, including assembling PC units and basic system configuration for internal client use.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        
        <div class="bg-dark-bg">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="projects" class="py-24 bg-dark-bg">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-5xl font-extrabold text-white mb-2 text-center">
                    Technical Demonstrations
                </h2>
                <p class="text-xl text-primary-blue font-medium mb-16 text-center">// Scalable Logic, Real-Time Data, and Full-Stack Development</p>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

                    <div class="bg-dark-card rounded-xl border border-gray-700/50 overflow-hidden shadow-2xl transform hover:scale-[1.03] hover:shadow-primary-blue/50 transition duration-500 ease-in-out">
                        
                        <img src="{{ asset('casa.png') }}" alt="Case Management System"
                            class="w-full h-56 object-cover border-b border-gray-700/50">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Social Worker Case Management System</h3>
                            <p class="text-gray-400 mb-4 line-clamp-3 h-18">
                                A full-stack system built for Casa Miani Sto. Nino, centralizing case data, documentation, and real-time worker communication.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="bg-primary-blue/20 text-primary-blue text-xs px-3 py-1 rounded-full font-medium">Laravel (PHP)</span>
                                <span class="bg-green-600/20 text-green-300 text-xs px-3 py-1 rounded-full font-medium">WebSocket (Real-Time)</span>
                                <span class="bg-purple-600/20 text-purple-300 text-xs px-3 py-1 rounded-full font-medium">ONLYOFFICE Docs</span>
                            </div>

                            <a href="#" class="text-primary-blue hover:text-accent-cyan flex items-center font-semibold group transition duration-300">
                                View Technical Overview
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="bg-dark-card rounded-xl border border-gray-700/50 overflow-hidden shadow-2xl transform hover:scale-[1.03] hover:shadow-primary-blue/50 transition duration-500 ease-in-out">
                         
                        <img src="{{ asset('event.png') }}" alt="Event Tabulation System"
                            class="w-full h-56 object-cover border-b border-gray-700/50">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Real-Time Event Tabulation System</h3>
                            <p class="text-gray-400 mb-4 line-clamp-3 h-18">
                                System designed for pageants to handle concurrent score entry, secure data aggregation, and instant result notification via WebSocket.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="bg-primary-blue/20 text-primary-blue text-xs px-3 py-1 rounded-full font-medium">Laravel/Blade</span>
                                <span class="bg-green-600/20 text-green-300 text-xs px-3 py-1 rounded-full font-medium">WebSockets</span>
                                <span class="bg-red-600/20 text-red-300 text-xs px-3 py-1 rounded-full font-medium">Complex Data Logic</span>
                            </div>
                            <a href="#" class="text-primary-blue hover:text-accent-cyan flex items-center font-semibold group transition duration-300">
                                View Data Architecture
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="bg-dark-card rounded-xl border border-gray-700/50 overflow-hidden shadow-2xl transform hover:scale-[1.03] hover:shadow-primary-blue/50 transition duration-500 ease-in-out">
                         
                        <img src="{{ 'ss.jpg' }}" alt="Process Improvement Tool"
                            class="w-full h-56 object-cover border-b border-gray-700/50">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Process Improvement Scripts</h3>
                            <p class="text-gray-400 mb-4 line-clamp-3 h-18">
                                Demonstrating foundational programming logic and automation capabilities for IT or data processing tasks using pure logic.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="bg-yellow-600/20 text-yellow-300 text-xs px-3 py-1 rounded-full font-medium">C++</span>
                                <span class="bg-yellow-600/20 text-yellow-300 text-xs px-3 py-1 rounded-full font-medium">System Logic</span>
                                <span class="bg-yellow-600/20 text-yellow-300 text-xs px-3 py-1 rounded-full font-medium">Automation</span>
                            </div>
                            <a href="#" class="text-primary-blue hover:text-accent-cyan flex items-center font-semibold group transition duration-300">
                                View Sample Code Snippet
                                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-dark-bg">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="skills" class="py-24 bg-dark-bg">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-5xl font-extrabold text-white mb-2 text-center">
                    Skills Inventory
                </h2>
                <p class="text-xl text-primary-blue font-medium mb-16 text-center">// The Tools of My Trade</p>
                
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12">
                        <h3 class="text-3xl font-bold text-primary-blue mb-6 text-center">Core Technical Stack</h3>
                        <div class="flex flex-wrap justify-center gap-4">
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🐘</span> Laravel (PHP)
                            </div>
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🐬</span> MySQL Database
                            </div>
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🛠️</span> HTML5 / CSS3
                            </div>
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">📜</span> JavaScript (Vanilla)
                            </div>
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">⚙️</span> C++ Fundamentals
                            </div>
                            <div class="bg-dark-card border-2 border-primary-blue text-white px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-primary-blue/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">📰</span> CMS Management (WordPress)
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h3 class="text-3xl font-bold text-accent-cyan mb-6 text-center">Logic & Architecture</h3>
                        <div class="flex flex-wrap justify-center gap-4">
                            <div class="bg-dark-card border-2 border-accent-cyan text-accent-cyan px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-accent-cyan/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">⚡</span> Real-Time Systems (WebSockets)
                            </div>
                            <div class="bg-dark-card border-2 border-accent-cyan text-accent-cyan px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-accent-cyan/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🔗</span> Third-Party Integration
                            </div>
                            <div class="bg-dark-card border-2 border-accent-cyan text-accent-cyan px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-accent-cyan/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🎨</span> UI/UX Implementation
                            </div>
                            <div class="bg-dark-card border-2 border-accent-cyan text-accent-cyan px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-accent-cyan/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🐙</span> Git & Version Control
                            </div>
                            <div class="bg-dark-card border-2 border-accent-cyan text-accent-cyan px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-accent-cyan/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">📐</span> Data Modeling & Querying
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-gray-400 mb-6 text-center">Process & Business</h3>
                        <div class="flex flex-wrap justify-center gap-4">
                            <div class="bg-dark-card border-2 border-gray-600 text-gray-400 px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-gray-600/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">📝</span> Process Documentation
                            </div>
                            <div class="bg-dark-card border-2 border-gray-600 text-gray-400 px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-gray-600/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">📈</span> Business Process Analysis
                            </div>
                            <div class="bg-dark-card border-2 border-gray-600 text-gray-400 px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-gray-600/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🔍</span> SEO & Web Analytics
                            </div>
                            <div class="bg-dark-card border-2 border-gray-600 text-gray-400 px-6 py-3 rounded-full text-lg font-medium shadow-md hover:shadow-gray-600/60 transition duration-200 transform hover:scale-[1.05]">
                                <span class="mr-2">🩺</span> Technical Troubleshooting
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="bg-dark-bg">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="education" class="py-24 bg-dark-bg">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-5xl font-extrabold text-white mb-2 text-center">
                    Education & Formal Training
                </h2>
                <p class="text-xl text-primary-blue font-medium mb-16 text-center">// Academic Foundation and Certifications</p>
                
                <div class="max-w-4xl mx-auto space-y-8">
                    <div class="bg-dark-card p-8 rounded-xl border border-gray-700/70 shadow-xl hover:shadow-primary-blue/20 transition duration-300 transform hover:scale-[1.01]">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-2">
                            <h3 class="text-2xl font-bold text-white">BSIT Major In Programming</h3>
                            <span class="text-primary-blue font-medium text-lg">2020 - 2024</span>
                        </div>
                        <p class="text-xl text-gray-300 mb-1 font-semibold">Southern Leyte State University - Tomas Oppus Campus</p>
                        <p class="text-gray-500 text-lg">Focus on core programming principles, software development lifecycle, and database management.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-dark-bg">
            <hr class="border-gray-800 max-w-7xl mx-auto">
        </div>

        <section id="contact" class="py-24 bg-dark-bg">
            <div
                class="max-w-3xl mx-auto px-4 text-center bg-dark-card rounded-2xl p-10 border border-primary-blue/50 shadow-2xl shadow-primary-blue/20">
                
                <h2 class="text-5xl font-extrabold text-white mb-4">
                    Let's Connect
                </h2>
                
                <p class="text-xl text-gray-400 mb-10">
                    I am actively seeking roles where my technical skills and problem-solving abilities can create
                    tangible value. Let's discuss how I can fit into your team.
                </p>

                <div class="flex flex-wrap justify-center gap-6">

                    <a href="mailto:alecxkan24@gmail.com?subject=Portfolio%20Inquiry"
                        class="flex flex-col items-center justify-center bg-primary-blue text-white rounded-xl shadow-lg hover:bg-blue-600 transition duration-300 transform hover:scale-[1.1] hover:shadow-primary-blue/50 p-4 w-28 h-28">
                        <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-sm font-semibold">Email Me</span>
                    </a>

                    <a href="https://github.com/jralexa" target="_blank"
                        class="flex flex-col items-center justify-center border-2 border-primary-blue text-primary-blue rounded-xl font-bold hover:bg-primary-blue hover:text-white transition duration-300 transform hover:scale-[1.1] hover:shadow-primary-blue/50 p-4 w-28 h-28">
                        <svg class="w-8 h-8 mb-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.385.599.111.793-.261.793-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.542-1.353-1.325-1.722-1.325-1.722-1.087-.744.084-.693.084-.693 1.205.084 1.838 1.234 1.838 1.234 1.07 1.834 2.809 1.305 3.493.998.108-.778.419-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.046.138 3.003.404 2.29-1.552 3.297-1.23 3.297-1.23.652 1.652.241 2.873.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.474 5.923.431.371.815 1.1.815 2.226 0 1.604-.015 2.894-.015 3.284 0 .318.192.694.8 1.383A12.003 12.003 0 0 0 12 0z" />
                        </svg>
                        <span class="text-sm font-semibold">GitHub</span>
                    </a>

                    <a href="{{ asset('resume.pdf') }}" download
                        class="flex flex-col items-center justify-center border-2 border-gray-600 text-gray-300 rounded-xl font-medium hover:border-accent-cyan hover:text-accent-cyan transition duration-300 transform hover:scale-[1.1] hover:shadow-gray-700/50 p-4 w-28 h-28">
                         <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span class="text-sm font-semibold">Download CV</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark-card border-t border-gray-800 text-gray-500 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm">&copy; 2026 Alex Kaindoy. Built with precision and modern tools.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const navLinks = menu.querySelectorAll('a');

            menuBtn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                menuBtn.querySelector('svg path').setAttribute('d', menu.classList.contains('hidden') ? 'M4 6h16M4 12h16m-7 6h7' : 'M6 18L18 6M6 6l12 12');
            });

            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    menuBtn.querySelector('svg path').setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                });
            });
        });
    </script>
</body>

</html>