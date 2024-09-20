<x-layouts.page>
    <x-slot:banner>
        <section
        style="
          background-image: url('{{asset('img/services.jpg')}}');
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
              Services |
            </p>
            <h1
              data-aos="zoom-in"
              data-aos-easing="linear"
              data-aos-duration="1500"
              class="text-gray-100 max-w-2xl mb-4 text-2xl tracking-tight leading-none md:text-3xl"
            >
              Live-In-Care
            </h1>

            <div class="lg:mt-0 lg:col-span-5 lg:flex"></div>
          </div>
        </div>
      </section>
    </x-slot:banner>

    <main>

        <section class="container py-12 px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <header class="text-center">
              <h2
                data-aos="fade-up"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="600"
                data-aos-delay="100"
                class="tracking-widest text-chil-red font-semibold uppercase"
              >
                Service Overview
              </h2>
              <h1
                data-aos="zoom-in"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="1000"
                data-aos-delay="200"
                class="mb-4 text-2xl text-black-900 dark:text-white md:text-4xl 2xl:text-5xl mt-4 max-w-2xl text-gray-500 lg:mx-auto"
              >
                <span
                  class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
                >
                  Live-In Care, </span
                ><br />
                Continuous Care, Uninterrupted Comfort
              </h1>
            </header>

            <!-- Main Content Section -->
            <article class="mt-12 lg:flex lg:items-center">
              <!-- Image Section -->
              <figure
                data-aos="fade-up"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="800"
                class="lg:w-1/2"
              >
                <img
                  class="rounded-lg shadow-lg"
                  src="{{asset('img/Doctor taking care of senior woman at home.jpg') }}"
                  alt="Doctor taking care of senior woman at home"
                />
                <figcaption class="sr-only">Live-In Care Service</figcaption>
              </figure>
              <!-- Description Section -->
              <div
                data-aos="fade-up"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="800"
                data-aos-delay="300"
                class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0"
              >
                <h3 class="text-2xl leading-6 font-medium text-chil-blue">
                  What is Live-In Care?
                </h3>
                <p class="mt-4 text-lg">
                  Live-In Care is a personalized service where a professional
                  well-being assistant resides in your home to provide continuous
                  support. This type of care is ideal for individuals who need regular
                  assistance but prefer the comfort and familiarity of their own home.
                </p>
                <h3 class="text-2xl leading-6 font-medium text-chil-blue mt-8">
                  Our Approach to Live-In Care
                </h3>
                <ul class="mt-4 list-disc pl-5 space-y-2">
                  <li>24/7 support from compassionate well-being assistants.</li>
                  <li>
                    Customized care plans tailored to your daily routine and
                    preferences.
                  </li>
                  <li>
                    Emphasis on companionship, emotional support, and mental
                    well-being.
                  </li>
                  <li>
                    Assistance with personal care, medication management, and
                    mobility.
                  </li>
                  <li>Meal preparation, housekeeping, and other daily tasks.</li>
                </ul>
              </div>
            </article>

            <!-- Care Process Section -->
            <section
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="800"
              class="mt-12"
            >
              <h3 class="text-2xl leading-6 font-medium text-chil-blue">
                Our Care Process
              </h3>
              <p class="mt-4 text-lg text-gray-600">
                Our Live-In Care service follows a personalized approach to ensure
                each individual receives comprehensive support:
              </p>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div
                  data-aos="fade-up"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="800"
                  class="flex items-start"
                >
                  <div class="flex-shrink-0">
                    <span
                      class="inline-flex items-center justify-center p-3 bg-chil-blue text-white rounded-md shadow-lg"
                    >
                      1
                    </span>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg leading-6 font-medium text-chil-red">
                      Initial Consultation
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We begin with an in-depth consultation to understand the
                      specific needs and preferences of our client.
                    </p>
                  </div>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="800"
                  data-aos-delay="200"
                  class="flex items-start"
                >
                  <div class="flex-shrink-0">
                    <span
                      class="inline-flex items-center justify-center p-3 bg-chil-blue text-white rounded-md shadow-lg"
                    >
                      2
                    </span>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg leading-6 font-medium text-chil-red">
                      Well-being assistant Matching
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We carefully match our clients with a dedicated well-being
                      assistant based on skills, experience, and personality.
                    </p>
                  </div>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="800"
                  data-aos-delay="400"
                  class="flex items-start"
                >
                  <div class="flex-shrink-0">
                    <span
                      class="inline-flex items-center justify-center p-3 bg-chil-blue text-white rounded-md shadow-lg"
                    >
                      3
                    </span>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg leading-6 font-medium text-chil-red">
                      Ongoing Monitoring
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      Regular check-ins and adjustments to the care plan ensure that
                      our clients receive the best possible support.
                    </p>
                  </div>
                </div>
              </div>
            </section>

            <!-- Testimonials Section -->
            <section
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="800"
              class="mt-12 bg-gray-50 py-8 px-6 rounded-lg shadow-md"
            >
              <h3 class="text-2xl leading-6 font-medium text-gray-900">
                What Our Clients Say
              </h3>
              <blockquote class="mt-6 space-y-4">
                <p class="text-lg text-gray-600 italic">
                  "Having a live-in care assistant has made a world of difference for
                  our family. C.H.I.L provide more than just care—they bring
                  companionship and joy."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — E.T, Client's Daughter
                </footer>

                <p class="text-lg text-gray-600 italic">
                  "The peace of mind knowing someone is always there for my mom is
                  invaluable. The well-being assistant feels like part of the family."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — M.B, Client's Son
                </footer>
              </blockquote>
            </section>

            <!-- FAQ Section -->
            <section
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="800"
              class="mt-12"
            >
              <h3 class="text-2xl leading-6 font-medium text-gray-900">
                Frequently Asked Questions
              </h3>
              <dl class="mt-6">
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    Who benefits from Live-In Care?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Live-In Care is ideal for seniors or individuals who require
                    regular assistance but wish to remain in their own homes.
                  </dd>
                </div>
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    What does the well-being assistant do?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    well-being assistants assist with personal care, meal preparation,
                    medication management, companionship, and more.
                  </dd>
                </div>
              </dl>
            </section>

            <!-- Contact Section -->
            <aside
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="800"
              class="mt-12 text-center"
            >
              <p class="text-lg text-gray-600">
                If you or your loved one needs Live-In Care, don’t hesitate to contact
                us for more information.
              </p>
              <div class="mt-4">
                <a
                  href="/contact.html"
                  class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-chil-red/90 hover:bg-chil-blue"
                >
                  Contact Us Today
                </a>
              </div>
            </aside>
          </section>


          <x-hr />

          <x-services />

          <x-hr />

<x-about />
    <hr />

    <x-contact />
    </main>
</x-layouts.page>
