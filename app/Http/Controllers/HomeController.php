<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $html = view('welcome', [
            'contactEmail' => 'sindico@luizserrano.com.br',
            'contactPhone' => '(11) 2943-1195',
            'contactWhatsapp' => '(11) 99966-4726',
            'contactWhatsappLink' => 'https://wa.me/5511999664726',
            'stats' => [
                [
                    'value' => '360°',
                    'label' => 'gestão integrada com visão financeira, técnica e administrativa',
                ],
                [
                    'value' => '24h',
                    'label' => 'de atenção às demandas essenciais do condomínio',
                ],
                [
                    'value' => '100%',
                    'label' => 'de transparência na comunicação e na prestação de contas',
                ],
            ],
            'pillars' => [
                [
                    'title' => 'Diagnóstico',
                    'text' => 'Levantamento claro da situação do condomínio, identificando riscos, prioridades e oportunidades de melhoria.',
                ],
                [
                    'title' => 'Condução',
                    'text' => 'Gestão de rotina com organização, mediação de conflitos e respostas objetivas para síndicos, conselheiros e moradores.',
                ],
                [
                    'title' => 'Resultados',
                    'text' => 'Decisões orientadas por economia, previsibilidade, segurança jurídica e melhoria contínua da administração.',
                ],
            ],
            'consultoriaAreas' => [
                [
                    'name' => 'Operacional',
                    'title' => 'PANORAMA DE FUNCIONÁRIOS',
                    'text' => 'Tenha um raio x completo sobre a situação dos funcionários no que diz respeito a desempenho, carga horária, remuneração, manutenção preventiva, preditiva e corretiva em geral, treinamento de profissionais.',
                ],
                [
                    'name' => 'Financeira',
                    'title' => 'SEU CUSTO ESTÁ DENTRO DO SEU ORÇAMENTO?',
                    'text' => 'Todo um estudo baseado em pastas de prestação de contas, relação de custos de serviços e funcionários para um direcionamento de Síndico e Corpo Diretivo com uma auditoria completa.',
                ],
                [
                    'name' => 'Administrativa',
                    'title' => 'ADMINISTRAÇÃO EFICAZ E MEDIAÇÃO DE CONFLITOS',
                    'text' => 'Constituição e Implantação de Condomínio, planificação para otimização de custos administrativos e resolução de conflitos.',
                ],
                [
                    'name' => 'Fiscal',
                    'title' => 'SEUS TRIBUTOS ESTÃO EM DIA?',
                    'text' => 'Verificação de toda escrituração das notas fiscais com base nas regras tributárias e legislação vigente, observando os prazos legais de vencimento dos tributos, bem como, análise e validação dos arquivos digitais.',
                ],
                [
                    'name' => 'Técnica',
                    'title' => 'COMO ESTÁ A ESTRUTURA DO SEU CONDOMÍNIO?',
                    'text' => 'Vistoria técnica para verificação de todas as áreas do condomínio, estrutural, elétrica, pintura, hidráulica, entre outras.',
                ],
                [
                    'name' => 'Jurídica',
                    'title' => 'SITUAÇÃO E SOLUÇÃO PARA PROCESSOS',
                    'text' => 'Análise de contratos, estudo de Regulamento Interno e Convenção, além de verificação de processos do condomínio com custo adequado para uma eficaz solução.',
                ],
            ],
            'serviceCards' => [
                [
                    'label' => 'Especialista',
                    'title' => 'A RESPONSABILIDADE DE SER SÍNDICO',
                    'text' => 'O síndico responde civil e criminalmente pelo condomínio. Um profissional preparado para esta função sabe o tamanho da responsabilidade e atua com segurança e método.',
                ],
                [
                    'label' => 'Experiência',
                    'title' => 'MAIS DE 55 ANOS NO MERCADO',
                    'text' => 'O mercado pede que o síndico seja capacitado, treinado e acima de tudo tenha a experiência necessária para lidar com situações de qualquer natureza. A experiência que possui torna Luiz Serrano - O SÍNDICO preparado para assumir qualquer tipo de condomínio.',
                ],
                [
                    'label' => 'Mediador',
                    'title' => 'HABILIDADE PARA RESOLUÇÃO DE CONFLITOS',
                    'text' => 'Por não se tratar de um morador do condomínio, Luiz Serrano - O SÍNDICO pode tratar qualquer questão com total isenção, mediando conflitos e trazendo soluções ideais para cada situação.',
                ],
                [
                    'label' => 'Consciente',
                    'title' => 'RESPEITO AO VOTO',
                    'text' => 'O síndico profissional entende que a maior autoridade do condomínio é o voto. Toda decisão que afeta os condôminos é levada à assembleia com informações claras e completas.',
                ],
                [
                    'label' => 'Atendimento',
                    'title' => 'DISPONIBILIDADE PARA OS MORADORES',
                    'text' => 'Como sua atuação é focada exclusivamente na sindicância, Luiz Serrano - O SÍNDICO consegue dedicar o tempo necessário para responder demandas, orientar moradores e acompanhar soluções.',
                ],
                [
                    'label' => 'Economia',
                    'title' => 'NEGOCIAÇÃO DE CONTRATOS',
                    'text' => 'Ao assumir o posto de síndico em um condomínio, Luiz Serrano - O SÍNDICO realiza análise minuciosa de contratos de prestação de serviços para verificar custos, condições e aderência à realidade do condomínio.',
                ],
                [
                    'label' => 'Tecnologia',
                    'title' => 'APLICATIVO DISPONIBILIZADO GRATUITAMENTE',
                    'text' => 'Além das ferramentas de atendimento, Luiz Serrano - O SÍNDICO conta com um aplicativo gratuito para os condôminos, com recursos como comunicação com o síndico, segunda via de boleto, Convenção e Regulamento Interno.',
                ],
                [
                    'label' => 'Confiança',
                    'title' => 'PRESTADORES DE SERVIÇO APROVADOS POR CLIENTES',
                    'text' => 'A base de prestadores é formada por parceiros com idoneidade, competência e custo-benefício. Moradores e corpo diretivo também podem sugerir outras empresas, sempre com aprovação em assembleia.',
                ],
                [
                    'label' => 'Consultoria',
                    'title' => 'SAIBA A SITUAÇÃO DO SEU CONDOMÍNIO',
                    'text' => 'Se ainda não for a hora de contratar um síndico profissional em definitivo, você pode optar por uma consultoria para analisar a situação financeira e fiscal do condomínio e definir o caminho ideal.',
                ],
                [
                    'label' => 'Planejamento',
                    'title' => 'ROTINA COM PREVISIBILIDADE',
                    'text' => 'Organização de calendário, definição de prioridades e acompanhamento de prazos para que o condomínio tenha uma rotina mais estável e menos reativa.',
                ],
                [
                    'label' => 'Prestação de contas',
                    'title' => 'INFORMAÇÃO CLARA PARA O CORPO DIRETIVO',
                    'text' => 'Relatórios objetivos, comunicação direta e suporte à tomada de decisão para que síndico, conselho e moradores entendam o que foi feito e o que vem a seguir.',
                ],
            ],
            'workFlow' => [
                [
                    'period' => 'Diagnóstico',
                    'title' => 'Leitura da realidade do condomínio',
                    'text' => 'O trabalho começa com a análise da operação, das finanças, dos contratos e das demandas do dia a dia para entender o ponto de partida com precisão.',
                ],
                [
                    'period' => 'Assembleia',
                    'title' => 'Decisão coletiva com organização',
                    'text' => 'Pautas são preparadas com clareza, as informações são levadas ao corpo diretivo e as decisões acontecem com base em votação e transparência.',
                ],
                [
                    'period' => 'Execução',
                    'title' => 'Cobrança, mediação e acompanhamento',
                    'text' => 'Depois da decisão, entra a parte prática: negociar contratos, acompanhar serviços, resolver conflitos e manter a rotina funcionando.',
                ],
                [
                    'period' => 'Prestação',
                    'title' => 'Conta clara e resultado mensurável',
                    'text' => 'O fechamento do ciclo reúne relatórios, números, justificativas e encaminhamentos para que todos saibam o que foi realizado e o que vem a seguir.',
                ],
            ],
            'highlights' => [
                'Gestão com foco em economia, previsibilidade e segurança jurídica',
                'Mediação de conflitos com postura técnica e isenta',
                'Estrutura pronta para organizar assembleias, contratos e atendimento',
            ],
            'testimonialVideos' => [
                [
                    'title' => 'Gênesis Paula',
                    'subtitle' => 'Memória e presença',
                    'source' => asset('videos/depoimento1.mp4'),
                ],
                [
                    'title' => 'Roberto Torniolli',
                    'subtitle' => 'Trabalho e confiança',
                    'source' => asset('videos/depoimento2.mp4'),
                ],
                [
                    'title' => 'Eliane Fioravante',
                    'subtitle' => 'Vidros Sanches',
                    'source' => asset('videos/depoimento3.mp4'),
                ],
                [
                    'title' => 'José Eduardo',
                    'subtitle' => 'Grupo E&S Serviços Terceirizados',
                    'source' => asset('videos/depoimento4.mp4'),
                ],
                [
                    'title' => 'Viviane Soares',
                    'subtitle' => 'Vetor Norte Corretora de Seguros',
                    'source' => asset('videos/depoimento5.mp4'),
                ],
                [
                    'title' => 'Reginaldo do Prado',
                    'subtitle' => 'DS Aplicativos',
                    'source' => asset('videos/depoimento6.mp4'),
                ],
                [
                    'title' => 'Willian da Silva',
                    'subtitle' => 'Continuidade do trabalho',
                    'source' => asset('videos/depoimento7.mp4'),
                ],
            ],
        ])->render();

        return response($html);
    }
}
