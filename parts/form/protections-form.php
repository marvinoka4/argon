<div class="grid-container margin-top-2">
  <div class="grid-x grid-margin-x align-center-middle">
    <div class="large-10 cell">
      <div id="page" class="site">
        <div class="container">
          <div class="form-box" id="form-box">
            <div class="grid-x align-center-middle">
              <div class="cell medium-5 small-12">
                <div class="progress margin-vertical-1">
                  <div class="logo text-center margin-bottom-4 hide-for-small-only">
                    <a href="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/site_logo.svg" width="200" alt="AKM" />
                    </a>
                  </div>
                  <ul class="progress-steps align-middle">
                    <li class="step active">
                      <span>1</span>
                      <p>Protection <br> <span>please select option complete</span></p>
                    </li>
                    <li class="step">
                      <span>2</span>
                      <p>Cover <br> <span>please select option complete</span></p>
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
                <form action="" data-abide novalidate id="protectionForm">
                  <div data-abide-error class="alert callout" style="display: none;">
                    <p><i class="fi-alert"></i> Please fill in all required fields correctly.</p>
                  </div>

                  <div class="form-one form-step active">
                    <div class="grid-x grid-padding-x align-center-middle mortgage-type">
                      <fieldset class="medium-12 cell text-center justify-content-center align-center required">
                        <legend>
                          <h2 class="margin-bottom-2">Select Protection Type</h2>
                        </legend>
                        <div class="radio-row">
                          <div class="radio-column">
                            <div>
                              <input type="radio" name="protectionOption" value="life-insurance" id="life-insurance" required>
                              <label for="life-insurance">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic7.svg" alt=""></div>
                                <span>Life Insurance</span>
                              </label>
                            </div>
                            <div>
                              <input type="radio" name="protectionOption" value="critical-illness-cover" id="critical-illness-cover">
                              <label for="critical-illness-cover">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic1.svg" alt=""></div>
                                <span>Critical Illness Cover</span>
                              </label>
                            </div>
                            <div>
                              <input type="radio" name="protectionOption" value="le-critical-cover" id="le-critical-cover">
                              <label for="le-critical-cover">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic9.svg" alt=""></div>
                                <span>Life or Earlier Critical Cover</span>
                              </label>
                            </div>
                          </div>
                          <div class="radio-column">
                            <div>
                              <input type="radio" name="protectionOption" value="mortgage-protection" id="mortgage-protection">
                              <label for="mortgage-protection">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic10.svg" alt=""></div>
                                <span>Mortgage Protection</span>
                              </label>
                            </div>
                            <div>
                              <input type="radio" name="protectionOption" value="income-protection" id="income-protection">
                              <label for="income-protection">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic3.svg" alt=""></div>
                                <span>Income Protection</span>
                              </label>
                            </div>
                            <div>
                              <input type="radio" name="protectionOption" value="whole-of-life" id="whole-of-life">
                              <label for="whole-of-life">
                                <div class="ins-ft-scroll-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scroll/ic2.svg" alt=""></div>
                                <span>Whole of Life</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <span class="form-error">Protection type is required.</span>
                      </fieldset>
                    </div>
                  </div>

                  <div class="form-two form-step">
                    <h2 class="margin-bottom-2">Cover Details</h2>
                    <div class="cell medium-12">
                      <div class="grid-x">
                        <div class="small-4 cell">
                          <label for="coverAmount" class="text-left middle">Cover Amount</label>
                        </div>
                        <div class="small-7 small-offset-1 cell">
                          <div class="input-group">
                            <span class="input-group-label">£</span>
                            <input class="input-group-field" id="coverAmount" name="coverAmount" type="number" required pattern="^[0-9]+$" min="1">
                            <span class="form-error">Please enter a valid cover amount.</span>
                          </div>
                        </div>
                      </div>
                      <div class="grid-x">
                        <div class="small-4 cell">
                          <label for="coverTerm" class="text-left middle">Term of Cover</label>
                        </div>
                        <div class="small-7 small-offset-1 cell">
                          <div class="input-group">
                            <input class="input-group-field" id="coverTerm" name="coverTerm" type="number" required pattern="^[0-9]+$" min="1">
                            <span class="input-group-label">years</span>
                            <span class="form-error">Please enter a valid term of cover.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-three form-step">
                    <h2 class="margin-bottom-2">Applicant Details</h2>
                    <div>
                      <label for="firstName">First Name</label>
                      <input type="text" id="firstName" name="firstName" placeholder="e.g. John" required>
                      <span class="form-error">First name is required.</span>
                    </div>
                    <div>
                      <label for="lastName">Last Name</label>
                      <input type="text" id="lastName" name="lastName" placeholder="e.g. Doe" required>
                      <span class="form-error">Last name is required.</span>
                    </div>
                    <div>
                      <label for="phone">Phone</label>
                      <input type="tel" id="phone" name="phone" placeholder="+234xxxxx" required pattern="^\+?[1-9]\d{1,14}$">
                      <span class="form-error">Please enter a valid phone number.</span>
                    </div>
                    <div>
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" placeholder="e.g. johndoe@gmail.com" required>
                      <span class="form-error">Please enter a valid email address.</span>
                    </div>
                    <div class="birth">
                      <label for="">Date of Birth</label>
                      <div class="grouping">
                        <input type="text" pattern="[0-9]*" name="dobDay" id="dobDay" min="1" max="31" placeholder="DD" required>
                        <span class="form-error">Day is required (1-31).</span>
                        <input type="text" pattern="[0-9]*" name="dobMonth" id="dobMonth" min="1" max="12" placeholder="MM" required>
                        <span class="form-error">Month is required (1-12).</span>
                        <input type="text" pattern="[0-9]*" name="dobYear" id="dobYear" min="1900" max="2025" placeholder="YYYY" required>
                        <span class="form-error">Year is required (1900-2025).</span>
                      </div>
                    </div>
                    <div class="cell medium-12">
                      <label>
                        <legend>Smoker Status</legend>
                        <select id="smokerStatus" name="smokerStatus" required>
                          <option value="">Please Select</option>
                          <option value="smoker">Smoker</option>
                          <option value="non-smoker">Non-Smoker</option>
                        </select>
                        <span class="form-error">Smoker status is required.</span>
                      </label>
                    </div>
                    <div class="cell medium-12">
                      <label>
                        <legend>Employment Status</legend>
                        <select id="employmentStatus" name="employmentStatus" required>
                          <option value="">Please Select</option>
                          <option value="employed">Employed</option>
                          <option value="self-employed">Self-employed</option>
                          <option value="unemployed">Unemployed</option>
                          <option value="retired">Retired</option>
                          <option value="director">Director</option>
                        </select>
                        <span class="form-error">Employment status is required.</span>
                      </label>
                    </div>
                    <div class="grid-x">
                      <div class="small-7 cell">
                        <label for="grossAnnualIncome" class="text-left middle">Gross Annual Income</label>
                      </div>
                      <div class="small-12 cell">
                        <div class="input-group">
                          <span class="input-group-label">£</span>
                          <input class="input-group-field" id="grossAnnualIncome" name="grossAnnualIncome" type="number" required pattern="^[0-9]+$" min="1">
                          <span class="form-error">Please enter a valid income amount.</span>
                        </div>
                      </div>
                    </div>
                    <div class="cell medium-12">
                      <label>
                        Additional Information
                        <textarea id="additionalInfo" name="additionalInfo" placeholder=" "></textarea>
                      </label>
                    </div>
                  </div>

                  <div class="form-four form-step">
                    <h2 class="margin-bottom-2">Summary</h2>
                    <table class="unstriped" id="summaryTable">
                      <tbody>
                        <tr>
                          <td>Protection Type</td>
                          <td id="summaryProtectionType">Not selected</td>
                        </tr>
                        <tr>
                          <td>Cover Amount</td>
                          <td id="summaryCoverAmount">£0</td>
                        </tr>
                        <tr>
                          <td>Term of Cover</td>
                          <td id="summaryCoverTerm">0 years</td>
                        </tr>
                        <tr>
                          <td>Applicant Name</td>
                          <td id="summaryApplicantName">Not provided</td>
                        </tr>
                        <tr>
                          <td>Phone</td>
                          <td id="summaryPhone">Not provided</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td id="summaryEmail">Not provided</td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td id="summaryDob">Not provided</td>
                        </tr>
                        <tr>
                          <td>Smoker Status</td>
                          <td id="summarySmokerStatus">Not selected</td>
                        </tr>
                        <tr>
                          <td>Employment Status</td>
                          <td id="summaryEmploymentStatus">Not selected</td>
                        </tr>
                        <tr>
                          <td>Gross Annual Income</td>
                          <td id="summaryGrossAnnualIncome">£0</td>
                        </tr>
                        <tr>
                          <td>Additional Information</td>
                          <td id="summaryAdditionalInfo">-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="btn-group button-group expanded align-justify padding-vertical-2">
                    <button type="button" class="button btn-prev" disabled>Back</button>
                    <button type="button" class="button btn-next">Next</button>
                    <button type="button" class="button success btn-submit" id="submitButton" style="display: none;">Submit</button>
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
  document.addEventListener('DOMContentLoaded', () => {
    const nextButton = document.querySelector('.btn-next');
    const prevButton = document.querySelector('.btn-prev');
    const submitButton = document.querySelector('#submitButton');
    const steps = document.querySelectorAll('.step');
    const formSteps = document.querySelectorAll('.form-step');
    const form = document.querySelector('#protectionForm');
    let active = 1;
    let formData = {};

    // Initialize Foundation Abide (assumes jQuery and Foundation are loaded)
    const abide = new Foundation.Abide(jQuery(form));

    // Collect form data
    const collectFormData = () => {
      formData = {
        protectionOption: form.querySelector('input[name="protectionOption"]:checked')?.value || 'Not selected',
        coverAmount: form.querySelector('#coverAmount').value || '0',
        coverTerm: form.querySelector('#coverTerm').value || '0',
        firstName: form.querySelector('#firstName').value || '',
        lastName: form.querySelector('#lastName').value || '',
        phone: form.querySelector('#phone').value || 'Not provided',
        email: form.querySelector('#email').value || 'Not provided',
        dob: `${form.querySelector('#dobDay').value || 'DD'}/${form.querySelector('#dobMonth').value || 'MM'}/${form.querySelector('#dobYear').value || 'YYYY'}`,
        smokerStatus: form.querySelector('#smokerStatus').value || 'Not selected',
        employmentStatus: form.querySelector('#employmentStatus').value || 'Not selected',
        grossAnnualIncome: form.querySelector('#grossAnnualIncome').value || '0',
        additionalInfo: form.querySelector('#additionalInfo').value || ''
      };
    };

    // Populate summary table
    const populateSummary = () => {
      if (active === 4) {
        document.querySelector('#summaryProtectionType').textContent = formData.protectionOption.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
        document.querySelector('#summaryCoverAmount').textContent = `£${parseFloat(formData.coverAmount).toLocaleString()}`;
        document.querySelector('#summaryCoverTerm').textContent = `${formData.coverTerm} years`;
        document.querySelector('#summaryApplicantName').textContent = `${formData.firstName} ${formData.lastName}`.trim() || 'Not provided';
        document.querySelector('#summaryPhone').textContent = formData.phone;
        document.querySelector('#summaryEmail').textContent = formData.email;
        document.querySelector('#summaryDob').textContent = formData.dob === 'DD/MM/YYYY' ? 'Not provided' : formData.dob;
        document.querySelector('#summarySmokerStatus').textContent = formData.smokerStatus.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
        document.querySelector('#summaryEmploymentStatus').textContent = formData.employmentStatus.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
        document.querySelector('#summaryGrossAnnualIncome').textContent = `£${parseFloat(formData.grossAnnualIncome).toLocaleString()}`;
        document.querySelector('#summaryAdditionalInfo').textContent = formData.additionalInfo || '-';
      }
    };

    // Validate current step
    const validateStep = (stepIndex) => {
      const currentStep = formSteps[stepIndex];
      const inputs = currentStep.querySelectorAll('input, select, textarea');
      let isValid = true;

      inputs.forEach(input => {
        input.dispatchEvent(new Event('input', {
          bubbles: true
        }));
        input.dispatchEvent(new Event('change', {
          bubbles: true
        }));

        if (!input.checkValidity()) {
          isValid = false;
          input.classList.add('is-invalid');
        } else {
          input.classList.remove('is-invalid');
        }
      });

      form.querySelector('[data-abide-error]').style.display = isValid ? 'none' : 'block';
      return isValid;
    };

    // Update progress and UI
    const updateProgress = () => {
      steps.forEach((step, i) => {
        if (i === active - 1) {
          step.classList.add('active');
          formSteps[i].classList.add('active');
        } else {
          step.classList.remove('active');
          formSteps[i].classList.remove('active');
        }
      });

      prevButton.disabled = active === 1;
      nextButton.style.display = active === steps.length ? 'none' : 'inline-block';
      submitButton.style.display = active === steps.length ? 'inline-block' : 'none';

      collectFormData();
      populateSummary();
    };

    // Next button click
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      if (validateStep(active - 1)) {
        active++;
        if (active > steps.length) active = steps.length;
        updateProgress();
      }
    });

    // Previous button click
    prevButton.addEventListener('click', () => {
      active--;
      if (active < 1) active = 1;
      updateProgress();
    });

    // Submit button click
    submitButton.addEventListener('click', (e) => {
      e.preventDefault();
      let allValid = true;

      for (let i = 0; i < formSteps.length - 1; i++) {
        if (!validateStep(i)) {
          allValid = false;
          active = i + 1;
          updateProgress();
          break;
        }
      }

      if (allValid) {
        collectFormData();
        console.log('Form Data before submission:', formData);
        submitToFormidable();
      }
    });

    // Real-time validation and data collection
    form.addEventListener('input', (e) => {
      const input = e.target;
      if (input.checkValidity()) {
        input.classList.remove('is-invalid');
      } else {
        input.classList.add('is-invalid');
      }
      collectFormData();
      populateSummary();
    });

    // Initial setup
    updateProgress();

    // Submit to Formidable via AJAX
    const submitToFormidable = async () => {
      const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
      const nonce = '<?php echo wp_create_nonce('submit_to_formidable_nonce'); ?>';
      console.log('formData before stringify:', formData);
      const jsonString = JSON.stringify(formData);
      console.log('JSON string to send:', jsonString);
      const payload = new URLSearchParams({
        action: 'submit_protection_to_formidable',
        nonce: nonce,
        formData: jsonString
      });

      try {
        const response = await fetch(ajaxUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: payload
        });

        if (response.ok) {
          const result = await response.json();
          console.log('Formidable Entry Created:', result);
          alert('Form submitted successfully!');
        } else {
          console.error('Error:', response.statusText);
          alert('There was an error submitting the form: ' + response.statusText);
        }
      } catch (error) {
        console.error('AJAX request failed:', error);
        alert('An error occurred while submitting the form.');
      }
    };
  });
</script>