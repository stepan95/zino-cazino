@extends($activeTemplate.'layouts.frontend')

@section('content')
        <!-- Section Bonuses -->
        <section class="bonuses_page">
          <div class="bonuses_page__container">
            <div class="bonuses_page__wrapper">
              <!-- Tabs Desctop -->

              <div class="bonuses_tab bonuses_tab__desctop" id="tab-block">
                <ul class="bonuses_tab__menu tab-mnu">
                  <li
                    class="active"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_1.png') }});
                    "
                  >
                    Bonus type
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_2.png') }});
                    "
                  >
                    Bonus for registration
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_3.png') }});
                    "
                  >
                    Bonus for deposit
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_4.png') }});
                    "
                  >
                    Freespins
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_5.png') }});
                    "
                  >
                    Cashback
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_6.png') }});
                    "
                  >
                    total deposit bonus
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                  <li
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_7.png') }});
                    "
                  >
                    Promocodes
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </li>
                </ul>
                <div class="bonuses_tab__content tab-cont">
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 1</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 2</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 3</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 4</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 5</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 6</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                  <div class="bonuses_tab__wrapper tab-pane">
                    <div class="bonuses_tab__title">Bonus type title 7</div>
                    <div class="bonuses_tab__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bonuses_acc bonuses_tab__mobile">
                <div class="bonuses_acc__item active">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_1.png') }});
                    "
                  >
                    Bonus type
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 1</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_2.png') }});
                    "
                  >
                    Bonus for registration
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 2</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_3.png') }});
                    "
                  >
                  Bonus for deposit
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 3</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_4.png') }});
                    "
                  >
                  Freespins
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 4</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_5.png') }});
                    "
                  >
                  Cashback
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 5</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_6.png') }});
                    "
                  >
                  total deposit bonus
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 6</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bonuses_acc__item">
                  <div
                    class="bonuses_acc__title"
                    style="
                      background-image: url({{ asset('assets/templates/bongo/images/bonuses/bounuses_image_7.png') }});
                    "
                  >
                  Promocodes
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      id="Capa_1"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <g>
                          <path
                            d="M423.386,248.299l-256-245.327c-4.208-4.021-10.833-3.958-14.927,0.167l-64,63.998c-2.042,2.042-3.167,4.812-3.125,7.687    c0.042,2.896,1.25,5.625,3.344,7.604l183.792,173.579L88.678,429.586c-2.094,1.979-3.302,4.708-3.344,7.604    c-0.042,2.875,1.083,5.646,3.125,7.687l64,63.998c2.083,2.083,4.813,3.125,7.542,3.125c2.656,0,5.313-0.979,7.385-2.958    l256-245.327c2.094-2.021,3.281-4.792,3.281-7.708C426.667,253.09,425.48,250.319,423.386,248.299z"
                          />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="bonuses_acc__wrapper">
                    <div class="bonuses_acc__content">
                      <div class="bonuses_title__acc">Bonus type title 7</div>
                      <div class="bonuses_acc__text">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tabs Desctop END -->
            </div>
          </div>
        </section>
        <!-- Section Bonuses END -->

@endsection