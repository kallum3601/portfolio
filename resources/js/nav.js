document.addEventListener('DOMContentLoaded', () => {

    const nav = document.getElementById('nav-container');

    if(nav){

        const navSkills = document.querySelectorAll('.nav-skills-img');
        const mouseDisplayBox = document.querySelector('.mouse-display-box');
        const mouseDisplayBoxText = document.querySelector('.display-box-text');
        const navMenuItems = document.querySelectorAll('.nav-menu-item');

        const displayNav = () => {
            const nav = document.querySelector('nav');
            const navLogo = document.getElementById('nav-logo-container');
            const navImages = document.querySelectorAll('.nav-skills-img-container');
            const navMenuItemContainers = document.querySelectorAll('.nav-menu-item-container');

            nav.classList.add('slideFromLeft100');
            
            setInterval(() => {
                navLogo.style.display = 'block';
                navLogo.classList.add('slideFromLeft100');
                setInterval(() => {
                    navLogo.classList.add('logoHover');
                }, 1000);
            }, 1000);
        
            setInterval(() => {
                navImages.forEach((image) => {
                    image.style.display = 'block';
                    image.classList.add('slideFromLeft500');
                })
            }, 2000);
        
            setInterval(() => {
                navMenuItemContainers.forEach((item) => {
                    item.style.display = 'flex';
                    item.classList.add('slideFromLeft500');
                })
            }, 2500);
        }

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
        
        navSkills.forEach((skill) => {
            skill.addEventListener('mouseover', (e) => { 
                let skillName = skill.getAttribute('skill-name');
                displayInfoBox(e, skillName); 
            })

            skill.addEventListener('mouseout', () => {
                hideInfoBox();
                
            })
        })

        navMenuItems.forEach((item) => {
            item.addEventListener('mouseover', (e) => { 
                let menuItemName = item.getAttribute('menu-item-name');
                displayInfoBox(e, menuItemName);
            })

            item.addEventListener('mouseout', () => {
                hideInfoBox();
            })

        })
        displayNav();
    }
})