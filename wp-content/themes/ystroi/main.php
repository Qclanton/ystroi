<section id="info-block" class="info-block__wrapper">
    <div class="shadow-wrapper">
        <div class="page__universal-wrapper">
            <h1 class="info-block__title page-title">
                Ремонт квартир
                <br>
                Доступные цены 
                <br>
                Доступный ремонт
            </h1>
            <h3 class="info-block__title h2-title">Ремонт жилой и коммерческой недвижимости</h3>
            <h5 class="info-block__title extra-title">
                Материалы по ценам производителей <br />
                Оплата по этапам
            </h5>
            
            <div class="universal_row--wrapper">
                <div class="universal_row three_cols">
                    <div class="head-universal__col head-universal__col_first head-universal__col--align">
                        <span class="universal-button__wrapper">
                            <a class="universal-button grey" href="#calc_main--anchor">
                                <div class="universal-button__wrapper--inner">
                                    Заявка на расчет
                                </div>
                            </a>
                        </span>
                    </div>

                    <div id="sketch-offer-details" style="display:none" class="head-universal__col head-universal__col_sec head-universal__col_sec--popup head-universal__col--align">
                        <span class="universal-button__wrapper universal-button__wrapper--popup">
                            <a class="universal-button green universal-button--small-main" href="#video">
                                <div class="universal-button__wrapper--inner">
                                    Посмотреть как это работает
                                </div>
                            </a>
                            <a class="universal-button red  universal-button--small-main" href="#calc_main--anchor">
                                <div class="universal-button__wrapper--inner">
                                    Перейти к оформлению заявки
                                </div>
                            </a>							
                        </span>
                    </div>

                    <div id="sketch-offer-wrapper" class="head-universal__col head-universal__col_sec head-universal__col--align">
                        <span class="universal-button__wrapper">
                            <a id="sketch-offer" class="universal-button red">
                                <div class="universal-button__wrapper--inner">
                                    Заявка на онлайн эскиз-планировки
                                </div>
                            </a>
                        </span>
                    </div>

                    <div class="head-universal__col head-universal__col_last head-universal__col--align">

                        <span class="universal-button__wrapper">
                            <a class="universal-button light_grey"  href="#calc_online--anchor">
                                <div class="universal-button__wrapper--inner">
                                    Онлайн калькулятор 
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section-block__wrapper">
    <div class="background-wrapper--1">
        <div class="page__universal-wrapper">
            <div class="title-wrapper">
                <h2>С нами Вам легче делать ремонт, чем самостоятельно</h2>
                <h3>Уделяйте время вашим близким, Вашим хобби, а ремонтом займемся мы!</h3>
            </div>
            <div class="page__universal-two_cols--wrapper clearfix">
                <div class="layout__col_half">
                    <div class="content_block--wrapper">
                        <div class="universal_icon"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small">
                                Правильная оценка работ
                            </h1>
                            <p>
                                Профессиональный расчет стоимости работ в рыночных ценах. <br />Доступно расписанные виды работ.
                            </p>
                        </div>
                    </div>
                    <div class="content_block--wrapper">
                        <div class="universal_icon universal_icon--ruble"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small">
                                Фиксированная стоимость работ указана в договоре
                            </h1>
                            <p>
                                Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="layout__col_half layout__col_half--second">
                    <div class="content_block--wrapper">
                        <div class="universal_icon universal_icon--scheme"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small">
                                Технически грамотная постановка задач
                            </h1>
                            <p>
                                Мы точно и подробно опишем ваши пожелания в техническом задании.
                            </p>
                        </div>
                    </div>
                    <div class="content_block--wrapper">
                        <div class="universal_icon universal_icon--loupe"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small">
                                Нет необходимости контролировать строительный процесс
                            </h1>
                            <p>
                                За качество работ и сроки отвечаем мы.
                            </p>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    <div class="green-wrapper">
        <div class="page__universal-wrapper">
            <div class="title-wrapper white">
                <h1 class="title--red_background">Акция!</h1>
                <h2>Бесплатное, пробное эскизное планирование он-лайн с архитектором</h2>
                <h3>Профессиональное планирование жилого пространства в течении 1 часа!</h3>
            </div>
        </div>
    </div>
    <div class="page__universal-wrapper">
        <div class="page__universal-two_big_cols--wrapper clearfix">
            <form id="form_main" enctype="multipart/form-data">
                <div class="layout__big_col_half">
                    <div class="grey_wrapper__inner wrapper_inner-colored">
                        <div class="universal_line__wrapper">
                            <textarea name="main[message]" placeholder="Краткое описание того, что вы хотите сделать" required></textarea>
                            <div data-field="main[message]" class="form__checker required_unfilled"> </div>
                            <p class="required_note">Заполнять обязательно</p>
                        </div>
                        <div class="universal_line__wrapper">
                            <div class="form__file"> </div>
                            <input name="main[files]" data-input-id="main-add-files" class="shorter_line files-text" type="text" required>
                            <div data-field="main[files]" class="form__checker required_unfilled"> </div>
                            <p class="required_note">Заполнять обязательно</p>
                        </div>
                        <div class="universal_line__wrapper">
                            <input id="main-add-files" style="display: none" type="file" name="files" multiple>
                            <a data-input-id="main-add-files" class="form_button_green add-file" href="#">Прикрепить файлы</a>
                        </div>
                        <div class="universal_line__wrapper">
                            <a data-input-id="main-add-files" class="form_button_green files-remover" href="#" >Удалить файлы</a>
                        </div>
                        <div class="universal_line__wrapper">
                            <input name="main[name]" type="text" title="Ваше имя " value="" placeholder="Ваше Имя" required>
                            <div data-field="main[name]" class="form__checker required_unfilled"> </div>
                            <p class="required_note">Заполнять обязательно</p>
                        </div>
                        <div class="universal_line__wrapper">
                            <input name="main[phone]" type="tel" title="+79261234567" value="" pattern="\+7[0-9]{10}" placeholder="Ваш телефон" required>
                            <div data-field="main[phone]" class="form__checker required_unfilled"> </div>
                            <p class="required_note">Заполнять обязательно</p>
                        </div>
                        <div class="universal_line__wrapper">
                            <input name="main[email]" type="email" title="Ваша почта" value="" placeholder="Ваша почта" required>
                            <div data-field="main[email]" class="form__checker required_unfilled"> </div>
                            <p class="required_note">Заполнять обязательно</p>
                        </div>
                        
                        <div class="universal_line__wrapper">
                            <input class="form_submit__button" type="submit" value="Отправить" name="submit">
                        </div>
                    </div>
                </div>
                <div class="layout__big_col_half layout__big_col_half--second">
                    <div class="grey_wrapper__inner wrapper_inner-colored">
                        <h1 class="title--black">Что произойдет <br /> после отправки заявки</h1>
                    </div>
                    <div class="grey_wrapper__inner wrapper_inner-colored">
                        <h2 class="title--black">Позвоним вам</h2>
                        <p>Согласуем с Вами удобное время и дату для проведения онлайн сессии с архитектором</p>
                        <img class="icon_inner" src="<?= get_template_directory_uri(); ?>/images/icons2.png">
                        <div class="universal_line__wrapper">
                            <a class="line_wrapper--white--inner" id="free_offer-button">Ознакомиться с условиями оказания бесплатной услуги</a>
                            <div style="display: none;">
                                <div class="box-modal" id="free-offer">
                                    <div class="popup-wrapper">
                                        <div class="popup_title-wrapper">
                                            <img class="popup_cell" alt="logo" src="<?= get_template_directory_uri(); ?>/images/logo_small.png">
                                            <h2 class="popup-title popup_cell">Эскизное планирование </h2>
                                            <a class="popup_cell popup_cell--save"  href="<?= get_template_directory_uri(); ?>/docs/agreement.pdf" data-title="Сохранить" download></a>
                                            <a class="popup_cell popup_cell--print"></a>
                                        </div>
                                            <div class="box-modal_close arcticmodal-close popup_cell"><img alt="Close" src="<?= get_template_directory_uri(); ?>/images/close.png"></div>
												<article>
													<h3>Пользовательское соглашение</h3>
													<p>
														<strong>ВАЖНО:</strong>
														<br>
														Внимательно прочитайте это пользовательское соглашение перед использованием ресурса.
														<br>
														Использование Ресурса возможно только на условиях настоящего Соглашения.
														<br>
														Начиная использовать Ресурс, Вы тем самым принимаете условия данного соглашения и соглашаетесь с обязательствами, которые соглашение возлагает на Вас.
													</p>
													<p>Если Вы не принимаете условия настоящего Соглашения в полном объеме, Вы не можете использовать Ресурс <a href="http://ystroi.com">http://ystroi.com</a> <a href="http://ystroi.ru">http://ystroi.ru</a> .</p>

													<p>
														<strong>1.ОСНОВНЫЕ ПОЛОЖЕНИЯ</strong>
														<br>
														1.1. Настоящее Пользовательское соглашение (Далее – «Соглашение») заключается между Вами (далее по тексту «Пользователь»), конечным пользователем, посещающим (пользующимся) сайтом <a href="http://ystroi.com">http://ystroi.com</a> <a href="http://ystroi.ru">http://ystroi.ru</a> и компанией ООО «Успех-Строй», далее по тексту (Администрация сайта <a href="http://ystroi.com">http://ystroi.com</a>; <a href="http://ystroi.ru">http://ystroi.ru</a>) именуемой далее — «Администрация».
														<br>
														1.2. Администрация и Пользователь совместно именуются — «Стороны», а по отдельности – «Сторона».
														<br>
														1.3. Настоящее Соглашение представляет собой официальное предложение в адрес физических или юридических лиц (Пользователей), которые принимают настоящее Соглашение, в отношении пользования сайтом <a href="http://ystroi.com">http://ystroi.com</a> <a href="http://ystroi.ru">http://ystroi.ru</a>, на условиях настоящего Соглашения.
														<br>
														1.4. Настоящее Соглашение в соответствии со статьей 435 Гражданского кодекса РФ является офертой, адресованной любым лицам (далее по тексту — Оферта), и может быть принято лицом не иначе как путем присоединения к Соглашению в целом.
														<br>
														1.5. Настоящее Соглашение считается заключенным и приобретает силу договора присоединения с момента совершения Пользователем действий по получению информационного контента, представленного на сайте, означающих полное и безоговорочное принятие лицом всех условий настоящего Соглашения без каких-либо изъятий и/или ограничений.
														<br>
														1.6. Каждая Сторона гарантирует другой Стороне, что обладает необходимой право- и дееспособностью, а равно всеми правами и полномочиями, необходимыми и достаточными для заключения и исполнения Соглашения в соответствии с его условиями.
													</p>
													<p>
														<strong>2.ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ:</strong>
														<br>
														2.1. Сайт- совокупность размещенных в сети Интернет веб-страниц, объединенных единой темой, дизайном и единым адресным пространством домена <a href="http://ystroi.ru">http://ystroi.ru</a>, содержащих информацию на сайте, которая создана, собрана или переработана Администрацией сайта и содержится в информационной системе, обеспечивающей доступность такой информации в сети Интернет по сетевому адресу <a href="http://ystroi.ru">http://ystroi.ru</a>. 
														<br>
														2.2. Ресурс <a href="http://ystroi.com">http://ystroi.com</a> – совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному адресу (URL): <a href="http://ystroi.com">http://ystroi.com</a>.
														<br>
														2.3.Администрация Сайта (Администрация) – уполномоченные лица компании ООО «Успех-Строй», которой принадлежат все имущественные права на Сайт и на доменное имя Сайта (Ресурс). Администрация управляет работой Сайта, устанавливает порядок использования Сайта и контролирует выполнение настоящего Соглашения и правил, а также совершающий иные действия, связанных с использованием данного Ресурса.
														<br>
														2.4. Пользовательское соглашение – текст, опубликованный в сети Интернет по адресу: <a href="http://ystroi.com/terms">http://ystroi.com/terms</a>   предоставляющий Пользователям право на пользование Информацией на ресурсе <a href="http://ystroi.com">http://ystroi.com</a>. 
														<br>
														2.3. Оферта – формальное предложение некоторого лица (оферента) определенному лицу (акцептанту), ограниченному или неограниченному кругу лиц заключить сделку (договор) с указанием всех необходимых для этого условий.
														<br>
														2.4. Пользователь ресурса – любое лицо, принявшее условия настоящего Соглашения и осуществляющее доступ к ресурсу посредством сети Интернет.
														<br>
														2.5. Сервис «Онлайн-эскиз планирования» - совокупность программных ресурсов и средств разработчика, владельца ресурса <a href="http://ystroi.com">http://ystroi.com</a>, а так же третьих лиц (Лицензиат ПО), предоставляемый пользователю на пробный период в качестве онлайн-консультации в течении 1 часа (60 минут) с момента установки связи посредством Подключение по ID, либо по Прямому подключению по IP, между персональным компьютером пользователя и владельцем ресурса. Связь (удаленный доступ к компьютеру пользователя) осуществляется посредством программных средств, принадлежащих ООО «Амми» - бесплатная программа удаленного доступа к компьютеру, безвозмездно, на основании Лицензионного соглашения разработчика ПО, ООО «Амми». Использование сервиса «Онлайн-эскиз планирования», свыше 1 часа (60минут) возможно только по обоюдной договоренности сторон, посредством заключения соглашения сторонами.
														<br>
														2.6. Информация – любые сведения, любой контент, размещенные на Ресурсе <a href="http://ystroi.com">http://ystroi.com</a>.
														<br>
													</p>
													<p>
														<strong>3.УСЛОВИЯ СОГЛАШЕНИЯ:</strong>
														<br>
														3.1 Пользователь полным и безоговорочным согласием выражает своё согласие заключить Договор (далее – Акцептом) предметов которого является получение доступа к информационному контенту, посредством заполнения заявки на «Онлайн-эскиз планирование» и нажатием кнопки «Отправить», а также получения и использования персональной пользовательской ссылки для скачивания Приложений/другого контента с ресурса <a href="http://www.ammyy.com">http://www.ammyy.com</a>, на сайте ресурса: <a href="http://ystroi.com">http://ystroi.com</a>.
														<br>
														3.2. Акцепт Договора означает, что Пользователь согласен со всеми положениями настоящего предложения, и равносилен заключению Договора и приложений к нему.
														<br>
														3.3. Пользователь согласен с тем, что Администрацией ресурса возможно использование и обработка контактных данные Пользователя.
														<br>
														3.4. Заполнив форму заявки «Онлайн-эскиз планировки» для отправки технического задания пользователя, нажатие кнопки «Отправить», а также получения ссылки на скачивание информационного контента компании ООО «Амми», Подписчик безусловно соглашается соблюдать:
												<ul>
														<li>условия использования текст, опубликованный в сети Интернет по адресу: <a href="http://www.ammyy.com/ru/terms_cond.html">http://www.ammyy.com/ru/terms_cond.html;</a> </li> 
														<li>пользовательское соглашение текст, опубликованный в сети Интернет по адресу: <a href="http://www.ammyy.com/ru/admin_eula.html">http://www.ammyy.com/ru/admin_eula.html</a>.</li>
												</ul>
														<br>
														3.5. Если по тем или иным причинам одна или несколько норм настоящего Соглашения являются недействительной или не имеющими юридической силы, это не оказывает влияния на действительность или применимость остальных норм.
														<br>
														3.6. Соглашаясь с условиями данного Соглашения, Пользователь (или представитель Пользователя, в т.ч. физическое лицо, должным образом уполномоченное заключить Договор от лица Пользователя) подтверждает и гарантирует Администрации <a href="http://ystroi.com">http://ystroi.com</a>, что:
														<br>
														3.7. Пользователь укажет достоверную информацию о себе, в том числе при заполнении заявки «Онлайн-эскиз планировки».
														<br>
														Пользователь:
														<ul>
															<li>полностью ознакомился с условиями Соглашения-оферты;</li>
															<li>полностью понимает предмет Соглашения-оферты;</li>
															<li>полностью понимает значение и последствия своих действий в отношении заключения и исполнения настоящего Соглашения.</li>
														</ul>
														<br>
														3.8. Соглашение-оферта вступает в силу с момента согласия Пользователя с условиями настоящего Договора (в момент получения доступа к информационному контенту), срок действия которого не ограничен данным Соглашением-офертой.
													</p>
													<p>
														<strong>4. ОГРАНИЧЕНИЕ ОТВЕТСТВЕННОСТИ</strong>
														<br>
														4.1. Сервис - «Онлайн-эскиз планировки» предоставляется ресурсом для использования на условиях «как есть» без каких-либо гарантий, явно выраженных или подразумеваемых, включая, но не ограничиваясь, коммерческой пригодностью и пригодностью для определенных целей. Лицо, использующее сервис (Пользователь), несет все риски относительно качества, достоверности информации, геометрических размеров, объемов материалов, эксплуатационных характеристик Сервиса переданных Администрации сайта при работе с сайтом.
														<br>
														4.2. Ни компания ООО «Успех-Строй» (Администрация сайта), ни ее сотрудники, лицензиаты ПО, не несут какой-либо ответственности за ущерб, причиненный ресурсом, сайтом, программой, включая, но не ограничиваясь, косвенным, случайным или особым ущербом, ущербом в результате упущенной прибыли, упущенного дохода, утраченной информации, понесенным пользователем или любой третьей стороной, даже в том случае, если разработчик ресурса /программы предупреждал о возможности наступления такого ущерба.
														<br>
														4.3. Администрация Сайта вправе в любое время в одностороннем порядке изменить условия настоящего Соглашения. Изменения вступают в силу через 1 день после размещения последней версии Соглашения на Сайте. Пользователь принимает на себя обязательство ежедневно изучать настоящее Соглашение.
														<br>
														4.4. Принимая условия данного соглашения, пользователь соглашается с тем, что он внимательно прочитал соглашение, понял его и соглашается на выполнение условий данного соглашения.
													</p>
													<p>
														<strong>5. КОНФИДЕНЦИАЛЬНОСТЬ и ВАШИ ПЕРСОНАЛЬНЫЕ ДАННЫЕ.</strong>
														<br>
														5.1. Администрация сайта Ystroi.com (ru) ценит доверие, оказываемое Пользователями, и осознает ответственность за обеспечение конфиденциальности предоставляемых Ystroi.com (ru) Пользователями сведений, в том числе персональных данных.
														<br>		
														5.2. Вы соглашаетесь с использованием ваших данных в соответствии с условиями, предусмотренными Положением о персональных данных и конфиденциальности.
														<br>
														5.3. Вы соглашаетесь с тем, что ООО «Успех-Строй» вправе передавать ваши персональные данные третьим лицам, в частности, Подрядчикам, курьерским службам и контрагентам ООО «Успех-Строй» исключительно в целях (1) выполнения ваших заказов, оформленных на сайте <a href="http://ystroi.com">Ystroi.com (ru)</a>, в том числе, в целях проведения консультаций, и (2) отправления рекламно-информационных и иных сообщений Вам.
													</p>

													<strong>С уважением, <br />
												Администрация сайта <a href="http://ystroi.com">http://ystroi.com</a>.</strong>

													<div class="universal_button_wrapper--two">
													<a class="universal_button universal_button--green universal_button--green-inner" href="">Назад</a>
													<a id="free_offer_agree-button" class="universal_button universal_button--red universal_button--red-inner" >Принять</a>
													</div>
												</article>
                                    </div>
                                </div>
                            </div>
                            <div id="free-offer-agree-indicator" class="form__checker required_unfilled">
                                <input id="free-offer-real-agree-indicator" class="form__checker-indicator--real" type="checkbox" required>
                            </div>
                        </div>
                        <div class="universal_line__wrapper">
                            <a id="how-it-works" class="universal_button universal_button--green" href="#video">Как это работает </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>
    
    <div id="video" class="shadow-wrapper--light background-wrapper--2">
        <div class="page__universal-wrapper">
            <div class="title-wrapper">
                <h2>Как это работает?</h2>
                <h3>Узнайте все о нашей компании</h3>
            </div>
            <div class="page__universal-two_big_cols--wrapper clearfix video_section">
                <div class="layout__big_col_half">
                    <h3 class="title--black title--padding">О нас</h3>
                    <video 
                        id="first-video"
                        class="main-video"
                        src="<?= get_template_directory_uri() ?>/video/1.mp4" 
                        poster="http://ystroi.com/wp-content/uploads/2015/07/uvid2.jpg" 
                    ></video>
                    
                    <div class="manage-video">
                        <a class="video-button paused" data-action="play/pause" data-video-id="first-video" href="#"></a>
                        <progress data-video-id="first-video" min="0" max="100" value="0"></progress>
                        <a class="video-button fullscreen" data-action="fullscreen" data-video-id="first-video" href="#"></a>
                    </div>
                </div>
                
                <div class="layout__big_col_half layout__big_col_half--second">
                    <h3 class="title--black title--padding">Эскиз планировки онлайн</h3>
                    <video 
                        id="second-video"
                        class="main-video"
                        src="<?= get_template_directory_uri() ?>/video/1.mp4" 
                        poster="http://ystroi.com/wp-content/uploads/2015/07/uvid2.jpg" 
                    ></video>
                    
                    <div class="manage-video">
                        <a class="video-button paused" data-action="play/pause" data-video-id="second-video" href="#"></a>
                        <progress  data-video-id="second-video" min="0" max="100" value="0"></progress>
                        <a class="video-button fullscreen" data-action="fullscreen" data-video-id="second-video" href="#"></a>
                    </div>
                </div>
                
                <!-- Modal box for custom fullscreen-->
                <div style="display: none;">
                    <div class="box-modal fullscreen">
                        <div class="fullscreen-close box-modal_close arcticmodal-close popup_cell">
                            <img alt="Close" src="<?= get_template_directory_uri(); ?>/images/close.png">
                        </div>
                        <div class="video"></div>
                    </div>
                </div>
            </div>
            <div class="main_menu-wrapper">
                <div class="main_menu-wrapper--inner">
                    <?php wp_nav_menu(['theme_location'=>"main-menu"]); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div id="calc_online--anchor" class="background-wrapper--3">
        <div class="page__universal-wrapper">
            <div class="page__universal-two_big_cols--wrapper clearfix">
                <div class="layout__big_col_half">
                    <div class="wrapper_inner-colored--green wrapper_inner-colored">
                        <h1 class="title--white">Что будет после расчета на калькуляторе?</h1>
                    </div>
                    <div class="content_block--wrapper content_block--wrapper--small">
                        <div class="universal_icon universal_icon--hands"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                            <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                        </div>
                    </div>
                    <div class="content_block--wrapper content_block--wrapper--small">
                        <div class="universal_icon universal_icon--email"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                            <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                        </div>
                    </div>
                    <div class="content_block--wrapper content_block--wrapper--small">
                        <div class="universal_icon universal_icon--form"> </div>
                        <div class="content__wrapper">
                            <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                            <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                        </div>
                    </div>
                </div>
                <div class="layout__big_col_half layout__big_col_half--second">
                    <div class="grey_wrapper__inner wrapper_inner-colored">
                        <h1 class="title--black title--padding">Онлайн-калькулятор</h1>
                        <p>Не любите ждать и хотите рассчитать самостоятельно?</p>
                        <img class="icon_inner" src="<?= get_template_directory_uri(); ?>/images/icons4.png">
                        <a class="universal_button universal_button--green" href="#calculate_rep">Рассчитать </a>
                        <a class="universal_button universal_button--red" href="<?= get_permalink(get_page_by_path("prices")) ?>">Услуги и цены </a>
                        <p>Минимальная предварительная <br /> сумма заказа на ремонт 180 000 рублей.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="page__universal-wrapper article-wrapper">
        <h1 id="calculate_rep" class="title-main_page">Расчет стоимости ремонта</h1>
        <p>
            *Расчет стоимости (сметы, калькуляции) ремонта квартиры процесс не из простых, но у вас есть возможность предварительно получить ориентировочную стоимость исходя из общей площади ваших помещений.
        </p>
        <p>
            Обратите внимание, стоимость черновых и отделочных материалов рассчитывается отдельно. Вы можете приобрести все стройматериалы, необходимые для ремонта помещения, самостоятельно, а может доверить выбор и закупку целиком и полностью нашей компании, тем самым экономя своё время и средства.
        </p>
        <hr />
        <p>
            *Расчеты стоимости ремонта производиться на основании типовых планировок и наборов работ, т.е. укрупненно.
        </p>
        <p>
            *Цены, указанные на сайте, являются ориентировочными для Заказчика.
        </p>
        <p>
            *Расчет сметной стоимости ремонта по каждому конкретному Объекту производится до подписания договора подряда.
        </p>
        
        <?php if (class_exists("\\RepairCalculator\\Libs\\Manage")) { ?>
            <h2 class="title-main_page">Калькулятор укрупненного расчета стоимости ремонта</h2>
            <?php \RepairCalculator\Libs\Manage::showForm() ?>
        <?php } ?>

    </div>
    <div class="colored-wrapper colored-wrapper--grey colored-line">
        <div class="page__universal-wrapper">
            <h3 class="title--white">Возникли сложности? <br />
            Позвоните нам по телефону +7 (000) 000-00-00 мы поможем рассчитать ваш ремонт
            </h3>
            
        </div>
    </div>
    
    <div id="calc_main--anchor" class="shadow-wrapper--light background-wrapper--4">
        <div class="page__universal-wrapper">
            <div class="page__universal-two_big_cols--wrapper clearfix">
                <form id="form_main-free">
                    <div class="layout__big_col_half">
                        <div class="wrapper_inner-colored wrapper_inner-colored--white">
                            <h1 class="title--black">Бесплатный расчет с экспертом</h1>
                            <p class="title--padding">Профессиональный расчет вашего ремонта</p>
                        </div>
                        <div class="wrapper_inner-colored wrapper_inner-colored--white">
                            <div class="universal_line__wrapper universal_line__wrapper--one-col">
                                <textarea name="main-free[message]" placeholder="Краткое описание того, что вы хотите сделать" required=""></textarea>
                            </div>

                            <div class="universal_row__wrapper clearfix">
                                <div class="universal_cell__wrapper">
                                    <input type="text" title="Ваше имя " value="" placeholder="Как вас зовут?" name="main-free[name]" required>
                                </div>
                                <div class="universal_cell__wrapper second_cell__wrapper">
                                    <input type="tel" title="Ваш телефон" value="" placeholder="Ваш телефон" name="main-free[phone]" required>
                                </div>
                            </div>
                            <div class="universal_line__wrapper universal_line__wrapper--one-col">
                                <input type="text" title="Промокод" value="" placeholder="Есть промокод? Введите его!" name="main-free[promo]">
                            </div>

                            <div class="universal_line__wrapper">
                                <input class="form_submit__button" type="submit" value="Отправить" name="submit">
                            </div>
                        </div>
                    </div>
                    <div class="layout__big_col_half layout__big_col_half--second">
                        <div class="wrapper_inner-colored--green wrapper_inner-colored">
                            <h1 class="title--white">Произойдет после отправки вашей заявки?</h1>
                        </div>

                        <div class="content_block--wrapper content_block--wrapper--small">
                            <div class="universal_icon universal_icon--clock"> </div>
                            <div class="content__wrapper">
                                <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                                <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                            </div>
                        </div>
                        <div class="content_block--wrapper content_block--wrapper--small">
                            <div class="universal_icon universal_icon--roulette"> </div>
                            <div class="content__wrapper">
                                <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                                <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                            </div>
                        </div>
                        <div class="content_block--wrapper content_block--wrapper--small">
                            <div class="universal_icon universal_icon--form-checked"> </div>
                            <div class="content__wrapper">
                                <h1 class="content_title--small"> Фиксированная стоимость работ указана в договоре </h1>
                                <p> Мы дополнительно страхуем Ваш ремонт от форс -мажорных обстоятельств. </p>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <div class="shadow-wrapper--light background-wrapper--5">
        <div class="page__universal-wrapper">
            <h1 class="title-main_page">Примеры работ</h1>
            <h2 class="title-main_page title-main_page--small">Расчет стоимости ремонта профессиональным сметчиком</h2>
            <div class="gallery_line--wrapper clearfix">
                <a class="gallery--item" href="">
                    <img src="http://ystroi.com/images/popup/8558295633_f34a55c1c6_s.jpg" />
                </a>
                <a class="gallery--item" href="">
                    <img src="http://ystroi.com/images/popup/8558295633_f34a55c1c6_s.jpg" />
                </a>
                <a class="gallery--item" href="">
                    <img src="http://ystroi.com/images/popup/8558295633_f34a55c1c6_s.jpg" />
                </a>
            </div>
            <div class="slider-wrapper">
                <div class="slider-wrapper--inner">
                    <div id="slider_main"></div>
                </div>
                    <script>
                        (function($){ $(function() {
                         $('#slider_main').Carousel([
                                 "http://ystroi.com/images/popup/8563475581_df05e9906d_b.jpg",
                                 "http://ystroi.com/images/popup/8563475581_df05e9906d_b.jpg",                  
                                 "http://ystroi.com/images/popup/8563475581_df05e9906d_b.jpg",
                                 "http://ystroi.com/images/popup/8563475581_df05e9906d_b.jpg",
                                 "http://ystroi.com/images/popup/8558295633_f34a55c1c6_b.jpg",
                                 "http://ystroi.com/images/popup/8559402848_9fcd90d20b_b.jpg"
                         ], undefined, "fast");
                        }); })(jQuery);
                    </script>
            </div>
            
            <!-- Modal box for gallery -->
            <div style="display: none;">
                <div id="gallery-modal" class="box-modal">
                    <div class="box-modal_close arcticmodal-close popup_cell">
                        <img alt="Close" src="<?= get_template_directory_uri(); ?>/images/close.png">
                    </div>
                    <div class="image"></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="page_img-wrapper">
        <div class="page__universal-wrapper">
            <div class="wrapper-padding--bottom">
                <h2 class="title-main_page">У вас остались вопросы? Напишите нам.</h1>
                <a class="universal-button red universal-button--small">
                    <div class="universal-button__wrapper--inner"> Обратная связь </div>
                </a>
            </div>
            <h1 class="title-main_page">Заказать обратный звонок</h1>
            <h2 class="title-main_page" style="width:80%;">Оставьте свои данные, мы с вами обязательно свяжемся <br /> Вы можете позвонить нам по телефону +7(000)000-00-00</h1>
            <div class="page__universal-two_big_cols--wrapper clearfix">
                <form id="callback_form">
                    <div class="universal_line__wrapper universal_line__wrapper--three-cols clearfix">
                        <div class="universal_cell__wrapper universal_cell__wrapper--first">
                            <input type="text" name="callback_form[name]" placeholder="Как вас зовут?" value="" title="Ваше имя " required="">
                        </div>
                        <div class="universal_cell__wrapper universal_cell__wrapper--second">
                            <input type="tel" name="callback_form[phone]" placeholder="Ваш телефон" value="" title="Ваш телефон" required="">
                        </div>
                        <div class="universal_cell__wrapper">
                            <input class="form_submit__button form_submit__button--green" type="submit" name="submit" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
            <div class="main_menu-wrapper">
                <div class="main_menu-wrapper--inner main_menu-wrapper--footer">
                    <?php wp_nav_menu(['theme_location'=>"footer_menu"]); ?>
                </div>
            </div>
        </div>
    </div>    
</section>
