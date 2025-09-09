<style>
.carousel-container {
    position: relative;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
}

.carousel-track-wrapper {
    overflow: hidden;
    width: 100%;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.testimonial-card {
    flex: 0 0 33.3333%;
    padding: 1rem;
}

iframe {
    width: 100%;
    height: 200px;
    border-radius: 8px;
}

.nav1 {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    padding: 10px;
    font-size: 24px;
    cursor: pointer;
    z-index: 10;
}

.nav1.left {
    left: 10px;
}

.nav1.right {
    right: 10px;
}

h4,
p {
    margin: 5px 0;
}

@media (max-width: 768px) {
    .testimonial-card {
        flex: 0 0 100%;
    }
}
</style>




<div class="carousel-container">
    <button class="nav1 left">&#10094;</button>
    <div class="carousel-track-wrapper">
        <div class="carousel-track" id="carouselTrack">
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/CE-SUNgKnqY?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 1</h4>
            </div>
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/rnu0vqtQxeA?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 2</h4>
            </div>
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/sVdMAhh2pt8?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 3</h4>
            </div>
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/WfNxzyU2jJ0?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 4</h4>
            </div>
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/uFcbLftq-Wo?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 5</h4>
            </div>
            <div class="testimonial-card">
                <iframe src="https://www.youtube.com/embed/IFt6Y133b4U?enablejsapi=1" frameborder="0"
                    allow="encrypted-media" allowfullscreen></iframe>
                <h4>Speaker 6</h4>
            </div>
        </div>
    </div>
    <button class="nav1 right">&#10095;</button>
</div>

<!-- YouTube API -->
<script src="https://www.youtube.com/iframe_api"></script>

<script>
let autoScrollInterval;
let currentIndex = 0;
const visibleCount = window.innerWidth > 768 ? 3 : 1;
let isPlaying = false;
const track = document.getElementById("carouselTrack");
const cards = document.querySelectorAll(".testimonial-card");
const prevBtn = document.querySelector(".nav1.left");
const nextBtn = document.querySelector(".nav1.right");

function updateCarousel() {
    const cardWidth = cards[0].offsetWidth;
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

function nextSlide() {
    if (!isPlaying) {
        currentIndex = (currentIndex < cards.length - visibleCount) ? currentIndex + 1 : 0;
        updateCarousel();
    }
}

function prevSlide() {
    if (!isPlaying) {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : cards.length - visibleCount;
        updateCarousel();
    }
}

nextBtn.addEventListener("click", () => {
    stopAutoScroll();
    nextSlide();
    if (window.innerWidth > 768) startAutoScroll();
});

prevBtn.addEventListener("click", () => {
    stopAutoScroll();
    prevSlide();
    if (window.innerWidth > 768) startAutoScroll();
});

function startAutoScroll() {
    autoScrollInterval = setInterval(nextSlide, 3000);
}

function stopAutoScroll() {
    clearInterval(autoScrollInterval);
}

let players = [];

function onYouTubeIframeAPIReady() {
    const iframes = document.querySelectorAll("iframe");
    iframes.forEach((iframe, index) => {
        players[index] = new YT.Player(iframe, {
            events: {
                'onStateChange': (event) => {
                    if (event.data === YT.PlayerState.PLAYING) {
                        isPlaying = true;
                        stopAutoScroll();
                    }
                    if (event.data === YT.PlayerState.ENDED || event.data === YT.PlayerState
                        .PAUSED) {
                        isPlaying = false;
                        if (window.innerWidth > 768) startAutoScroll();
                    }
                }
            }
        });
    });
}

window.addEventListener("resize", updateCarousel);

window.onload = () => {
    updateCarousel();
    if (window.innerWidth > 768) {
        startAutoScroll();
    }
};
</script>