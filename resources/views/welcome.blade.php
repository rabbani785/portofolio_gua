<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Web Developer</title>

    @vite('resources/css/app.css')
    
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        slate: {
                            850: '#151f32', 
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-950 text-slate-300 font-sans antialiased flex flex-col min-h-screen selection:bg-sky-500 selection:text-white">

    
    <header class="fixed top-0 w-full bg-slate-900/80 backdrop-blur-md border-b border-slate-800 z-50 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <div class="flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-white tracking-tight hover:text-sky-400 transition">
                        Dev<span class="text-sky-500">.</span>Portfolio
                    </a>
                </div>
                
                
                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#" class="text-slate-300 hover:text-white transition font-medium">Home</a></li>
                        <li><a href="#projects" class="text-slate-300 hover:text-white transition font-medium">Projects</a></li>
                        <li><a href="#contact" class="text-slate-300 hover:text-white transition font-medium">Contact</a></li>
                    </ul>
                </nav>

                
                <div class="md:hidden flex items-center">
                    <button class="text-slate-300 hover:text-white focus:outline-none" aria-label="Open Menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    
    <main class="flex-grow flex items-center justify-center pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full text-center space-y-8">
            
            
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/50 border border-slate-700/50 text-sm font-medium text-sky-400 mb-4 shadow-sm">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                </span>
            
            </div>

            
            <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight">
                Building <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-blue-600">Digital</span> Experiences.
            </h1>
            
        
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Hi, I'm a passionate web developer focused on creating clean, responsive, and user-friendly websites. Let's turn your ideas into reality using modern web technologies.
            </p>
            
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="#projects" class="w-full sm:w-auto px-8 py-3.5 rounded-lg bg-sky-500 hover:bg-sky-400 text-slate-950 font-bold transition-all shadow-lg shadow-sky-500/30 flex items-center justify-center gap-2">
                    
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
                <a href="#contact" class="w-full sm:w-auto px-8 py-3.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-white font-medium border border-slate-700 transition-all flex items-center justify-center gap-2">
                    
                </a>
            </div>

    
            <div class="pt-16 border-t border-slate-800/50 mt-16">
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-6">Built With Modern Technologies</p>
                <div class="flex flex-wrap justify-center gap-6 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                    
                    <svg class="h-8 w-auto text-[#FF2D20]" viewBox="0 0 24 24" fill="currentColor"><path d="M22.015 7.159c-.067-.035-.145-.054-.226-.054h-2.146l-4.524 8.783h3.585l1.666-3.235h4.156l1.248-2.427h-4.045l.896-1.741h4.086c.074 0 .142-.023.2-.061.058-.04.101-.096.124-.162.023-.065.023-.137 0-.203a.357.357 0 00-.115-.144l-4.905-4.756zM8.384 12.653l4.522-8.784H9.32L0 20.91h3.313l6.452-12.532-1.381 4.275h3.045l-3.045 4.275h3.045l-3.045 4.275h3.045z"/></svg>
                
                    <svg class="h-8 w-auto text-[#06B6D4]" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624C10.337,13.382,8.976,12,6.001,12z"/></svg>
                    
                    <svg class="h-8 w-auto text-[#fb70a9]" viewBox="0 0 24 24" fill="currentColor"><path d="M15.42 21.053l-3.385-5.91L8.58 21.053a.853.853 0 0 1-1.464-.002L.893 10.155a.854.854 0 0 1 .006-.856L4.316 3.41A.854.854 0 0 1 5.043 3h3.454c.306 0 .588.163.738.428L12 8.232l2.765-4.804A.853.853 0 0 1 15.503 3h3.454c.307 0 .589.163.74.428l3.412 5.91a.854.854 0 0 1 .005.856l-6.23 10.857a.853.853 0 0 1-1.464.002zM12.046 9.87l-2.222 3.86a.855.855 0 0 0 .002.857l2.22 3.847 2.22-3.847a.855.855 0 0 0 .002-.857l-2.222-3.86z"/></svg>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-slate-900 border-t border-slate-800 py-8 text-center">
        <div class="max-w-6xl mx-auto px-4 flex flex-col items-center">
            <p class="text-slate-500 mb-4">&copy; 2026 Dev.Portfolio. Crafted with Laravel & Tailwind CSS.</p>
            
            <!-- Social Links (Simple Icons) -->
            <div class="flex space-x-6">
                <a href="#" class="text-slate-400 hover:text-white transition">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-white transition">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
