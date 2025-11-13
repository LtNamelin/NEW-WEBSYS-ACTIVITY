<div class="carousel-wrapper">
    <div class="carousel">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <img src="<?= ("/images/sampleart{$i}.png") ?>"
                alt="Sample Artwork <?= $i ?>" class="<?= $i === 1 ? 'active' : '' ?>">
        <?php endfor; ?>
    </div>

    <div class="carousel-nav">
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>

    <div class="indicators">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <span data-index="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></span>
        <?php endfor; ?>
    </div>
</div>

<style>
    .carousel-wrapper {
        max-width: 800px;
        margin: 2rem auto;
        position: relative;
    }

    .carousel {
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        border-radius: 12px;
    }

    .carousel img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: none;
        border-radius: 12px;
    }

    .carousel img.active {
        display: block;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .carousel-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 50%;
        left: -50px;
        right: -50px;
        transform: translateY(-50%);
        width: calc(100% + 100px);
        pointer-events: none;
    }

    .carousel-nav button {
        pointer-events: all;
        background: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 2rem;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 50%;
        transition: background 0.3s;
    }

    .carousel-nav button:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    .indicators {
        text-align: center;
        margin-top: 15px;
    }

    .indicators span {
        display: inline-block;
        height: 12px;
        width: 12px;
        margin: 0 5px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }

    .indicators span.active {
        background: #F55DC5;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentIndex = 0;
        const slides = document.querySelectorAll(".carousel img");
        const indicators = document.querySelectorAll(".indicators span");
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
            indicators.forEach((dot, i) => dot.classList.toggle('active', i === index));
            currentIndex = index;
        }

        let autoPlay = setInterval(() => showSlide((currentIndex + 1) % totalSlides), 5000);

        document.querySelector(".next").addEventListener("click", () => {
            showSlide((currentIndex + 1) % totalSlides);
            resetAutoPlay();
        });
        document.querySelector(".prev").addEventListener("click", () => {
            showSlide((currentIndex - 1 + totalSlides) % totalSlides);
            resetAutoPlay();
        });
        indicators.forEach((dot, i) => dot.addEventListener("click", () => {
            showSlide(i);
            resetAutoPlay();
        }));

        function resetAutoPlay() {
            clearInterval(autoPlay);
            autoPlay = setInterval(() => showSlide((currentIndex + 1) % totalSlides), 5000);
        }
    });
</script>