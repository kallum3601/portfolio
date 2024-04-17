document.addEventListener('DOMContentLoaded', () => {

    const href = window.location.href.split('/').pop();

    if(href === 'submission-success'){
        setTimeout(() => {
            window.location.href = '/login';
        }, 3000);
    }
})