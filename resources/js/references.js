const referencesContainer = document.getElementById('references-container');

if (referencesContainer) {
    const references = document.querySelectorAll('.reference');

    const rightArrow = document.getElementById('references-right-arrow');
    const leftArrow = document.getElementById('references-left-arrow');

    let currentIndex = 0;

    function showCurrentReference() {
        references.forEach((reference, index) => {
            if (index === currentIndex) {
                reference.style.display = 'block';
            } else {
                reference.style.display = 'none';
            }
        });
    }

    rightArrow.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % references.length; 
        showCurrentReference();
    });

    leftArrow.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + references.length) % references.length; 
        showCurrentReference();
    });

    showCurrentReference();
}