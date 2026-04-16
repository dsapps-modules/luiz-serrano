import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('.video-card video');

    videos.forEach((video) => {
        const card = video.closest('.video-card');

        if (!card) {
            return;
        }

        const syncState = () => {
            card.classList.toggle('is-playing', !video.paused && !video.ended);
        };

        video.addEventListener('play', syncState);
        video.addEventListener('pause', syncState);
        video.addEventListener('ended', syncState);
        video.addEventListener('loadeddata', syncState);
        syncState();
    });
});
