<x-layouts.page>

    <x-slot:banner>
        <!-- Banner -->
        <section style="background-image:url('{{asset('img/landing-bg.png')}}')"
                 class="bg-no-repeat px-4 pt-12"
        >
            <div
                class="container mx-auto bg-no-repeat [background-image:url('{{asset("img/chil.svg")}}')] [background-size:50%] [background-position:right_0_bottom_10%]"
            >
                <div class="grid lg:gap-8 xl:gap-0 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <p
                            data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                            class="max-w-2xl mb-6 font-light text-gray-100 lg:mb-1 md:text-lg lg:text-xl"
                        >
                            Welcome to Caring Hands Intl. Ltd.
                        </p>
                        <h1
                            data-aos="zoom-in"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                            class="text-gray-100 max-w-2xl mb-4 text-4xl tracking-tight leading-none md:text-5xl xl:text-5xl"
                        >
                            Embrace an extraordinary life with our unmatched care and
                            compassion
                        </h1>
                    </div>
                    <div class="lg:mt-0 lg:col-span-5 lg:flex">
                        <img
                            data-aos="flip-up"
                            data-aos-easing="linear"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                            class="shadow-none rounded-none"
                            src="{{asset('img/landing-img.png')}}"
                            alt="Picture of A care giver holding an elderly woman, smiling together."
                        />
                    </div>
                </div>
            </div>
        </section>


    </x-slot:banner>


  <x-about />

    <!-- /Introduction 1 -->

    <!-- Introduction 2 -->
    <section
        class="container text-center md:text-left mx-auto px-4 pb-24 flex flex-col lg:flex-row gap-16 items-center justify-between"
    >
        <div class="lg:w-1/2 max-h-[850px] order-2 lg:order-2">
            <div class="relative grid grid-cols-2 gap-4">
                <!-- Left Column (one large block) -->
                <div class="col-span-1">
                    <img
                        data-aos="fade-right"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="800"
                        data-aos-delay="100"
                        class="object-cover"
                        src="{{asset('img/caregiver_tight_hug_elderly.jpg')}}"
                        alt="Picture of well-being assistant giving tight hug to an Elderly Lady"
                    />
                </div>

                <!-- Right Column -->
                <div class="col-span-1 grid">
                    <div class="row-span-1">
                        <img
                            data-aos="fade-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="800"
                            data-aos-delay="200"
                            class="h-full object-cover"
                            src="{{asset('img/caregiver holding girl in wheel chair.jpg')}}"
                            alt="Happy well-being assistant holding girl in wheel chair"
                        />
                    </div>
                </div>

                <!-- Circle in the center -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-28 h-28 lg:w-32 lg:h-32 rounded-full">
                        <svg
                            id="Layer_2"
                            data-name="Layer 2"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 110.69 100"
                        >
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path
                                    d="M110.66,29.86h0c.02-.38.03-.76.03-1.14,0-15.38-12.98-28.72-28.98-28.72-11.7,0-21.78,7.53-26.35,17.13h0C50.77,7.53,40.69,0,28.99,0,12.98,0,0,13.34,0,28.72c0,.38.01.76.03,1.14h0s-1.64,18.28,18.7,38.23c9.25,9.27,19.59,18.07,36.61,31.91,17.02-13.84,27.36-22.64,36.61-31.91,20.34-19.95,18.7-38.23,18.7-38.23Z"
                                    fill="#fff"
                                    stroke-width="0"
                                />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 order-1 lg:order-1">
            <p
                data-aos="fade-up"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="600"
                data-aos-delay="150"
                class="tracking-widest text-chil-red"
            >
                Why Us
            </p>

            <h2
                data-aos="zoom-in"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="900"
                data-aos-delay="250"
                class="mb-4 text-2xl text-black-900 dark:text-white md:text-4xl 2xl:text-5xl"
            >
              <span
                  class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
              >Live Your Best Life, </span
              ><br/>
                with Our Care and Compassion
            </h2>

            <div class="text-lg font-normal lg:text-lg">
                <p
                    data-aos="fade-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="700"
                    data-aos-delay="300"
                >
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

    <x-hr/>

    <!-- Servics -->
    <x-services/>

    <!-- /Services -->

    <x-hr/>


    <x-values/>

    <x-contact/>

</x-layouts.page>
