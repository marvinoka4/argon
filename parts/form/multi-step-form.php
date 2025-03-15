
<div class="grid-container margin-top-2">
    <div class="grid-x grid-margin-x align-center-middle">
        <div class="large-10 cell">
          <div id="page" class="site">
            <div class="container">
              <div class="form-box" id="form-box">
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

                        <div class="grid-x grid-padding-x align-center-middle mortgage-type">
                          <fieldset class="medium-12 cell text-center justify-content-center align-center">
                            <legend><h2 class=" margin-bottom-2">Select Mortgage Type</h2></legend>

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
<!--                        <div class="bg-svg"></div>-->
                        <h2 class=" margin-bottom-2">Property Details</h2>

                        <div class="cell medium-12">
                          <label>
                            <legend>Reason for Loan?</legend>
                            <select id="select" required>
                              <option value="">Please Select</option>
                              <option value="first-time-buyer">First Time Buyer</option>
                              <option value="new-build">New Build</option>
                              <option value="standard-purchase">Standard Purchase</option>
                              <option value="help-to-buy">Help to Buy</option>
                              <option value="right-to-buy">Right to Buy</option>
                              <option value="shared-ownership">Shared Ownership</option>
                              <option value="home-mover">Home Mover</option>
                            </select>
                          </label>
                        </div>

                        <div class="grid-container">
                          <div class="grid-x grid-padding-x">
                            <div class="medium-12 cell">
                              <hr/>
                            </div>
                          </div>
                        </div>


                        <div class="cell medium-12">

                          <div class="grid-x">
                            <div class="small-4 cell">
                              <label for="property-price" class="text-left middle">Property Price</label>
                            </div>
                            <div class="small-7 small-offset-1 cell">
                              <div class="input-group">
                                <span class="input-group-label">£</span>
                                <input class="input-group-field" id="property-price" type="number" required pattern="number"/>
                              </div>
                            </div>
                          </div>

                          <div class="grid-x">
                            <div class="small-4 cell">
                              <label for="loan-amount" class="text-left middle">Loan Amount</label>
                            </div>
                            <div class="small-7 small-offset-1 cell">
                              <div class="input-group">
                                <span class="input-group-label">£</span>
                                <input class="input-group-field" id="loan-amount" type="number" required pattern="number"/>
                              </div>
                            </div>
                          </div>

                          <div class="grid-x">
                            <div class="small-4 cell">
                              <label for="mortgage-term" class="text-left middle">Mortgage Term</label>
                            </div>
                            <div class="small-7 small-offset-1 cell">
                              <div class="input-group">
                                <input class="input-group-field" id="mortgage-term" type="number" required pattern="number"/>
                                <span class="input-group-label">years</span>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>

                      <div class="form-three form-step">
<!--                        <div class="bg-svg"></div>-->
                          <h2 class="margin-bottom-2">Applicant Details</h2>


                          <div>
                            <label for="">First Name</label>
                            <input type="text" placeholder="e.g. John">
                          </div>

                          <div>
                            <label for="">Last Name</label>
                            <input type="text" placeholder="e.g. Doe">
                          </div>

<!--                          <div class="birth">-->
<!--                            <label for="">Date of Birth</label>-->
<!--                            <div class="grouping">-->
<!--                              <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="31" placeholder="DD">-->
<!--                              <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="31" placeholder="MM">-->
<!--                              <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="31" placeholder="YYYY">-->
<!--                            </div>-->
<!--                          </div>-->

                          <div>
                            <label for="">Phone</label>
                            <input type="tel" placeholder="+234xxxxx">
                          </div>
                          <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="e.g. johndoe@gmail.com">
                          </div>
<!--                          <div>-->
<!--                            <label for="">Address</label>-->
<!--                            <input type="text" placeholder="Street Address">-->
<!--                          </div>-->
<!--                          <div>-->
<!--                            <input type="text" placeholder="App, Suite, Building">-->
<!--                          </div>-->
<!--                          <div>-->
<!--                            <label for="">City</label>-->
<!--                            <input type="text" placeholder="City">-->
<!--                          </div>-->
<!--                          <div>-->
<!--                            <label for="">State</label>-->
<!--                            <input type="text" placeholder="State/Province">-->
<!--                          </div>-->
<!--                          <div>-->
<!--                            <label for="">Zip Code</label>-->
<!--                            <input type="text" placeholder="Postal/Zip Code">-->
<!--                          </div>-->
<!--                          <div>-->
<!--                            <label for="">Country</label>-->
<!--                            <select type="text" placeholder="Country">-->
<!--                              <option value="">Please Select</option>-->
<!--                              <option value="A">A</option>-->
<!--                              <option value="B">B</option>-->
<!--                            </select>-->
<!--                          </div>-->

                        <div class="cell medium-12">
                          <label>
                            <legend>Employment status</legend>
                            <select id="select" required>
                              <option value="">Please Select</option>
                              <option value="employed">Employed</option>
                              <option value="self-employed">Self-employed</option>
                              <option value="unemployed">Unemployed</option>
                              <option value="retired">Retired</option>
                              <option value="director">Director</option>
                            </select>
                          </label>
                        </div>

                        <div class="grid-x">
                          <div class="small-7 cell">
                            <label for="gross-annual-income" class="text-left middle">Gross Annual Income</label>
                          </div>
                          <div class="small-12 cell">
                            <div class="input-group">
                              <span class="input-group-label">£</span>
                              <input class="input-group-field" id="gross-annual-income" type="number" required pattern="number"/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-four form-step">
<!--                        <div class="bg-svg"></div>-->
                        <h2 class="margin-bottom-2">Summary</h2>
                        <table class="unstriped">
                          <tbody>
                          <tr>
                            <td>Mortgage Type</td>
                            <td>Purchase </td>
                          </tr>
                          <tr>
                            <td>Title Here</td>
                            <td>First Time Buyer</td>
                          </tr>
                          <tr>
                            <td>Property Price</td>
                            <td>£30000</td>
                          </tr>
                          <tr>
                            <td>Loan Amount</td>
                            <td>£3090888</td>
                          </tr>
                          <tr>
                            <td>Mortgage Term</td>
                            <td>15years</td>
                          </tr>
                          </tbody>
                        </table>
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

                      <div class="btn-group button-group expanded align-justify padding-vertical-2">
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

<script>
  const nextButton = document.querySelector('.btn-next');
  const prevButton = document.querySelector('.btn-prev');
  const steps = document.querySelectorAll('.step');
  const formSteps = document.querySelectorAll('.form-step');
  let active = 1;

  nextButton.addEventListener('click', () => {
    active++;
    if (active > steps.length) {
      active = steps.length;
    }
    updateProgress();
  })

  prevButton.addEventListener('click', () => {
    active--;
    if (active < 1) {
      active = 1;
    }
    updateProgress();
  })

  const updateProgress = () => {
    console.log('steps.length =>' + steps.length);
    console.log('active =>' + active);

    steps.forEach((step, i) => {
      if (i == (active-1)) {
        step.classList.add('active');
        formSteps[i].classList.add('active');
        console.log('i =>' +i);
      } else {
        step.classList.remove('active');
        formSteps[i].classList.remove('active');
      }
    });

    if (active === 1) {
      prevButton.disabled = true;
    } else if (active === steps.length) {
      nextButton.disabled = true;
    } else {
      prevButton.disabled = false;
      nextButton.disabled = false;
    }

  }
</script>
