document.addEventListener('DOMContentLoaded', () => {

    let href = window.location.href.split('/');
    let URL = href[3];

    if(URL === 'blog'){
        const navItems = document.querySelectorAll('.nav-menu-item');

        navItems.forEach((item) => {

            let sectionName = item.getAttribute('relative-section');

            if(sectionName !== 'notifications-container'){
                item.style.display = 'none';
                return;
            }
        })
    }

    const aboutMeContainer = document.getElementById('about-me-container');

    if(aboutMeContainer){

        const paginationLink = document.querySelector('.pagination');

        aboutMeContainer.classList.add('slideFromRight100');
        aboutMeContainer.style.display = 'flex';
    
        const revealSection = (sectionName) => {
            const allSections = document.querySelectorAll('section');
            
            allSections.forEach((section) => {
                if(section.getAttribute('section-name') === 'nav-container' || section.getAttribute('section-name') === 'notifications-container'){
                    return;
                }
                if(sectionName === section.getAttribute('section-name') && sectionName){
                    section.style.display = 'flex';
                    section.classList.add('slideFromRight100');
                }else{
                    section.style.display = 'none';
                    section.classList.remove('slideFromRight100');
                }
            })
        }
    
        // Quick fix for blog pagination, update later
        const navItems = document.querySelectorAll('.nav-menu-item');

        const url = parseInt(window.location.href.split('=').pop());

        if (!isNaN(url)) {
            revealSection('blog-all-container');
        }
        // Quick fix for blog pagination, update later
    
        navItems.forEach((item) => {
            item.addEventListener('click', () => {
                let sectionName = item.getAttribute('relative-section');
                if(sectionName === 'notifications-container'){
                    return;
                }
                revealSection(sectionName);
            })
        })
    }
})