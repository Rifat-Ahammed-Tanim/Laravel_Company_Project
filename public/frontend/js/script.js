
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Flatpickr Date Picker
        flatpickr("#datetime", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
        });

        // Handle time slot selection
        const timeslots = document.querySelectorAll('.timeslot');
        const selectedTimeInput = document.getElementById('selectedTime');

        timeslots.forEach(slot => {
            slot.addEventListener('click', function () {
                // Remove 'selected' class from other timeslots
                timeslots.forEach(s => s.classList.remove('btn-primary'));
                timeslots.forEach(s => s.classList.add('btn-outline-primary'));

                // Add 'selected' class to clicked timeslot
                this.classList.remove('btn-outline-primary');
                this.classList.add('btn-primary');

                // Update the hidden input with selected time
                selectedTimeInput.value = this.getAttribute('data-time');
            });
        });
    });
