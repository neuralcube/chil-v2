<x-layouts.page>
    <x-slot:banner>
        <section
        style="
          background-image: url('{{asset('storage/img/services.jpg')}}');
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
              One-to-one Care
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
                  One-to-One Care, </span
                ><br />
                Personalized, Dedicated Support for Every Individual Need
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
                  src="{{asset('storage/img/care.jpg')}}"
                  alt="One-to-One Care Services"
                />
                <figcaption class="sr-only">One-to-One Care Service</figcaption>
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
                  What is One-to-One Care?
                </h3>
                <p class="mt-4 text-lg">
                  One-to-One Care is a highly personalized care model where a
                  dedicated well-being assistant provides consistent, round-the-clock
                  support. This service is designed to meet the specific physical,
                  emotional, and social needs of the client on a one-to-one basis.
                </p>
                <h3 class="text-2xl leading-6 font-medium text-chil-blue mt-8">
                  Our Approach to One-to-One Care
                </h3>
                <ul class="mt-4 list-disc pl-5 space-y-2">
                  <li>
                    Consistent care provided by a dedicated well-being assistant for
                    each client.
                  </li>
                  <li>
                    Assistance with all daily living activities, from personal care to
                    mobility support.
                  </li>
                  <li>
                    Companionship and emotional support, fostering strong, trusting
                    relationships.
                  </li>
                  <li>
                    Health monitoring and medication management as per individual
                    requirements.
                  </li>
                  <li>
                    24/7 availability, ensuring seamless care both day and night.
                  </li>
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
                We follow a structured yet flexible process to provide exceptional
                one-to-one care:
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
                      In-depth Assessment
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We start with a detailed assessment to understand the client’s
                      full range of needs, preferences, and health conditions.
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
                      Personalized Care Plan
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We design a care plan that’s fully tailored to the client’s
                      day-to-day routine, health, and social needs.
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
                      Ongoing Support
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      Our well-being assistants provide continuous support, with
                      regular evaluations to adjust care as needed.
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
                  The one-to-one care given by C.H.I.L gives us peace of mind. The
                  consistency and attention from the well-being assistant have been
                  incredible."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — A.L, Client's Son
                </footer>

                <p class="text-lg text-gray-600 italic">
                  "I feel so much more comfortable knowing the well-being assistant is
                  always there for my mom to help with anything she needs."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — K.M, Client's Daughter
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
                    How does One-to-One Care differ from other care services?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    One-to-One Care provides a dedicated well-being assistant who
                    works with just one client, offering a more personal and focused
                    level of care compared to shared or rotational care services.
                  </dd>
                </div>
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    Can I choose my well-being assistant for One-to-One Care?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Yes, we take the time to match well-being assistants with clients
                    based on compatibility, ensuring a trusting and positive
                    relationship.
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
                For more information about One-to-One Care, feel free to contact us
                today.
              </p>
              <div class="mt-4">
                <a
                  href="/contact.html"
                  class="inline-flex items-center px-5 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-chil-blue hover:bg-chil-red"
                >
                  Get in Touch
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
