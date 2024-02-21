<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Суд</title>
</head>
<body><?php //pa($deal);?>
    <main>
        <span id="top"></span>
        <div class="content">
            <div class="main_class courts content__wrapper">
                <div class="courts__left">
                    <div class="courts__left__header flex">
                        <a href="{{ route('front.up', ['deal_into_id' => $deal['ID'], 'tab' => 'index']) }}">
                            <img class="big_arrow" src="/assets/img/svg/big_arrow.svg" alt=">">
                            <h2>Суды</h2>
                            <div></div>
                        </a>
                    </div>
                    <div class="courts__left__body">
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Дата создания карточки</p>
                                <p class="black__text">@if(strlen($deal['DATE_CREATE'] ?? '') && $date = is_date($deal['DATE_CREATE'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Истец</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_YR24_PLAINTIFFS'] ?? '')) {{ $deal['UF_CRM_YR24_PLAINTIFFS'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Ответчик</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_YR24_DEFENDANTS'] ?? '')) {{ $deal['UF_CRM_YR24_DEFENDANTS'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Третье лицо</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_YR24_OTHERS'] ?? '')) {{ $deal['UF_CRM_YR24_OTHERS'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="instances">
                            <div class="first_instance instance flex">
                                <h2>
                                    Первая инстанция Наименование суда
                                </h2>
                                <img class="big_arrow" src="/assets/img/svg/big_arrow.svg" alt=">">
                            </div>
{{--mobile FirstInstance--}}                            
                            <div class="first__apellation appeal mobile none">
                                <div class="gray__block courts__information">
                                    <div class="flex">
                                        <p class="gray__text">Номер дела</p>
                                        <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD091'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD091'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Судья</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Ближайшее заседание</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information">
                                    <div class="flex">
                                        <p class="gray__text">Претензия</p>
                                        <p class="gray__text">Окончательный результат</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text"></p>
                                        <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD015'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD015'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    </div>
                                    <div class="flex files">
                                        <div class="flex files__first">
                                            @if(strlen($deal['UF_CRM_CONAD_CRD003'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD003']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                        <div class="flex files__second">
                                            @if(strlen($deal[''] ?? '')) @foreach(explode($ex, $deal['']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="flex courts__prices">
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Заявленные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD011'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD011'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Удовлетворенные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD012'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD012'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information interim__measures">
                                    <p class="gray__text">Обеспечительные меры</p>
                                    <p class="black__text">
                                        @if(strlen($deal['UF_CRM_CONAD_CRD008'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD008'] }} @else {{ $nd }} @endif
                                    </p>
{{-- Различия в фигме --}}                                    
                                    <div class="flex">
                                        <p class="gray__text">Дата создания карточки</p>
                                        <p class="black__text price">@if(strlen($deal[''] ?? '') && $date = is_date($deal[''])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Истец</p>
                                        <p class="black__text price">@if(strlen($deal[''] ?? '')) {{ $deal[''] }} @else {{ $nd }} @endif</p>
                                    </div>
{{-- Различия в фигме --}}                                    
                                </div>
                                <div class="gray__block courts__information">
                                    <div class="flex">
                                        <p class="gray__text">Продолжительность дела</p>
                                        <p class="black__text">
                                        @if(strlen($deal['UF_CRM_CONAD_CRD016'] ?? '') && strlen($deal['UF_CRM_CONAD_CRD018'] ?? '') && ($date1 = is_date($deal['UF_CRM_CONAD_CRD016'])) && ($date2 = is_date($deal['UF_CRM_CONAD_CRD018'])))
                                            {{ $date1->diff($date2)->format('%R%y yers %m months %d days') }}                                       
                                        @else {{ $nd }} @endif
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Дата окончания дела</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD016'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD016'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Дата вступления судебного акта в силу</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD014'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD014'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="flex courts__dates">
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Дата обжалования
                                        </p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD093'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD093'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Дата подачи жалобы
                                        </p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD018'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD018'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Дата принятия
                                        </p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD019'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD019'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information total__price">
                                    <div class="flex">
                                        <p class="gray__text">
                                            Сумма оказанных юридических услуг
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD020'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD020'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                            </div>
{{--endMobile FirstInstance--}}                            
                            <div class="second_instance instance flex">
                                <h2>
                                    Апелляционная инстанция Наименование суда
                                </h2>
                                <img class="big_arrow" src="/assets/img/svg/big_arrow.svg" alt=">">
                            </div>
{{--mobile AppelInstance--}}                            
                            <div class="second__apellation appeal mobile none">
                                <div class="gray__block courts__information">
                                    <div class="flex">
                                        <p class="gray__text">Номер дела</p>
                                        <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD101'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD101'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Судья</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Ближайшее заседание</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Заявитель</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD095'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD095'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information">
                                    <div class="complaint flex">
                                        <div class="complaint__text">
                                            <p class="black__text">Краткая апелляционная жалоба</p>
                                            <p class="gray__text">Дата подачи: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD027'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD027'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                            <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD028'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD028'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                        </div>
                                        <div class="complaint__files">
                                            @if(strlen($deal['UF_CRM_CONAD_CRD024'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD024']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                    <div class="complaint flex">
                                        <div class="complaint__text">
                                            <p class="black__text">Апелляционная жалоба</p>
                                            <p class="gray__text">Дата подачи: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD027'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD027'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                            <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD028'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD028'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                        </div>
                                        <div class="complaint__files">
                                            @if(strlen($deal['UF_CRM_CONAD_CRD025'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD025']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                    <div class="complaint flex">
                                        <div class="complaint__text">
                                            <p class="black__text">Возражения на апелляционную жалобу</p>
                                            <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD096'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD096'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                        </div>
                                        <div class="complaint__files">
                                             @if(strlen($deal['UF_CRM_CONAD_CRD026'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD026']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="gray__block claim courts__information">
                                    <div class="claim__header flex">
                                        <p class="gray__text">Претензия</p>
                                        <p class="gray__text">Окончательный результат
                                            (решение, определение)</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text"></p>
                                        <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD034'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD034'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    </div>
                                    <div class="flex files">
                                        <div class="flex files__first">
                                             @if(strlen($deal['UF_CRM_CONAD_CRD003'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD003']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                        <div class="flex files__second">
                                             @if(strlen($deal['UF_CRM_CONAD_CRD030'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD030']) as $url)        
                                                <a href="{{ $url }}" target="_blank">
                                                    <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                                </a>
                                            @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="flex courts__prices">
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Заявленные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD031'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD031'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Удовлетворенные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD032'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD032'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information total__price">
                                    <div class="flex">
                                        <p class="gray__text">
                                            Госпошлина
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD022'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD022'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information total__price">
                                    <div class="flex">
                                        <p class="gray__text">
                                            Сумма оказанных юридических услуг
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD036'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD036'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                            </div>
{{--endMobile AppelInstance--}}                            
                            <div class="third_instance instance flex">
                                <h2>
                                    Кассационная инстанция Наименование суда
                                </h2>
                                <img class="big_arrow" src="/assets/img/svg/big_arrow.svg" alt=">">
                            </div>
{{--mobile CasInstance--}}                             
                            <div class="third__apellation appeal mobile none">
                                <div class="gray__block courts__information">
                                    <div class="flex">
                                        <p class="gray__text">Номер дела</p>
                                        <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD102'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD102'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Судья</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Ближайшее заседание</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text">Заявитель</p>
                                        <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD037'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD037'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information progress">
                                    <p class="progress__header gray__text">Информация о ходе рассмотрения кассационной жалобы</p>
                                    @if(count($deal['UF_CRM_CONAD_CRD042'] ?? []))
                                    <div class="progress__bar">
                                        <div class="progress__bar__line">
                                            @foreach($deal['UF_CRM_CONAD_CRD042'] as $k => $d)
{{-- Переделать верстальщику class на числовой порядок --}}                                    
                                            <div class="progress__bar__line__first">
{{-- Переделать верстальщику class на числовой порядок --}}                                    
{{-- Переделать верстальщику id на числовой порядок --}}
                                                <div id="first_dot" class="progress__bar__dot {{ ((empty($k)) ? 'active' : '') }}"></div>
{{-- Переделать верстальщику id --}}                                       
                                                <p class="black__text">
                                                    Информация о ходе
                                                    <br>
                                                    Дата: @if(strlen($d ?? '') && $date = is_date($d)) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif
                                                </p>
                                            </div>
                                            <!--div class="progress__bar__line__second">
                                                <div id="second_dot" class="progress__bar__dot"></div>
                                                <p class="gray__text">
                                                    Информация о ходе
                                                    <br>
                                                    Дата: 
                                                </p>
                                            </div>
                                            <div class="progress__bar__line__third">
                                                <div id="third_dot" class="progress__bar__dot"></div>
                                                <p class="gray__text">
                                                    Информация о ходе
                                                    <br>
                                                    Дата: 
                                                </p>
                                            </div>
                                            <div class="progress__bar__line__fourth">
                                                <div id="fourth_dot" class="progress__bar__dot"></div>
                                                <p class="gray__text">
                                                    Информация о ходе
                                                    <br>
                                                    Дата: 
                                                </p>
                                            </div-->
                                        @endforeach
                                        </div>
                                    </div>
                                    @else {{ $nd }} @endif
                                </div>
                                <div class="gray__block courts__information">
                                    <div class="complaint flex">
                                        <div class="complaint__text">
                                            <p class="black__text">Кассационная жалоба</p>
                                            <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD097'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD097'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                            <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD098'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD098'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                        </div>
                                        <div class="complaint__files">
                                        @if(strlen($deal['UF_CRM_CONAD_CRD040'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD040']) as $url)        
                                            <a href="{{ $url }}" target="_blank">
                                                <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                            </a>
                                        @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                    <div class="complaint flex">
                                        <div class="complaint__text">
                                            <p class="black__text">Возражения на кассационную жалобу</p>
                                            <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD099'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD099'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                        </div>
                                        <div class="complaint__files">
                                        @if(strlen($deal['UF_CRM_CONAD_CRD041'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD041']) as $url)        
                                            <a href="{{ $url }}" target="_blank">
                                                <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                            </a>
                                        @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="gray__block claim courts__information">
                                    <div class="claim__header flex">
                                        <p class="gray__text">Претензия</p>
                                        <p class="gray__text">Окончательный результат
                                            (решение, определение)</p>
                                    </div>
                                    <div class="flex">
                                        <p class="gray__text"></p>
                                        <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD046'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD046'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    </div>
                                    <div class="flex files">
                                        <div class="flex files__first">
                                        @if(strlen($deal[''] ?? '')) @foreach(explode($ex, $deal['']) as $url)        
                                            <a href="{{ $url }}" target="_blank">
                                                <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                            </a>
                                        @endforeach @else {{ $nd }} @endif
                                        </div>
                                        <div class="flex files__second">
                                        @if(strlen($deal['UF_CRM_CONAD_CRD043'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD043']) as $url)        
                                            <a href="{{ $url }}" target="_blank">
                                                <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                            </a>
                                        @endforeach @else {{ $nd }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="flex courts__prices">
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Заявленные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD044'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD044'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                    <div class="gray__block courts__information">
                                        <p class="gray__text">
                                            Удовлетворенные требования
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD045'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD045'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information total__price">
                                    <div class="flex">
                                        <p class="gray__text">
                                            Госпошлина
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD038'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD038'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                                <div class="gray__block courts__information total__price">
                                    <div class="flex">
                                        <p class="gray__text">
                                            Сумма оказанных юридических услуг
                                        </p>
                                        <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD049'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD049'] }} @else {{ $nd }} @endif</p>
                                    </div>
                                </div>
                            </div>
{{--endMobile CaslInstance--}}                            
                        </div>
                    </div>
                </div>
                <div class="courts__right">
{{--web FirstInstance--}}                
                    <div class="first__apellation appeal none">
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Номер дела</p>
                                <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD091'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD091'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Судья</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Ближайшее заседание</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Претензия</p>
                                <p class="gray__text">Окончательный результат</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text"></p>
                                <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD015'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD015'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                            </div>
                            <div class="flex files">
                                
                                <div class="flex files__first">
                                    @if(strlen($deal['UF_CRM_CONAD_CRD003'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD003']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                                <div class="flex files__second">
                                    @if(strlen($deal[''] ?? '')) @foreach(explode($ex, $deal['']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex courts__prices">
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Заявленные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD011'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD011'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Удовлетворенные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD012'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD012'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information interim__measures">
                            <p class="gray__text">Обеспечительные меры</p>
                            <p class="black__text">
                                @if(strlen($deal['UF_CRM_CONAD_CRD008'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD008'] }} @else {{ $nd }} @endif   
                            </p>
{{-- Различия в фигме --}}                            
                            <div class="flex">
                                <p class="gray__text">Залог</p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_1666170845189'] ?? '')) {{ $deal['UF_CRM_1666170845189'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Госпошлина</p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD004'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD004'] }} @else {{ $nd }} @endif</p>
                            </div>
{{-- Различия в фигме --}}                            
                        </div>
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Продолжительность дела</p>
                                <p class="black__text">
                                    @if(strlen($deal['UF_CRM_CONAD_CRD016'] ?? '') && strlen($deal['UF_CRM_CONAD_CRD018'] ?? '') && ($date1 = is_date($deal['UF_CRM_CONAD_CRD016'])) && ($date2 = is_date($deal['UF_CRM_CONAD_CRD018'])))
                                        {{ $date1->diff($date2)->format('%R%y yers %m months %d days') }}                                      
                                    @else {{ $nd }} @endif
                                </p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Дата окончания дела</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD016'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD016'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Дата вступления судебного акта в силу</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD014'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD014'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="flex courts__dates">
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Дата обжалования
                                </p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD093'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD093'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Дата подачи жалобы
                                </p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD018'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD018'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Дата принятия
                                </p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD019'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD019'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information total__price">
                            <div class="flex">
                                <p class="gray__text">
                                    Сумма оказанных юридических услуг
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD020'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD020'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                    </div>
{{--end FirstInstance--}}
{{--web AppelInstance--}}                     
                    <div class="second__apellation appeal none">
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Номер дела</p>
                                <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD101'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD101'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Судья</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Ближайшее заседание</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Заявитель</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD095'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD095'] }} @else {{ $nd }} @endif</p>
                            </div>        
                        </div>
                        <div class="gray__block courts__information">
                            <div class="complaint flex">
                                <div class="complaint__text">
                                    <p class="black__text">Краткая апелляционная жалоба</p>
                                    <p class="gray__text">Дата подачи: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD027'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD027'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD028'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD028'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                </div> 
                                <div class="complaint__files">
                                    @if(strlen($deal['UF_CRM_CONAD_CRD024'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD024']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                            <div class="complaint flex">
                                <div class="complaint__text">
                                    <p class="black__text">Апелляционная жалоба</p>
                                    <p class="gray__text">Дата подачи: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD027'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD027'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD028'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD028'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                </div>
                                <div class="complaint__files">
                                    @if(strlen($deal['UF_CRM_CONAD_CRD025'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD025']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                            <div class="complaint flex">
                                <div class="complaint__text">
                                    <p class="black__text">Возражения на апелляционную жалобу</p>
                                    <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD096'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD096'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                </div>
                                <div class="complaint__files">
                                     @if(strlen($deal['UF_CRM_CONAD_CRD026'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD026']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                        </div>
                        <div class="gray__block claim courts__information">
                            <div class="claim__header flex">
                                <p class="gray__text">Претензия</p>
                                <p class="gray__text">Окончательный результат
                                    (решение, определение)</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text"></p>
                                <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD034'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD034'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                            </div>
                            <div class="flex files">
                                <div class="flex files__first">
                                     @if(strlen($deal['UF_CRM_CONAD_CRD003'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD003']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                                <div class="flex files__second">
                                     @if(strlen($deal['UF_CRM_CONAD_CRD030'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD030']) as $url)        
                                        <a href="{{ $url }}" target="_blank">
                                            <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                        </a>
                                    @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex courts__prices">
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Заявленные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD031'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD031'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Удовлетворенные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD032'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD032'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information total__price">
                            <div class="flex">
                                <p class="gray__text">
                                    Госпошлина
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD022'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD022'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information total__price">
                            <div class="flex">
                                <p class="gray__text">
                                    Сумма оказанных юридических услуг
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD036'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD036'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                    </div>
{{--end AppelInstance--}}                    
{{--web CaslInstance--}}                    
                    <div class="third__apellation appeal none">
                        <div class="gray__block courts__information">
                            <div class="flex">
                                <p class="gray__text">Номер дела</p>
                                <p class="blue__text">@if(strlen($deal['UF_CRM_CONAD_CRD102'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD102'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Судья</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD092'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD092'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Ближайшее заседание</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_1702719450'] ?? '') && $date = is_date($deal['UF_CRM_1702719450'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text">Заявитель</p>
                                <p class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD037'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD037'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information progress">
                            <p class="progress__header gray__text">Информация о ходе рассмотрения кассационной жалобы</p>
                            @if(count($deal['UF_CRM_CONAD_CRD042'] ?? []))
                            <div class="progress__bar">
                                <div class="progress__bar__line">
                                    @foreach($deal['UF_CRM_CONAD_CRD042'] as $k => $d)
{{-- Переделать верстальщику class на числовой порядок --}}                                    
                                    <div class="progress__bar__line__first">
{{-- Переделать верстальщику class на числовой порядок --}}                                    
{{-- Переделать верстальщику id на числовой порядок --}}
                                        <div id="first_dot" class="progress__bar__dot {{ ((empty($k)) ? 'active' : '') }}"></div>
{{-- Переделать верстальщику id --}}                                       
                                        <p class="black__text">
                                            Информация о ходе
                                            <br>
                                            Дата: @if(strlen($d ?? '') && $date = is_date($d)) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif
                                        </p>
                                    </div>
                                    <!--div class="progress__bar__line__second">
                                        <div id="second_dot" class="progress__bar__dot"></div>
                                        <p class="gray__text">
                                            Информация о ходе
                                            <br>
                                            Дата: 
                                        </p>
                                    </div>
                                    <div class="progress__bar__line__third">
                                        <div id="third_dot" class="progress__bar__dot"></div>
                                        <p class="gray__text">
                                            Информация о ходе
                                            <br>
                                            Дата: 
                                        </p>
                                    </div>
                                    <div class="progress__bar__line__fourth">
                                        <div id="fourth_dot" class="progress__bar__dot"></div>
                                        <p class="gray__text">
                                            Информация о ходе
                                            <br>
                                            Дата: 
                                        </p>
                                    </div-->
                                @endforeach
                                </div>
                            </div>
                            @else {{ $nd }} @endif
                        </div>
                        <div class="gray__block courts__information">
                            <div class="complaint flex">
                                <div class="complaint__text">
                                    <p class="black__text">Кассационная жалоба</p>
                                    <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD097'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD097'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                    <p class="gray__text">Дата принятия судом: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD098'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD098'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                </div>
                                <div class="complaint__files">
                                @if(strlen($deal['UF_CRM_CONAD_CRD040'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD040']) as $url)        
                                    <a href="{{ $url }}" target="_blank">
                                        <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                    </a>
                                @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                            <div class="complaint flex">
                                <div class="complaint__text">
                                    <p class="black__text">Возражения на кассационную жалобу</p>
                                    <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD099'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD099'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                                </div>
                                <div class="complaint__files">
                                @if(strlen($deal['UF_CRM_CONAD_CRD041'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD041']) as $url)        
                                    <a href="{{ $url }}" target="_blank">
                                        <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                    </a>
                                @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                        </div>
                        <div class="gray__block claim courts__information">
                            <div class="claim__header flex">
                                <p class="gray__text">Претензия</p>
                                <p class="gray__text">Окончательный результат
                                    (решение, определение)</p>
                            </div>
                            <div class="flex">
                                <p class="gray__text"></p>
                                <p class="gray__text">Дата: <span class="black__text">@if(strlen($deal['UF_CRM_CONAD_CRD046'] ?? '') && $date = is_date($deal['UF_CRM_CONAD_CRD046'])) {{ $date->format('d.m.Y') }} @else {{ $nd }} @endif</span></p>
                            </div>
                            <div class="flex files">
                                <div class="flex files__first">
                                @if(strlen($deal[''] ?? '')) @foreach(explode($ex, $deal['']) as $url)        
                                    <a href="{{ $url }}" target="_blank">
                                        <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                    </a>
                                @endforeach @else {{ $nd }} @endif
                                </div>
                                <div class="flex files__second">
                                @if(strlen($deal['UF_CRM_CONAD_CRD043'] ?? '')) @foreach(explode($ex, $deal['UF_CRM_CONAD_CRD043']) as $url)        
                                    <a href="{{ $url }}" target="_blank">
                                        <img class="file" src="/assets/img/svg/{{ ('pdf' == strtolower(pathinfo($url, PATHINFO_EXTENSION))) ? 'pdf' : 'doc' }}.svg" alt="">
                                    </a>
                                @endforeach @else {{ $nd }} @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex courts__prices">
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Заявленные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD044'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD044'] }} @else {{ $nd }} @endif</p>
                            </div>
                            <div class="gray__block courts__information">
                                <p class="gray__text">
                                    Удовлетворенные требования
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD045'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD045'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information total__price">
                            <div class="flex">
                                <p class="gray__text">
                                    Госпошлина
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD038'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD038'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                        <div class="gray__block courts__information total__price">
                            <div class="flex">
                                <p class="gray__text">
                                    Сумма оказанных юридических услуг
                                </p>
                                <p class="black__text price">@if(strlen($deal['UF_CRM_CONAD_CRD049'] ?? '')) {{ $deal['UF_CRM_CONAD_CRD049'] }} @else {{ $nd }} @endif</p>
                            </div>
                        </div>
                    </div>
{{--end CaslInstance--}}
                    <div class="closing__arrow">
                        <img class="big_arrow" src="/assets/img/svg/big_arrow.svg" alt=">">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/assets/js/script.js"></script>
</body>
</html>