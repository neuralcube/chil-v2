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
              Home Care
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
                  Home Care, </span
                ><br />
                Compassionate Support in the Comfort of Your Home
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
                  src="{{asset('img/home_care.jpg')}}"
                  alt="Home Care Services"
                />
                <figcaption class="sr-only">Home Care Service</figcaption>
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
                  What is Home Care?
                </h3>
                <p class="mt-4 text-lg">
                  Home Care is designed to support individuals with daily living
                  activities, allowing them to maintain independence while staying in
                  the comfort of their own homes. This service is ideal for those
                  needing help with routine tasks and personal care.
                </p>
                <h3 class="text-2xl leading-6 font-medium text-chil-blue mt-8">
                  Our Approach to Home Care
                </h3>
                <ul class="mt-4 list-disc pl-5 space-y-2">
                  <li>
                    Personalized care plans based on individual needs and preferences.
                  </li>
                  <li>
                    Assistance with daily activities such as bathing, dressing, and
                    grooming.
                  </li>
                  <li>
                    Support with household tasks including meal preparation and light
                    housekeeping.
                  </li>
                  <li>Medication reminders and health monitoring.</li>
                  <li>
                    Companionship to combat loneliness and provide social interaction.
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
                We ensure comprehensive and compassionate care through a structured
                approach:
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
                      Needs Assessment
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We begin with an assessment to identify the specific needs of
                      the individual, focusing on their comfort and well-being.
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
                      We develop a personalized care plan that aligns with the
                      individual's lifestyle and health requirements.
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
                      Continuous Monitoring
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      We provide ongoing monitoring and support, making adjustments to
                      the care plan as needed to ensure optimal care.
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
                  "C.H.I.L Home Care has been a lifeline for us. Their well-being
                  assistants are so attentive and kind, it feels like having family
                  around."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — S.J, Client's Sister
                </footer>

                <p class="text-lg text-gray-600 italic">
                  "I feel more independent and comfortable knowing help is always
                  available. It's a perfect balance of care and freedom."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — W.D, Client
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
                    What does Home Care include?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Home Care includes assistance with daily activities, personal
                    care, medication reminders, companionship, and help with household
                    tasks.
                  </dd>
                </div>
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    How flexible is the Home Care schedule?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Our Home Care schedules are highly flexible. We can arrange care
                    as per the client's needs, whether it's a few hours a day or
                    full-time assistance.
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
                If you or your loved one needs Home Care, don’t hesitate to contact us
                for more information.
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
