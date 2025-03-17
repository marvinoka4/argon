<div class="grid-container relative full ">
    <div class="grid-container">
        <div class="grid-x grid-padding-x padding-vertical-4 align-middle">
            <div class="large-6 medium-6 cell">
                <div class="grid-x grid-padding-x">

                    <div class="cell">

                        <img class="img-rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/uploads/about-hero.jpg" alt="">

                    </div>
                </div>
            </div>

            <div class="large-6 medium-6 cell">
                <div class="form-box" id="form-box">
                    <div class="grid-x align-center-middle">
                        <div class="cell medium-12 small-12 form-content">
                            <form action="" data-abide novalidate id="contactForm">
                                <div data-abide-error class="alert callout" style="display: none;">
                                    <p><i class="fi-alert"></i> Please fill in all required fields correctly.</p>
                                </div>

                                <h2 class="margin-bottom-2 text-center">Contact Us</h2>

                                <div class="form-step active">
                                    <div>
                                        <label for="contactName">Name</label>
                                        <input type="text" id="contactName" name="contactName" placeholder="e.g. John Doe" required>
                                        <span class="form-error">Name is required.</span>
                                    </div>
                                    <div>
                                        <label for="contactEmail">Email</label>
                                        <input type="email" id="contactEmail" name="contactEmail" placeholder="e.g. johndoe@gmail.com" required>
                                        <span class="form-error">Please enter a valid email address.</span>
                                    </div>
                                    <div>
                                        <label for="contactMessage">Message</label>
                                        <textarea id="contactMessage" name="contactMessage" placeholder="Your message here" required rows="4"></textarea>
                                        <span class="form-error">Message is required.</span>
                                    </div>

                                    <div class="btn-group button-group expanded align-center padding-vertical-2">
                                        <button type="button" class="button success btn-submit" id="submitButton">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cell small-12 medium-12 text-center submission-success" style="display: none;">
                            <div class="bg-svg text-center"></div>
                            <h2>Message Sent</h2>
                            <p class="lead">Thank you for reaching out! We’ll get back to you soon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const submitButton = document.querySelector('#submitButton');
        const form = document.querySelector('#contactForm');
        const formContent = document.querySelector('.form-content');
        const submissionSuccess = document.querySelector('.submission-success');
        const formData = {};

        // Initialize Foundation Abide (assumes jQuery and Foundation are loaded)
        const abide = new Foundation.Abide(jQuery(form));

        // Function to collect form data
        const collectFormData = () => {
            formData.contactName = form.querySelector('#contactName').value || '';
            formData.contactEmail = form.querySelector('#contactEmail').value || '';
            formData.contactMessage = form.querySelector('#contactMessage').value || '';
        };

        // Function to validate form
        const validateForm = () => {
            const inputs = form.querySelectorAll('input, textarea');
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

        // Real-time validation
        form.addEventListener('input', (e) => {
            const input = e.target;
            if (input.checkValidity()) {
                input.classList.remove('is-invalid');
            } else {
                input.classList.add('is-invalid');
            }
            collectFormData();
        });

        // Submit button click
        submitButton.addEventListener('click', (e) => {
            e.preventDefault();
            if (validateForm()) {
                collectFormData();
                console.log('Form Data before submission:', formData);
                submitToFormidable();
            }
        });

        // Submit to Formidable via AJAX
        const submitToFormidable = async () => {
            const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
            const nonce = '<?php echo wp_create_nonce('submit_to_formidable_nonce'); ?>';
            console.log('formData before stringify:', formData);
            const jsonString = JSON.stringify(formData);
            console.log('JSON string to send:', jsonString);
            const payload = new URLSearchParams({
                action: 'submit_contact_to_formidable',
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
                    // Hide form, show success message
                    formContent.style.display = 'none';
                    submissionSuccess.style.display = 'block';
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