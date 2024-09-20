  <section
  class="container text-center md:text-left mx-auto px-4 py-24 flex flex-col lg:flex-row gap-16 items-center justify-between"
>
  <div class="lg:w-1/2 max-h-[850px] order-2 lg:order-1">
      <div class="relative grid grid-cols-2 gap-4">
          <!-- Left Column (one large block) -->
          <div class="col-span-1">
              <img
                  data-aos="fade-right"
                  data-aos-easing="ease-out-cubic"
                  data-aos-duration="800"
                  data-aos-delay="200"
                  class="object-cover"
                  src="{{asset('img/caregiver_and_elderly.jpg')}}"
                  alt="Picture of well-being assistant assisting an Elderly Lady"
              />
          </div>

          <!-- Right Column (two smaller blocks stacked vertically) -->
          <div class="col-span-1 grid">
              <div class="row-span-1">
                  <img
                      data-aos="fade-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="800"
                      data-aos-delay="300"
                      class="h-full object-cover"
                      src="{{asset('img/young-orthodontist.jpg')}}"
                      alt="Picture of young orthodontist"
                  />
              </div>
              <div class="row-span-1">
                  <img
                      data-aos="fade-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="800"
                      data-aos-delay="400"
                      class="h-full object-cover"
                      src="{{asset('/img/caregiverhugging.jpg')}}"
                      alt="Picture of well-being assistant hugging"
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
      <p
          data-aos="fade-up"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="600"
          data-aos-delay="100"
          class="tracking-widest text-chil-red"
      >
          About CHIL
      </p>
      <h2
          data-aos="zoom-in"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000"
          data-aos-delay="200"
          class="mb-4 text-2xl text-black-900 dark:text-white md:text-4xl 2xl:text-5xl"
      >
        <span
            class="text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-blue-600"
        >Experience Care, </span
        ><br/>
          Embrace Peace of Mind.
      </h2>

      <div class="text-lg font-normal">
          <p
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="500"
              data-aos-delay="200"
              class="tracking-wide leading-relaxed"
          >
              Founded on the principles of passion and dedication, C.H.I.L has
              been a trusted partner in care for years. We are dedicated to
              delivering exceptional care and support that makes a real difference
              in people's lives. With a strong foundation in compassion, kindness,
              and respect, we are committed to helping individuals and families
              thrive.
          </p>

          <p
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="500"
              data-aos-delay="300"
              class="pt-4"
          >
              We understand the importance of feeling secure and supported. That's
              why we dedicate ourselves to providing personalized, compassionate
              care for you or your loved ones. With our professional team by your
              side, you can focus on what truly matters while we take care of the
              rest.
          </p>

          <p
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="500"
              data-aos-delay="400"
              class="pt-4"
          >
              Whether it's daily assistance, specialized medical support, or
              simply a friendly face to talk to, we are here to ensure that every
              moment is filled with comfort and peace of mind.
          </p>

          <p
              data-aos="fade-up"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="500"
              data-aos-delay="500"
              class="text-chil-blue"
          >
              Trust us to be your partner in well-being. Committed to your health
              and well-being.
          </p>

          <a
              href="{{route('about')}}"
              class="mt-5 transition-all duration-500 inline-block bg-chil-red text-white hover:text-white hover:bg-chil-blue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
          >
              About CHIL
          </a>
      </div>
  </div>
</section>
