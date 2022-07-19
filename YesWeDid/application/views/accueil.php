<style>
    .gallery1 {
        padding: 1rem;
        display: grid;
        grid-template-columns: repeat(10, 80vw);
        grid-template-rows: 1fr;
        grid-column-gap: 1rem;
        grid-row-gap: 1rem;
        overflow: scroll;
        height: 90vh;
        scroll-snap-type: both mandatory;
        scroll-padding: 1rem;
    }

    .active {
        scroll-snap-type: unset;
    }

    li {
        scroll-snap-align: center;
        display: inline-block;
        border-radius: 3px;

    }
</style>
<script>
    const slider = document.querySelector('.gallery1');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', e => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', _ => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', _ => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const SCROLL_SPEED = 3;
        const walk = (x - startX) * SCROLL_SPEED;
        slider.scrollLeft = scrollLeft - walk;
    });
</script>

<ul class="gallery1">
    <li style="background-image: url(https://cdn-uploads.gameblog.fr/img/news/402082_629f04a1aa0e1.jpg?ver=1);">bbkbklbjkljb</li>
    <li>
        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/724071791?h=4b0437b82b" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
        <script src="https://player.vimeo.com/api/player.js"></script>
        <p><a href="https://vimeo.com/724071791">UNE MINUTE AVEC</a> from <a href="https://vimeo.com/user68529315">Wedid Ben Hamidane</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </li>
    <li style="background: #f5cac3;"></li>
    <li style="background: #84a59d;"></li>
    <li style="background: #f28482;"></li>
</ul>