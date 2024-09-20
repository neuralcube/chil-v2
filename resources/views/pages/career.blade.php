<x-layouts.page>
    <x-slot:banner>
        <section
            style="
          background-image: url('{{asset('img/team\ of\ care\ givers.jpg')}}');
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
                        The C.H.I.L Team
                    </p>
                    <h1
                        data-aos="zoom-in"
                        data-aos-easing="linear"
                        data-aos-duration="1500"
                        class="text-gray-100 max-w-2xl mb-4 text-2xl tracking-tight leading-none md:text-3xl"
                    >
                        Compassionate care starts with a dedicated team.
                    </h1>

                    <div class="lg:mt-0 lg:col-span-5 lg:flex"></div>
                </div>
            </div>
        </section>
    </x-slot:banner>

    <main class=" py-12">
        <div class="container mx-auto px-6">
            <!-- Company Culture -->
            <section class="mt-12 text-center">
                <header>
                    <h2 class="text-2xl font-semibold text-chil-blue mb-4">
                        Organisational Culture
                    </h2>
                </header>
                <p class="text-gray-700 mb-4">
                    Hear from our team about what it’s like to work at Caring Hands
                    International Ltd.
                </p>
                <!-- Employee Testimonials or Video -->
                <article class="flex justify-center">
                    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
                        <p class="text-gray-700">
                            “Working here has been a rewarding experience. The team is
                            supportive, and the work environment is positive and inclusive.”
                            - C.H.I.L Staff
                        </p>
                    </div>
                </article>
            </section>

            <!-- Career Development -->
            <section
                class="mt-12 bg-chil-blue text-gray-200 text-center shadow-md rounded-lg p-6 border border-gray-200"
            >
                <header>
                    <h2 class="text-2xl font-semibold mb-4">Career Development</h2>
                </header>
                <p class="text-gray-200">
                    C.H.I.L committed to your growth and development. Learn more about
                    our training programs and career advancement opportunities.
                </p>
            </section>
            <!-- Diversity and Inclusion Development -->
            <section
                class="mt-12 bg-chil-red text-gray-200 text-center shadow-md rounded-lg p-6 border border-gray-200"
            >
                <header>
                    <h2 class="text-2xl font-semibold mb-4">Diversity and Inclusion</h2>
                </header>
                <p class="text-gray-200">
                    C.H.I.L (Caring Hands International Ltd.) is an equal opportunity
                    employer. We are committed to fostering a diverse and inclusive
                    workplace where all individuals are treated with respect and
                    dignity. We encourage applicants from all backgrounds, cultures, and
                    experiences to apply and contribute to our mission of delivering
                    exceptional care. At C.H.I.L, we believe that diversity strengthens
                    our team and helps us better serve our clients.
                </p>
            </section>

            <!-- Disability Confident -->
            <section
                class="mt-12 bg-chil-blue text-gray-200 text-center shadow-md rounded-lg p-6 border border-gray-200"
            >
                <header>
                    <h2 class="text-2xl font-semibold mb-4">Disability Confident</h2>
                </header>
                <p class="text-gray-200">
                    We are proud to be a Disability Confident employer. Our commitment
                    is to provide equal opportunities and support for all individuals,
                    ensuring a welcoming and accessible work environment for everyone.
                </p>
            </section>

            <!-- Join Our Team -->
            <div class="text-center mt-16">
                <header>
                    <h1 class="text-4xl font-extrabold text-chil-blue mb-4">
                        Join Our Team
                    </h1>
                    <p class="text-lg text-gray-700">
                        At Caring Hands International Ltd., we provide compassionate care
                        and are looking for dedicated individuals to join our team.
                    </p>
                    <p class="text-lg text-gray-700">
                        If you share our dedication to improving lives and want to grow in
                        a supportive, values-driven environment, Be part of a
                        values-driven mission focused on respect, integrity, and
                        excellence.
                    </p>
                </header>
            </div>
        </div>

        <!-- How to Apply -->

        <!-- Contact -->
        <section
            style="
            background-image: url('{{asset('img/team of care givers.jpg')}}');
            background-attachment: fixed;
          "
            class="mt-16 bg-cover bg-center"
        >
            <div
                class="bg-gradient-to-t from-chil-blue/95 via-black/70 to-transparent"
            >
                <div class="py-24">
                    <div class="max-w-6xl mx-auto p-6">
                        <header>
                            <h2 class="text-3xl font-bold text-white mb-4">How to Apply</h2>
                        </header>
                        <p class="text-gray-200 mb-4">
                            Interested candidates should fill out the application form
                            below.
                        </p>
                        <!-- Application Form -->
                        <form
                            class="space-y-4 shadow-xl p-6 border border-gray-200 rounded-lg"
                            method="post"
                            action="career.php"
                            enctype="multipart/form-data"
                        >
                            <input
                                type="text"
                                name="name"
                                placeholder="Name"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-chil-blue"
                                required
                            />

                            <input
                                type="email"
                                name="email"
                                placeholder="Email"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-chil-blue"
                                required
                            />

                            <input
                                type="tel"
                                name="phone"
                                placeholder="Telephone Number"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-chil-blue"
                                required
                            />

                            <input
                                type="text"
                                name="city"
                                placeholder="City"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-chil-blue"
                                required
                            />

                            <label class="block text-white">
                                C.H.I.L is committed to ensuring that our recruitment
                                processes are barrier-free and as inclusive as possible to
                                everyone. This includes making adjustments for people who have
                                a disability or long-term condition. Would you like us to make
                                any adjustments prior to your interview and working with us?
                            </label>
                            <input
                                type="checkbox"
                                name="disability_adjustment"
                                class="rounded-md py-2.5 px-4 border text-sm outline-chil-blue"
                            />
                            <span class="text-white"
                            >Yes, I would like to request adjustments
                  </span>

                            <textarea
                                placeholder="Cover Letter"
                                rows="6"
                                class="w-full rounded-md px-4 border text-sm pt-2.5 outline-chil-blue"
                                required
                            ></textarea>

                            <label class="block text-sm text-white">Upload CV:</label>
                            <input
                                type="file"
                                name="cv"
                                accept=".pdf,.doc,.docx"
                                class="w-full rounded-md text-white py-2.5 px-4 border text-sm outline-chil-blue"
                                required
                            />

                            <button
                                type="submit"
                                class="text-white transition duration-500 bg-chil-red hover:bg-green-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full"
                            >
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>
</x-layouts.page>
