<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="font-sans antialiased bg-oqsc-bg text-oqsc-text">
<div class="text-oqsc-text">
    <nav x-data="{ open: false }" class="border-b-2 border-oqsc-heading-start">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('welcome') }}">
                            <img class="h-20 w-auto text-white"
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
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-oqsc-cta-hover selection:text-white">
        <div class="relative w-full max-w-2xl lg:px-6 lg:max-w-7xl">
            <main class="container mx-auto sm:px-6 lg:px-8">

                <!-- Hero -->
                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-20 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                         aria-hidden="true"
                         style="pointer-events: none;">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg]
                        bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem] -z-10"
                             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%,
                             52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">

                        </div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
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
                            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                                Place to grow your Quranic knowledge </h1>
                            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                                The Otago Quran Study Club <span class="text-grey-100 opacity-20">(OQSC)</span> is a not-for-proft organisation with a
                                vibrant community dedicated to promoting Islamic knowledge, fostering
                                spiritual growth, and building strong connections within the Muslim
                                community in Dunedin as well as whole of New Zealand. We are commited
                                to providing a welcoming and inclusive environment for individuals of all ages
                                and backgrounds to learn, engage, and connect with their faith.
                            </p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
{{--                                <a href="#"--}}
{{--                                   class="rounded-md bg-oqsc-cta text-oqsc-bg px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm--}}
{{--                                   hover:bg-oqsc-cta-hover hover:text-oqsc-text--}}
{{--                                   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get--}}
{{--                                    started</a>--}}
                                <a href="#offer_section" class="text-sm/6 font-semibold text-oqsc-cta">Learn more <span
                                        aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                        aria-hidden="true">
                        <div
                            class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>

                <!-- Offerings -->
                <div class="bg-gray-900 py-24 sm:py-32" id="offer_section">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center">
                            <h2 class="text-base/7 font-semibold text-indigo-400">We offer</h2>
                            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-balance">
                                Everything you need grow your islamic knowledge,
                            </p>
                            <p class="mt-6 text-lg/8 text-gray-300">
                                From essential Islamic knowledge through Tajweed and Ijazah.
                            </p>
                        </div>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Seerah courses
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Seerah courses focus on life of prophet Muhammad(pbuh)</p>
                                        <p class="mt-6">
{{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400" >Learn more <span aria-hidden="true">→</span></a>--}}
                                        </p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Weekly Study Club
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Immerse yourself in Quran with explanations in our weekly meetings or online.</p>
                                        <p class="mt-6">
{{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                                        </p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Ijazah
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Advance your confidence in reading Quran like a Mufti.</p>
                                        <p class="mt-6">
{{--                                            <a href="#" class="text-sm/6 font-semibold text-indigo-400">Learn more <span aria-hidden="true">→</span></a>--}}
                                        </p>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>


                <!-- Visionaire -->
                <div class="bg-gray-900 py-24 sm:py-32" id="offer_section">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center">
                            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-oqsc-heading-start sm:text-5xl lg:text-balance">
                                The Otago Quran Study Club's vision is
                            </p>
                            <p class="mt-6 text-lg/8 text-gray-300">
                                To be a leading center and resource for Islamic knowledge and a thriving
                                community hub in Dunedin as well as New Zealand, building foundations for
                                community based on authentic islamic and quranic knowledge, fostering
                                spiritual growth, cultural understanding, and strong relationships among
                                Muslims.
                            </p>
                        </div>
                        <div class="mx-auto max-w-2xl lg:text-center mt-16">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Three simple missions</h2>
                        </div>
                        <div class="mx-auto mt-12 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Promote Islamic knowledge and resources
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Offer a variety of Quran study programs and workshops to enhance understanding of Islamic teachings by inspiring, engaging, and providing educational tools, resources and opportunities.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Foster spiritual growth
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Create a supportive community where individuals can deepen their spiritual connection and develop a strong relationship with Allah.</p>

                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-oqsc-heading-start">
                                        Build community
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
                                        <p class="flex-auto">Organize social and cultural events to bring together Muslims in Dunedin and strengthen bonds within the community.</p>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>


                <!-- Testimonial -->
                <div class="relative isolate bg-white pb-32 pt-24 sm:pt-32">
                    <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl" aria-hidden="true">
                        <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end" aria-hidden="true">
                        <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-base/7 font-semibold text-indigo-600">Testimonials</h2>
                            <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">We have worked with hundreds of amazing people</p>
                        </div>
                        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm/6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                            <!-- Main Testimonial -->
                            <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                                <blockquote class="p-6 text-lg font-semibold tracking-tight text-gray-900 sm:p-12 sm:text-xl/8">
                                    <p>“While attending OQSC weekly Quran classes, I have learned a lot about Surahs and deepen my knowledge about history of Islam”</p>
                                </blockquote>
                                <figcaption class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
{{--                                    <img class="size-10 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80" alt="">--}}
                                    <div class="flex-auto">
                                        <div class="font-semibold">Jakub</div>
                                    </div>
{{--                                    <img class="h-10 w-auto flex-none" src="https://tailwindui.com/plus/img/logos/savvycal-logo-gray-900.svg" alt="">--}}
                                </figcaption>
                            </figure>
                            <!-- Left side Testimonial -->
                            <div class="space-y-8 xl:contents xl:space-y-0">
                                <div class="space-y-8 xl:row-span-2">
                                    <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                        <blockquote class="text-gray-900">
                                            <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                                        </blockquote>
                                        <figcaption class="mt-6 flex items-center gap-x-4">
                                            <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div>
                                                <div class="font-semibold">Leslie Alexander</div>
                                                <div class="text-gray-600">@lesliealexander</div>
                                            </div>
                                        </figcaption>
                                    </figure>

                                    <!-- More testimonials... -->
                                </div>
                                <!-- Left Under Main Testimonial -->
                                <div class="space-y-8 xl:row-start-1">
                                    <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                        <blockquote class="text-gray-900">
                                            <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut officia rem nulla blanditiis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-6 flex items-center gap-x-4">
                                            <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div>
                                                <div class="font-semibold">Lindsay Walton</div>
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
                                    <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                        <blockquote class="text-gray-900">
                                            <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
                                        </blockquote>
                                        <figcaption class="mt-6 flex items-center gap-x-4">
                                            <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div>
                                                <div class="font-semibold">Tom Cook</div>
                                                <div class="text-gray-600">@tomcook</div>
                                            </div>
                                        </figcaption>
                                    </figure>

                                    <!-- More testimonials... -->
                                </div>

                                <!-- Right side Testimonial -->
                                <div class="space-y-8 xl:row-span-2">
                                    <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                        <blockquote class="text-gray-900">
                                            <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt excepturi rerum voluptatem minus harum.”</p>
                                        </blockquote>
                                        <figcaption class="mt-6 flex items-center gap-x-4">
                                            <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <div>
                                                <div class="font-semibold">Leonard Krasner</div>
                                                <div class="text-gray-600">@leonardkrasner</div>
                                            </div>
                                        </figcaption>
                                    </figure>

                                    <!-- More testimonials... -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="bg-gray-900 py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:max-w-none">
                            <div class="text-center">
                                <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                                    Trusted by student worldwide</h2>
{{--                                <p class="mt-4 text-lg/8 text-gray-300">Lorem ipsum dolor sit amet consect adipisicing--}}
{{--                                    possimus.</p>--}}
                            </div>
                            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                                <div class="flex flex-col bg-white/5 p-8">
                                    <dt class="text-sm/6 font-semibold text-gray-300">Student to the day</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                        1,000+
                                    </dd>
                                </div>
                                <div class="flex flex-col bg-white/5 p-8">
                                    <dt class="text-sm/6 font-semibold text-gray-300">Weekly Quranic lessons delivered
                                    </dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                        365
                                    </dd>
                                </div>
                                <div class="flex flex-col bg-white/5 p-8">
                                    <dt class="text-sm/6 font-semibold text-gray-300">Number of courses</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                        71
                                    </dd>
                                </div>
                                <div class="flex flex-col bg-white/5 p-8">
                                    <dt class="text-sm/6 font-semibold text-gray-300">Course completion rate</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-oqsc-heading-start">
                                        98%
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="relative isolate overflow-hidden bg-gray-900">
                    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl"> Start learning today.</h2>
                            <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">It takes less than hour a week to learn about Islam</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#" class="rounded-md bg-oqsc-cta px-3.5 py-2.5 text-sm font-semibold text-oqsc-bg shadow-sm
                                hover:bg-oqsc-cta-hover hover:text-oqsc-text
                                focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                                <a href="#" class="text-sm/6 rounded-md font-semibold px-3.5 py-2.5 text-oqsc-text hover:text-oqsc-cta">Discover more <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                        <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)" fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>


                <!-- Newsletter -->
                <div class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                            <div class="max-w-xl lg:max-w-lg">
                                <h2 class="text-4xl font-semibold tracking-tight text-white">Subscribe to our
                                    newsletter</h2>
                                <p class="mt-4 text-lg text-gray-300">Keep in touch with us with our monthly
                                    newsletter.</p>
                                <div class="mt-6 flex max-w-md gap-x-4">
                                    <label for="email-address" class="sr-only">Email address</label>
                                    <input id="email-address" name="email" type="email" autocomplete="email" required
                                           class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                                           placeholder="Enter your email">
                                    <button type="submit"
                                            class="flex-none rounded-md bg-oqsc-cta px-3.5 py-2.5 text-sm font-semibold text-oqsc-bg shadow-sm
                                            hover:bg-oqsc-cta-hover hover:text-oqsc-text
                                            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-oqsc-cta-hover">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                                <div class="flex flex-col items-start">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                             data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"/>
                                        </svg>
                                    </div>
                                    <dt class="mt-4 text-base font-semibold text-white">Monthly Newsletter</dt>
                                    <dd class="mt-2 text-base/7 text-gray-400">
                                        Bite-size Quranic lessons in your inbox. Updates what is happening in your study
                                        community
                                        and new courses to offer.
                                    </dd>
                                </div>
                                <div class="flex flex-col items-start">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                             data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002"/>
                                        </svg>
                                    </div>
                                    <dt class="mt-4 text-base font-semibold text-white">No spam</dt>
                                    <dd class="mt-2 text-base/7 text-gray-400">No unrelated marketing, only Quran study
                                        related newsletter.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>


                <!-- Team -->
                <div class="py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:mx-0">
                            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-oqsc-heading-start sm:text-5xl">
                                Our team</h2>
                            <p class="mt-6 text-lg/8 text-oqsc-text">We’re a dynamic group of individuals who are
                                passionate about what we do.</p>
                        </div>
                        <ul role="list"
                            class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-center lg:mx-0 lg:max-w-none">
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Sheikh Muhammad Amir</h3>
                                <p class="text-sm/6 text-oqsc-text">PATRON-IN-CHIEF</p>
                            </li>
                        </ul>

                        <div class="mt-20 text-lg text-oqsc-heading-start text-center font-semibold">Teachers</div>

                        <ul role="list"
                            class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustad Ibrahim</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Sheikh Ali</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustad Mousa</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustad Yasir</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustadah Somaya</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustadah Sara</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Ustadah Hager</h3>
                                <p class="text-sm/6 text-oqsc-text">TEACHER</p>
                            </li>
                        </ul>

                        <div class="mt-20 text-lg text-oqsc-heading-start text-center font-semibold">Management</div>

                        <ul role="list"
                            class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Dr Asrar</h3>
                                <p class="text-sm/6 text-oqsc-text">PRESIDENT</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Dr Muhammad</h3>
                                <p class="text-sm/6 text-oqsc-text">SECRETARY GENERAL</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Dr Amira</h3>
                                <p class="text-sm/6 text-oqsc-text">PUBLIC RELATIONS</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Dr Zohaib</h3>
                                <p class="text-sm/6 text-oqsc-text">TREASURER</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Br Nadir</h3>
                                <p class="text-sm/6 text-oqsc-text">ONLINE COMMUNITY</p>
                            </li>
                            <li>
                                <img class="mx-auto size-24 rounded-full"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                     alt="">
                                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-oqsc-text">Br Jakub</h3>
                                <p class="text-sm/6 text-oqsc-text">IT MANAGEMENT</p>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- Collaborations -->
                <div class="bg-gray-900 py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <h2 class="text-center text-lg/8 font-semibold text-white">In collaboration with the known New
                            Zealand Islamic organisations </h2>
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
                    </div>
                </div>

            </main>
            <footer class="bg-gray-900">
                <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                    <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
{{--                        <a href="#" class="text-gray-400 hover:text-white">About</a>--}}
{{--                        <a href="#" class="text-gray-400 hover:text-white">Blog</a>--}}
{{--                        <a href="#" class="text-gray-400 hover:text-white">Jobs</a>--}}
{{--                        <a href="#" class="text-gray-400 hover:text-white">Press</a>--}}
{{--                        <a href="#" class="text-gray-400 hover:text-white">Accessibility</a>--}}
{{--                        <a href="#" class="text-gray-400 hover:text-white">Partners</a>--}}
                    </nav>
                    <div class="mt-16 flex justify-center gap-x-10">
                        <a href="https://www.facebook.com/otagoquranstudyclub" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
{{--                        <a href="#" class="text-gray-400 hover:text-gray-300">--}}
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
                        <a href="https://www.youtube.com/@otagoquranstudyclub" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">YouTube</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-10 text-center text-sm/6 text-gray-400">&copy; 2025 OQSC, All rights reserved.  v0.2-alfa (PHP v{{ PHP_VERSION }})</p>
                </div>
            </footer>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
