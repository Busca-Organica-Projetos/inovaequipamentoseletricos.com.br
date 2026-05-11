document.addEventListener('DOMContentLoaded', function () {

  const track      = document.querySelector('.carrossel-track');
  const viewport   = document.querySelector('.carrossel-viewport');
  const prevBtn    = document.querySelector('#artigos .prev');
  const nextBtn    = document.querySelector('#artigos .next');
  const boxArtigos = document.querySelector('#artigos .box-artigos');

  // ─── 1. Dots ───────────────────────────────────────────────────────────────
  const dotsWrapper = document.createElement('div');
  dotsWrapper.classList.add('carrossel-dots');
  boxArtigos.parentNode.insertBefore(dotsWrapper, boxArtigos.nextSibling);

  // ─── 2. Estado ─────────────────────────────────────────────────────────────
  let currentPage = 0;

  function getPerPage() {
    const w = window.innerWidth;
    if (w <= 580) return 1;
    if (w <= 900) return 2;
    return 3;
  }

  function getItems() {
    return Array.from(track.querySelectorAll(':scope > .col-lg-4'));
  }

  function getTotalPages() {
    return Math.ceil(getItems().length / getPerPage());
  }

  function getCardWidth() {
    const items = getItems();
    if (!items.length) return 0;
    return items[0].getBoundingClientRect().width;
  }

  // ─── 3. Renderiza dots ─────────────────────────────────────────────────────
  function renderDots() {
    dotsWrapper.innerHTML = '';
    const total = getTotalPages();
    for (let i = 0; i < total; i++) {
      const dot = document.createElement('button');
      dot.classList.add('dot');
      if (i === currentPage) dot.classList.add('active');
      dot.setAttribute('aria-label', `Página ${i + 1}`);
      dot.addEventListener('click', () => goToPage(i));
      dotsWrapper.appendChild(dot);
    }
  }

  // ─── 4. Navega para a página ───────────────────────────────────────────────
  function goToPage(page) {
    const total   = getTotalPages();
    const perPage = getPerPage();
    currentPage   = Math.max(0, Math.min(page, total - 1));

    const cardWidth = getCardWidth();
    const offset    = currentPage * perPage * cardWidth;
    track.style.transform = `translateX(-${offset}px)`;

    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage >= total - 1;

    dotsWrapper.querySelectorAll('.dot').forEach((dot, i) => {
      dot.classList.toggle('active', i === currentPage);
    });
  }

  // ─── 5. Botões ─────────────────────────────────────────────────────────────
  prevBtn.addEventListener('click', () => goToPage(currentPage - 1));
  nextBtn.addEventListener('click', () => goToPage(currentPage + 1));

  // ─── 6. Swipe touch ────────────────────────────────────────────────────────
  let touchStartX = 0;
  track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
  track.addEventListener('touchend', e => {
    const diff = touchStartX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) goToPage(diff > 0 ? currentPage + 1 : currentPage - 1);
  }, { passive: true });

  // ─── 7. Resize ─────────────────────────────────────────────────────────────
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => { currentPage = 0; renderDots(); goToPage(0); }, 150);
  });

  // ─── 8. Init ───────────────────────────────────────────────────────────────
  renderDots();
  goToPage(0);

});