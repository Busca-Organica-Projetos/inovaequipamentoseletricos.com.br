document.addEventListener('DOMContentLoaded', function () {

    const track    = document.querySelector('.bv-carrossel__track');
    const viewport = document.querySelector('.bv-carrossel__viewport');
    const prevBtn  = document.querySelector('.bv-carrossel__prev');
    const nextBtn  = document.querySelector('.bv-carrossel__next');
    const dotsWrap = document.querySelector('.bv-carrossel__dots');
    const ccAtual  = document.querySelector('.bv-cc-atual');

    if (!track) return;

    const slides = Array.from(track.querySelectorAll(':scope > .bv-carrossel__slide'));
    const total  = slides.length;
    let current  = 0;

    // ─── Renderiza dots ───────────────────────────────────────────────────────
    function renderDots() {
        dotsWrap.innerHTML = '';
        slides.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            dot.setAttribute('aria-label', `Imagem ${i + 1}`);
            if (i === current) dot.classList.add('active');
            dot.addEventListener('click', () => goTo(i));
            dotsWrap.appendChild(dot);
        });
    }

    // ─── Navega para o slide ──────────────────────────────────────────────────
    function goTo(index) {
        current = Math.max(0, Math.min(index, total - 1));

        // Largura de um slide em px (sempre 100% do viewport)
        const slideWidth = slides[0].getBoundingClientRect().width;
        track.style.transform = `translateX(-${current * slideWidth}px)`;

        // Botões
        prevBtn.disabled = current === 0;
        nextBtn.disabled = current >= total - 1;

        // Dots
        dotsWrap.querySelectorAll('.dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === current);
        });

        // Contador
        if (ccAtual) ccAtual.textContent = current + 1;
    }

    // ─── Botões ───────────────────────────────────────────────────────────────
    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    // ─── Swipe touch ──────────────────────────────────────────────────────────
    let touchStartX = 0;
    viewport.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });
    viewport.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
    }, { passive: true });

    // ─── Autoplay (opcional — remova se não quiser) ───────────────────────────
    let autoplay = setInterval(() => {
        goTo(current < total - 1 ? current + 1 : 0);
    }, 3500);

    // Para o autoplay ao interagir
    [prevBtn, nextBtn].forEach(btn => {
        btn.addEventListener('click', () => {
            clearInterval(autoplay);
        });
    });
    viewport.addEventListener('touchstart', () => {
        clearInterval(autoplay);
    }, { passive: true });

    // ─── Recalcula no resize ──────────────────────────────────────────────────
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => goTo(current), 150);
    });

    // ─── Init ─────────────────────────────────────────────────────────────────
    renderDots();
    goTo(0);

});