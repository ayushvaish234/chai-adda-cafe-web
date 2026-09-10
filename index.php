<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chai Adda — Kadak Chai & Street Bites</title>
   <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Reenie+Beanie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-display { font-family: 'DM Serif Display', serif; }
        .font-hand { font-family: 'Reenie Beanie', cursive; }
        
        .bg-cream { background-color: #faf6f0; }
        .bg-warm-card { background-color: #ffffff; }
        .border-warm { border-color: #ede4d8; }
        .text-roast { color: #2e1810; }
        .text-caramel { color: #b45309; }
        .bg-caramel { background-color: #b45309; }
        
        .tag-active {
            background-color: #2e1810 !important;
            color: #faf6f0 !important;
            border-color: #2e1810 !important;
        }
    </style>
</head>
<body class="bg-cream text-stone-800 antialiased selection:bg-amber-200">

    <!-- Top Notice Bar -->
    <aside class="bg-[#23120b] text-[#ebd9cc] text-xs font-semibold tracking-wider text-center py-2 px-4 uppercase flex items-center justify-center gap-3">
        <span class="inline-block w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
        The Official Checkpoint for Chai Lovers • Steaming Hot All Day
    </aside>

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-[#faf6f0]/95 backdrop-blur-md border-b border-warm px-6 py-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="#home" class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-full overflow-hidden flex-shrink-0 border border-warm">
                    <img src="./images/favicon.png" class="w-full h-full object-cover" alt="Chai Adda Logo">
                </div>
                <div>
                    <span class="font-display text-2xl text-roast font-bold tracking-tight block leading-none">Chai Adda</span>
                    <span class="text-[10px] text-stone-500 font-bold uppercase tracking-widest">Kadak Chai & Street Bites</span>
                </div>
            </a>
            
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold text-stone-700">
                <a href="#home" class="hover:text-caramel transition">Home</a>
                <a href="#deals" class="hover:text-caramel transition">Combos</a>
                <a href="#about" class="hover:text-caramel transition">Our Story</a>
                <a href="#menu" class="hover:text-caramel transition">Menu</a>
                <a href="#contact" class="hover:text-caramel transition">Find Us</a>
            </div>

            <a href="#contact" class="bg-[#2e1810] text-[#faf6f0] px-5 py-2.5 rounded-full text-xs font-bold tracking-wide uppercase hover:bg-caramel transition shadow-sm">
                Get Directions
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="pt-12 pb-16 px-6 max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 text-caramel font-semibold text-xs tracking-wider uppercase bg-amber-100/70 px-3.5 py-1.5 rounded-full">
                    <i class="fas fa-fire-flame-curved"></i> Freshly Boiled • Butter-Toasted
                </div>
                
                <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl text-roast leading-[1.08]">
                    Hot Crispy Bites.<br>
                    <span class="italic text-caramel font-normal">Kadak</span> Chai.
                </h1>
                
                <p class="text-stone-600 text-lg max-w-lg leading-relaxed font-normal">
                    The neighborhood stop where Mumbai’s favorite crunchy Vada Pav meets slow-brewed ginger-cardamom chai. No shortcuts, just honest comfort food.
                </p>

                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#menu" class="bg-[#2e1810] hover:bg-caramel text-[#faf6f0] px-7 py-3.5 rounded-xl font-bold text-sm transition shadow-lg shadow-stone-900/10">
                        Explore Full Menu
                    </a>
                    <a href="#deals" class="bg-warm-card border border-warm hover:border-stone-400 text-stone-800 px-6 py-3.5 rounded-xl font-bold text-sm transition">
                        View Combos &rarr;
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md">
                    <!-- Main Food Photo -->
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-stone-200">
                        <img src="./images/cafe.jpg" onerror="this.src='https://images.unsplash.com/photo-1571934811356-5cc061b6821f?q=80&w=700'" class="w-full h-full object-cover" alt="Chai Adda ambiance">
                    </div>
                    
                    <!-- Floating Sticker Badge -->
                    <div class="absolute -bottom-4 left-2 sm:-bottom-6 sm:-left-6 bg-white p-4 rounded-2xl shadow-xl border border-warm max-w-[200px] sm:max-w-[210px]">
                        <span class="font-hand text-2xl text-caramel block -mb-1">House Favourite!</span>
                        <div class="text-xs font-bold text-roast">Garlic Butter Pav + Kulhad Chai</div>
                        <div class="text-[11px] text-stone-500 mt-0.5">The signature evening pair.</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Deals / Combos (With Image Support) -->
    <section id="deals" class="py-16 bg-[#f3ece2] border-y border-warm px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                <div>
                    <span class="text-caramel text-xs font-bold tracking-widest uppercase">Pocket-Friendly</span>
                    <h2 class="font-display text-3xl sm:text-4xl text-roast mt-1">Ongoing Deals & Combos</h2>
                </div>
                <p class="text-stone-500 text-sm mt-2 md:mt-0 font-medium">Bundled together so your snack break stays easy.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <?php
                $stmt = $pdo->query("SELECT * FROM deals WHERE is_active = 1");
                while ($deal = $stmt->fetch()) {
                    $dealPrice = isset($deal['price']) ? number_format((float)$deal['price'], 0) : '0';
                    $dealImg = !empty($deal['image']) ? 'uploads/' . htmlspecialchars($deal['image']) : '';
                    echo "
                    <div class='bg-warm-card rounded-2xl border border-warm shadow-sm hover:shadow-md transition overflow-hidden flex flex-col justify-between'>
                        <div>";
                            if ($dealImg) {
                                echo "<div class='h-44 w-full bg-stone-100 overflow-hidden border-b border-warm'>
                                        <img src='{$dealImg}' class='w-full h-full object-cover' alt='".htmlspecialchars($deal['title'] ?? '')."'>
                                      </div>";
                            }
                    echo "  <div class='p-6'>
                                <div class='flex justify-between items-start gap-3 mb-2'>
                                    <h3 class='font-bold text-lg text-roast leading-snug'>".htmlspecialchars($deal['title'] ?? '')."</h3>
                                    <span class='text-xs font-bold text-caramel bg-amber-50 px-2 py-0.5 rounded border border-amber-200'>COMBO</span>
                                </div>
                                <p class='text-stone-600 text-sm leading-relaxed'>".htmlspecialchars($deal['description'] ?? '')."</p>
                            </div>
                        </div>
                        <div class='px-6 pb-6 pt-2 flex items-baseline justify-between border-t border-warm/60'>
                            <span class='text-xs font-semibold text-stone-400 uppercase tracking-wider'>Special Price</span>
                            <span class='text-2xl font-black text-roast'>₹{$dealPrice}</span>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-5">
                <span class="text-caramel text-xs font-bold tracking-widest uppercase">The Routine</span>
                <h2 class="font-display text-3xl sm:text-4xl text-roast">Born from evening addas, rainy days, and honest cravings.</h2>
                <p class="text-stone-600 leading-relaxed">
                    Most cafes charge premium rates for watered-down tea, and typical stalls lack a clean place to sit. Chai Adda provides the quintessential Indian tea break: hand-crushed spices, slow milk boil, and sizzling snacks served fresh from the pan.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-warm-card border border-warm">
                        <div class="text-caramel font-bold text-xl mb-1">Desi Spices</div>
                        <div class="text-xs text-stone-500">Freshly pounded ginger, elaichi, and premium Assam tea leaves.</div>
                    </div>
                    <div class="p-4 rounded-xl bg-warm-card border border-warm">
                        <div class="text-caramel font-bold text-xl mb-1">Crisp & Hot</div>
                        <div class="text-xs text-stone-500">Every single pav is butter-toasted fresh on order.</div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <img src="./images/food.png" onerror="this.src='https://images.unsplash.com/photo-1544787219-7f47ccb76574?q=80&w=700'" class="rounded-2xl shadow-xl w-full h-80 object-cover border-4 border-white" alt="Warm chai and food">
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-warm-card border-t border-warm px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-caramel text-xs font-bold tracking-widest uppercase">Prepared Fresh Daily</span>
                <h2 class="font-display text-4xl text-roast mt-1">What's on the Counter</h2>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                <button class="menu-filter-btn tag-active px-5 py-2 rounded-full border border-warm text-xs font-bold uppercase tracking-wider text-stone-600 transition" onclick="filterMenu('All')">All Items</button>
                <button class="menu-filter-btn px-5 py-2 rounded-full border border-warm text-xs font-bold uppercase tracking-wider text-stone-600 transition" onclick="filterMenu('Chai')">Chai</button>
                <button class="menu-filter-btn px-5 py-2 rounded-full border border-warm text-xs font-bold uppercase tracking-wider text-stone-600 transition" onclick="filterMenu('Vada Pav')">Vada Pav</button>
                <button class="menu-filter-btn px-5 py-2 rounded-full border border-warm text-xs font-bold uppercase tracking-wider text-stone-600 transition" onclick="filterMenu('Coffee')">Coffee</button>
                <button class="menu-filter-btn px-5 py-2 rounded-full border border-warm text-xs font-bold uppercase tracking-wider text-stone-600 transition" onclick="filterMenu('Snacks')">Snacks</button>
            </div>

            <!-- Menu Grid -->
            <div class="grid md:grid-cols-2 gap-6" id="menu-container">
                <?php
                $stmt = $pdo->query("SELECT * FROM menu");
                while ($item = $stmt->fetch()) {
                    $category = htmlspecialchars($item['category'] ?? 'All');
                    $name = htmlspecialchars($item['name'] ?? '');
                    $desc = htmlspecialchars($item['description'] ?? '');
                    $price = isset($item['price']) ? number_format((float)$item['price'], 0) : '0';
                    $badge = !empty($item['label']) ? "<span class='text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-amber-100 text-amber-900 border border-amber-200'>".htmlspecialchars($item['label'])."</span>" : "";
                    
                    $imgUrl = !empty($item['image']) 
                        ? 'uploads/' . htmlspecialchars($item['image']) 
                        : 'https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=350';

                    echo "
                    <div class='menu-item p-4 rounded-2xl bg-cream/70 border border-warm hover:border-stone-400 transition flex gap-4 items-center' data-category='{$category}'>
                        <div class='w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden flex-shrink-0 bg-stone-200 border border-warm'>
                            <img src='{$imgUrl}' class='w-full h-full object-cover' alt='{$name}'>
                        </div>
                        <div class='flex-grow min-w-0'>
                            <div class='flex items-start justify-between gap-2 mb-1'>
                                <h3 class='font-bold text-roast text-base sm:text-lg truncate'>{$name}</h3>
                                <span class='font-black text-roast text-base sm:text-lg'>₹{$price}</span>
                            </div>
                            <div class='mb-2'>{$badge}</div>
                            <p class='text-stone-500 text-xs sm:text-sm line-clamp-2 leading-relaxed'>{$desc}</p>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact & Location -->
    <footer id="contact" class="py-16 bg-[#23120b] text-[#ebd9cc] px-6">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div>
                    <span class="text-amber-400 text-xs font-bold uppercase tracking-widest">Drop By</span>
                    <h2 class="font-display text-3xl sm:text-4xl text-[#faf6f0] mt-1">The Chai Adda</h2>
                </div>
                
                <div class="space-y-3 text-sm text-stone-300">
                    <p><i class="fas fa-location-dot w-6 text-amber-400"></i> Marine Drive / Food Street, Mumbai</p>
                    <p><i class="fas fa-clock w-6 text-amber-400"></i> Open Daily: 07:00 AM – 11:00 PM</p>
                    <p><i class="fas fa-phone w-6 text-amber-400"></i> +91 98765 43210</p>
                </div>

                <div class="pt-2 text-xs text-stone-400">
    <a href="admin/login.php" class="hover:text-amber-400 transition cursor-default" title="">©</a> 2026 The Chai Adda. Made for good food & slow conversations.
</div>
            </div>

            <div class="rounded-2xl overflow-hidden h-64 border border-stone-700 bg-stone-800">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.792224535316!2d72.8335!3d18.9894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU5JzIxLjgiTiA3MsKwNTAnMDAuNiJF!5e0!3m2!1sen!2sin!4v1625000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </footer>

    <script>
        function filterMenu(category) {
            const items = document.querySelectorAll('.menu-item');
            const btns = document.querySelectorAll('.menu-filter-btn');
            
            btns.forEach(btn => btn.classList.remove('tag-active'));
            event.target.classList.add('tag-active');

            items.forEach(item => {
                if (category === 'All' || item.getAttribute('data-category').toLowerCase() === category.toLowerCase()) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>