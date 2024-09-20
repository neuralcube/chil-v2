<x-layouts.page>
    <x-slot:banner>
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
              Conact Us
            </p>
            <h1
              data-aos="zoom-in"
              data-aos-easing="linear"
              data-aos-duration="1500"
              class="text-gray-100 max-w-2xl mb-4 text-2xl tracking-tight leading-none md:text-3xl"
            >
              We Care!
            </h1>

            <div class="lg:mt-0 lg:col-span-5 lg:flex"></div>
          </div>
        </div>
      </section>
    </x-slot:banner>

    <main>
        <section class="" id="contact">
            <div class="px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
              <div class="mb-4">
                <div
                  class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12"
                >
                  <p
                    class="text-base font-semibold uppercase tracking-wide text-chil-blue dark:text-blue-200"
                  >
                    Contact
                  </p>
                  <h2
                    class="font-heading mb-4 font-bold tracking-tight text-chil-red dark:text-white text-3xl sm:text-5xl"
                  >
                    Get in Touch
                  </h2>
                  <p
                    class="mx-auto mt-4 max-w-3xl text-xl text-gray-600 dark:text-slate-400"
                  >
                    We always care!
                  </p>
                </div>
              </div>

              <address class="mx-auto w-full">
                <div class="flex flex-col items-center justify-center">
                  <h3
                    class="mb-2 text-lg font-medium leading-6 text-chil-blue not-italic"
                  >
                    Our Address
                  </h3>
                </div>
                <div class="ml-4 mb-4">
                  <div class="border-chil-blue border">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.5783764822563!2d0.10668927719471331!3d51.42917127179569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ac1da67180dd%3A0xc22eb932b200d33f!2s2A%20St%20John&#39;s%20Rd%2C%20Sidcup%20DA14%204HB%2C%20UK!5e0!3m2!1sen!2sng!4v1726156442549!5m2!1sen!2sng"
                      height="600"
                      style="border: 0; width: 100%"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
              </address>
              <div class="flex items-stretch justify-center">
                <div class="">
                  <div class="h-full pr-6">
                    <ul class="my-6 md:mb-0">
                      <li class="flex">
                        <div
                          class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6"
                          >
                            <path
                              d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"
                            ></path>
                            <path d="M15 7a2 2 0 0 1 2 2"></path>
                            <path d="M15 3a6 6 0 0 1 6 6"></path>
                          </svg>
                        </div>
                        <div class="ml-4 mb-4">
                          <h3
                            class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white"
                          >
                            Contact
                          </h3>
                          <p
                            class="text-chil-blue font-semibold border-chil-blue hover:text-chil-red"
                          >
                            <a href="tel:+44 7487 836121">Click To Call </a>
                          </p>
                          <p
                            class="text-chil-blue font-semibold border-chil-blue hover:text-chil-red"
                          >
                            <a href="mailto:hello@chil.care">Click To Email</a>
                          </p>
                        </div>
                      </li>
                      <li class="flex">
                        <div
                          class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6"
                          >
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M12 7v5l3 3"></path>
                          </svg>
                        </div>
                        <div class="ml-4 mb-4">
                          <h3
                            class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white"
                          >
                            Office and Working hours
                          </h3>
                          <p class="text-gray-600">Monday - Friday: 09:00 - 17:00</p>
                          <p class="text-gray-600">On-Call: 17:00 - 09:00</p>
                          <p class="text-gray-600">
                            Saturday &amp; Sunday: On-Call 24 Hours
                          </p>
                          <p class="text-green-700 font-semibold">
                            Working Hours: 24 Hours
                          </p>
                        </div>
                      </li>
                    </ul>

                    <div class="shadow-xl p-4">
                      <h2 class="mb-4 font-bold text-center text-chil-red">
                        Follow Us
                      </h2>
                      <div class="flex justify-center space-x-2 md:space-x-9">
                        <!-- Facebook -->
                        <a
                          href="https://www.facebook.com/share/XhtKHixCKrmAmboF/"
                          target="_blank"
                          class="transition duration-300 hover:scale-110 w-16 h-16 text-gray-100 hover:text-red-400 inline-block"
                          title="Facebook"
                        >
                          <svg
                            viewBox="126.445 2.281 589 589"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="title"
                          >
                            <title>Facebook</title>
                            <circle
                              cx="420.945"
                              cy="296.781"
                              r="294.5"
                              fill="#3c5a9a"
                            />
                            <path
                              d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z"
                              fill="#ffffff"
                            />
                          </svg>
                        </a>
                        <!-- Instagram -->
                        <a
                          href="https://www.instagram.com/caring_hands24/?utm_source=ig_web_button_share_sheet"
                          class="transition duration-300 hover:scale-110 w-16 h-16 text-gray-100 hover:text-red-400 inline-block"
                          target="_blank"
                          title="Instagram"
                        >
                          <svg
                            viewBox="0 0 3364.7 3364.7"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="title desc"
                          >
                            <title>Instagram</title>
                            <desc>Instagram</desc>
                            <defs>
                              <radialGradient
                                id="0"
                                cx="217.76"
                                cy="3290.99"
                                r="4271.92"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop offset=".09" stop-color="#fa8f21" />
                                <stop offset=".78" stop-color="#d82d7e" />
                              </radialGradient>
                              <radialGradient
                                id="1"
                                cx="2330.61"
                                cy="3182.95"
                                r="3759.33"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop
                                  offset=".64"
                                  stop-color="#8c3aaa"
                                  stop-opacity="0"
                                />
                                <stop offset="1" stop-color="#8c3aaa" />
                              </radialGradient>
                            </defs>
                            <path
                              d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9"
                              fill="url(#0)"
                            />
                            <path
                              d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9"
                              fill="url(#1)"
                            />
                            <path
                              d="M1269.25,1689.52c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7-416.6-186.59-416.6-416.7m-225.26,0c0,354.5,287.36,641.86,641.86,641.86s641.86-287.36,641.86-641.86-287.36-641.86-641.86-641.86S1044,1335,1044,1689.52m1159.13-667.31a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M1180.85,2707c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27S2059.13,666,2191,672c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M1170.5,447.09c-133.07,6.06-224,27.16-303.41,58.06-82.19,31.91-151.86,74.72-221.43,144.18S533.39,788.47,501.48,870.76c-30.9,79.46-52,170.34-58.06,303.41-6.16,133.28-7.57,175.89-7.57,515.35s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43s139.14,112.18,221.43,144.18c79.56,30.9,170.34,52,303.41,58.06,133.35,6.06,175.89,7.57,515.35,7.57s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2586.8,537.06,2504.71,505.15c-79.56-30.9-170.44-52.1-303.41-58.06C2068,441,2025.41,439.52,1686,439.52s-382.1,1.41-515.45,7.57"
                              fill="#ffffff"
                            />
                          </svg>
                        </a>

                        <!-- Whatsapp -->
                        <a
                          href="https://wa.me/+447487836121"
                          class="transition duration-300 hover:scale-110 w-16 h-16 text-gray-100 hover:text-red-400 inline-block"
                          target="_blank"
                          title="Whatsapp"
                        >
                          <svg
                            viewBox="-2.73 0 1225.016 1225.016"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-labelledby="title desc"
                          >
                            <title>Whatsapp Link</title>
                            <desc>Whatsapp icon</desc>
                            <path
                              fill="#E0E0E0"
                              d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"
                            />
                            <linearGradient
                              id="a"
                              gradientUnits="userSpaceOnUse"
                              x1="609.77"
                              y1="1190.114"
                              x2="609.77"
                              y2="21.084"
                            >
                              <stop offset="0" stop-color="#20b038" />
                              <stop offset="1" stop-color="#60d66a" />
                            </linearGradient>
                            <path
                              fill="url(#a)"
                              d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"
                            />
                            <image
                              overflow="visible"
                              opacity=".08"
                              width="682"
                              height="639"
                              xlink:href="FCC0802E2AF8A915.png"
                              transform="translate(270.984 291.372)"
                            />
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              fill="#FFF"
                              d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"
                            />
                            <path
                              fill="#FFF"
                              d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"
                            />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <x-hr />

          <x-contact />
    </main>
</x-layouts.page>
