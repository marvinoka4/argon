<div class="grid-container margin-top-2">
    <div class="grid-x grid-margin-x align-center-middle">
        <div class="large-10 cell">
            <div id="page" class="site">
                <div class="container">
                    <div class="form-box" id="form-box">
                        <div class="grid-x align-center-middle">
                            <div class="cell medium-5 small-12 align-center-middle">
                                <div class="progress margin-vertical-1">
                                    <div class="logo text-center margin-bottom-4 hide-for-small-only">
                                        <a href="">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/site_logo.svg" width="200" alt="AKM" />
                                        </a>
                                    </div>
                                    <ul class="progress-steps align-middle">
                                        <li class="step active">
                                            <span>1</span>
                                            <p>Mortgage <br> <span>please select option complete</span></p>
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
                                <form action="" data-abide novalidate>
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fi-alert"></i> Please select required options.</p>
                                    </div>

                                    <div class="form-one form-step active">
                                        <div class="grid-x grid-padding-x align-center-middle mortgage-type">
                                            <fieldset class="medium-12 cell text-center justify-content-center align-center required">
                                                <legend>
                                                    <h2 class="margin-bottom-2">Select Mortgage Type</h2>
                                                </legend>
                                                <div>
                                                    <input type="radio" name="mortgage-option" value="purchase" id="purchase" required>
                                                    <label for="purchase">
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
                                        <h2 class="margin-bottom-2">Property Details</h2>
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
                                                    <hr />
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
                                                        <input class="input-group-field" id="property-price" type="number" required pattern="number" />
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
                                                        <input class="input-group-field" id="loan-amount" type="number" required pattern="number" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-x">
                                                <div class="small-4 cell">
                                                    <label for="mortgage-term" class="text-left middle">Mortgage Term</label>
                                                </div>
                                                <div class="small-7 small-offset-1 cell">
                                                    <div class="input-group">
                                                        <input class="input-group-field" id="mortgage-term" type="number" required pattern="number" />
                                                        <span class="input-group-label">years</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-three form-step">
                                        <h2 class="margin-bottom-2">Applicant Details</h2>
                                        <div>
                                            <label for="first-name">First Name</label>
                                            <input type="text" id="first-name" name="first-name" placeholder="e.g. John" required>
                                            <span class="form-error">First name is required.</span>
                                        </div>
                                        <div>
                                            <label for="last-name">Last Name</label>
                                            <input type="text" id="last-name" name="last-name" placeholder="e.g. Doe" required>
                                            <span class="form-error">Last name is required.</span>
                                        </div>
                                        <div>
                                            <label for="phone">Phone</label>
                                            <input type="tel" id="phone" name="phone" placeholder="+44xxxxx" required pattern="^\+?[1-9]\d{1,14}$">
                                            <span class="form-error">Please enter a valid phone number.</span>
                                        </div>
                                        <div>
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" placeholder="e.g. johndoe@gmail.com" required>
                                            <span class="form-error">Please enter a valid email address.</span>
                                        </div>
                                        <div class="cell medium-12">
                                            <label>
                                                <legend>Employment status</legend>
                                                <select id="employment-status" name="employment-status" required>
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
                                                <label for="gross-annual-income" class="text-left middle">Gross Annual Income</label>
                                            </div>
                                            <div class="small-12 cell">
                                                <div class="input-group">
                                                    <span class="input-group-label">£</span>
                                                    <input class="input-group-field" id="gross-annual-income" name="gross-annual-income" type="number" required pattern="^[0-9]+$" min="1">
                                                    <span class="form-error">Please enter a valid income amount.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-four form-step">
                                        <h2 class="margin-bottom-2">Summary</h2>
                                        <table class="unstriped summary-table">
                                            <tbody>
                                                <tr>
                                                    <td>Mortgage Type</td>
                                                    <td id="summary-mortgage-type">Not selected</td>
                                                </tr>
                                                <tr>
                                                    <td>Reason for Loan</td>
                                                    <td id="summary-reason">Not selected</td>
                                                </tr>
                                                <tr>
                                                    <td>Property Price</td>
                                                    <td id="summary-property-price">£0</td>
                                                </tr>
                                                <tr>
                                                    <td>Loan Amount</td>
                                                    <td id="summary-loan-amount">£0</td>
                                                </tr>
                                                <tr>
                                                    <td>Mortgage Term</td>
                                                    <td id="summary-mortgage-term">0 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Applicant Name</td>
                                                    <td id="summary-applicant-name">Not provided</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td id="summary-email">Not provided</td>
                                                </tr>
                                                <tr>
                                                    <td>Employment Status</td>
                                                    <td id="summary-employment-status">Not selected</td>
                                                </tr>
                                                <tr>
                                                    <td>Gross Annual Income</td>
                                                    <td id="summary-income">£0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

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
    document.addEventListener('DOMContentLoaded', () => {
        const nextButton = document.querySelector('.btn-next');
        const prevButton = document.querySelector('.btn-prev');
        const submitButton = document.querySelector('.btn-submit');
        const steps = document.querySelectorAll('.step');
        const formSteps = document.querySelectorAll('.form-step');
        const form = document.querySelector('form[data-abide]');
        let active = 1;
        const formData = {};

        // Initialize Foundation Abide (if using Foundation)
        const abide = new Foundation.Abide(jQuery(form));

        // Function to collect form data
        const collectFormData = () => {
            const mortgageType = form.querySelector('input[name="mortgage-option"]:checked');
            formData.mortgageType = mortgageType ? mortgageType.value : 'Not selected';
            formData.reason = form.querySelector('#select').value || 'Not selected';
            formData.propertyPrice = form.querySelector('#property-price').value || '0';
            formData.loanAmount = form.querySelector('#loan-amount').value || '0';
            formData.mortgageTerm = form.querySelector('#mortgage-term').value || '0';
            formData.firstName = form.querySelector('#first-name').value || '';
            formData.lastName = form.querySelector('#last-name').value || '';
            formData.email = form.querySelector('#email').value || 'Not provided';
            formData.employmentStatus = form.querySelector('#employment-status').value || 'Not selected';
            formData.income = form.querySelector('#gross-annual-income').value || '0';
        };

        // Function to populate summary table
        const populateSummary = () => {
            if (active === 4) {
                document.querySelector('#summary-mortgage-type').textContent = formData.mortgageType.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
                document.querySelector('#summary-reason').textContent = formData.reason.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase()) || 'Not selected';
                document.querySelector('#summary-property-price').textContent = `£${parseFloat(formData.propertyPrice).toLocaleString()}`;
                document.querySelector('#summary-loan-amount').textContent = `£${parseFloat(formData.loanAmount).toLocaleString()}`;
                document.querySelector('#summary-mortgage-term').textContent = `${formData.mortgageTerm} years`;
                document.querySelector('#summary-applicant-name').textContent = `${formData.firstName} ${formData.lastName}`.trim() || 'Not provided';
                document.querySelector('#summary-email').textContent = formData.email;
                document.querySelector('#summary-employment-status').textContent = formData.employmentStatus.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
                document.querySelector('#summary-income').textContent = `£${parseFloat(formData.income).toLocaleString()}`;
            }
        };

        // Function to validate current step
        const validateStep = (stepIndex) => {
            const currentStep = formSteps[stepIndex];
            const inputs = currentStep.querySelectorAll('input, select');
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

        // Update progress and step visibility
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

        // Submit button click (single event listener)
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
                collectFormData(); // Ensure data is collected
                console.log('Form Data before submission:', formData); // Debug log
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
            console.log('formData before stringify:', formData); // Debug raw object
            const jsonString = JSON.stringify(formData);
            console.log('JSON string to send:', jsonString); // Debug JSON string
            const payload = new URLSearchParams({
                action: 'submit_to_formidable',
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