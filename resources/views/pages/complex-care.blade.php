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
              Complex Care
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
                  Complex Care, </span
                ><br />
                Expert Care for Complex Needs
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
                  src="{{asset('img/comlex_care._2jpg.jpg')}}"
                  alt="Personalized Care Services"
                />
                <figcaption class="sr-only">Complex Care Service</figcaption>
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
                  What is Complex Care?
                </h3>
                <p class="mt-4 text-lg">
                  Complex Care services are designed to cater to individuals with
                  advanced medical needs. This type of care requires highly skilled
                  and specialized support to manage health conditions that might be
                  challenging to handle independently.
                </p>
                <h3 class="text-2xl leading-6 font-medium text-chil-blue mt-8">
                  Our Approach to Complex Care
                </h3>
                <ul class="mt-4 list-disc pl-5 space-y-2">
                  <li>24/7 monitoring by experienced healthcare professionals.</li>
                  <li>Customized care plans tailored to individual health needs.</li>
                  <li>
                    Coordination with doctors, nurses, and specialists for
                    comprehensive care.
                  </li>
                  <li>Use of advanced medical equipment and technology.</li>
                  <li>Support with daily activities and personal care tasks.</li>
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
                We follow a structured approach to ensure each patient receives the
                best possible care:
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
                      Initial Assessment
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      Our team conducts a comprehensive health assessment to
                      understand the specific needs of the patient.
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
                      Customized Care Plan
                    </h4>
                    <p class="mt-2 text-base text-gray-600">
                      Based on the assessment, we develop a personalized care plan
                      that addresses all aspects of the patient's health.
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
                      Our care team provides continuous monitoring and support,
                      adjusting the care plan as necessary to meet evolving needs.
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
                  "The C.H.I.L team has been a blessing for our family. They handle
                  everything with such professionalism and compassion."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — T.R, Client Family Member
                </footer>

                <p class="text-lg text-gray-600 italic">
                  "Thanks to their care, I've been able to manage my health more
                  effectively. They truly go above and beyond."
                </p>
                <footer class="text-right text-sm font-medium text-gray-900">
                  — H.T, Client
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
                    What conditions qualify for Complex Care?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Complex Care is suitable for patients with multiple chronic
                    conditions, advanced illnesses, or those requiring specialized
                    medical equipment and support.
                  </dd>
                </div>
                <div class="py-6">
                  <dt class="text-lg leading-6 font-medium text-gray-900">
                    How do you ensure the quality of care?
                  </dt>
                  <dd class="mt-2 text-base text-gray-600">
                    Our team is comprised of experienced healthcare professionals who
                    are continuously trained. We also have strict protocols and
                    regular assessments to ensure high standards are maintained.
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
                If you or your loved one needs Complex Care, don’t hesitate to contact
                us for more information.
              </p>
              <div class="mt-4">
                <a
                  href="/contact"
                  class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-chil-red/90 hover:bg-chil-blue"
                  >Contact Us Today</a
                >
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
