document.addEventListener('DOMContentLoaded', () => {
    const testimonialContainer = document.getElementById('testimonial-container');

    if (testimonialContainer) {

        const testimonialImage = document.getElementById('testimonial-user-image');
        const testimonialNameCompany = document.getElementById('testimonial-name-company');
        const testimonialJobTitle = document.getElementById('testimonial-job-title');
    
        const testimonialText = document.getElementById('testimonial-text');
        const testimonialReaction = document.getElementById('testimonial-reaction-image');

        let testimonialIncrement = 0;
        let testimonialLength;
        let testimonialsArray;

        const getTestimonials = async () => {
            const response = await fetch('get-testimonials');
            const data = await response.json();
            testimonialLength = data.length;
            testimonialsArray = await data;
        }

        getTestimonials();

        const setTestimonial = async () => {

            testimonialImage.src = `/storage/${testimonialsArray[testimonialIncrement].image_path}`;
            testimonialNameCompany.innerText = `${testimonialsArray[testimonialIncrement].name} | ${testimonialsArray[testimonialIncrement].company}`;
            testimonialJobTitle.innerText = `${testimonialsArray[testimonialIncrement].job_title}`;

            testimonialText.innerText = `"${testimonialsArray[testimonialIncrement].testimonial}"`;

            if(testimonialsArray[testimonialIncrement].reaction === 'heart'){
                testimonialReaction.src = 'images/testimonials/heart.png';
            }else if(testimonialsArray[testimonialIncrement].reaction === 'thumbs up'){
                testimonialReaction.src = 'images/testimonials/thumbs-up.png';
            }else{
                testimonialReaction.src = 'images/testimonials/smile.png';
            }

        }

        const showTestimonial = () => {
            testimonialContainer.classList.remove('hideTestimonial');
            testimonialContainer.style.display = 'flex';
            testimonialContainer.classList.add('showTestimonial');
        }

        const hideTestimonial = () => {
            
            testimonialContainer.classList.remove('showTestimonials');
            testimonialContainer.classList.add('hideTestimonial');
            setTimeout(() => {
                testimonialContainer.style.display = 'none';
            }, 1000);
            
        }

        setInterval(() => {
            setTestimonial();
            if(testimonialIncrement >= testimonialLength - 1){
                testimonialIncrement = 0;
            }else{
                testimonialIncrement++;
            }
            
            showTestimonial();

            setTimeout(() => {
                hideTestimonial();
            }, 7000);
        }, 15000);
    }
})