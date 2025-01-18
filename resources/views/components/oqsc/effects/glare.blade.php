@props(['variant' => 'default'])

@if($variant === 'default')
    <div>
        <div class="absolute inset-x-0 -top-40 -z-20 transform-gpu overflow-hidden blur-3xl sm:-top-80"
             aria-hidden="true"
             style="pointer-events: none;">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg]
                        bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem] -z-10"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%,
                             52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">

            </div>
        </div>
        <div
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl
        sm:top-[calc(100%-30rem)]"
            aria-hidden="true"
            style="pointer-events: none;">
            <div
                class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr
            from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%,
            60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%,
            76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
@elseif($variant === 'secondary')
    <div>
        <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu
                    overflow-hidden opacity-30 blur-3xl"
             aria-hidden="true">
            <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem]
                        bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path:
                        polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%,
                        52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1%
                        97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div
            class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25
                        blur-3xl sm:pt-40 xl:justify-end"
            aria-hidden="true">
            <div
                class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right
                            rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0
                            xl:mr-[calc(50%-12rem)]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%,
                            72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%,
                            17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
@elseif($variant === 'ring-bottom')
    <svg viewBox="0 0 1024 1024"
         class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2
                         [mask-image:radial-gradient(closest-side,white,transparent)]"
         aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)"
                fill-opacity="0.7"/>
        <defs>
            <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                <stop stop-color="#7775D6"/>
                <stop offset="1" stop-color="#E935C1"/>
            </radialGradient>
        </defs>
    </svg>
@endif

