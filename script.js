document.addEventListener('DOMContentLoaded', function() {
    const tattooStyles = ['Traditional', 'Tribal', 'Japanese', 'Realistic', 'Watercolor', 'Geometric'];
    const tattooStylesContainer = document.getElementById('tattooStyles');

    // Dynamically create checkboxes for each tattoo style
    tattooStyles.forEach(style => {
        const label = document.createElement('label');
        label.innerHTML = `<input type="checkbox" name="tattooStyles[]" value="${style}"> ${style}`;
        tattooStylesContainer.appendChild(label);
    });

    // Show tattoo description fields based on user input
    document.getElementById('num_tattoos').addEventListener('change', function() {
        const numTattoos = this.value;
        const tattooFieldsContainer = document.getElementById('tattoo-fields');
        tattooFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numTattoos; i++) {
            const div = document.createElement('div');
            div.classList.add('tattoo');
            div.innerHTML = `
                <label for="tattoo_${i}">Tattoo Description ${i}</label>
                <input type="text" name="tattoo_${i}" id="tattoo_${i}">
                <div class="error"></div>
            `;
            tattooFieldsContainer.appendChild(div);
        }
    });
});











function validateform(){
    const firstname = document.getElementById("firstname").value;
    const lastname = document.getElementById("lastname").value;
    const email = document.getElementById("email").value;
    
    const firstnameError = document.getElementById("firstname-error");

    const emailError = document.getElementById(
        "email-error"
    );

    firstnameError.textContent ="";
    emailError.textCOntent = "";


    let isValid = true;
    if(firstname ==="" || /\d/.test(firstname)){
        firstnameError.textCOntent="pls enter your name properly";
        isValid =false;
    }
}



















