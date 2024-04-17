document.addEventListener('DOMContentLoaded', () => {

    const notifications = document.getElementById('notifications-container');

    if(notifications){

        const notificationsBtn = document.getElementById('nav-notifications');
        notifications.style.display = 'none';

        notificationsBtn.addEventListener('click', () => {

            if(notifications.style.display === 'none'){
                notifications.style.display = 'flex';
                notifications.classList.add('slideFromBottom');
            }else{
                notifications.style.display = 'none';
                notifications.classList.remove('slideFromBottom');
            }
        })
    }
})