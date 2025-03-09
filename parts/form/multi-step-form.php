
<div class="grid-container margin-top-2">
    <div class="grid-x grid-margin-x align-center-middle">
        <div class="large-10 cell">
          <div id="page" class="site">
            <div class="container">
              <div class="form-box">
                <div class="grid-x align-center-middle">
                  <div class="cell medium-5 small-12">
                    <div class="progress">
                      <div class="logo text-center margin-bottom-4"><a href="">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/site_logo.svg" width="200" alt="AKM"/></a></div>
                        <ul class="progress-steps align-middle">
                          <li class="step active">
                            <span>1</span>
                            <p>Mortgage <br> <span> please select option complete</span></p>
                          </li>
                          <li class="step">
                            <span>2</span>
                            <p>Property <br> <span>please select option complete</span></p>
                          </li>
                          <li class="step">
                            <span>3</span>
                            <p>Applicant <br> <span>please select option complete</span></p>
                          </li>
                          <li class="step">
                            <span>4</span>
                            <p>Summary <br> <span>please select option complete</span></p>
                          </li>
                        </ul>
                    </div>
                  </div>
                  <div class="cell medium-7 small-12">
                    <form action="">

                      <div class="form-one form-step active">
                        <div class="grid-x grid-padding-x align-center-middle padding-vertical-4 mortgage-type">
                          <fieldset class="medium-12 cell text-center justify-content-center align-center">
                            <legend><h4>Select Mortgage Type</h4></legend>

                            <div>
                              <input type="radio" name="mortgage-option" value="purchase" id="purchase" required><label for="purchase">
                                <div class="ins-ft-scroll-icon">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic8.svg" alt="">
                                </div>
                                <span>Purchase</span>
                              </label>
                            </div>

                            <div>
                              <input type="radio" name="mortgage-option" value="remortgage" id="remortgage">
                              <label for="remortgage">
                                <div class="ins-ft-scroll-icon">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic10.svg" alt="">
                                </div>
                                <span>Remortgage</span>
                              </label>
                            </div>

                            <div>
                              <input type="radio" name="mortgage-option" value="specialist-lending" id="specialist-lending">
                              <label for="specialist-lending">
                                <div class="ins-ft-scroll-icon">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic5.svg" alt="">
                                </div>
                                <span>Specialist Lending</span>
                              </label>
                            </div>
                          </fieldset>
                        </div>
                      </div>

                      <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Personal Information</h2>
                        <p>Enter correctly</p>


                        <div class="grid-container">
                          <div class="grid-x grid-margin-x">
                            <div class="cell medium-12">
                              <label>European Cars, Choose One, it can't be the blank option.
                                <select id="select" required>
                                  <option value="">Please Select</option>
                                  <option value="first-time-buyer">First Time Buyer</option>
                                  <option value="new-build">New Build</option>
                                  <option value="standard-purchase">Standard Purchase</option>
                                  <option value="help-to-buy">Help to Buy</option>
                                  <option value="right-to-buy">Right to Buy</option>
                                  <option value="shared-ownership">Shared Ownership</option>
                                  <option value="new-build">New Build</option>
                                </select>
                              </label>
                            </div>
                            <fieldset class="cell large-6">
                              <legend>Check these out</legend>
                              <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                              <input id="checkbox2" type="checkbox" required><label for="checkbox2">Checkbox 2</label>
                              <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
                            </fieldset>
                          </div>
                        </div>

                        <div>
                          <label for="">First Name</label>
                          <input type="text" placeholder="e.g. John">
                        </div>
                        <div>
                          <label for="">Last Name</label>
                          <input type="text" placeholder="e.g. Doe">
                        </div>
                        <div class="birth">
                          <label for="">Date of Birth</label>
                          <div class="grouping">
                            <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">
                            <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="31" placeholder="MM">
                            <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="31" placeholder="YYYY">
                          </div>
                        </div>
                      </div>

                      <div class="form-three form-step">
                        <div class="bg-svg"></div>
                          <h2>Contact</h2>
                          <div>
                            <label for="">Phone</label>
                            <input type="tel" placeholder="+234xxxxx">
                          </div>
                          <div>
                            <label for="">Address</label>
                            <input type="text" placeholder="Street Address">
                          </div>
                          <div>
                            <input type="text" placeholder="App, Suite, Building">
                          </div>
                          <div>
                            <label for="">City</label>
                            <input type="text" placeholder="City">
                          </div>
                          <div>
                            <label for="">State</label>
                            <input type="text" placeholder="State/Province">
                          </div>
                          <div>
                            <label for="">Zip Code</label>
                            <input type="text" placeholder="Postal/Zip Code">
                          </div>
                          <div>
                            <label for="">Country</label>
                            <select type="text" placeholder="Country">
                              <option value="">Please Select</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-four form-step">
                        <div class="bg-svg"></div>
                        <h2>Test</h2>
                        <div>
                          <label for="">Email</label>
                          <input type="email" placeholder="e.g. johndoe@gmail.com">
                        </div>
                        <div>
                          <label for="">Username</label>
                          <input type="text" placeholder="e.g. johndoe@gmail.com">
                        </div>
                        <div>
                          <label for="">Password</label>
                          <input type="password" placeholder="Your Password">
                        </div>
                        <div>
                          <input type="password" placeholder="Confirm Your Password">
                        </div>
                        <div class="checkbox">
                          <input type="checkbox">
                          <label for="">Receive our Newsletter</label>
                        </div>
                      </div>

<!--                      <div class="form-five form-step">-->
<!--                        <div class="bg-svg"></div>-->
<!--                        <h2>Security</h2>-->
<!--                        <div>-->
<!--                          <label for="">Email</label>-->
<!--                          <input type="email" placeholder="e.g. johndoe@gmail.com">-->
<!--                        </div>-->
<!--                        <div>-->
<!--                          <label for="">Username</label>-->
<!--                          <input type="text" placeholder="e.g. johndoe@gmail.com">-->
<!--                        </div>-->
<!--                        <div>-->
<!--                          <label for="">Password</label>-->
<!--                          <input type="password" placeholder="Your Password">-->
<!--                        </div>-->
<!--                        <div>-->
<!--                          <input type="password" placeholder="Confirm Your Password">-->
<!--                        </div>-->
<!--                        <div class="checkbox">-->
<!--                          <input type="checkbox">-->
<!--                          <label for="">Receive our Newsletter</label>-->
<!--                        </div>-->
<!--                      </div>-->

                      <div class="btn-group button-group expanded align-justify">
                        <button type="button" class="button btn-prev" disabled>Back</button>
                        <button type="button" class="button btn-next">Next</button>
                        <button type="button" class="button success btn-submit">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>

    </div>
</div>
