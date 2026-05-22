<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>STUDIO VERMEER | Luxe Kapperservaring</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&amp;family=Hanken+Grotesk:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#e4e2dd",
                        "on-surface-variant": "#444748",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#303030",
                        "on-tertiary-container": "#848480",
                        "outline": "#747878",
                        "on-secondary-fixed-variant": "#5d4201",
                        "on-surface": "#1b1c1c",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fed488",
                        "on-primary-fixed": "#1c1b1b",
                        "primary": "#000000",
                        "on-secondary-fixed": "#261900",
                        "surface-container-highest": "#e4e2e2",
                        "on-primary-fixed-variant": "#474746",
                        "surface-tint": "#5f5e5e",
                        "error": "#ba1a1a",
                        "surface-container": "#efeded",
                        "outline-variant": "#c4c7c7",
                        "surface-bright": "#fbf9f8",
                        "surface-container-high": "#eae8e7",
                        "background": "#fbf9f8",
                        "on-background": "#1b1c1c",
                        "secondary-fixed": "#ffdea5",
                        "surface-container-low": "#f5f3f3",
                        "tertiary-container": "#1b1c19",
                        "surface-variant": "#e4e2e2",
                        "surface": "#fbf9f8",
                        "secondary": "#775a19",
                        "on-tertiary-fixed-variant": "#474744",
                        "on-error-container": "#93000a",
                        "surface-dim": "#dbd9d9",
                        "inverse-on-surface": "#f2f0f0",
                        "error-container": "#ffdad6",
                        "tertiary": "#000000",
                        "primary-fixed-dim": "#c8c6c5",
                        "on-error": "#ffffff",
                        "inverse-primary": "#c8c6c5",
                        "on-secondary-container": "#785a1a",
                        "tertiary-fixed-dim": "#c8c6c2",
                        "on-tertiary-fixed": "#1b1c19",
                        "on-primary-container": "#858383",
                        "primary-container": "#1c1b1b",
                        "primary-fixed": "#e5e2e1",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#e9c176"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "section-gap": "120px",
                        "unit": "8px",
                        "margin-desktop": "64px",
                        "margin-mobile": "20px",
                        "container-max": "1200px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Bodoni Moda"],
                        "label-md": ["Hanken Grotesk"],
                        "headline-display": ["Bodoni Moda"],
                        "body-lg": ["Hanken Grotesk"],
                        "headline-lg": ["Bodoni Moda"],
                        "headline-md": ["Bodoni Moda"],
                        "body-md": ["Hanken Grotesk"],
                        "label-sm": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "label-md": ["14px", {"lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "headline-display": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "500"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .glass-nav {
            backdrop-filter: blur(12px);
        }
        .letter-spaced {
            letter-spacing: 0.1em;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-container/80 backdrop-blur-md border-b border-outline-variant/30">
<div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-container-max mx-auto">
<div class="font-headline-md text-headline-md font-semibold tracking-tight text-primary dark:text-on-surface cursor-pointer">
                STUDIO VERMEER
            </div>
<div class="hidden md:flex items-center gap-10">
<a class="font-label-md text-label-md uppercase tracking-[0.1em] text-on-surface-variant hover:text-primary transition-colors border-b border-transparent hover:border-primary pb-1" href="#services">Services</a>
<a class="font-label-md text-label-md uppercase tracking-[0.1em] text-on-surface-variant hover:text-primary transition-colors border-b border-transparent hover:border-primary pb-1" href="#gallery">Gallery</a>
<a class="font-label-md text-label-md uppercase tracking-[0.1em] text-on-surface-variant hover:text-primary transition-colors border-b border-transparent hover:border-primary pb-1" href="#about">About</a>
</div>
<a href="{{ route('afspraak.maken') }}" class="bg-primary text-on-primary font-label-md text-label-md uppercase tracking-[0.1em] px-8 py-3 transition-all duration-300 hover:bg-secondary-container hover:text-on-secondary-container active:opacity-70">
                Afspraak maken
            </a>
</div>
</nav>
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20">
<div class="absolute inset-0 z-0">
<img alt="Luxury Salon Interior" class="w-full h-full object-cover grayscale-[20%] opacity-90" data-alt="An expansive, high-end luxury hair salon interior with tall ceilings and minimalist architectural details. The lighting is soft and warm, reflecting off polished stone surfaces and cream-colored furniture. Large windows reveal a glimpse of a refined urban Dutch setting. The atmosphere is quiet, sophisticated, and exclusive, using a palette of deep charcoal and warm champagne tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoehcgw4iASUZJI6d-MkCwBbb_lctbYOVRb51H89J8WZffqsbgwtFeeSHG1QhS1h70aVWvgflUAS7o_klLzB20vmfMV43Fl0FKXQc8YyaO9XNEGJDNSUmXYTwJ7LNf_TdUWKNaV2--l8CojPkEZjX6qvcKmo7t98hlNsBOBMKGuCnhFLqs8FAjQLpinLVLdv3oJGXtPBxwA7sRSXXg4vc5Q8TB1UIrIUxyHVdMSJKeA0zstuxinmj55fFDUOwYbMhPsX06tKyokyM"/>
<div class="absolute inset-0 bg-gradient-to-r from-background/80 via-background/40 to-transparent"></div>
</div>
<div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<div class="max-w-2xl space-y-8">
<span class="font-label-md text-label-md uppercase tracking-[0.2em] text-secondary">Exclusiviteit &amp; Vakmanschap</span>
<h1 class="font-headline-display text-headline-lg-mobile md:text-headline-display text-primary leading-none">
                    Meesterlijk in Haarverzorging
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                    Stap binnen in een wereld van serene luxe in het hart van de stad. Bij Studio Vermeer combineren we artistieke visie met technische perfectie.
                </p>
<div class="pt-6">
<a href="{{ route('afspraak.maken') }}" class="bg-primary text-on-primary font-label-md text-label-md uppercase tracking-[0.1em] px-10 py-5 transition-all duration-300 hover:bg-secondary-container hover:text-on-secondary-container flex items-center gap-4 group">
                        Afspraak maken
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Diensten Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto" id="services">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
<div class="max-w-xl">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-6">Onze Diensten</h2>
<p class="font-body-md text-body-md text-on-surface-variant">
                    Een samengestelde selectie van behandelingen ontworpen om uw natuurlijke schoonheid te accentueren en uw haar de zorg te geven die het verdient.
                </p>
</div>
<div class="hidden md:block h-[1px] flex-grow bg-outline-variant/30 mx-12 mb-4"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Service 1 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] overflow-hidden mb-6">
<img alt="Knippen &amp; Styling" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A close-up photograph focusing on the intricate details of a high-fashion haircut. A professional stylist's hands are visible using premium shears on silky, charcoal-toned hair. The background is a blurred minimalist salon environment with warm, champagne-colored accent lighting. The composition is artistic and focuses on the precision of the cut and texture of the hair." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjul-m1uQ4R_qUhhyEGHDNrSCVLxkVnCtZhXmrvhj_81EsLjA0_Ln4031IvY9tyunneUCMA3Zxt7EpNXxyCpfBiqxUSzJlAsr44ckNjQ7itPuHMDzswzLA05M5rVZVegk20PZhCTrsoMGYGDyGMChQK3pcsQ21_KTZMPg1Y0FlK0r58-5XdCDnnNQgCnAHFO1KJTbFe58t0UVdlMqaKgmqipns9HYf5Yh90aORKrsm1XOuDksfXJvIMbXnlSlJeLPawgxp8lbCrvY"/>
</div>
<div class="space-y-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="content_cut">content_cut</span>
<h3 class="font-headline-md text-headline-md text-primary">Knippen &amp; Styling</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Van klassieke silhouetten tot moderne texturen, volledig afgestemd op uw gezichtsvorm en levensstijl.
                    </p>
<div class="font-label-md text-label-md uppercase tracking-wider text-secondary pt-2">Vanaf €65</div>
</div>
</div>
<!-- Service 2 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] overflow-hidden mb-6">
<img alt="Kleurbehandelingen" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A macro shot of luxurious hair being treated with premium color. The lighting captures the multidimensional tones of warm gold and deep brunette. Subtle steam or a fine mist suggests a high-end treatment process. The setting is clean and modern with soft-focus stone textures in the background, embodying a quiet luxury aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3dCtjDsIk9wSlz3FP-7kt3PCyKYXTUsnArIbOV52J73rSSmbrNpmO0Bl96Ht87o3CgSduWrHMWkJOPrE-PVahyLbNfvCCshwyXYa4c_6HQlNYy_3m1-QqFLmGu7O_lBDAn48gxpEXOQDg7W8dNWmFV7ppWMXuwEPddqfOrWMiIg2jq5ml90cufYpw1_9OJ2--tYtk41gBaajDhpcg-ZQPu7d77ydsb4VzPo8rElUv_bVP3ymXU-MVcmldPiPwU-S8U6nwso0slss"/>
</div>
<div class="space-y-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="palette">palette</span>
<h3 class="font-headline-md text-headline-md text-primary">Kleurbehandelingen</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Meesterlijke balayage, subtiele highlights of een volledige transformatie met respect voor de haarconditie.
                    </p>
<div class="font-label-md text-label-md uppercase tracking-wider text-secondary pt-2">Vanaf €120</div>
</div>
</div>
<!-- Service 3 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] overflow-hidden mb-6">
<img alt="Exclusieve Haarverzorging" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A serene moment of a client receiving an exclusive hair spa treatment. Soft focus on the application of a rich, creamy mask to healthy, glowing hair. The environment is spa-like with neutral cream tones, candlelight flicker, and minimalist glass bottles of premium hair products. The mood is one of profound relaxation and premium care." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8bJH1pq1N5DPFZ5tf2jZiNC9KaLkfLhBpEG-9LNCoo8PigBtfLz4kHrpnHuLTfn8HWzSMYgIz6SbrwSsaD3TlxSknUTgBDasNYU1recvQGQBLlpcRi1YUeEHRkr0k7enA6TMLdbrzmUQNcA1mTKi_sY4LE81_OQbA_SRD4HlLf0wksLjqPbhiol8rpYl8S-qH96vAou-W8ghhrS2VfAtB-5EPXNRiGFvrINn8y6_j3pzm5IILzPWT1IqD9ecWeH0i2RLu-vewHs0"/>
</div>
<div class="space-y-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="spa">spa</span>
<h3 class="font-headline-md text-headline-md text-primary">Exclusieve Verzorging</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Intensieve herstelbehandelingen en hoofdhuidrituelen met de meest exclusieve producten ter wereld.
                    </p>
<div class="font-label-md text-label-md uppercase tracking-wider text-secondary pt-2">Vanaf €45</div>
</div>
</div>
</div>
</section>
<!-- Onze Filosofie Section -->
<section class="bg-surface-container-low py-section-gap" id="about">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
<div class="order-2 md:order-1 relative">
<div class="aspect-square bg-surface-container-highest overflow-hidden">
<img alt="Onze Filosofie" class="w-full h-full object-cover mix-blend-multiply opacity-90" data-alt="A portrait of a sophisticated hair stylist in a minimalist, high-end salon. The stylist is dressed in elegant, neutral-toned professional attire. The background features clean architectural lines, warm lighting, and a few high-end hair care products on a stone shelf. The overall image exudes expertise, professionalism, and the quiet luxury of an Amsterdam boutique salon." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbjOpy7Y37ai4vIYIucjFNmFWIP1QlmXOzkJAKD5nHe0qW98iMZr9BUff-aRfcx9WdWvqOuGmGUlHDnmCiryoMgwKvaU6eZ-Mp9z9bBm9wZ48Dsp4RqT2S5AByDuJT91GQcm-cb24sM_-Pocl9s95CXJAl7D1wTUKn0hkHztZlYHcHSBZpppEavSBxQgfULMI5rzVKtVWM7Jyejnh5i6ZJ2LtH_l8c5FBUDdnpHfWRWY3qlgoJUfHGLB3jSv9418qDAUKxFtJ6ISw"/>
</div>
<div class="absolute -bottom-10 -right-10 w-64 h-64 border border-secondary/20 hidden lg:block"></div>
</div>
<div class="order-1 md:order-2 space-y-8">
<span class="font-label-md text-label-md uppercase tracking-[0.2em] text-secondary">Onze Filosofie</span>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">Aandacht voor elk detail</h2>
<div class="space-y-6 font-body-lg text-body-lg text-on-surface-variant">
<p>
                        Bij Studio Vermeer geloven we dat luxe niet gaat over luidruchtig zijn, maar over de perfectie van de uitvoering en de sereniteit van de ervaring.
                    </p>
<p>
                        Onze experts nemen de tijd om naar uw wensen te luisteren. We werken uitsluitend met biologisch afbreekbare, premium producten die de gezondheid van uw haar op de lange termijn waarborgen.
                    </p>
</div>
<div class="grid grid-cols-2 gap-8 pt-6">
<div>
<div class="font-headline-md text-headline-md text-primary mb-2">15+</div>
<div class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Jaren Expertise</div>
</div>
<div>
<div class="font-headline-md text-headline-md text-primary mb-2">100%</div>
<div class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Premium Producten</div>
</div>
</div>
</div>
</div>
</section>
<!-- Gallerij Section -->
<section class="py-section-gap overflow-hidden" id="gallery">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-16">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary text-center">Gallerij</h2>
</div>
<div class="flex gap-gutter px-gutter overflow-x-auto snap-x no-scrollbar pb-8">
<div class="flex-none w-[300px] md:w-[450px] aspect-[3/4] snap-center">
<img alt="Gallery 1" class="w-full h-full object-cover" data-alt="Editorial fashion photography of a model with voluminous, perfectly styled hair in a soft blonde tone. The lighting is high-contrast and dramatic, emphasizing the healthy shine and flow of the hair. The background is a simple, neutral cream wall in a bright studio setting. The mood is high-fashion and sophisticated." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAafVIqWvlH20KNsU4wry5SGyq-xCftkqYFVBWyXchA2V2iEq-lFBv29_O99Nmo_15tuN9v0zGMWPnk0FTBbZYkI98EJYSN2Ev7xWO2GhWAAXazKmlpWBRzLXsz_Jj_CDmIyg2W-EDXQg_D2ravW5yvyW37Y9k0VHMrYXyUy5MCLo02SHSURakdLBH3BJNgczGKJjwvclxtOJdJhESWxTpJnuTgaxZ3qiI3u-ldQp3nZO74-iZARPacRc4oN-_aIofXhXclc06bBTM"/>
</div>
<div class="flex-none w-[300px] md:w-[450px] aspect-[3/4] snap-center">
<img alt="Gallery 2" class="w-full h-full object-cover" data-alt="Modern hair coloring showcase featuring a seamless balayage transition from deep espresso to warm caramel. The hair is styled in loose, elegant waves. The image is captured from behind in a minimalist salon with soft, natural window light. The palette is dominated by warm earth tones and cream." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd8Z34kgvXQ8mnrgO8QbNzDaLN9wDQz6uCKZgcYO3c4tVfRcU6YCoWmGNKDRSNKEpN1Y9wSfFVdVon4IyLKetcbU7nJxXtzI8ldkzF1Uq4SsuURNlaN8ZupmXmgiInMgScpRkwvOAaq6btKWMYf0xijY7Z5ZknY2dMmHF7_RjxFemyk_B3siVLEm3ADaZ7RndQ5_mqWc1pC6lAbM1h9eMHNzh9QDnM3bOy1174mhLFgxTUnY73J7SE80N0ydzVCU8CNnhjf6tBFTQ"/>
</div>
<div class="flex-none w-[300px] md:w-[450px] aspect-[3/4] snap-center">
<img alt="Gallery 3" class="w-full h-full object-cover" data-alt="Close-up detail of a sophisticated bridal hairstyle with intricate braids and minimalist floral accents. The lighting is ethereal and soft, creating a romantic and high-end feel. The hair has a natural, healthy texture and deep chestnut color. The background is a clean, bright architectural space." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwpOK6uhD_2dY1M5dIzxXLeB1yBFV-gqN3yPWMI8ioof772BqkoVmXF77krtrouHCeHOczTj-diThy1RfNAI-MTgsPS4tyT73oSPZIRuy8upaAjuRQmMhmrw1TlXnb9qIdLmTzPY4gHbNj-rYu5wSKiCO-Pj0m8G4IS0uXA1Zo7LJ_-8icwn-EqcJpuuViEV7qLfuWBgZBgKbHj47g1ijMny5G_ez7XkR6eCANAN2jwAkf4TS-3xSoLoCgiciTd4LB2YSwGvlktrI"/>
</div>
<div class="flex-none w-[300px] md:w-[450px] aspect-[3/4] snap-center">
<img alt="Gallery 4" class="w-full h-full object-cover" data-alt="A striking portrait of a male client with a precise, high-end barber cut. The styling is impeccable and modern. The setting is a luxury charcoal-toned salon station with professional tools arranged neatly. The lighting highlights the sharp lines and clean finish of the style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiMJL7qA1tnSPs1__ABJPgwR_R5rFcoNscRq9w3qVYlhi6UC2LatuGf6XsSkdQALJNo06eFF0gH5F_inbCFfPF3Sim_VWqWnmWof0XnU1LT6VnVS3f8UXRMil8s-PxvM8MEuMesXypY1uOpnYC2qEBawy8g08dYEYAHKYGu9V9VHpVZnQOO_ZqxiKC6gQ-11PhJnTEiUbnEIYHXPahqjSQnrZ92Ie7BeKSQsUZvEkkq000aEPVlHN4FZVdvzCOOlE5SXZYKkNlYE4"/>
</div>
</div>
</section>
<!-- Call to Action Section -->
<section class="bg-primary text-on-primary py-32 text-center">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto space-y-10">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg leading-tight">Klaar voor een transformatie?</h2>
<p class="font-body-lg text-body-lg text-on-primary/70 max-w-xl mx-auto">
                Beleef de ultieme haarverzorging in een omgeving van rust en exclusiviteit. Reserveer vandaag nog uw moment bij Studio Vermeer.
            </p>
<div class="flex justify-center pt-4">
<a href="{{ route('afspraak.maken') }}" class="bg-on-primary text-primary font-label-md text-label-md uppercase tracking-[0.1em] px-12 py-5 transition-all duration-300 hover:bg-secondary-fixed hover:text-on-secondary-fixed active:opacity-70">
                    Afspraak maken
                </a>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest w-full py-section-gap border-t border-outline-variant/20">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<!-- Brand & Info -->
<div class="space-y-8">
<div class="font-headline-md text-headline-md text-primary dark:text-on-surface">STUDIO VERMEER</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xs">
                    Meesterschap in haarverzorging en exclusieve rituelen. Uw bestemming voor luxe in de stad.
                </p>
<div class="flex gap-4">
<a class="w-10 h-10 border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors" href="#">
<span class="material-symbols-outlined text-sm" data-icon="share">share</span>
</a>
<a class="w-10 h-10 border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors" href="#">
<span class="material-symbols-outlined text-sm" data-icon="photo_camera">photo_camera</span>
</a>
</div>
</div>
<!-- Contact & Hours -->
<div class="space-y-8">
<h4 class="font-label-md text-label-md uppercase tracking-widest text-primary">Contact &amp; Openingstijden</h4>
<ul class="font-body-md text-body-md text-on-surface-variant space-y-4">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary text-[18px]" data-icon="location_on">location_on</span>
                        Prinsengracht 124, 1016 DZ Amsterdam
                    </li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary text-[18px]" data-icon="call">call</span>
                        +31 (0)20 123 4567
                    </li>
<li class="pt-4 border-t border-outline-variant/20">
                        Ma - Vr: 09:00 - 20:00<br/>
                        Za: 09:00 - 18:00<br/>
                        Zo: Gesloten
                    </li>
</ul>
</div>
<!-- Links & Policy -->
<div class="space-y-8 md:text-right">
<h4 class="font-label-md text-label-md uppercase tracking-widest text-primary">Navigatie</h4>
<ul class="space-y-4">
<li><a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#services">Diensten</a></li>
<li><a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#gallery">Gallerij</a></li>
<li><a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#">Algemene Voorwaarden</a></li>
</ul>
<p class="font-label-sm text-label-sm uppercase tracking-[0.05em] text-on-surface-variant/60 pt-10">
                    © 2024 STUDIO VERMEER. ALLE RECHTEN VOORBEHOUDEN.
                </p>
</div>
</div>
</footer>
<script>
        // Smooth reveal interaction for gallery on scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
            observer.observe(section);
        });

        // Sticky nav color change
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-sm');
            } else {
                nav.classList.remove('shadow-sm');
            }
        });
    </script>
</body></html>
