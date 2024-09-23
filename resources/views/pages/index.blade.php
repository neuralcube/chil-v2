<x-layouts.page>

    <x-slot:banner>
        <!-- Banner -->
        <section class="bg-no-repeat px-4 pt-12" style="background-image:url('{{ asset('storage/img/landing-bg.png') }}')">
            <div
                class="container mx-auto bg-no-repeat [background-image:url('{{ asset('storage/img/chil.svg') }}')] [background-position:right_0_bottom_10%] [background-size:50%]">
                <div class="grid lg:grid-cols-12 lg:gap-8 xl:gap-0">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <p class="mb-6 max-w-2xl font-light text-gray-100 md:text-lg lg:mb-1 lg:text-xl"
                            data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            Welcome to Caring Hands Intl. Ltd.
                        </p>
                        <h1 class="mb-4 max-w-2xl text-4xl leading-none tracking-tight text-gray-100 md:text-5xl xl:text-5xl"
                            data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
                            Embrace an extraordinary life with our unmatched care and
                            compassion
                        </h1>
                    </div>
                    <div class="lg:col-span-5 lg:mt-0 lg:flex">
                        <img class="rounded-none shadow-none" data-aos="flip-up" data-aos-easing="linear"
                            data-aos-duration="1000" data-aos-delay="100"
                            src="{{ asset('storage/img/landing-img.png') }}"
                            alt="Picture of A care giver holding an elderly woman, smiling together." />
                    </div>
                </div>
            </div>
        </section>


    </x-slot:banner>


    <x-about />

    <!-- /Introduction 1 -->

    <!-- Introduction 2 -->
    <section
        class="container mx-auto flex flex-col items-center justify-between gap-16 px-4 pb-24 text-center md:text-left lg:flex-row">
        <div class="order-2 max-h-[850px] lg:order-2 lg:w-1/2">
            <div class="relative grid grid-cols-2 gap-4">
                <!-- Left Column (one large block) -->
                <div class="col-span-1">
                    <img class="object-cover" data-aos="fade-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="800" data-aos-delay="100"
                        src="{{ asset('storage/img/caregiver_tight_hug_elderly.jpg') }}"
                        alt="Picture of well-being assistant giving tight hug to an Elderly Lady" />
                </div>

                <!-- Right Column -->
                <div class="col-span-1 grid">
                    <div class="row-span-1">
                        <img class="h-full object-cover" data-aos="fade-left" data-aos-easing="ease-out-cubic"
                            data-aos-duration="800" data-aos-delay="200"
                            src="{{ asset('storage/img/caregiver holding girl in wheel chair.jpg') }}"
                            alt="Happy well-being assistant holding girl in wheel chair" />
                    </div>
                </div>

                <!-- Circle in the center -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="h-28 w-28 rounded-full lg:h-32 lg:w-32">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 110.69 100">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path
                                    d="M110.66,29.86h0c.02-.38.03-.76.03-1.14,0-15.38-12.98-28.72-28.98-28.72-11.7,0-21.78,7.53-26.35,17.13h0C50.77,7.53,40.69,0,28.99,0,12.98,0,0,13.34,0,28.72c0,.38.01.76.03,1.14h0s-1.64,18.28,18.7,38.23c9.25,9.27,19.59,18.07,36.61,31.91,17.02-13.84,27.36-22.64,36.61-31.91,20.34-19.95,18.7-38.23,18.7-38.23Z"
                                    fill="#fff" stroke-width="0" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="order-1 lg:order-1 lg:w-1/2">
            <p class="tracking-widest text-chil-red" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                data-aos-duration="600" data-aos-delay="150">
                Why Us
            </p>

            <h2 class="text-black-900 mb-4 text-2xl dark:text-white md:text-4xl 2xl:text-5xl" data-aos="zoom-in"
                data-aos-easing="ease-out-cubic" data-aos-duration="900" data-aos-delay="250">
                <span class="bg-gradient-to-r from-blue-600 to-red-600 bg-clip-text text-transparent">Live Your Best
                    Life, </span><br />
                with Our Care and Compassion
            </h2>

            <div class="text-lg font-normal lg:text-lg">
                <p data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="700" data-aos-delay="300">
                    We believe that every individual deserves to live an extraordinary
                    life, regardless of their age or health needs. Our dedicated team is
                    committed to providing not only the highest quality of care but also
                    a genuine sense of compassion and understanding. We strive to create
                    a nurturing environment where you can thrive, feel valued, and enjoy
                    every day to its fullest. Let us support you with our expert care,
                    so you can focus on making the most of each moment, knowing you are
                    in the best hands.
                </p>
            </div>
        </div>
    </section>

    <!-- /Introduction 2 -->

    <x-hr />

    <!-- Servics -->
    <x-services />

    <!-- /Services -->

    <x-hr />


    <x-values />

    <x-contact />

</x-layouts.page>
