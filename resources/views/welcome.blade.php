@extends('layouts.site')

@section('title', 'Luiz Serrano | Síndico Profissional')

@section('content')
    <main class="page" id="inicio">
        <div class="page-glow page-glow--left"></div>
        <div class="page-glow page-glow--right"></div>

        <section class="hero">
            <div class="hero__content">
                <div class="hero__brand">
                    <div class="hero__brand-mark" aria-hidden="true">
                        <img class="hero__brand-logo" src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div class="hero__brand-copy">
                        <p class="eyebrow">Luiz Serrano</p>
                        <span>Síndico Profissional</span>
                    </div>
                </div>

                <p class="eyebrow">Gestão de condomínios</p>
                <h1>Luiz Serrano</h1>
                <p class="hero__lead">
                    Gestão profissional de condomínios com foco em organização, economia, segurança jurídica e
                    mediação objetiva das demandas do dia a dia.
                </p>

                <p class="hero__tagline">Soluções para o dia a dia do seu condomínio</p>

                <div class="hero__actions">
                    <a class="button button--primary" href="#consultoria">Conhecer a consultoria</a>
                    <a class="button button--secondary" href="#contato">Entrar em contato</a>
                </div>

                <div class="hero__contact">
                    <a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a>
                    <span class="contact-chip contact-chip--phone">
                        <i class="contact-chip__icon fa-solid fa-phone" aria-hidden="true"></i>
                        <span class="contact-chip__text">{{ $contactPhone }}</span>
                    </span>
                    <a class="contact-chip contact-chip--whatsapp" href="{{ $contactWhatsappLink }}" target="_blank" rel="noopener" aria-label="WhatsApp {{ $contactWhatsapp }}">
                        <i class="contact-chip__icon fa-brands fa-whatsapp" aria-hidden="true"></i>
                        <span class="contact-chip__text">{{ $contactWhatsapp }}</span>
                    </a>
                </div>

                <dl class="stats" aria-label="Resumo da atuação profissional">
                    @foreach ($stats as $stat)
                        <div class="stats__item">
                            <dt>{{ $stat['value'] }}</dt>
                            <dd>{{ $stat['label'] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <aside class="hero__panel" aria-label="Destaque da atuação profissional">
                <div class="hero__ring" aria-hidden="true">
                    <img class="hero__ring-logo" src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <div class="hero__medal">
                    <span class="hero__medal-label">Síndico profissional</span>
                    <strong>Atuação técnica e transparente</strong>
                    <p>
                        Organização da rotina, análise financeira, acompanhamento de contratos e mediação de conflitos
                        para uma gestão mais segura e previsível.
                    </p>
                </div>

                <div class="hero__note">
                    <span class="hero__note-kicker">Atendimento personalizado</span>
                    <p>
                        Uma presença constante para orientar o corpo diretivo, responder aos moradores e sustentar as
                        decisões do condomínio com clareza.
                    </p>
                </div>
            </aside>
        </section>

        <section class="section section--videos">
            <div class="section__header">
                <p class="eyebrow">Depoimentos</p>
                <h2>80 anos de bons contatos!</h2>
            </div>

            <div class="video-grid">
                @foreach (array_slice($testimonialVideos, 0, 2) as $video)
                    <article class="video-card">
                        <div class="video-frame" aria-hidden="true">
                            @if ($video['source'])
                                <video class="video-frame__media" controls playsinline preload="metadata">
                                    <source src="{{ $video['source'] }}" type="video/mp4">
                                </video>
                            @endif
                            <span class="video-frame__play"></span>
                        </div>
                        <div class="video-card__body">
                            <p class="video-card__title">{{ $video['title'] }}</p>
                            <p class="video-card__subtitle">{{ $video['subtitle'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="section section--consultoria" id="consultoria">
            <div class="section__header">
                <p class="eyebrow">Consultoria</p>
                <h2>Uma forma dinâmica de ter acesso à situação real do seu condomínio</h2>
                <p class="section__lede">
                    Uma forma dinâmica de ter acesso à situação real do seu condomínio e obter uma grande redução de
                    custos de forma prática e acessível.
                </p>
            </div>

            <div class="consultoria-grid">
                @foreach ($consultoriaAreas as $area)
                    <article class="info-card">
                        <span class="info-card__label">{{ $area['name'] }}</span>
                        <h3>{{ $area['title'] }}</h3>
                        <p>{{ $area['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="section section--intro">
            <div class="section__header">
                <p class="eyebrow">Atuação profissional</p>
                <h2>Como o síndico profissional conduz o condomínio com método</h2>
            </div>

            <div class="intro-grid">
                <article class="intro-card intro-card--wide">
                    <h3>Gestão profissional com visão completa</h3>
                    <p>
                        A gestão profissional parte da leitura correta do cenário do condomínio. A partir disso, Luiz
                        Serrano estrutura prioridades, organiza a comunicação, acompanha contratos, media conflitos e
                        conduz cada decisão com clareza para síndico, conselho e moradores.
                    </p>
                </article>

                @foreach ($pillars as $pillar)
                    <article class="intro-card">
                        <h3>{{ $pillar['title'] }}</h3>
                        <p>{{ $pillar['text'] }}</p>
                    </article>
                @endforeach
            </div>

            <ul class="highlights" aria-label="Destaques da atuação profissional">
                @foreach ($highlights as $highlight)
                    <li>{{ $highlight }}</li>
                @endforeach
            </ul>
        </section>

        <section class="section section--videos">
            <div class="video-grid">
                @foreach (array_slice($testimonialVideos, 2, 2) as $video)
                    <article class="video-card">
                        <div class="video-frame" aria-hidden="true">
                            @if ($video['source'])
                                <video class="video-frame__media" controls playsinline preload="metadata">
                                    <source src="{{ $video['source'] }}" type="video/mp4">
                                </video>
                            @endif
                            <span class="video-frame__play"></span>
                        </div>
                        <div class="video-card__body">
                            <p class="video-card__title">{{ $video['title'] }}</p>
                            <p class="video-card__subtitle">{{ $video['subtitle'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="section section--servicos" id="servicos">
            <div class="section__header">
                <p class="eyebrow">Serviços</p>
                <h2>Especialista, experiência, mediação e confiança</h2>
            </div>

            <div class="services-grid">
                @foreach ($serviceCards as $card)
                    <article class="service-card">
                        <span class="service-card__label">{{ $card['label'] }}</span>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="section" id="atuacao">
            <div class="section__header">
                <p class="eyebrow">Atuação</p>
                <h2>Quatro etapas para uma gestão de condomínio mais segura</h2>
            </div>

            <div class="timeline">
                @foreach ($workFlow as $step)
                    <article class="timeline__item">
                        <span class="timeline__period">{{ $step['period'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="section section--videos">
            <div class="section__header">
                <p class="eyebrow">Vozes do trabalho</p>
                <h2>Quando o trabalho fala por você!</h2>
            </div>

            <div class="video-grid">
                @foreach (array_slice($testimonialVideos, 4) as $video)
                    <article class="video-card">
                        <div class="video-frame" aria-hidden="true">
                            @if ($video['source'])
                                <video class="video-frame__media" controls playsinline preload="metadata">
                                    <source src="{{ $video['source'] }}" type="video/mp4">
                                </video>
                            @else
                                <div class="video-frame__empty">
                                    <span>Vídeo 06 pendente</span>
                                </div>
                            @endif
                            <span class="video-frame__play"></span>
                        </div>
                        <div class="video-card__body">
                            <p class="video-card__title">{{ $video['title'] }}</p>
                            <p class="video-card__subtitle">{{ $video['subtitle'] }}</p>
                        </div>
                    </article>
                @endforeach

                @if (count($testimonialVideos) % 2 === 1)
                    <aside class="video-card video-card--note">
                        <div class="video-card__note-badge">Gestão clara</div>
                        <h3>Informação organizada para decisões mais seguras</h3>
                        <p>
                            A sindicância profissional combina escuta, organização e acompanhamento técnico para dar
                            mais previsibilidade à rotina do condomínio.
                        </p>
                    </aside>
                @endif
            </div>
        </section>

        <section class="section section--quote">
            <div class="quote-card">
                <p class="quote-card__label">Compromisso profissional</p>
                <blockquote>
                    Gestão de condomínio exige método, presença e comunicação clara. É isso que sustenta decisões
                    melhores, menos ruído e mais previsibilidade para todos.
                </blockquote>
            </div>
        </section>

        <section class="section section--cta" id="contato">
            <div class="cta-card">
                <div>
                    <p class="eyebrow">Contato</p>
                    <h2>{{ $contactEmail }}</h2>
                    <p class="contact-chip contact-chip--phone">
                        <i class="contact-chip__icon fa-solid fa-phone" aria-hidden="true"></i>
                        <span class="contact-chip__text">{{ $contactPhone }}</span>
                    </p>
                    <p>
                        <a class="contact-chip contact-chip--whatsapp" href="{{ $contactWhatsappLink }}" target="_blank" rel="noopener" aria-label="WhatsApp {{ $contactWhatsapp }}">
                            <i class="contact-chip__icon fa-brands fa-whatsapp" aria-hidden="true"></i>
                            <span class="contact-chip__text">{{ $contactWhatsapp }}</span>
                        </a>
                    </p>
                </div>

                <a class="button button--primary" href="mailto:{{ $contactEmail }}">
                    Solicitar informações
                </a>
            </div>
        </section>

        <footer class="site-footer">
            <div class="site-footer__inner">
                <span>Luiz Serrano</span>
                <span>{{ $contactEmail }}</span>
                <span class="contact-chip contact-chip--phone">
                    <i class="contact-chip__icon fa-solid fa-phone" aria-hidden="true"></i>
                    <span class="contact-chip__text">{{ $contactPhone }}</span>
                </span>
                <span class="contact-chip contact-chip--whatsapp contact-chip--footer">
                    <i class="contact-chip__icon fa-brands fa-whatsapp" aria-hidden="true"></i>
                    <span class="contact-chip__text">{{ $contactWhatsapp }}</span>
                </span>
            </div>
        </footer>
    </main>
@endsection
