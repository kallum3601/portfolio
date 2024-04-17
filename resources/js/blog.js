const blogContainer = document.getElementById('blog-all-container');

if(blogContainer){
    const blogEntries = document.querySelectorAll('.blog-entry');

    blogEntries.forEach((entry) => {
        entry.addEventListener('mouseover', () => {
            entry.classList.add('bounce');

            setTimeout(() => {
                entry.classList.remove('bounce');
            }, 5000);
        })
    })
}