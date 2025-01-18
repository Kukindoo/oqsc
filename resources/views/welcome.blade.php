<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="icon" href="{{ asset('storage/images/oqsc_logo_v2.png') }}" type="image/x-icon">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="font-sans antialiased bg-oqsc-bg text-oqsc-text scroll-smooth">
<div class="text-oqsc-text">
    <nav x-data="{ open: false }" class="border-b-2 border-oqsc-heading-start">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('welcome') }}">
                            <img class="h-20 w-auto text-oqsc-text"
                                 src="{{ asset('storage/images/oqsc_logo_v2.png') }}"
                                 alt="OQSC Logo">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <a href="{{ route('welcome') }}"
                           class="inline-flex items-center px-5 pt-1 text-sm font-medium leading-5 text-oqsc-text
                                    hover:bg-oqsc-cta-hover hover:border-oqsc-cta-hover
                                    focus:outline-none focus:text-oqsc-cta-hover
                                    transition duration-150 ease-in-out"
                        >
                            Home
                        </a>
                    </div>
                </div>
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400
                            hover:text-gray-500 hover:bg-gray-100
                            focus:outline-none focus:bg-gray-100 focus:text-gray-500
                            transition duration-150 ease-in-out"
                            aria-label="Toggle menu" :aria-expanded="open">
                        <svg class="h-8 w-8 text-oqsc-heading-start" stroke="currentColor" fill="none"
                             viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('welcome') }}"
                   class="block px-3 py-2 text-base font-medium text-oqsc-text
                   hover:bg-oqsc-cta-hover
                   focus:outline-none focus:bg-oqsc-cta-hover
                   transition duration-150 ease-in-out"
                >
                    Home
                </a>
            </div>
        </div>
    </nav>
    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-oqsc-cta-hover selection:text-oqsc-text">
        <div class="relative w-full max-w-2xl lg:px-6 lg:max-w-7xl">
            <main class="container mx-auto sm:px-6 lg:px-8">

                <!-- Hero -->
                <x-oqsc.containers.section variant="isolated">
                    <x-oqsc.effects.glare/>
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        {{--                            <div--}}
                        {{--                                class="relative rounded-full px-3 py-1 text-sm/6 text-oqsc-text ring-1 ring-oqsc-cta hover:ring-oqsc-cta-hover">--}}
                        {{--                                Announcement of some sort <a href="{{ route('welcome') }}"--}}
                        {{--                                                             class="font-semibold text-indigo-600">--}}
                        {{--                                    <span class="absolute inset-0" aria-hidden="true"></span>--}}
                        {{--                                    Read more <span aria-hidden="true">&rarr;</span></a>--}}
                        {{--                            </div>--}}
                    </div>
                    <div class="text-center">
                        <x-oqsc.headings.h1>
                            Place to grow your Quranic knowledge
                        </x-oqsc.headings.h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-oqsc-text sm:text-xl/8">
                            The Otago Quran Study Club <span class="text-grey-100 opacity-20">(OQSC)</span> is a
                            not-for-proft organisation with a
                            vibrant community dedicated to promoting Islamic knowledge, fostering
                            spiritual growth, and building strong connections within the Muslim
                            community in Dunedin as well as whole of New Zealand. We are commited
                            to providing a welcoming and inclusive environment for individuals of all ages
                            and backgrounds to learn, engage, and connect with their faith.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            {{--                                <a href="#"--}}
                            {{--                                   class="rounded-md bg-oqsc-cta px-3.5 py-2.5 text-sm font-semibold text-oqsc-text shadow-sm--}}
                            {{--                                   hover:bg-oqsc-cta-hover hover:text-oqsc-text--}}
                            {{--                                   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get--}}
                            {{--                                    started</a>--}}
                            <x-oqsc.buttons.secondary href="#offer_section">
                                Learn more <span aria-hidden="true">→</span>
                            </x-oqsc.buttons.secondary>
                        </div>
                    </div>
                </x-oqsc.containers.section>

                <!-- Offerings -->
                <x-oqsc.containers.section id="offer_section">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <x-oqsc.headings.overheading>
                            We offer
                        </x-oqsc.headings.overheading>
                        <x-oqsc.headings.h2>
                            Everything you need grow your islamic knowledge,
                        </x-oqsc.headings.h2>
                        <x-oqsc.headings.afterheading>
                            Our courses range from 12-week programs to 6-month and even 2-year certifications, covering
                            Ijazah, certifying teachers, Quran recitation for reverts, Seerah, and weekly Tafsir.
                        </x-oqsc.headings.afterheading>
                    </div>
                    <x-oqsc.small-cards.container>
                        <x-oqsc.small-cards.item title="Seerah Course">
                            <p>
                                Seerah courses focus on life of prophet Muhammad(pbuh)
                            </p>
                            <p class="mt-6">
                                {{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400" >Learn more <span aria-hidden="true">→</span></a>--}}
                            </p>
                        </x-oqsc.small-cards.item>

                        <x-oqsc.small-cards.item title="Weekly Quaran Tafseer">
                            <p class="flex-auto">
                                Immerse yourself in Quran with explanations in our weekly
                                meetings or online.
                            </p>
                            <p class="mt-6">
                                {{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                            </p>
                        </x-oqsc.small-cards.item>

                        <x-oqsc.small-cards.item title="Ijazah Course">
                            <p class="flex-auto">
                                Advance your confidence in reading Quran with tajweed. Courses are led by Sheikh Amir.
                            </p>
                            <p class="mt-6">
                                {{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                            </p>
                        </x-oqsc.small-cards.item>

                        <x-oqsc.small-cards.item title="Qari Future Programme">
                            <p class="flex-auto">
                                For those who want to become a Qari, this course is for you.
                            </p>
                            <p class="mt-6">
                                {{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                            </p>
                        </x-oqsc.small-cards.item>

                        <x-oqsc.small-cards.item title="Bridging course">
                            <p class="flex-auto">
                                Bridging course
                            </p>
                            <p class="mt-6">
                                {{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                            </p>
                        </x-oqsc.small-cards.item>

                    </x-oqsc.small-cards.container>
                </x-oqsc.containers.section>

                <!-- Visionaire -->
                <x-oqsc.containers.section id="visionaire">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <x-oqsc.headings.h2>
                            The Otago Quran Study Club's vision is
                        </x-oqsc.headings.h2>
                        <x-oqsc.headings.afterheading>
                            To be a leading center and resource for Islamic knowledge and a thriving
                            community hub in Dunedin as well as New Zealand, building foundations for
                            community based on authentic islamic and quranic knowledge, fostering
                            spiritual growth, cultural understanding, and strong relationships among
                            Muslims.
                        </x-oqsc.headings.afterheading>
                    </div>

                    <x-oqsc.headings.paragraph-heading>
                        Three simple missions
                    </x-oqsc.headings.paragraph-heading>

                    <div class="mx-auto mt-12 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                    Promote Islamic knowledge and resources
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base/7 text-oqsc-text">
                                    <p class="flex-auto">Offer a variety of Quran study programs and workshops to
                                        enhance understanding of Islamic teachings by inspiring, engaging, and
                                        providing educational tools, resources and opportunities.</p>
                                </dd>
                            </div>
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                    Foster spiritual growth
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base/7 text-oqsc-text">
                                    <p class="flex-auto">Create a supportive community where individuals can deepen
                                        their spiritual connection and develop a strong relationship with Allah.</p>
                                </dd>
                            </div>
                            <div class="flex flex-col">
                                <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                    Build community
                                </dt>
                                <dd class="mt-4 flex flex-auto flex-col text-base/7 text-oqsc-text">
                                    <p class="flex-auto">
                                        Organize social and cultural events to bring together
                                        Muslims in Dunedin and strengthen bonds within the community.
                                    </p>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </x-oqsc.containers.section>


                <!-- Testimonial -->
                <x-oqsc.containers.section variant="isolated-wide" id="testimonials">
                    <x-oqsc.effects.glare variant="secondary"/>
                    <div class="mx-auto max-w-2xl text-center">
                        <x-oqsc.headings.overheading>Testimonials</x-oqsc.headings.overheading>
                        <x-oqsc.headings.h2>
                            We have worked with hundreds of amazing people
                        </x-oqsc.headings.h2>
                    </div>
                    <div
                        class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm/6
                            text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col
                            xl:grid-cols-4">
                        <!-- Main Testimonial -->
                        <figure
                            class="rounded-2xl bg-none shadow-lg ring-1 ring-oqsc-cta-hover sm:col-span-2
                                xl:col-start-2 xl:row-end-1">
                            <blockquote
                                class="p-6 text-lg font-semibold tracking-tight
                                    text-oqsc-text sm:p-12 sm:text-xl/8">
                                <p>
                                    “While attending OQSC weekly Quran classes, I have learned a lot about Surahs
                                    and deepen my knowledge about history of Islam”
                                </p>
                            </blockquote>
                            <figcaption
                                class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-oqsc-cta-hover
                                    px-6 py-4 sm:flex-nowrap">
                                {{--                                    <img class="size-10 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80" alt="">--}}
                                <div class="flex-auto">
                                    <div class="font-semibold text-oqsc-text">Jakub</div>
                                </div>
                                {{--                                    <img class="h-10 w-auto flex-none" src="https://tailwindui.com/plus/img/logos/savvycal-logo-gray-900.svg" alt="">--}}
                            </figcaption>
                        </figure>
                        <!-- Left side Testimonial -->
                        <div class="space-y-8 xl:contents xl:space-y-0">
                            <div class="space-y-8 xl:row-span-2">
                                <figure class="rounded-2xl bg-none p-6 shadow-lg ring-1 ring-oqsc-cta-hover">
                                    <blockquote class="text-oqsc-text">
                                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus
                                            nihil. Aut enim doloremque et ipsam.”</p>
                                    </blockquote>
                                    <figcaption class="mt-6 flex items-center gap-x-4">
                                        <img class="size-10 rounded-full bg-gray-50"
                                             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                        <div>
                                            <div class="font-semibold text-oqsc-text">Leslie Alexander</div>
                                            <div class="text-gray-600">@lesliealexander</div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <!-- More testimonials... -->
                            </div>
                            <!-- Left Under Main Testimonial -->
                            <div class="space-y-8 xl:row-start-1">
                                <figure class="rounded-2xl bg-none p-6 shadow-lg ring-1 ring-oqsc-cta-hover">
                                    <blockquote class="text-oqsc-text">
                                        <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae
                                            ipsam ut officia rem nulla blanditiis.”</p>
                                    </blockquote>
                                    <figcaption class="mt-6 flex items-center gap-x-4">
                                        <img class="size-10 rounded-full bg-gray-50"
                                             src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                        <div>
                                            <div class="font-semibold text-oqsc-text">Lindsay Walton</div>
                                            <div class="text-gray-600">@lindsaywalton</div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <!-- More testimonials... -->
                            </div>
                        </div>
                        <!-- Right under main Testimonial -->
                        <div class="space-y-8 xl:contents xl:space-y-0">
                            <div class="space-y-8 xl:row-start-1">
                                <figure class="rounded-2xl bg-none p-6 shadow-lg ring-1 ring-oqsc-cta-hover">
                                    <blockquote class="text-oqsc-text">
                                        <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis
                                            repudiandae. Earum deserunt enim molestiae ipsum perferendis recusandae
                                            saepe corrupti.”</p>
                                    </blockquote>
                                    <figcaption class="mt-6 flex items-center gap-x-4">
                                        <img class="size-10 rounded-full bg-gray-50"
                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                        <div>
                                            <div class="font-semibold text-oqsc-text">Tom Cook</div>
                                            <div class="text-gray-600">@tomcook</div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <!-- More testimonials... -->
                            </div>

                            <!-- Right side Testimonial -->
                            <div class="space-y-8 xl:row-span-2">
                                <figure class="rounded-2xl bg-none p-6 shadow-lg ring-1 ring-oqsc-cta-hover">
                                    <blockquote class="text-oqsc-text">
                                        <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit
                                            incidunt excepturi rerum voluptatem minus harum.”</p>
                                    </blockquote>
                                    <figcaption class="mt-6 flex items-center gap-x-4">
                                        <img class="size-10 rounded-full bg-gray-50"
                                             src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                             alt="">
                                        <div>
                                            <div class="font-semibold text-oqsc-text">Leonard Krasner</div>
                                            <div class="text-gray-600">@leonardkrasner</div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <!-- More testimonials... -->
                            </div>
                        </div>
                    </div>
                </x-oqsc.containers.section>

                <!-- Stats -->
                <x-oqsc.containers.section id="statistics">
                    <div class="mx-auto max-w-2xl lg:max-w-none">
                        <div class="text-center">
                            <x-oqsc.headings.h2>
                                Trusted by students worldwide
                            </x-oqsc.headings.h2>
                        </div>
                        <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center
                            sm:grid-cols-2 lg:grid-cols-4">
                            <div class="flex flex-col bg-white/5 p-8">
                                <dt class="text-sm/6 font-semibold text-oqsc-text">Student to the day</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                    80
                                </dd>
                            </div>
                            <div class="flex flex-col bg-white/5 p-8">
                                <dt class="text-sm/6 font-semibold text-oqsc-text">Weekly Quranic lessons delivered
                                </dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                    104
                                </dd>
                            </div>
                            <div class="flex flex-col bg-white/5 p-8">
                                <dt class="text-sm/6 font-semibold text-oqsc-text">Number of teachers</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                    10
                                </dd>
                            </div>
                            <div class="flex flex-col bg-white/5 p-8">
                                <dt class="text-sm/6 font-semibold text-oqsc-text">Number of courses</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                    5
                                </dd>
                            </div>
                        </dl>
                    </div>
                </x-oqsc.containers.section>

                <!-- CTA -->
                <x-oqsc.containers.section variant="isolated-wide">
                    <x-oqsc.effects.glare/>
                    <div class="mx-auto max-w-2xl text-center">
                        <x-oqsc.headings.h2>
                            Start learning today.
                        </x-oqsc.headings.h2>
                        <x-oqsc.headings.afterheading>
                            It takes less than hour a week to learn about Islam
                        </x-oqsc.headings.afterheading>

                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#" class="rounded-md bg-oqsc-cta px-3.5 py-2.5 text-sm font-semibold
                                text-oqsc-bg shadow-sm
                                hover:bg-oqsc-cta-hover hover:text-oqsc-text
                                focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                                focus-visible:outline-white">Get
                                started</a>
                            <a href="#"
                               class="text-sm/6 rounded-md font-semibold px-3.5 py-2.5 text-oqsc-text
                                   hover:text-oqsc-cta">Discover
                                more <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </x-oqsc.containers.section>


                <!-- Newsletter -->
                @livewire('forms.newsletter.page')

                <!-- Team -->
                <x-oqsc.containers.section>
                    <div class="mx-auto max-w-2xl text-center">
                        <x-oqsc.headings.h2>
                            Our team
                        </x-oqsc.headings.h2>
                        <x-oqsc.headings.afterheading>
                            We’re a dynamic group of individuals who are passionate about what we do.
                        </x-oqsc.headings.afterheading>
                    </div>
                    <x-oqsc.person-public-display.list variant="single">
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/amir.jpg')"
                            name="Sheikh Muhammad Amir"
                            position="PATRON-IN-CHIEF"/>
                    </x-oqsc.person-public-display.list>

                    <x-oqsc.headings.paragraph-heading>
                        Teachers
                    </x-oqsc.headings.paragraph-heading>

                    <x-oqsc.person-public-display.list>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/man.jpg')"
                            name="Ustad Ibrahim"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/man.jpg')"
                            name="Sheikh Ali"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/mousa.jpg')"
                            name="Ustad Mousa"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/man.jpg')"
                            name="Ustad Yasir"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/woman.png')"
                            name="Ustadah Somaya"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/woman.png')"
                            name="Ustadah Sara"
                            position="TEACHER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/woman.png')"
                            name="Ustadah Hager"
                            position="TEACHER"/>
                    </x-oqsc.person-public-display.list>

                    <x-oqsc.headings.paragraph-heading>
                        Management
                    </x-oqsc.headings.paragraph-heading>

                    <x-oqsc.person-public-display.list>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/asrar.jpeg')"
                            name="Dr Asrar"
                            position="PRESIDENT"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/muhammad.jpg')"
                            name="Dr Muhammad"
                            position="SECRETARY GENERAL"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/amira.jpeg')"
                            name="Dr Amira"
                            position="PUBLIC RELATIONS"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/zohaib.jpeg')"
                            name="Dr Zohaib"
                            position="TREASURER"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/nadir.jpg')"
                            name="Br Nadir"
                            position="ONLINE COMMUNITY"/>
                        <x-oqsc.person-public-display.list-item
                            :src="asset('storage/images/people/jakub.png')"
                            name="Br Jakub"
                            position="IT MANAGEMENT"/>
                    </x-oqsc.person-public-display.list>
                </x-oqsc.containers.section>

                <!-- Collaborations -->
                <x-oqsc.containers.section>
                    <div class="mx-auto max-w-2xl text-center">
                        <x-oqsc.headings.afterheading>
                            In collaboration with the known New Zealand Islamic organisations
                        </x-oqsc.headings.afterheading>
                    </div>
                    <div
                        class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10
                            sm:max-w-xl sm:grid-cols-6 sm:gap-x-10
                            lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                             src="{{ asset('storage/images/fianz_logo.png') }}"
                             alt="FIANZ logo" width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                             src="{{ asset('storage/images/oma_logo.png') }}" alt="OMA logo"
                             width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                             src="{{ asset('storage/images/musa_logo.png') }}" alt="MUSA logo"
                             width="158" height="48">
                        {{--                            <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"--}}
                        {{--                                 src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-white.svg"--}}
                        {{--                                 alt="SavvyCal" width="158" height="48">--}}
                        {{--                            <img--}}
                        {{--                                class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"--}}
                        {{--                                src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-white.svg"--}}
                        {{--                                alt="Statamic" width="158" height="48">--}}
                    </div>
                </x-oqsc.containers.section>

            </main>
            <footer class="bg-oqsc-bg">
                <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                    <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">About</a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">Blog</a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">Jobs</a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">Press</a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">Accessibility</a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">Partners</a>--}}
                    </nav>
                    <div class="mt-16 flex justify-center gap-x-10">
                        <a href="https://www.facebook.com/otagoquranstudyclub"
                           class="text-oqsc-text hover:text-oqsc-cta-hover">
                            <span class="sr-only">Facebook</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                        {{--                        <a href="#" class="text-gray-400 hover:text-oqsc-text">--}}
                        {{--                            <span class="sr-only">Instagram</span>--}}
                        {{--                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">--}}
                        {{--                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />--}}
                        {{--                            </svg>--}}
                        {{--                        </a>--}}
                        {{--                        <a href="#" class="text-gray-400 hover:text-gray-300">--}}
                        {{--                            <span class="sr-only">X</span>--}}
                        {{--                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">--}}
                        {{--                                <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />--}}
                        {{--                            </svg>--}}
                        {{--                        </a>--}}
                        <a href="https://www.youtube.com/@otagoquranstudyclub"
                           class="text-oqsc-text hover:text-oqsc-cta-hover">
                            <span class="sr-only">YouTube</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <p class="mt-10 text-center text-sm/6 text-oqsc-text">&copy; 2025 OQSC, All rights reserved.
                        v0.3-alfa (PHP v{{ PHP_VERSION }})</p>
                </div>
            </footer>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
