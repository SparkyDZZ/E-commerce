@extends('frontend.layout')

  @section('js')
    @vite('resources/js/product.js')
  @endsection
  @section('content')
    <section class="mb-20">
      <div class="bg-black opacity-75 absolute w-screen h-screen hidden z-50" id="light-1"></div>
      <div class="absolute top-16 min-w-fit container mx-auto xl:flex flex-col gap-8 justify-center invisible z-50" id="light-2">
          <div class="h-fit w-full mx-auto">
              <div class="flex items-center justify-center w-[35%] rounded-xl m-auto bg-orange xl:w-[28%]">
                  <button class="bg-white relative left-6 rounded-full flex justify-center items-center pr-4 pl-3 py-3 ml-3 z-20 group" id="previous">
                  <svg
                    width="12"
                    height="18"
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#1D2026] group-hover:stroke-orange transition"
                    id="previous"
                  >
                    <path
                      d="M11 1 3 9l8 8"
                      stroke-width="3"
                      fill="none"
                      fill-rule="evenodd"
                      id="previous"
                    />
                  </svg>
                </button>

                  <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="sneaker" class="rounded-xl" id="hero-lightbox" />

                  <button class="bg-white relative right-6 rounded-full flex justify-center items-center pr-3 pl-4 py-3 mr-3 z-20 group" id="next">
                  <svg
                    width="13"
                    height="18"
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#1D2026] group-hover:stroke-orange transition"
                    id="next"
                  >
                    <path
                      d="m2 1 8 8-8 8"
                      stroke-width="3"
                      fill="none"
                      fill-rule="evenodd"
                      id="next"
                    />
                  </svg>
                </button>
              </div>
          </div>

          <div class="thumbnails thumbnails-light w-1/3 flex justify-between gap-4 m-auto lg:mt-6 xl:w-1/4">
              <div id="1" class="w-1/5 cursor-pointer bg-pcolor rounded-xl ring-active">
                  <img src="{{url('frontend/assets/images/products/casque.webp')}}" id="thumbLight-1" />
              </div>

              <div id="2" class="w-1/5 cursor-pointer bg-pcolor rounded-xl">
                  <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-2" />
              </div>

              <div id="3" class="w-1/5 cursor-pointer bg-pcolor rounded-xl">
                  <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-3" />
              </div>

              <div id="4" class="w-1/5 cursor-pointer bg-pcolor rounded-xl">
                  <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-4" />
              </div>
          </div>
      </div>

      <!-- Contents -->
      <div class="container mx-auto text-base">

          <!-- Main Content -->
          <main class="w-full flex flex-col lg:flex-row">
              <!-- Gallery -->
              <section class="h-fit flex-col gap-8 mt-16 sm:flex sm:flex-row sm:gap-4 sm:h-full sm:mt-24 sm:mx-2 md:gap-8 md:mx-4 lg:flex-col lg:mx-0 lg:mt-36">
                  <picture class="relative flex items-center rounded-lg bg-pcolor">
                      <button class="bg-white w-10 h-10 flex items-center justify-center pr-1 rounded-full absolute left-6 z-10 sm:hidden" id="previous-mobile">
                    <svg
                      width="12"
                      height="18"
                      xmlns="http://www.w3.org/2000/svg"
                      id="previous-mobile"
                    >
                      <path
                        d="M11 1 3 9l8 8"
                        stroke="#1D2026"
                        stroke-width="3"
                        fill="none"
                        fill-rule="evenodd"
                        id="previous-mobile"
                      />
                    </svg>
                  </button>
                      <img src="{{url('frontend/assets/images/products/casque.webp')}}"
                          id="hero" />
                      <button class="bg-white w-10 h-10 flex items-center justify-center pl-1 rounded-full absolute right-6 z-10 sm:hidden" id="next-mobile">
                    <svg
                      width="13"
                      height="18"
                      xmlns="http://www.w3.org/2000/svg"
                      id="next-mobile"
                    >
                      <path
                        d="m2 1 8 8-8 8"
                        stroke="#1D2026"
                        stroke-width="3"
                        fill="none"
                        fill-rule="evenodd"
                        id="next-mobile"
                      />
                    </svg>
                  </button>
                  </picture>

                  <div class="thumbnails  hidden justify-between gap-4 m-auto sm:flex sm:flex-col sm:justify-start sm:items-center sm:h-fit md:gap-5 lg:flex-row">
                      <div id="1" class="w-1/5 bg-pcolor cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px] ring-active">
                          <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition active" id="thumb-1" />
                      </div>

                      <div id="2" class="w-1/5 bg-pcolor cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
                          <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumb-2" />
                      </div>

                      <div id="3" class="w-1/5 bg-pcolor cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
                          <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumb-3" />
                      </div>

                      <div id="4" class="w-1/5 bg-pcolor cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
                          <img src="{{url('frontend/assets/images/products/casque.webp')}}" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumb-4" />
                      </div>
                  </div>
              </section>

              <!-- Text -->
              <section class="w-full p-6 lg:mt-28 lg:pr-20 lg:py-10 2xl:pr-40 2xl:mt-40">
                  <h4 class="font-bold text-orange mb-2 uppercase text-xs tracking-widest">
                      Lorem ipsum
                  </h4>
                  <h1 class="text-very-dark mb-4 font-bold text-3xl lg:text-4xl">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </h1>
                  <p class="text-dark-grayish mb-6 text-base sm:text-lg">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique eum soluta ut eius sint molestiae amet unde cumque doloribus explicabo dicta labore nihil, animi, consequatur adipisci quidem numquam libero eveniet!
                  </p>

                  <div class="flex items-center justify-between mb-6 sm:flex-col sm:items-start">
                      <div class="flex items-center gap-4">
                          <h3 class="text-very-dark font-bold text-3xl inline-block">
                              DZD 2000
                          </h3>
                  </div>
                  <p
                    class="text-dark-grayish w-fit line-through decoration-dark-grayish decoration-1 my-auto"
                  >
                    DZD 2500
                  </p>
                </div>
      
                <div class="flex flex-col gap-5 mb-16 sm:flex-row lg:mb-0">
                  <div
                    class="w-full h-10 text-sm bg-light py-2 flex items-center justify-between rounded-lg font-bold relatives sm:w-80"
                  >
                    <div id="minus" class="plus-minus hover:opacity-50 cursor-pointer">
                      <div
                        class="w-3 h-1 bg-orange absolute"
                        id="minus"
                      ></div>
                      <svg
                        width="12"
                        height="4"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                      >
                        <defs>
                          <path
                            d="M11.357 3.332A.641.641 0 0 0 12 2.69V.643A.641.641 0 0 0 11.357 0H.643A.641.641 0 0 0 0 .643v2.046c0 .357.287.643.643.643h10.714Z"
                            id="a"
                          />
                        </defs>
                        <use
                          fill="#FF6F00"
                          fill-rule="nonzero"
                          xlink:href="#a"
                        />
                      </svg>
                    </div>
                    <span id="amount" class="select-none">0</span>
                          <div id="plus" class="plus-minus hover:opacity-50 cursor-pointer">
                              <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="plus">
                        <defs>
                          <path
                            d="M12 7.023V4.977a.641.641 0 0 0-.643-.643h-3.69V.643A.641.641 0 0 0 7.022 0H4.977a.641.641 0 0 0-.643.643v3.69H.643A.641.641 0 0 0 0 4.978v2.046c0 .356.287.643.643.643h3.69v3.691c0 .356.288.643.644.643h2.046a.641.641 0 0 0 .643-.643v-3.69h3.691A.641.641 0 0 0 12 7.022Z"
                            id="b"
                          />
                        </defs>
                        <use
                          fill="#FF6F00"
                          fill-rule="nonzero"
                          xlink:href="#b"
                          id="plus"
                        />
                      </svg>
                          </div>
                      </div>
                      <button class="w-full h-10 bg-pcolor py-2 flex items-center justify-center gap-4 text-xs rounded-lg font-bold text-white shadow-md shadow-orange hover:brightness-125 transition select-none" id="add-cart">
                    <svg
                      width="16"
                      height="16"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 22 20"
                    >
                      <path
                        d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z"
                        fill="hsl(223, 64%, 98%)"
                        fill-rule="nonzero"
                      />
                    </svg>
                    Ajouter au panier
                  </button>
                  </div>
              </section>
          </main>
      </div>
    </section>
  @endsection
