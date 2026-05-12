document.addEventListener('DOMContentLoaded', function () {

    // ═══════════════════════════════════════════════════════════════════════════
    // QUANTIDADE (+ / −)
    // ═══════════════════════════════════════════════════════════════════════════
    const qtdInput = document.querySelector('.qtd-input');
    const qtdMenos = document.querySelector('.qtd-menos');
    const qtdMais  = document.querySelector('.qtd-mais');

    if (qtdMenos && qtdMais && qtdInput) {
        qtdMenos.addEventListener('click', () => {
            const v = parseInt(qtdInput.value, 10) || 1;
            if (v > 1) qtdInput.value = v - 1;
        });
        qtdMais.addEventListener('click', () => {
            const v = parseInt(qtdInput.value, 10) || 1;
            qtdInput.value = v + 1;
        });
    }

    // ═══════════════════════════════════════════════════════════════════════════
    // OPÇÕES DO PRODUTO — habilita "Adicionar ao carrinho" só quando TODAS as
    // opções (Entrada, Enrolamento, Proteção, etc.) estão selecionadas.
    // ═══════════════════════════════════════════════════════════════════════════
    const selects = document.querySelectorAll('.produto-opcoes .opcao-select');
    const btnAdd  = document.querySelector('.btn-add-carrinho');

    function todosSelecionados() {
        if (selects.length === 0) return true; // produto sem opções
        return Array.from(selects).every(s => s.value && s.value !== '');
    }

    function atualizarBotao() {
        if (!btnAdd) return;
        btnAdd.disabled = !todosSelecionados();
    }

    selects.forEach(s => {
        s.addEventListener('change', atualizarBotao);
    });

    atualizarBotao();

    // ═══════════════════════════════════════════════════════════════════════════
    // ADICIONAR AO CARRINHO (localStorage)
    // ═══════════════════════════════════════════════════════════════════════════
    function getCarrinho() {
        try {
            return JSON.parse(localStorage.getItem('carrinho_inova') || '[]');
        } catch (e) {
            return [];
        }
    }

    function setCarrinho(itens) {
        localStorage.setItem('carrinho_inova', JSON.stringify(itens));
    }

    function showToast(msg) {
        let toast = document.querySelector('.cart-toast');
        if (!toast) {
            toast = document.createElement('div');
            toast.className = 'cart-toast';
            document.body.appendChild(toast);
        }
        toast.textContent = msg;
        void toast.offsetWidth;
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 2500);
    }

    if (btnAdd) {
        btnAdd.addEventListener('click', () => {
            if (btnAdd.disabled) return;

            const nomeEl = document.querySelector('.produto-nome');
            const nome   = nomeEl ? nomeEl.textContent.trim() : 'Produto';
            const slug   = (location.pathname.match(/produto\/([^/]+)/) || [])[1] || '';
            const qtd    = parseInt(qtdInput?.value || '1', 10);

            // Coleta as opções escolhidas
            const opcoes = {};
            selects.forEach(s => {
                const label = s.closest('.row')?.querySelector('.opcao-label')?.textContent.replace(':', '').trim();
                if (label) opcoes[label] = s.value;
            });

            const carrinho = getCarrinho();
            const chave = slug + '|' + JSON.stringify(opcoes);
            const existente = carrinho.find(i => i.chave === chave);
            if (existente) {
                existente.qtd += qtd;
            } else {
                carrinho.push({
                    chave: chave,
                    slug:  slug,
                    nome:  nome,
                    opcoes: opcoes,
                    qtd:   qtd,
                });
            }
            setCarrinho(carrinho);
            showToast('Produto adicionado ao carrinho!');
        });
    }

    // ═══════════════════════════════════════════════════════════════════════════
    // ABAS
    // ═══════════════════════════════════════════════════════════════════════════
    const abas    = document.querySelectorAll('#descricao-produto .aba');
    const paineis = document.querySelectorAll('#descricao-produto .aba-painel');

    abas.forEach(aba => {
        aba.addEventListener('click', function () {
            const alvo = this.dataset.aba;

            abas.forEach(a => a.classList.remove('aba--ativa'));
            paineis.forEach(p => p.classList.remove('aba-painel--ativo'));

            this.classList.add('aba--ativa');
            const painel = document.getElementById(`painel-${alvo}`);
            if (painel) painel.classList.add('aba-painel--ativo');
        });
    });

    // ═══════════════════════════════════════════════════════════════════════════
    // ESTRELAS DE AVALIAÇÃO
    // ═══════════════════════════════════════════════════════════════════════════
    const estrelas = document.querySelectorAll('.estrela');
    let notaSelecionada = 0;

    estrelas.forEach(estrela => {
        estrela.addEventListener('mouseover', function () {
            const val = parseInt(this.dataset.val);
            estrelas.forEach((e, i) => {
                e.style.color = i < val ? '#f5a623' : '#ccc';
            });
        });

        estrela.addEventListener('mouseleave', () => {
            estrelas.forEach((e, i) => {
                e.style.color = i < notaSelecionada ? '#f5a623' : '#ccc';
            });
        });

        estrela.addEventListener('click', function () {
            notaSelecionada = parseInt(this.dataset.val);
            estrelas.forEach((e, i) => {
                e.classList.toggle('ativa', i < notaSelecionada);
            });
        });
    });

});
