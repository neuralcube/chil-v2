<x-layouts.page>
    <x-slot:banner>
        <section class="min-h-96 relative pt-12"
            style="
          background-image: url('{{ asset('storage/img/team\ of\ care\ givers.jpg') }}');
          background-size: cover;
          background-attachment: fixed;
          background-position: center;
        ">
            <div class="absolute bottom-0 h-full w-full bg-gradient-to-t from-black/95 via-chil-blue/50 to-chil-red/30">
            </div>
            <div class="container mx-auto">
                <div class="absolute bottom-4" style="text-shadow: 3px 3px 8px black">
                    <p class="mb-6 max-w-2xl font-light text-white md:text-lg lg:mb-1 lg:text-xl" data-aos="fade-down"
                        data-aos-easing="linear" data-aos-duration="1500">
                        The C.H.I.L Team
                    </p>
                    <h1 class="mb-4 max-w-2xl text-2xl leading-none tracking-tight text-gray-100 md:text-3xl"
                        data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
                        Compassionate care starts with a dedicated team.
                    </h1>

                    <div class="lg:col-span-5 lg:mt-0 lg:flex"></div>
                </div>
            </div>
        </section>
    </x-slot:banner>

    <main class="py-12">
        <div class="container mx-auto px-6">
            <!-- Company Culture -->
            <section class="mt-12 text-center">
                <header>
                    <h2 class="mb-4 text-2xl font-semibold text-chil-blue">
                        Organisational Culture
                    </h2>
                </header>
                <p class="mb-4 text-gray-700">
                    Hear from our team about what it’s like to work at Caring Hands
                    International Ltd.
                </p>
                <!-- Employee Testimonials or Video -->
                <article class="flex justify-center">
                    <div class="rounded-lg bg-gray-200 p-6 shadow-md">
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
                class="mt-12 rounded-lg border border-gray-200 bg-chil-blue p-6 text-center text-gray-200 shadow-md">
                <header>
                    <h2 class="mb-4 text-2xl font-semibold">Career Development</h2>
                </header>
                <p class="text-gray-200">
                    C.H.I.L committed to your growth and development. Learn more about
                    our training programs and career advancement opportunities.
                </p>
            </section>
            <!-- Diversity and Inclusion Development -->
            <section
                class="mt-12 rounded-lg border border-gray-200 bg-chil-red p-6 text-center text-gray-200 shadow-md">
                <header>
                    <h2 class="mb-4 text-2xl font-semibold">Diversity and Inclusion</h2>
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
                class="mt-12 rounded-lg border border-gray-200 bg-chil-blue p-6 text-center text-gray-200 shadow-md">
                <header>
                    <h2 class="mb-4 text-2xl font-semibold">Disability Confident</h2>
                </header>
                <p class="text-gray-200">
                    We are proud to be a Disability Confident employer. Our commitment
                    is to provide equal opportunities and support for all individuals,
                    ensuring a welcoming and accessible work environment for everyone.
                </p>
            </section>

            <!-- Join Our Team -->
            <div class="mt-16 text-center">
                <header>
                    <h1 class="mb-4 text-4xl font-extrabold text-chil-blue">
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
        <section class="mt-16 bg-cover bg-center"
            style="
            background-image: url('{{ asset('storage/img/team of care givers.jpg') }}');
            background-attachment: fixed;
          ">
            <div class="bg-gradient-to-t from-chil-blue/95 via-black/70 to-transparent">
                <div class="py-24">
                    <div class="mx-auto max-w-6xl p-6">
                        <header>
                            <h2 class="mb-4 text-3xl font-bold text-white">How to Apply</h2>
                        </header>
                        <p class="mb-4 text-gray-200">
                            Interested candidates should fill out the application form
                            below.
                        </p>
                        <!-- Application Form -->
                        <form class="space-y-4 rounded-lg border border-gray-200 p-6 shadow-xl" method="post"
                            action="career" enctype="multipart/form-data">
                            @csrf
                            <input class="w-full rounded-md border px-4 py-2.5 text-sm outline-chil-blue"
                                name="firstname" type="text" placeholder="Firstname" required />
                            <input class="w-full rounded-md border px-4 py-2.5 text-sm outline-chil-blue" name="surname"
                                type="text" placeholder="Surname" required />

                            <input class="w-full rounded-md border px-4 py-2.5 text-sm outline-chil-blue" name="email"
                                type="email" placeholder="Email" required />

                            <input class="w-full rounded-md border px-4 py-2.5 text-sm outline-chil-blue" name="phone"
                                type="tel" placeholder="Telephone Number" required />

                            <input class="w-full rounded-md border px-4 py-2.5 text-sm outline-chil-blue" name="city"
                                type="text" placeholder="City" required />

                            <label class="block text-white">
                                C.H.I.L is committed to ensuring that our recruitment
                                processes are barrier-free and as inclusive as possible to
                                everyone. This includes making adjustments for people who have
                                a disability or long-term condition. Would you like us to make
                                any adjustments prior to your interview and working with us?
                            </label>
                            <input class="rounded-md border px-4 py-2.5 text-sm outline-chil-blue"
                                name="disability_adjustment" type="checkbox" />
                            <span class="text-white">Yes, I would like to request adjustments
                            </span>

                            <textarea class="w-full rounded-md border px-4 pt-2.5 text-sm outline-chil-blue" name="cover_letter"
                                placeholder="Cover Letter" rows="6" required></textarea>

                            <label class="block text-sm text-white">Upload CV:</label>
                            <input class="w-full rounded-md border px-4 py-2.5 text-sm text-white outline-chil-blue"
                                name="cv" type="file" accept=".pdf,.doc,.docx" required />

                            <button
                                class="w-full rounded-md bg-chil-red px-4 py-2.5 text-sm font-semibold text-white transition duration-500 hover:bg-green-600"
                                type="submit">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>
</x-layouts.page>
