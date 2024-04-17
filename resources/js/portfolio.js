document.addEventListener('DOMContentLoaded', () => {

    const portfolioContainer = document.getElementById('portfolio-container');

    if(portfolioContainer){
        const videos = document.querySelectorAll('video');

        videos.forEach((video) => {
            video.addEventListener('mousedown', () => {
                video.requestFullscreen();
            })

            video.addEventListener('mouseover', () => {
                video.play();
                video.muted = true;
            })

            video.addEventListener('mouseout', () => {
                video.pause();
            })
        })
    }
})