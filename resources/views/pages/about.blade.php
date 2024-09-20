<x-layouts.page>
    <x-slot:banner>
        <!-- Banner -->
        <section
            style="
        background-image: url('{{asset('img/about.jpg')}}');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
      "
            class="pt-12 min-h-96 relative"
        >
            <div
                class="absolute bottom-0 bg-gradient-to-t via-chil-blue/50 from-black/95 to-chil-red/30 h-full w-full"
            ></div>
            <div class="container mx-auto">
                <div class="absolute bottom-4" style="text-shadow: 3px 3px 8px black">
                    <p
                        data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500"
                        class="max-w-2xl mb-6 font-light text-white lg:mb-1 md:text-lg lg:text-xl"
                    >
                        About us
                    </p>
                    <h1
                        data-aos="zoom-in"
                        data-aos-easing="linear"
                        data-aos-duration="1500"
                        class="text-gray-100 max-w-2xl mb-4 text-2xl tracking-tight leading-none md:text-3xl"
                    >
                        Founded on the principles of passion and dedication, C.H.I.L has
                        been a trusted partner in care for years.
                    </h1>

                    <div class="lg:mt-0 lg:col-span-5 lg:flex"></div>
                </div>
            </div>
        </section>
    </x-slot:banner>


    <section class="py-24 md:text-lg font-normal">
        <article class="container mx-auto">
            <p
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="300"
                class="tracking-widest text-chil-red text-center"
            >
                Our Story
            </p>
            <h2
                data-aos="zoom-out"
                data-aos-easing="linear"
                data-aos-duration="800"
                data-aos-delay="300"
                class="mb-4 text-2xl text-center text-black-900 dark:text-white md:text-4xl md:mb-8"
            >
            <span
                class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
            >We handle the care, </span
            ><br/>
                you experience total peace of mind.
            </h2>
            <div
                class="text-center md:text-left px-4 flex flex-col lg:flex-row gap-16 items-center justify-between"
            >
                <div class="lg:w-1/2 max-h-[850px] order-2 lg:order-1">
                    <div class="relative grid grid-cols-2 gap-4">
                        <!-- Left Column (one large block) -->
                        <div class="col-span-1">
                            <img
                                data-aos="flip-up"
                                data-aos-easing="linear"
                                data-aos-duration="1000"
                                data-aos-delay="100"
                                class="object-cover"
                                src="{{asset('img/caregiver_nurses.jpg')}}"
                                alt="Picture of well-being assistant assisting an Elderly Lady"
                            />
                        </div>

                        <!-- Right Column (two smaller blocks stacked vertically) -->
                        <div class="col-span-1 grid">
                            <div class="row-span-1">
                                <img
                                    data-aos="flip-up"
                                    data-aos-easing="linear"
                                    data-aos-duration="1000"
                                    data-aos-delay="100"
                                    class="h-full object-cover"
                                    src="{{asset('img/story.jpg')}}"
                                    alt="Carerer eith a girl and her grandmother"
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

                <div class="lg:w-1/2 order-1 lg:order-2">
                    <div class="">
                        <p
                            data-aos="fade-up"
                            data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos-delay="300"
                            class="tracking-wide leading-relaxed"
                        >
                            Our story began with a simple yet powerful aim: to extend our
                            caring hands to those who need it most. Founded on the belief
                            that everyone deserves compassionate and respectful care, we set
                            out to make a difference in the lives of individuals and their
                            families.
                        </p>

                        <p
                            data-aos="fade-up"
                            data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos-delay="600"
                            class="tracking-wide leading-relaxed pt-4"
                        >
                            Today, our team of experienced and passionate care professionals
                            is dedicated to providing high-quality, person-centered care
                            that prioritizes dignity, autonomy, and well-being. We believe
                            that care is more than just a service; it's about building
                            relationships, understanding individual needs, and providing
                            support that enhances the quality of life.
                        </p>
                    </div>
                </div>
            </div>

            <p
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="300"
                class="pt-4 mt-12 tracking-wide leading-relaxed"
            >
                From the very first interaction, we focus on creating a warm and
                welcoming environment where our clients feel safe, valued, and
                understood. Our approach is rooted in empathy, integrity, and respect,
                ensuring that each person receives the care and attention they
                deserve.
            </p>

            <p
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="900"
                class="pt-4"
            >
                Whether it's assisting with daily activities, providing companionship,
                or offering specialized care, our mission remains the same: to empower
                individuals to live their best lives. By putting people first, we
                continue to uphold our commitment to making a positive impact in our
                community, one caring hand at a time.
            </p>
        </article>
    </section>

    <section
        class="container text-center md:text-left mx-auto px-4 pb-24 flex flex-col lg:flex-row gap-16 items-center justify-between"
    >
        <div class="lg:w-1/2 max-h-[850px] order-2 lg:order-2">
            <div class="relative grid grid-cols-2 gap-4">
                <!-- Left Column (one large block) -->
                <div class="col-span-1">
                    <img
                        data-aos="flip-up"
                        data-aos-easing="linear"
                        data-aos-duration="1000"
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
                            data-aos="flip-up"
                            data-aos-easing="linear"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                            class="h-full object-cover"
                            src="{{asset('img/caregiver holding girl in wheel chair.jpg')}}"
                            alt="HAppy well-being assistant holding girl in wheel chairPicture of well-being assistant hugging"
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

        <article class="lg:w-1/2 order-1 lg:order-1">
            <p
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="300"
                class="tracking-widest text-chil-red"
            >
                The best
            </p>

            <h2
                data-aos="zoom-out"
                data-aos-easing="linear"
                data-aos-duration="800"
                data-aos-delay="300"
                class="mb-4 text-2xl text-black-900 dark:text-white md:text-4xl 2xl:text-5xl"
            >
            <span
                class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
            >Live Your Best Life
            </span>
            </h2>

            <div class="text-lg font-normal lg:text-lg">
                <p
                    data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="500"
                    data-aos-delay="300"
                >
                    At C.H.I.L we are more than just a care provider - we are a
                    community of caring hands, dedicated to making a positive impact in
                    the lives of those we serve. Join us in our quest to deliver safe
                    exceptional care with compassion and kindness."
                </p>
            </div>
        </article>
    </section>

    <x-hr/>

    <!-- Vision Statement -->
    <section>
        <div class="container">
            <!-- Animated Text Section -->
            <p
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="300"
                class="tracking-widest text-chil-red text-center"
            >
                Sight
            </p>
            <h2
                data-aos="zoom-out"
                data-aos-easing="linear"
                data-aos-duration="800"
                data-aos-delay="300"
                class="mb-4 text-2xl text-center text-black-900 dark:text-white md:text-4xl md:mb-8"
            >
            <span
                class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
            >Guided by Vision,</span
            >
                Driven by Purpose
            </h2>

            <article>
                <div class="bg-purple-50 p-8">
                    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-8">
                        <!-- Left Section -->
                        <div class="space-y-4 lg:w-1/2">
                            <!-- Vision Card -->
                            <div
                                data-aos="fade-right"
                                data-aos-duration="800"
                                class="flex items-center bg-white shadow-md p-4 rounded-lg"
                            >
                                <div class="bg-chil-blue text-white p-4 rounded-lg">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512"
                                        class="w-8 text-white"
                                        fill="currentColor"
                                    >
                                        <path
                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"
                                        />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Our Vision</h4>
                                    <p>
                                        At C.H.I.L, we aim to be the global leader in safe and
                                        compassionate care, extending our caring hands to every
                                        corner of the world
                                    </p>
                                </div>
                            </div>

                            <!-- Mission Card -->
                            <div
                                data-aos="fade-right"
                                data-aos-duration="800"
                                data-aos-delay="200"
                                class="flex items-center bg-chil-blue text-white shadow-md p-4 rounded-lg"
                            >
                                <div class="bg-white text-chil-blue p-4 rounded-lg">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M20.7 6.3a1 1 0 00-1.4 0l-5.3 5.3V4a1 1 0 10-2 0v7.6l-5.3-5.3a1 1 0 00-1.4 1.4l7 7a1 1 0 001.4 0l7-7a1 1 0 000-1.4z"
                                        />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-white">
                                        Our vision is to create a world where caring hands are
                                        always there to support, comfort, and uplift those in
                                        need.
                                    </p>
                                </div>
                            </div>

                            <!-- Motto Card -->
                            <div
                                data-aos="fade-right"
                                data-aos-duration="800"
                                data-aos-delay="400"
                                class="flex items-center bg-white shadow-md p-4 rounded-lg"
                            >
                                <div class="bg-chil-blue text-white p-4 rounded-lg">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9.75 4.5l1.5 13.5M14.25 4.5l1.5 13.5m-11.25-9h13.5m-13.5 3h13.5"
                                        />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p>
                                        With a commitment to excellence, innovation, and
                                        collaboration, we will continue to expand our reach,
                                        improve our care, and inspire hope and healing in all we
                                        do.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Section -->
                        <div
                            class="lg:w-1/2 flex flex-col justify-start space-y-3"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <h3 class="text-chil-blue font-semibold">
                                We envision a world where:
                            </h3>

                            <ul class="space-y-2">
                                <li
                                    class="flex items-center"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-chil-red mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="text-chil-red"
                                    >Everyone has access to safe quality care and
                        support</span
                                    >
                                </li>
                                <li
                                    class="flex items-center"
                                    data-aos="fade-up"
                                    data-aos-delay="400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-chil-red mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="text-chil-red"
                                    >Compassion and kindness are the guiding principles of our
                        industry</span
                                    >
                                </li>
                                <li
                                    class="flex items-center"
                                    data-aos="fade-up"
                                    data-aos-delay="600"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-chil-red mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="text-chil-red"
                                    >Individuals are empowered to live their lives to the
                        fullest, with dignity and purpose</span
                                    >
                                </li>
                                <li
                                    class="flex items-center"
                                    data-aos="fade-up"
                                    data-aos-delay="800"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 text-chil-red mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="text-chil-red"
                                    >Our caring hands make a meaningful difference in the
                        lives of millions</span
                                    >
                                </li>
                            </ul>
                            <div data-aos="zoom-in" data-aos-duration="500">
                                <img
                                    src="{{asset('img/care_workers_smiling.jpg')}}"
                                    alt="care_workers_smiling"
                                    class="h-40 w-full object-cover"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <x-hr/>

    <!-- Mission Statement -->
    <section>
        <div class="container">
            <div class="bg-blue-50 p-8">
                <div
                    class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-8"
                >
                    <!-- Left Section with Image -->
                    <div
                        class="lg:w-1/3"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        <img
                            src="{{asset('img/mission.jpg')}}"
                            alt="Team of volunteers stacking hands"
                            class="rounded-lg shadow-md"
                        />
                    </div>

                    <!-- Right Section with Mission Text -->
                    <div class="lg:w-2/3" data-aos="fade-left" data-aos-duration="1000">
                        <h2 class="text-3xl font-bold text-blue-900 mb-4">
                            Our Mission is to:
                        </h2>
                        <ul class="list-none space-y-4">
                            <li
                                class="flex items-start"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                    <span class="bg-blue-600 text-white rounded-full p-2 mr-4">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                      </svg>
                    </span>
                                <p class="text-gray-700">
                      <span class="font-semibold text-blue-700"
                      >Support with compassion:</span
                      >
                                    Providing safe, emotional, and physical support to those in
                                    our care, with kindness and empathy.
                                </p>
                            </li>
                            <li
                                class="flex items-start"
                                data-aos="fade-up"
                                data-aos-delay="400"
                            >
                    <span class="bg-blue-600 text-white rounded-full p-2 mr-4">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                      </svg>
                    </span>
                                <p class="text-gray-700">
                      <span class="font-semibold text-blue-700"
                      >Assist with integrity:</span
                      >
                                    Delivering exceptional care and support, with honesty and
                                    transparency.
                                </p>
                            </li>
                            <li
                                class="flex items-start"
                                data-aos="fade-up"
                                data-aos-delay="600"
                            >
                    <span class="bg-blue-600 text-white rounded-full p-2 mr-4">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                      </svg>
                    </span>
                                <p class="text-gray-700">
                      <span class="font-semibold text-blue-700"
                      >Reach out with respect:</span
                      >
                                    Honouring individuality, dignity, and autonomy, and
                                    promoting independence and fulfilment.
                                </p>
                            </li>
                            <li
                                class="flex items-start"
                                data-aos="fade-up"
                                data-aos-delay="800"
                            >
                    <span class="bg-blue-600 text-white rounded-full p-2 mr-4">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-6 w-6"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                      </svg>
                    </span>
                                <p class="text-gray-700">
                      <span class="font-semibold text-blue-700"
                      >Inspire hope and healing:</span
                      >
                                    Empowering those we care for to achieve their full potential
                                    and live their lives to the fullest.
                                </p>
                            </li>
                        </ul>
                        <p
                            class="text-gray-600 mt-6 italic"
                            data-aos="fade-up"
                            data-aos-delay="1000"
                        >
                            With 'Caring Hands' as our guiding principle, we strive to make
                            a positive impact on the lives of those we serve and be a beacon
                            of hope and compassion in our communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-hr/>

    <x-values/>


    <x-contact/>

</x-layouts.page>
