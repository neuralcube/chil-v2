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
              Private Homcare
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
                  Private Care, </span
                ><br />
                Dedicated Personal Care Tailored Just for You
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
                  src="{{asset('storage/img/private_home_care.jpg')}}"
                  alt="Private Care Services"
                />
                <figcaption class="sr-only">Private Care Service</figcaption>
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
                  What is Private Care?
                </h3>
                <p class="mt-4 text-lg">
                  Private Care provides one-on-one care tailored specifically to the
                  unique needs of each individual. This service is ideal for clients
                  seeking personalized support to maintain a high quality of life in
                  the comfort of their homes.
                </p>
                <h3 class="text-2xl leading-6 font-medium text-chil-blue mt-8">
                  Our Approach to Private Care
                </h3>
                <ul class="mt-4 list-disc pl-5 space-y-2">
                  <li>
                    Customized care plans with dedicated well-being assistants
                    assigned to each client.
                  </li>
                  <li>
                    Assistance with personal care, mobility support, and daily
                    activities.
                  </li>
                  <li>
                    Household management services such as cleaning, cooking, and
                    shopping.
                  </li>
                  <li>Health management, including medication administration.</li>
                  <li>
                    Emotional support and companionship for a holistic approach to
                    well-being.
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
                We ensure personalized care through a seamless process designed to
                meet your needs:
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
                      Comprehensive Consultation
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We begin with an in-depth consultation to understand the
                      specific needs and preferences of the client.
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
                      Tailored Care Plan
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We create a care plan that is entirely customized to suit the
                      lifestyle and health needs of the client.
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
                      Regular Updates
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We ensure continuous support with regular check-ins and updates
                      to the care plan as necessary.
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
                  "C.H.I.L has provided a personal touch to my parent's care. The
                  staff are attentive and compassionate, ensuring all our needs are
                  met."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — F.W, Client's Daughter
                </footer>

                <p class="text-lg text-gray-600 italic">
                  "I am extremely satisfied with the tailored care I receive. The
                  well-being assistants are professional and always willing to go the
                  extra mile."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — T.S, Client
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
                    What does Private Care involve?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Private Care personalized care including personal hygiene
                    assistance, meal preparation, health monitoring, and emotional
                    support.
                  </dd>
                </div>
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    Is Private Care flexible to changing needs?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Yes, we regularly review the care plan to adapt to any changes in
                    health or personal requirements.
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
                For more information about Private Care, feel free to get in touch
                with us today.
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
