<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <title>Manpreet Rai | Portfolio</title>

    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VVD1PH6TVT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-VVD1PH6TVT');
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Vite Imports -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased scrollbar-thin scrollbar-thumb-white scrollbar-track-transparent">
<!-- Navigation Header -->
<header class="sticky top-0 z-10 md:py-4 text-white">
    <div class="flex items-center max-w-7xl mx-auto px-2 md:px-6 lg:px-8 h-16">
        <div class="relative flex md:hidden w-full">
            <div class="flex w-full justify-between">
                <a href="/" class="h-12 w-12 flex justify-center items-center">
                    <svg class="h-8 w-8" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="512" height="512" fill="white"/>
                        <path d="M232.182 248.818H280.727L332 373.909H334.182L385.455 248.818H434V435H395.818V313.818H394.273L346.091 434.091H320.091L271.909 313.364H270.364V435H232.182V248.818Z"
                              fill="#0115A8"/>
                    </svg>
                </a>

                <button id="menuButton" aria-label="menuButton"
                        class="absolute inset-y-0 right-0 h-12 w-12 flex justify-center items-center" onclick="function toggleMenu(){
                                        document.getElementById('menu-mobile').classList.toggle('hidden');
                                    } toggleMenu();">

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                         stroke="currentColor">
                        <path d="M4 6H20M4 12H20M4 18C5.36683 18 6.13317 18 7.5 18C8.86683 18 11 18 11 18"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="hidden md:flex justify-between w-full">
            <a href="/" class="h-12 w-auto flex justify-center items-center">
                <svg class="h-12 w-auto" viewBox="0 0 1536 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="512" height="512" fill="white"/>
                    <path d="M232.182 248.818H280.727L332 373.909H334.182L385.455 248.818H434V435H395.818V313.818H394.273L346.091 434.091H320.091L271.909 313.364H270.364V435H232.182V248.818Z"
                          fill="#0115A8"/>
                    <path d="M618.355 148.364H646.42L676.062 220.682H677.324L706.966 148.364H735.031V256H712.957V185.942H712.064L684.209 255.474H669.178L641.322 185.679H640.429V256H618.355V148.364ZM772.333 256H747.947L785.105 148.364H814.431L851.537 256H827.15L800.189 172.96H799.348L772.333 256ZM770.809 213.692H828.412V231.456H770.809V213.692ZM954.522 148.364V256H934.865L888.037 188.254H887.249V256H864.492V148.364H884.463L930.924 216.057H931.87V148.364H954.522ZM973.324 256V148.364H1015.79C1023.95 148.364 1030.91 149.923 1036.65 153.041C1042.4 156.125 1046.78 160.417 1049.79 165.918C1052.84 171.384 1054.37 177.69 1054.37 184.838C1054.37 191.986 1052.82 198.293 1049.74 203.759C1046.66 209.224 1042.19 213.482 1036.34 216.53C1030.52 219.578 1023.48 221.102 1015.21 221.102H988.145V202.865H1011.53C1015.91 202.865 1019.52 202.112 1022.36 200.605C1025.23 199.063 1027.37 196.944 1028.77 194.246C1030.21 191.513 1030.93 188.377 1030.93 184.838C1030.93 181.264 1030.21 178.146 1028.77 175.483C1027.37 172.785 1025.23 170.7 1022.36 169.229C1019.49 167.722 1015.84 166.969 1011.43 166.969H996.081V256H973.324ZM1069.15 256V148.364H1111.61C1119.74 148.364 1126.68 149.818 1132.43 152.726C1138.21 155.599 1142.6 159.681 1145.62 164.972C1148.67 170.227 1150.19 176.411 1150.19 183.524C1150.19 190.672 1148.65 196.821 1145.57 201.972C1142.48 207.087 1138.02 211.011 1132.16 213.744C1126.35 216.477 1119.3 217.844 1111.04 217.844H1082.6V199.554H1107.36C1111.7 199.554 1115.31 198.958 1118.18 197.767C1121.06 196.576 1123.19 194.789 1124.6 192.406C1126.03 190.024 1126.75 187.063 1126.75 183.524C1126.75 179.95 1126.03 176.937 1124.6 174.484C1123.19 172.032 1121.04 170.175 1118.13 168.913C1115.26 167.617 1111.63 166.969 1107.25 166.969H1091.91V256H1069.15ZM1127.28 207.017L1154.03 256H1128.91L1102.73 207.017H1127.28ZM1166.27 256V148.364H1238.8V167.126H1189.03V192.774H1235.07V211.537H1189.03V237.237H1239.01V256H1166.27ZM1256.89 256V148.364H1329.42V167.126H1279.65V192.774H1325.69V211.537H1279.65V237.237H1329.63V256H1256.89ZM1343.42 167.126V148.364H1431.82V167.126H1398.86V256H1376.37V167.126H1343.42ZM618.355 435V327.364H660.821C668.95 327.364 675.887 328.818 681.634 331.726C687.415 334.599 691.812 338.681 694.825 343.972C697.874 349.227 699.398 355.411 699.398 362.524C699.398 369.672 697.856 375.821 694.773 380.972C691.689 386.087 687.222 390.011 681.371 392.744C675.554 395.477 668.512 396.844 660.243 396.844H631.81V378.554H656.564C660.909 378.554 664.518 377.958 667.391 376.767C670.264 375.576 672.401 373.789 673.803 371.406C675.239 369.024 675.957 366.063 675.957 362.524C675.957 358.95 675.239 355.937 673.803 353.484C672.401 351.032 670.246 349.175 667.338 347.913C664.465 346.617 660.839 345.969 656.459 345.969H641.112V435H618.355ZM676.483 386.017L703.234 435H678.112L651.939 386.017H676.483ZM734.033 435H709.646L746.804 327.364H776.131L813.236 435H788.849L761.888 351.96H761.047L734.033 435ZM732.509 392.692H790.111V410.456H732.509V392.692ZM848.948 327.364V435H826.191V327.364H848.948Z"
                          fill="white"/>
                </svg>
            </a>

            <div class="flex justify-center items-center">
                <a class="flex font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300"
                   href="https://linkedin.com/in/raidesigns">LinkedIn</a>
                <a class="flex font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300"
                   href="https://github.com/manpreet-rai">GitHub</a>
                <a class="flex font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300" href="/#contact">Contact</a>
                <a class="flex font-medium whitespace-nowrap ml-4 px-4 py-2 bg-white hover:bg-opacity-30 hover:text-white focus:bg-opacity-30 focus:text-white color-blue hover:bg-gray-300 transition-all duration-200"
                   href="/#work">View Work</a>
            </div>
        </div>
    </div>
</header>

<!-- Email Status -->
@if(session('status'))
    <div id="status" class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 text-center py-5 bg-white color-blue relative">
        <span class="p-1">{{ session('status') }}</span>
    </div>
@endif

<!-- Location Label -->
<div class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 text-center pt-16">
    <svg class="text-white fill-current stroke-current mr-2 h-6 w-6 inline-flex animate-spin" viewBox="0 0 48 48"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 44 6 33.7V13.75L24 4l18 9.75V33.7Zm-5.7-24.9q1.15-1.15 2.625-1.875Q22.4 16.5 24 16.5t3.075.725q1.475.725 2.625 1.875l7.65-4.5L24 7.5l-13.35 7.1Zm4.2 20.6v-8.35q-2.6-.7-4.3-2.725Q16.5 26.6 16.5 24q0-.5.05-1.05t.3-1.2L9 17.1v14.85ZM24 28.5q1.9 0 3.2-1.325Q28.5 25.85 28.5 24q0-1.9-1.3-3.2-1.3-1.3-3.2-1.3-1.85 0-3.175 1.3Q19.5 22.1 19.5 24q0 1.85 1.325 3.175Q22.15 28.5 24 28.5Zm1.5 11.2L39 31.95V17.1l-7.85 4.65q.25.7.3 1.225.05.525.05 1.025 0 2.6-1.7 4.625t-4.3 2.725Z"/>
    </svg>
    <span>Based in Surrey, BC Canada</span>
</div>

<!-- Headline -->
<div class="max-w-7xl mx-auto flex justify-center items-center flex-col py-16 px-2 md:px-6 lg:px-8 text-4xl md:text-6xl lg:text-9xl grotesk font-black uppercase min-h-max">
    <div class="role">
        I'm A Creative
    </div>
    <div class="role uppercase">
        Web & Graphic
    </div>
    <div class="role">
        Designer
    </div>
</div>

<a href="/#work" class="flex justify-center items-center mb-16">
    <svg class="hidden lg:inline h-8 w-8 text-white fill-current stroke-current animate-bounce" viewBox="0 0 48 48"
         xmlns="http://www.w3.org/2000/svg">
        <path d="m24 30.75-12-12 2.15-2.15L24 26.5l9.85-9.85L36 18.8Z"/>
    </svg>
</a>

<div id="work" class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 font-bold grotesk tracking-widest pb-8 uppercase">
    Selected Works <br>
    <span>See My <a href="https://github.com/manpreet-rai">Github</a> For More</span>
    <span>
                <svg class="inline lg:hidden ml-3 h-8 w-8 text-white fill-current stroke-current animate-bounce-right"
                     viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.075 23.6748L19.075 35.6748L16.925 33.5248L26.825 23.6748L16.975 13.8248L19.125 11.6748L31.075 23.6748Z"/>
                </svg>
            </span>
</div>

<!-- Carousal -->
<div id="gallery" class="snap-mandatory flex mx-auto overflow-x-auto gap-x-12 mb-24 color-blue no-scrollbar">
    @foreach($sites as $site)
        <!-- {{ $site['txt'] }} -->
        <a href="https://{{ $site['url'] }}"
           class="relative work-sample hover-this overflow-hidden bg-gray-200 flex flex-none justify-center items-center transition-transform ease-in-out duration-300 hover:scale-90 hover:rounded-3xl">
            <img src="/samples/{{$site['img']}}" alt=""
                 class="relative w-full h-auto transition-transform ease-in-out duration-300 hover:scale-105">
            <div class="absolute flex flex-col justify-center items-center top-0 left-0 h-full w-full opacity-90 hover:opacity-0 transition-opacity duration-200 text-white"
                 style="background-color: #0115a8;">
                @include("components.svgs.".$site['svg'])
                <p class="text-sm mt-4">{{$site['txt']}}</p>
            </div>
        </a>
    @endforeach

    <div class="cursor z-30"></div>
</div>

<div class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 font-bold grotesk tracking-widest py-12">
    <p class="w-full lg:w-2/5 uppercase">
        I create Digital Experiences that merge Graphic Design, Development, Creative Strategy, Web Design, Prototyping
        & Digital Interactions.
    </p>
</div>

<div class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 flex flex-col lg:flex-row py-12 justify-between gap-x-0 gap-y-12 lg:gap-x-6 lg:gap-y-0">
    <div class="flex font-bold tracking-widest">
        <div class="relative flex flex-col pl-16">
            <span class="grotesk uppercase">Prototype</span>
            <ul class="mt-8 opacity-70 text-sm font-normal pl-6">
                <li class="line-list pl-3 pb-1">Figma</li>
                <li class="line-list pl-3 pb-1">AdobeXD</li>
                <li class="line-list pl-3 pb-1">Illustrator</li>
                <li class="line-list pl-3">Photoshop</li>
            </ul>
            <div class="absolute w-12 left-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-12 w-auto text-white fill-current">
                    <path d="M3.5 42q-.65 0-1.075-.425Q2 41.15 2 40.5q0-.65.425-1.075Q2.85 39 3.5 39h41q.65 0 1.075.425Q46 39.85 46 40.5q0 .65-.425 1.075Q45.15 42 44.5 42ZM7 36q-1.2 0-2.1-.9Q4 34.2 4 33V9q0-1.2.9-2.1Q5.8 6 7 6h34q1.2 0 2.1.9.9.9.9 2.1v24q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h34V9H7v24Zm0 0V9v24Z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="flex font-bold tracking-widest">
        <div class="relative flex flex-col pl-16">
            <span class="grotesk uppercase">Content Strategy</span>
            <ul class="mt-8 opacity-70 text-sm font-normal pl-6">
                <li class="line-list pl-3 pb-1">Photography</li>
                <li class="line-list pl-3 pb-1">Illustrations</li>
                <li class="line-list pl-3 pb-1">Animation</li>
            </ul>
            <div class="absolute w-12 left-0">
                <svg class="inline h-12 w-auto text-white fill-current" viewBox="0 0 48 48" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.2 34.15H17.2V20.4H14.2V34.15ZM22.5 34.15H25.5V13.85H22.5V34.15ZM30.8 34.15H33.8V26.75H30.8V34.15ZM9 42C8.2 42 7.5 41.7 6.9 41.1C6.3 40.5 6 39.8 6 39V9C6 8.2 6.3 7.5 6.9 6.9C7.5 6.3 8.2 6 9 6H39C39.8 6 40.5 6.3 41.1 6.9C41.7 7.5 42 8.2 42 9V39C42 39.8 41.7 40.5 41.1 41.1C40.5 41.7 39.8 42 39 42H9ZM9 39H39V9H9V39ZM9 9V39V9Z"
                          fill="white"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="flex font-bold tracking-widest">
        <div class="relative flex flex-col pl-16">
            <span class="grotesk uppercase">Digital Branding</span>
            <ul class="mt-8 opacity-70 text-sm font-normal pl-6">
                <li class="line-list pl-3 pb-1">Web Design</li>
                <li class="line-list pl-3 pb-1">User Experience</li>
                <li class="line-list pl-3 pb-1">Visual Design</li>
                <li class="line-list pl-3">User Interface</li>
            </ul>
            <div class="absolute w-12 left-0">
                <svg class="inline h-12 w-auto text-white fill-current" viewBox="0 0 44 44" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.4 37.65L9.4 31.2C8.93333 30.9333 8.575 30.5667 8.325 30.1C8.075 29.6333 7.95 29.1333 7.95 28.6V15.75C7.95 15.2167 8.075 14.7167 8.325 14.25C8.575 13.7833 8.93333 13.4167 9.4 13.15L20.45 6.6C20.9167 6.33333 21.4333 6.2 22 6.2C22.5667 6.2 23.0833 6.33333 23.55 6.6L34.6 13.15C35.0667 13.4167 35.425 13.7833 35.675 14.25C35.925 14.7167 36.05 15.2167 36.05 15.75V28.6C36.05 29.1333 35.9167 29.6333 35.65 30.1C35.3833 30.5667 35.0167 30.9333 34.55 31.2L23.4 37.65C22.9333 37.9167 22.4333 38.05 21.9 38.05C21.3667 38.05 20.8667 37.9167 20.4 37.65ZM20.5 34.2V23L11 17.55V28.5L20.5 34.2ZM23.5 34.2L33.05 28.5V17.55L23.5 23V34.2ZM0 9.45V5.6C0 4.03333 0.541667 2.70833 1.625 1.625C2.70833 0.541667 4.03333 0 5.6 0H9.45V3H5.6C4.86667 3 4.25 3.25 3.75 3.75C3.25 4.25 3 4.86667 3 5.6V9.45H0ZM5.6 44C4.03333 44 2.70833 43.4583 1.625 42.375C0.541667 41.2917 0 39.9667 0 38.4V34.55H3V38.4C3 39.1333 3.25 39.75 3.75 40.25C4.25 40.75 4.86667 41 5.6 41H9.45V44H5.6ZM34.55 43.8V40.8H38.4C39.1333 40.8 39.75 40.55 40.25 40.05C40.75 39.55 41 38.9333 41 38.2V34.35H44V38.2C44 39.7667 43.4583 41.0917 42.375 42.175C41.2917 43.2583 39.9667 43.8 38.4 43.8H34.55ZM41 9.45V5.6C41 4.86667 40.75 4.25 40.25 3.75C39.75 3.25 39.1333 3 38.4 3H34.55V0H38.4C39.9667 0 41.2917 0.541667 42.375 1.625C43.4583 2.70833 44 4.03333 44 5.6V9.45H41ZM22 20.3L31.5 14.8L22 9.35L12.5 14.8L22 20.3Z"
                          fill="white"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 font-bold grotesk tracking-widest py-12 md:py-14 lg:py-16">
    <p class="w-full lg:w-2/5 uppercase">
        Some of the Skills I've had a blast to work with throughout the last years.
    </p>
</div>

<div class="text-4xl md:text-6xl lg:text-8xl relative flex overflow-x-hidden pb-12 md:pb-16 lg:pb-24">
    <div class="py-12 animate-marquee whitespace-nowrap">
        @foreach($skills as $skill)
            <span class="mx-4 md:mx-6">{{$skill}}</span>
        @endforeach
    	&nbsp;
    </div>

    <div class="absolute top-0 py-12 animate-marquee2 whitespace-nowrap">
        @foreach($skills as $skill)
            <span class="mx-4 md:mx-6">{{$skill}}</span>
        @endforeach
    	&nbsp;
    </div>
</div>

<div class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 font-bold grotesk tracking-widest pb-12 md:pb-14 lg:pb-16">
    <p class="w-full lg:w-2/5 uppercase pb-6 uppercase">
        Resume <br>
        <a href="/resume_manpreet.pdf" class="underline lg:no-underline hover:underline">You can click here for PDF
            version</a>
    </p>

    @include('components.resume')
</div>

<div id="contact"
     class="max-w-7xl mx-auto px-2 md:px-6 lg:px-8 font-bold grotesk tracking-widest py-12 md:py-14 lg:py-16">
    <p class="w-full lg:w-2/5 uppercase pb-6 uppercase">
        Contact Me <br>
        <span>Have something to offer?</span>
    </p>

    <form class="inter" action="/" method="post" style="cursor: none">
        @csrf
        <div class="flex flex-col md:flex-row gap-y-6 gap-x-0 md:gap-y-0 md:gap-x-6">
            <div class="w-full">
                <label style="cursor: none" class="text-sm block" for="name">Name</label>
                <input style="cursor: none"
                       class="w-full mt-2 bg-color-blue px-3 py-2 text-lg border-2 border-white focus:outline-none"
                       type="text" id="name" name="name" required>
            </div>
            <div class="w-full">
                <label style="cursor: none" class="text-sm block" for="contact">Email / Phone(Incl. ISD Code)</label>
                <input style="cursor: none"
                       class="w-full mt-2 bg-color-blue px-3 py-2 text-lg border-2 border-white focus:outline-none"
                       type="text" id="contact" name="contact" required>
            </div>
        </div>
        <div class="mt-4 w-full">
            <label style="cursor: none" class="text-sm block" for="message">Message</label>
            <textarea style="cursor: none"
                      class="w-full mt-2 bg-color-blue px-3 py-2 text-lg border-2 border-white focus:outline-none"
                      id="message" name="message" minlength="5" required placeholder="Atleast 5 or more words..."
                      rows="6"></textarea>
        </div>

        <div class="g-recaptcha my-4" data-sitekey="6LdupCgpAAAAAPzwGMpttG3puRSOPT3KHsu1_i2k"></div>

        <div class="mt-4">
            <input style="cursor: none" type="submit"
                   class="px-4 py-2 bg-white hover:bg-opacity-30 hover:text-white focus:bg-opacity-30 focus:text-white color-blue hover:bg-gray-300 transition-all duration-200">
            <input style="cursor: none" type="reset"
                   class="px-4 py-2 ml-4 text-white hover:text-red-500 transition-all duration-200">
        </div>
    </form>
</div>

<footer class="text-center pb-24">
    <svg class="h-8 md:h-12 w-auto block mx-auto" viewBox="0 0 1536 512" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="512" height="512" fill="white"></rect>
        <path d="M232.182 248.818H280.727L332 373.909H334.182L385.455 248.818H434V435H395.818V313.818H394.273L346.091 434.091H320.091L271.909 313.364H270.364V435H232.182V248.818Z"
              fill="#0115A8"></path>
        <path d="M618.355 148.364H646.42L676.062 220.682H677.324L706.966 148.364H735.031V256H712.957V185.942H712.064L684.209 255.474H669.178L641.322 185.679H640.429V256H618.355V148.364ZM772.333 256H747.947L785.105 148.364H814.431L851.537 256H827.15L800.189 172.96H799.348L772.333 256ZM770.809 213.692H828.412V231.456H770.809V213.692ZM954.522 148.364V256H934.865L888.037 188.254H887.249V256H864.492V148.364H884.463L930.924 216.057H931.87V148.364H954.522ZM973.324 256V148.364H1015.79C1023.95 148.364 1030.91 149.923 1036.65 153.041C1042.4 156.125 1046.78 160.417 1049.79 165.918C1052.84 171.384 1054.37 177.69 1054.37 184.838C1054.37 191.986 1052.82 198.293 1049.74 203.759C1046.66 209.224 1042.19 213.482 1036.34 216.53C1030.52 219.578 1023.48 221.102 1015.21 221.102H988.145V202.865H1011.53C1015.91 202.865 1019.52 202.112 1022.36 200.605C1025.23 199.063 1027.37 196.944 1028.77 194.246C1030.21 191.513 1030.93 188.377 1030.93 184.838C1030.93 181.264 1030.21 178.146 1028.77 175.483C1027.37 172.785 1025.23 170.7 1022.36 169.229C1019.49 167.722 1015.84 166.969 1011.43 166.969H996.081V256H973.324ZM1069.15 256V148.364H1111.61C1119.74 148.364 1126.68 149.818 1132.43 152.726C1138.21 155.599 1142.6 159.681 1145.62 164.972C1148.67 170.227 1150.19 176.411 1150.19 183.524C1150.19 190.672 1148.65 196.821 1145.57 201.972C1142.48 207.087 1138.02 211.011 1132.16 213.744C1126.35 216.477 1119.3 217.844 1111.04 217.844H1082.6V199.554H1107.36C1111.7 199.554 1115.31 198.958 1118.18 197.767C1121.06 196.576 1123.19 194.789 1124.6 192.406C1126.03 190.024 1126.75 187.063 1126.75 183.524C1126.75 179.95 1126.03 176.937 1124.6 174.484C1123.19 172.032 1121.04 170.175 1118.13 168.913C1115.26 167.617 1111.63 166.969 1107.25 166.969H1091.91V256H1069.15ZM1127.28 207.017L1154.03 256H1128.91L1102.73 207.017H1127.28ZM1166.27 256V148.364H1238.8V167.126H1189.03V192.774H1235.07V211.537H1189.03V237.237H1239.01V256H1166.27ZM1256.89 256V148.364H1329.42V167.126H1279.65V192.774H1325.69V211.537H1279.65V237.237H1329.63V256H1256.89ZM1343.42 167.126V148.364H1431.82V167.126H1398.86V256H1376.37V167.126H1343.42ZM618.355 435V327.364H660.821C668.95 327.364 675.887 328.818 681.634 331.726C687.415 334.599 691.812 338.681 694.825 343.972C697.874 349.227 699.398 355.411 699.398 362.524C699.398 369.672 697.856 375.821 694.773 380.972C691.689 386.087 687.222 390.011 681.371 392.744C675.554 395.477 668.512 396.844 660.243 396.844H631.81V378.554H656.564C660.909 378.554 664.518 377.958 667.391 376.767C670.264 375.576 672.401 373.789 673.803 371.406C675.239 369.024 675.957 366.063 675.957 362.524C675.957 358.95 675.239 355.937 673.803 353.484C672.401 351.032 670.246 349.175 667.338 347.913C664.465 346.617 660.839 345.969 656.459 345.969H641.112V435H618.355ZM676.483 386.017L703.234 435H678.112L651.939 386.017H676.483ZM734.033 435H709.646L746.804 327.364H776.131L813.236 435H788.849L761.888 351.96H761.047L734.033 435ZM732.509 392.692H790.111V410.456H732.509V392.692ZM848.948 327.364V435H826.191V327.364H848.948Z"
              fill="white"></path>
    </svg>
</footer>

<!-- Mobile Menu -->
<div id="menu-mobile"
     class="hidden md:hidden w-full h-full fixed top-0 overflow-y-auto z-10 backdrop-filter backdrop-blur-md">
    <div class="flex flex-col relative pt-4 w-4/5 min-h-screen bg-white">
        <div class="flex sticky top-4 w-full justify-end pr-4">
            <button class="h-8 w-8 p-2 flex justify-center items-center bg-color-blue text-white" onclick="function toggleMenu(){
                                document.getElementById('menu-mobile').classList.toggle('hidden');
                            } toggleMenu();">
                <svg class="h-6 w-6 text-white" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3L67 67" stroke="currentColor" stroke-width="6"/>
                    <path d="M67 3L3 67" stroke="currentColor" stroke-width="6"/>
                </svg>
            </button>
        </div>

        <div class="p-8 space-y-2">
            <a class="inline-flex justify-between items-center w-full text-lg font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300 color-blue"
               href="https://linkedin.com/in/raidesigns">
                <span>LinkedIn</span>
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24"
                     class="w-4 h-4 stroke-current">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <a class="inline-flex justify-between items-center w-full text-lg font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300 color-blue"
               href="https://github.com/manpreet-rai">
                <span>GitHub</span>
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24"
                     class="w-4 h-4 stroke-current">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <a class="inline-flex justify-between items-center w-full text-lg font-medium whitespace-nowrap px-4 py-2 hover:text-gray-300 color-blue"
               href="/#contact">
                <span>Contact</span>
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24"
                     class="w-4 h-4 stroke-current">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <a class="inline-flex justify-between items-center w-full text-lg font-medium whitespace-nowrap px-4 py-2 mt-4 bg-color-blue text-white hover:bg-opacity-30 hover:text-white focus:bg-opacity-30 transition-all duration-200"
               href="/#work">
                <span>View Work</span>
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24"
                     class="w-4 h-4 stroke-current">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<script src="{{ asset('/js/anime.min.js') }}"></script>
</body>
</html>
