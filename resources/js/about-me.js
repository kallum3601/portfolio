document.addEventListener('DOMContentLoaded', () => {

    const aboutMeContainer = document.getElementById('about-me-container');

    if (aboutMeContainer) {

        const maxHeightEmployment = () => {

            const aboutContainerHeight = document.getElementById('about-me-container').offsetHeight;
            const image = document.getElementById('about-me-profile-image').scrollHeight;
            const employmentContainer = document.getElementById('about-me-previous-employment-container');

            let employmentContainerHeight = aboutContainerHeight * 0.4;

            employmentContainer.style.maxHeight = `${employmentContainerHeight}px`;
        }

        maxHeightEmployment();

        const aboutMehobbies = document.querySelectorAll('.hobby');
        const mouseDisplayBox = document.querySelector('.mouse-display-box');
        const mouseDisplayBoxText = document.querySelector('.display-box-text');

        const displayInfoBox = (e, text) => {
            let mouseX = e.clientX;
            let mouseY = e.clientY;

            mouseDisplayBox.style.display = 'flex';
            mouseDisplayBox.style.top = `${mouseY}px`;
            mouseDisplayBox.style.left = `${mouseX + 10}px`;

            mouseDisplayBoxText.innerText = text;
        }

        const hideInfoBox = () => {
            mouseDisplayBox.style.display = 'none';
        }

        aboutMehobbies.forEach((hobby) => {
            hobby.addEventListener('mouseover', (e) => { 

                let hobbyName = hobby.getAttribute('hobby-name');
                displayInfoBox(e, hobbyName); 

                hobby.addEventListener('mouseout', () => {
                    hideInfoBox();
                });
            });
        });
    }
});