const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.querySelector(".progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        if (validateCurrentStep()) {
            formStepsNum++;
            updateFormSteps();
            updateProgressbar();
        }
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
        formStep.classList.remove("form-step-active");
    });
    formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
    progressSteps.forEach((progressStep, index) => {
        if (index < formStepsNum + 1) {
            progressStep.classList.add('progress-step-active');
        } else {
            progressStep.classList.remove('progress-step-active');
        }
    });
    progress.style.width = ((formStepsNum) / (progressSteps.length - 1)) * 100 + "%";
}

function validateCurrentStep() {
    const currentStep = formSteps[formStepsNum];
    let valid = true;

    // Validate occasion and guests
    if (currentStep.classList.contains("form-step-active") && formStepsNum === 0) {
        const occasion = document.querySelector('select[name="occasion"]');
        const guests = document.querySelector('select[name="guests"]');
        const eventRepeat = document.querySelector('select[name="event_repeat"]');
        const venue = document.querySelector('select[name="venue"]');

        if (occasion.value === "") {
            alert("Please select an occasion");
            occasion.focus();
            valid = false;
        } else if (guests.value === "") {
            alert("Please select the number of guests");
            guests.focus();
            valid = false;
        } else if (eventRepeat.value === "") {
            alert("Please select event repetition");
            eventRepeat.focus();
            valid = false;
        } else if (venue.value === "") {
            alert("Please select venue type preference");
            venue.focus();
            valid = false;
        }
    }


        // Validate date and time
    if (currentStep.classList.contains("form-step-active") && formStepsNum === 1) {
        const eventDate = document.querySelector('input[name="event_date"]');
        const eventDateValue = new Date(eventDate.value);
        const currentDate = new Date();
        currentDate.setHours(0, 0, 0, 0);

        if (eventDate.value === "" || eventDateValue < currentDate) {
            alert("Please select a valid future date for the event");
            eventDate.focus();
            valid = false;
        }

        const timeOfDay = document.querySelector('select[name="time_of_day"]');
        const eventDuration = document.querySelector('select[name="event_duration"]');

        if (timeOfDay.value === "") {
            alert("Please select a preferred event time");
            timeOfDay.focus();
            valid = false;
        } else if (eventDuration.value === "") {
            alert("Please select the duration of the event");
            eventDuration.focus();
            valid = false;
        }
    }


    // Validate theme and decor
    if (currentStep.classList.contains("form-step-active") && formStepsNum === 2) {
        const theme = document.querySelector('select[name="theme"]');
        const decor = document.querySelector('select[name="decor"]');

        if (theme.value === "") {
            alert("Please select a theme");
            theme.focus();
            valid = false;
        } else if (decor.value === "") {
            alert("Please select a decoration preference");
            decor.focus();
            valid = false;
        }
    }

  // Validate catering preferences and budget
if (currentStep.classList.contains("form-step-active") && formStepsNum === 3) {
    let valid = true; // Reset valid flag for this step

    // Validate catering preferences
    const cateringCheckboxes = document.querySelectorAll('input[name="catering"]');
    const checkedCheckboxes = Array.from(cateringCheckboxes).some(cb => cb.checked);

    if (!checkedCheckboxes) {
        alert("Please select at least one catering preference");
        cateringCheckboxes[0].focus();
        valid = false;
    }

    // Validate budget
    const budgetRadios = document.querySelectorAll('input[name="budget"]');
    const checkedRadio = Array.from(budgetRadios).some(rb => rb.checked);

    if (!checkedRadio) {
        alert("Please select a budget range");
        budgetRadios[0].focus();
        valid = false;
    }

    // Prevent moving to the next step if either validation fails
    if (!valid) {
        return false; // Prevent moving to the next step
    }
}


    // Validate music and photo entertainment
    if (currentStep.classList.contains("form-step-active") && formStepsNum === 4) {
        const music = document.querySelector('select[name="music"]');
        const photoEntertainment = document.querySelector('select[name="photo_entertainment"]');

        if (music.value === "") {
            alert("Please select a music option");
            music.focus();
            valid = false;
        } else if (photoEntertainment.value === "") {
            alert("Please select a photo and entertainment option");
            photoEntertainment.focus();
            valid = false;
        }
    }

 // Validate contact info
if (currentStep.classList.contains("form-step-active") && formStepsNum === 5) {
    const name = document.querySelector('input[name="name"]');
    const email = document.querySelector('input[name="email"]');
    const phone = document.querySelector('input[name="phone"]');
    const company = document.querySelector('input[name="company"]');
    const accessRequirements = document.querySelector('input[name="access_requirements"]');
    const dietaryRestrictions = document.querySelector('input[name="dietary_restrictions"]');

    const namePattern = /^[a-zA-Z\s]+$/;
    const phonePattern = /^\+2519\d{8}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate name
    if (!namePattern.test(name.value)) {
        alert("Please enter a valid name (letters and spaces only)");
        name.focus();
        valid = false;
    }
    else if (!emailPattern.test(email.value)) { // Validate email
        alert("Please enter a valid email address");
        email.focus();
        valid = false;
    }
    else if (!phonePattern.test(phone.value)) {  // Validate phone
        alert("Please enter a valid Ethiopian phone number (+2519XXXXXXXX)");
        phone.focus();
        valid = false;
    }
    // Validate company/organization if provided
    if (company.value && !namePattern.test(company.value)) {
        alert("Please enter a valid company/organization name (letters and spaces only)");
        company.focus();
        valid = false;
    }

    // Validate access requirements if provided
    if (accessRequirements.value && !namePattern.test(accessRequirements.value)) {
        alert("Please enter valid access requirements (letters and spaces only)");
        accessRequirements.focus();
        valid = false;
    }

    // Validate dietary restrictions if provided
    if (dietaryRestrictions.value && !namePattern.test(dietaryRestrictions.value)) {
        alert("Please enter valid dietary restrictions (letters and spaces only)");
        dietaryRestrictions.focus();
        valid = false;
    }
}

    return valid;
}

// function submitForm() {

//     alert("Event Booked Successfully. A detailed confirmation page and payment calculation will be sent to your email.");
//     setTimeout(function() {
//         window.location.href = eventasticUrl;
//     }, 0);



//     return false;
// }
