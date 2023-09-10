<x-layouts.app>
    <div class="container mx-auto flex min-h-screen w-full items-center">
        <div class="flex h-full w-full items-center justify-center space-x-16 pt-20">
            <!-- Header Text -->
            <div class="flex h-full w-full items-center justify-center">
                <div class="mb-16 flex flex-col sm:mb-0 sm:text-center">
                    <!-- Logo Gary Scale -->
                    <a href="/" class="mb-6 sm:mx-auto">
                        <div
                            class="bg-teal-accent-400 flex h-16 w-16 items-center justify-center rounded-full">
                            <div class="">
                                <img
                                    src="{{ asset('/storage/images/logo/grey.png') }}"
                                    alt="grey logo" />
                            </div>
                        </div>
                    </a>
                    <!-- Heading and Text -->
                    <div class="mb-10 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
                        <h2
                            class="mb-6 max-w-lg font-main text-3xl font-bold leading-5 tracking-tight sm:text-4xl md:mx-auto">
                            <!-- Deco -->
                            <span class="relative inline-block text-meteorite-900">
                                <svg
                                    viewBox="0 0 52 24"
                                    fill="currentColor"
                                    class="text-deep-purple-accent-100 absolute left-0 top-0 z-0 -ml-20 -mt-8 hidden w-32 sm:block lg:-ml-28 lg:-mt-10 lg:w-32">
                                    <defs>
                                        <pattern
                                            id="700c93bf-0068-4e32-aafe-ef5b6a647708"
                                            x="0"
                                            y="0"
                                            width=".135"
                                            height=".30">
                                            <circle cx="1" cy="1" r=".7"></circle>
                                        </pattern>
                                    </defs>
                                    <rect
                                        fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)"
                                        width="52"
                                        height="24"></rect>
                                </svg>
                            </span>
                            <!-- Welcome -->
                            <span class="relative font-main">Welcome</span>
                            to Botswana Power
                            <span class="text-seance-900">Corporation</span>
                        </h2>
                        <!-- Intro Text -->
                        <p class="text-base text-base-content md:text-lg">
                            Experience our energy management resource solutions, dedicated to
                            minimizing your reliance on the grid and maximizing your savings.
                            Explore our innovative power-generating tiles and discover how you can
                            power your home for extended periods. Click here to learn more.
                        </p>
                    </div>
                    <button class="btn btn-accent">
                        <a href="/" class=" ">Explore</a>
                    </button>
                </div>
            </div>
            <!-- Header Image & Text -->
            <div
                class="relative h-full w-full items-end justify-center overflow-hidden rounded-l-full border-8 bg-gradient-to-r from-meteorite-900 via-san-marino-900 to-seance-900">
                <img src="{{ asset('/storage/images/header/header-img.jpg') }}" alt="" />
                <span
                    class="absolute bottom-0 flex h-1/4 w-full items-center justify-center bg-base-200 px-2 text-base-content opacity-80">
                    <span class="font-bold">
                        <span class="bg-base-200/80 px-4 py-2 text-base-content backdrop-blur-lg">
                            This is the text
                        </span>
                    </span>
                </span>
            </div>
        </div>
    </div>
</x-layouts.app>
