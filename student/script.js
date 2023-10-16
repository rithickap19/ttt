document.getElementById("showTimeSlotsBtn").addEventListener("click", function() {
    const selectedDay = document.querySelector("select[name='day']").value;
    const selectedPeriod = document.querySelector("select[name='period']").value;

    // Define time slots based on the selected day and period
    const timeSlots = {
        "Monday": {
            "1": "9:00 AM - 10:00 AM",
            "2": "10:15 AM - 11:15 AM",
            // ... Define time slots for other periods of Monday ...
        },
        "Tuesday": {
            "1": "9:00 AM - 10:00 AM",
            "2": "10:15 AM - 11:15 AM",
            // ... Define time slots for other periods of Tuesday ...
        },
        // ... Define time slots for other days ...
    };

    // Get the selected time slot based on the selected day and period
    const selectedTimeSlot = timeSlots[selectedDay][selectedPeriod];

    // Display the selected time slot
    const timeSlotsContainer = document.getElementById("timeSlots");
    timeSlotsContainer.textContent = `Selected Time Slot: ${selectedTimeSlot}`;
});
