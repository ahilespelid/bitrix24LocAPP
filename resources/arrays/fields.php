<?php
return $array = [
    ['Стороны по делу',                                                                                                             'UF_CRM_CONAD_CRD001', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Предмет спора',                                                                                                               'UF_CRM_CONAD_CRD002', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Претензия',                                                                                                                   'UF_CRM_CONAD_CRD003', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Госпошлина (ПИ)',                                                                                                             'UF_CRM_CONAD_CRD004', 'double', 1, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Госпошлина. Платежное поручение (ПИ)',                                                                                        'UF_CRM_CONAD_CRD005', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата оплаты госпошлины (ПИ)',                                                                                                 'UF_CRM_CONAD_CRD006', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о ходе дела',                                                                                                      'UF_CRM_CONAD_CRD007', 'string', 1, 'MULTIPLE' => 'Y', 'type' => 'm'], //(множ)
    ['Информация о наложении обеспечительных мер',                                                                                  'UF_CRM_CONAD_CRD008', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Текущее состояние дел',                                                                                                       'UF_CRM_CONAD_CRD009', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Результат рассмотрения дела (ПИ)',                                                                                            'UF_CRM_CONAD_CRD010', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма заявленных требований (ПИ)',                                                                                            'UF_CRM_CONAD_CRD011', 'double', 1, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Сумма удовлетворенных судом (ПИ)',                                                                                            'UF_CRM_CONAD_CRD012', 'double', 1, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата вступления судебного акта в законную силу',                                                                              'UF_CRM_CONAD_CRD013', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Срок на обжалование',                                                                                                         'UF_CRM_CONAD_CRD014', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата фактического изготовления судом решения',                                                                                'UF_CRM_CONAD_CRD015', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'], 
    ['Дата получения решения',                                                                                                      'UF_CRM_CONAD_CRD016', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'], 
    ['Сведения о необходимости обжалования судебного акта',                                                                         'UF_CRM_CONAD_CRD017', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата подачи жалобы (ПИ)',                                                                                                     'UF_CRM_CONAD_CRD018', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'], 
    ['Дата принятия жалобы (ПИ)',                                                                                                   'UF_CRM_CONAD_CRD019', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Сумма оказанных юридических услуг (ПИ)',                                                                                      'UF_CRM_CONAD_CRD020', 'double', 1, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Заявитель жалобы',                                                                                                            'UF_CRM_CONAD_CRD021', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Госпошлина (АИ)',                                                                                                             'UF_CRM_CONAD_CRD022', 'double', 2, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Госпошлина. Платежное поручение (АИ)',                                                                                        'UF_CRM_CONAD_CRD023', 'string', 2, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Краткая апелляционная жалоба',                                                                                                'UF_CRM_CONAD_CRD024', 'string', 2, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Апелляционная жалоба',                                                                                                        'UF_CRM_CONAD_CRD025', 'string', 2, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Возражения на апелляционную жалобу',                                                                                          'UF_CRM_CONAD_CRD026', 'string', 2, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата подачи жалобы (АИ)',                                                                                                     'UF_CRM_CONAD_CRD027', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата принятия жалобы судом (АИ)',                                                                                             'UF_CRM_CONAD_CRD028', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о ходе рассмотрения апелляционной жалобы',                                                                         'UF_CRM_CONAD_CRD029', 'string', 2, 'MULTIPLE' => 'Y', 'type' => 'm'], //(множ)
    ['Результат рассмотрения апелляционной жалобы (определение)',                                                                   'UF_CRM_CONAD_CRD030', 'string', 2, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма заявленных требований АИ',                                                                                              'UF_CRM_CONAD_CRD031', 'double', 2, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Сумма удовлетворенных судом АИ',                                                                                              'UF_CRM_CONAD_CRD032', 'double', 2, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата фактического изготовления апелляционного определения',                                                                   'UF_CRM_CONAD_CRD033', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата получения апелляционного определения',                                                                                   'UF_CRM_CONAD_CRD034', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о необходимости обжалования апелляционного определения',                                                           'UF_CRM_CONAD_CRD035', 'enumeration', 2, 'MULTIPLE' => 'N', 'type' => 's', 'LIST_COLUMN_LABEL' => ['ru' => 'Информация о необходимости обжалования апелляционного определения', 'en' => 'Information on the need to appeal the appeal ruling'], 'LIST' => [['ID' => 1, 'VALUE' => 'нужно подавать кассационную жалобу'],['ID' => 2, 'VALUE' => 'не нужно подавать кассационную жалобу']]], 
    ['Сумма оказанных юридических услуг АИ',                                                                                        'UF_CRM_CONAD_CRD036', 'double', 2, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Заявитель жалобы',                                                                                                            'UF_CRM_CONAD_CRD037', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Госпошлина (КИ)',                                                                                                             'UF_CRM_CONAD_CRD038', 'double', 3, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Госпошлина. Платежное поручение (КИ)',                                                                                        'UF_CRM_CONAD_CRD039', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Кассационная жалоба',                                                                                                         'UF_CRM_CONAD_CRD040', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Возражения на кассационную жалобу',                                                                                           'UF_CRM_CONAD_CRD041', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Информация о ходе рассмотрения кассационной жалобы',                                                                          'UF_CRM_CONAD_CRD042', 'string', 3, 'MULTIPLE' => 'Y', 'type' => 's'], //(множ)
    ['Результат рассмотрения',                                                                                                      'UF_CRM_CONAD_CRD043', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма заявленных требований',                                                                                                 'UF_CRM_CONAD_CRD044', 'double', 3, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Сумма удовлетворенных судом требований',                                                                                      'UF_CRM_CONAD_CRD045', 'double', 3, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата фактического изготовления судебного акта',                                                                               'UF_CRM_CONAD_CRD046', 'datetime', 3, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата получения постановления суда кассационной инстанции',                                                                    'UF_CRM_CONAD_CRD047', 'datetime', 3, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о дальнейших действиях',                                                                                           'UF_CRM_CONAD_CRD048', 'enumeration', 3, 'MULTIPLE' => 'N', 'type' => 's', 'LIST_COLUMN_LABEL' => ['ru' => 'Информация о дальнейших действиях', 'en' => 'Information about further actions'], 'LIST' => [['ID' => 1, 'VALUE' => 'Подаем жалобу в верховный суд'],['ID' => 2, 'VALUE' => 'Не подаем жалобу в Верховный суд']]],
    ['Сумма оказанных юридических услуг (КИ)',                                                                                      'UF_CRM_CONAD_CRD049', 'double', 3, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Взыскатель',                                                                                                                  'UF_CRM_CONAD_CRD050', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Должник',                                                                                                                     'UF_CRM_CONAD_CRD051', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата вступления решения ИП в законную силу',                                                                                  'UF_CRM_CONAD_CRD052', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Срок для предъявления исполнительного листа к исполнению',                                                                    'UF_CRM_CONAD_CRD053', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Сумма денежных требований ИП',                                                                                                'UF_CRM_CONAD_CRD054', 'double', 4, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Сведения о заложенном имуществе',                                                                                             'UF_CRM_CONAD_CRD055', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата подачи исполнительного листа в ФССП',                                                                                    'UF_CRM_CONAD_CRD056', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата возбуждения исполнительного производства',                                                                               'UF_CRM_CONAD_CRD057', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['ФИО судебного пристава-исполнителя, контактные данные',                                                                       'UF_CRM_CONAD_CRD058', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Ссылка на исполнительное производство на сайте ФССП',                                                                         'UF_CRM_CONAD_CRD059', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Информация о ходе исполнительного производства',                                                                              'UF_CRM_CONAD_CRD060', 'string', 4, 'MULTIPLE' => 'Y', 'type' => 'm'], //(множ)
    ['Аресты, запреты, обременения',                                                                                                'UF_CRM_CONAD_CRD061', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Даты посещения судебного пристава-исполнителя для контроля его действий и уточнения информации',                              'UF_CRM_CONAD_CRD062', 'datetime', 4, 'MULTIPLE' => 'Y', 'type' => 'md'], //(множ)
    ['Сведения о торгах, дата',                                                                                                     'UF_CRM_CONAD_CRD063', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сведения о результатах проведения торгов ИП',                                                                                 'UF_CRM_CONAD_CRD064', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Предложение взыскателю оставить имущество за собой',                                                                          'UF_CRM_CONAD_CRD065', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Планируемая дата перечисления денежных средств',                                                                              'UF_CRM_CONAD_CRD066', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о предоставлении в ФССП актуальной информации о задолженности, с учетом процентов на день взыскания',              'UF_CRM_CONAD_CRD067', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата поступления денежных средств ИП взыскателю',                                                                             'UF_CRM_CONAD_CRD068', 'double', 4, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата завершения исполнительного производства',                                                                                'UF_CRM_CONAD_CRD069', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата окончания следующей подачи исполнительного листа',                                                                       'UF_CRM_CONAD_CRD070', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Основание окончания исполнительного производства',                                                                            'UF_CRM_CONAD_CRD071', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма оказанных юридических услуг (ИП)',                                                                                      'UF_CRM_CONAD_CRD072', 'double', 4, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Госпошлина (Б)',                                                                                                              'UF_CRM_CONAD_CRD073', 'double', 5, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Госпошлина. Платежное поручение (Б)',                                                                                         'UF_CRM_CONAD_CRD074', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата окончания текущей стадии',                                                                                               'UF_CRM_CONAD_CRD075', 'datetime', 5, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о банковских счетах должника',                                                                                     'UF_CRM_CONAD_CRD076', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Информация о признании сделок/платежей недействительными',                                                                    'UF_CRM_CONAD_CRD077', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Информация об участии финансового управляющего на судебных заседаниях',                                                       'UF_CRM_CONAD_CRD078', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Поступление ДС Банкротство',                                                                                                  'UF_CRM_CONAD_CRD079', 'double', 5, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата поступления ДС Банкротство',                                                                                             'UF_CRM_CONAD_CRD080', 'datetime', 5, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Субсидиарная ответственность',                                                                                                'UF_CRM_CONAD_CRD081', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Оценка имущества должностных лиц',                                                                                            'UF_CRM_CONAD_CRD082', 'double', 5, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Результат банкротства',                                                                                                       'UF_CRM_CONAD_CRD083', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма оказанных юридических услуг (Банкротство)',                                                                             'UF_CRM_CONAD_CRD084', 'double', 5, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Процессуальное правопреемство (дата определения АС)',                                                                         'UF_CRM_CONAD_CRD085', 'string', 6, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Контакт должника',                                                                                                            'UF_CRM_CONAD_CRD086', 'string', 6, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Расчет дисконта',                                                                                                             'UF_CRM_CONAD_CRD087', 'double', 6, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Отчет о работе',                                                                                                              'UF_CRM_CONAD_CRD088', 'string', 6, 'MULTIPLE' => 'Y', 'type' => 'm'], //(множ)
    ['Причины, по которым возобновляется производство',                                                                             'UF_CRM_CONAD_CRD089', 'string', 7, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Инициатор',                                                                                                                   'UF_CRM_CONAD_CRD090', 'string', 7, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Номер дела (ПИ)',                                                                                                             'UF_CRM_CONAD_CRD091', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Судья',                                                                                                                       'UF_CRM_CONAD_CRD092', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата обжалования',                                                                                                            'UF_CRM_CONAD_CRD093', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Окончательный результат',                                                                                                     'UF_CRM_CONAD_CRD094', 'string', 1, 'MULTIPLE' => 'Y', 'type' => 'm'],
    ['Заявитель',                                                                                                                   'UF_CRM_CONAD_CRD095', 'string', 1, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата возражения на апелляционную жалобу',                                                                                     'UF_CRM_CONAD_CRD096', 'datetime', 1, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата кассационной жалобы',                                                                                                    'UF_CRM_CONAD_CRD097', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата принятия судом кассационной жалобы',                                                                                     'UF_CRM_CONAD_CRD098', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Дата возражения на кассационную жалобу',                                                                                      'UF_CRM_CONAD_CRD099', 'datetime', 2, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Сведения о торгах',                                                                                                           'UF_CRM_CONAD_CRD100', 'datetime', 3, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Номер дела (АИ)',                                                                                                             'UF_CRM_CONAD_CRD101', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Номер дела (КИ)',                                                                                                             'UF_CRM_CONAD_CRD102', 'string', 3, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Номер дела (ИП)',                                                                                                             'UF_CRM_CONAD_CRD103', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Причина окончания',                                                                                                           'UF_CRM_CONAD_CRD104', 'string', 4, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Сумма требования на момент постановления',                                                                                    'UF_CRM_CONAD_CRD105', 'double', 4, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Дата окончания судебной процедуры',                                                                                           'UF_CRM_CONAD_CRD106', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Задолженность с учетом процентов на день взыскания',                                                                          'UF_CRM_CONAD_CRD107', 'double', 4, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Запросы судебных приставов',                                                                                                  'UF_CRM_CONAD_CRD108', 'string', 4, 'MULTIPLE' => 'Y', 'type' => 'm'],
    ['Ответ на запросы',                                                                                                            'UF_CRM_CONAD_CRD109', 'string', 4, 'MULTIPLE' => 'Y', 'type' => 'm'],
    ['Результат проведения торгов',                                                                                                 'UF_CRM_CONAD_CRD110', 'datetime', 4, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Номер дела (Б)',                                                                                                              'UF_CRM_CONAD_CRD111', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Заявитель',                                                                                                                   'UF_CRM_CONAD_CRD112', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Должник',                                                                                                                     'UF_CRM_CONAD_CRD113', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Конкурсный управляющий',                                                                                                      'UF_CRM_CONAD_CRD114', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Информация о кредиторах',                                                                                                     'UF_CRM_CONAD_CRD115', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата поступления ДС Банкротство',                                                                                             'UF_CRM_CONAD_CRD116', 'datetime', 5, 'MULTIPLE' => 'N', 'type' => 'd'],
    ['Информация о признании сделок/платежей недействительными',                                                                    'UF_CRM_CONAD_CRD117', 'string', 5, 'MULTIPLE' => 'Y', 'type' => 'm'],
    ['Информация о банковских счетах должника',                                                                                     'UF_CRM_CONAD_CRD118', 'string', 5, 'MULTIPLE' => 'Y', 'type' => 'm'],
    ['Номер дела (М)',                                                	                                                            'UF_CRM_CONAD_CRD119', 'string', 6, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Рентабельность',                                                                                                              'UF_CRM_CONAD_CRD120', 'double', 6, 'MULTIPLE' => 'N', 'type' => 'i'],
    ['Номер дела (В)',                                                                                                              'UF_CRM_CONAD_CRD121', 'string', 7, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Ссылка на дело в суде',                                                                                                       'UF_CRM_CONAD_CRD122', 'string', 5, 'MULTIPLE' => 'N', 'type' => 's'],
    ['Дата определения АС',                                                                                                         'UF_CRM_CONAD_CRD123', 'datetime', 6, 'MULTIPLE' => 'N', 'type' => 'd'],
];