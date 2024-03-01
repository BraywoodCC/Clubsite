@extends('frontend.layout')

@section('page_content')
<section class="container pt-5 pb-5">
    <h2>Player Registration Form</h2>
    <p>Enter following details to join the Braywood Cricket Club</p>

    <form action="" method="post" id="myForm" onsubmit="return validateForm()">
       
        <hr>
        <h4>Section 1 : Player personal details</h4> <br>
        <!-- start  section 1 -->

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">First name</label>
                <input type="text" class="form-control" id="validationTooltip01" required >
                <div class="invalid-tooltip" id="validationTooltip01Error"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control" id="validationTooltip02" required >
                <div class="invalid-tooltip" id="validationTooltip02Error"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Email</label>
                <input type="email" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip" id="validationTooltip03Error"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Date of Birth</label>
                <input type="date" class="form-control" id="validationTooltip04" required>
                <div class="invalid-tooltip" id="validationTooltip04Error"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip05">Address</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip" id="validationTooltip05Error"></div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip06">City</label>
                <input type="text" class="form-control" id="validationTooltip06" required>
                <div class="invalid-tooltip" id="validationTooltip06Error"></div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip07">Post Code</label>
                <input type="text" class="form-control" id="validationTooltip07" required>
                <div class="invalid-tooltip" id="validationTooltip07Error"></div>
            </div>
        </div>
        <br>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
            <label class="custom-control-label" for="customCheck1">Braywood Cricket Club has a Braywood Facebook
                group, other social media account and
                website. Please tick if you are happy to have your information added to this group</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2" required>
            <label class="custom-control-label" for="customCheck2">Braywood Cricket Club have What’s App groups to
                update you on team fixtures, selections etc. Please tick if you are happy to have your information
                added to the group appropriate to the
                above young player.</label>
        </div>
        <div id="checkboxError" class="invalid-feedback"></div>

        <br>

        <hr>
            <h4>Section 2 : Emergency contact details</h4>
            <p>Please provide the contact details of an alternative adult who could be contacted if we could not
                contact you in an emergency.
                As the person completing this form, you must ensure that each person whose information you
                include in this form knows what will happen to their information and how it will be disclosed.</p>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Name of alternative adult who can be contacted in an
                        emergency</label>
                    <input type="text" class="form-control" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Phone Number</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Relationship </label>
                    <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Parent">Parent</option>
                        <option value="Guardian">Guardian</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Child">Child</option>
                        <option value="Relative">Relative</option>
                        <option value="Friend">Friend</option>
                        <option value="Partner">Partner</option>
                        <option value="Colleague">Colleague</option>
                        <option value="Neighbor">Neighbor</option>
                        <option value="Caregiver">Caregiver</option>
                        <option value="Roommate">Roommate</option>
                        <option value="Employer">Employer</option>
                        <option value="Coach">Coach</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Other">Other</option>
                        
                    </select>
                    <div class="invalid-tooltip">
                        Please select a valid state.
                    </div>
                </div>
            </div>

            <hr>

            <h4>Section 3: Medical and disability information</h4>
            <p>Please detail below any important medical / disability information that we as the club need to know and
                would be affected by the member’s participation in cricket activities. Such as asthma, allergies,
                medical
                conditions, additional needs. Please indicate if you would like to discuss this privately with us.</p>
                <textarea class="form-control" id="validationTooltip01" required></textarea> <br>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck3" required>
                <label class="custom-control-label" for="customCheck3">I consent to my medical / disability details to
                    be shared with coaches / captains for the
                    purpose of the delivery of safe participation in cricket club activities.</label>
            </div>
            <p>Not providing consent will not affect your membership of Braywood Cricket Club, however giving us consent
                to share this information will help club to know how to respond effectively in the case of any medical
                emergency.</p>

            <hr>
            <h4>Section 4: Player participation agreement</h4>
            <br>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck4" required>
                <label class="custom-control-label" for="customCheck4">I confirm that I have been made aware of the
                    club’s policies concerning:</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck5" required>
                <label class="custom-control-label" for="customCheck5">Changing / showering</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck9" required>
                <label class="custom-control-label" for="customCheck9">Missing children</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck6" required>
                <label class="custom-control-label" for="customCheck6">Social media, text and email</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck10" required>
                <label class="custom-control-label" for="customCheck10">Playing in matches</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck7" required>
                <label class="custom-control-label" for="customCheck7">Photography / video</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck11" required>
                <label class="custom-control-label" for="customCheck11">Anti-bullying and the code of conduct</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck8" required>
                <label class="custom-control-label" for="customCheck8">I understand and agree to the responsibilities
                    that I have regarding these policies.</label>
            </div>

            <hr>
            <h4>Section 5: Club photography / video consent</h4> <br>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck11" required>
                <label class="custom-control-label" for="customCheck11">I consent to Braywood Cricket Club photographing
                    or videoing my involvement in cricket in
                    line with the club photography / video policy.</label>
            </div> <br>
            <p>If you do not wish to give consent for this, please contact us to discuss how we can manage any potential
                photography. Not giving consent will not affect your membership of the club.</p>

            <hr>
            <h4>Section 6: Privacy statement</h4> <br>

            <p> Braywood Cricket Club takes the protection of data that we hold about you seriously. We will ensure that
                the data you provide is processed in accordance with data protection legislation under Data Protection
                Act
                of 2018.
                Please read the attached full privacy notice carefully to see how Braywood Cricket Club will treat the
                personal information that you provide to us.</p>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck12" required>
                <label class="custom-control-label" for="customCheck12"> agree with privacy policy</label>
            </div> <br>

            <h4>Section 7: Player agreement</h4>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck13" required>
                <label class="custom-control-label" for="customCheck13"> By returning this completed form, I confirm
                    that I have read and understood the permission
                    statements on this membership form and the privacy notice attached.</label>
            </div> <br>

        <input type="submit">


    </form>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to form elements
        const form = document.querySelector('.needs-validation');
        const firstNameInput = document.getElementById('validationTooltip01');
        const lastNameInput = document.getElementById('validationTooltip02');
        const emailInput = document.getElementById('validationTooltip03');
        const dobInput = document.getElementById('validationTooltip04');
        const addressInput = document.getElementById('validationTooltip05');
        const cityInput = document.getElementById('validationTooltip06');
        const postcodeInput = document.getElementById('validationTooltip07');
        const checkbox1 = document.getElementById('customCheck1');
        const checkbox2 = document.getElementById('customCheck2');

        // Add event listener for form submission
        form.addEventListener('submit', function (event) {
            // Prevent form submission if validation fails
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Validate first name
            if (firstNameInput.value.trim() === '') {
                document.getElementById('validationTooltip01Error').innerHTML = 'Please enter your first name.';
            } else {
                document.getElementById('validationTooltip01Error').innerHTML = '';
            }

            // Validate last name
            if (lastNameInput.value.trim() === '') {
                document.getElementById('validationTooltip02Error').innerHTML = 'Please enter your last name.';
            } else {
                document.getElementById('validationTooltip02Error').innerHTML = '';
            }

            // Validate email
            if (emailInput.value.trim() === '') {
                document.getElementById('validationTooltip03Error').innerHTML = 'Please enter your email.';
            } else {
                document.getElementById('validationTooltip03Error').innerHTML = '';
            }

            // Validate date of birth
            if (dobInput.value.trim() === '') {
                document.getElementById('validationTooltip04Error').innerHTML = 'Please enter your date of birth.';
            } else {
                document.getElementById('validationTooltip04Error').innerHTML = '';
            }

            // Validate address
            if (addressInput.value.trim() === '') {
                document.getElementById('validationTooltip05Error').innerHTML = 'Please enter your address.';
            } else {
                document.getElementById('validationTooltip05Error').innerHTML = '';
            }

            // Validate city
            if (cityInput.value.trim() === '') {
                document.getElementById('validationTooltip06Error').innerHTML = 'Please enter your city.';
            } else {
                document.getElementById('validationTooltip06Error').innerHTML = '';
            }

            // Validate postcode
            if (postcodeInput.value.trim() === '') {
                document.getElementById('validationTooltip07Error').innerHTML = 'Please enter your postcode.';
            } else {
                document.getElementById('validationTooltip07Error').innerHTML = '';
            }

            if (!checkbox1.checked && !checkbox2.checked) {
                event.preventDefault();
                document.getElementById('checkboxError').innerHTML = 'Please select at least one checkbox.';
            } else {
                document.getElementById('checkboxError').innerHTML = '';
            }

            // Check if form is valid
            if (form.checkValidity()) {
                // Form is valid, you can submit it
                console.log('Form is valid');
            }
        });
    });
</script>

@endsection

