<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
</head>
<body>
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/aside.tpt.php"); ?>
<main class="col-md markdown-body">

<h2 id="1">1. Общая характеристика</h2>
<p>&#8226; <b>Событие в ООП </b>– это то, что может случится с каким-либо объектом при определенных условиях (например, с кнопкой формы при клике на неё мышкой). При взаимодействовии других объектов с этим событием (клик мыши), данный объект будет знать, что клик мыши произошел. Объект также может не взаимодействовать с событием, если не хочет на него реагировать.</p>
<p>&#8226;При выполнении события вызывается обработчик подписанного на это событие объекта и у обработчика появляется возможность выполнить некоторый код, то есть отреагировать на событие. </p>
<p>&#8226; Таким образом, объектно-ориентированная программа – это программа, управляемая событиями. События сами по себе не производят никаких действий в программе, но в ответ на событие могут создаваться новые объекты, модифицироваться или уничтожаться существующие, что и приводит к изменению состояния программы. Иными словами, все действия по обработке данных реализуются объектами, а события лишь управляют их работой. </p>
<p>&#8226; Пример программы, управляемой событиями, на алгоритмическом языке С++ </p>

<pre class="highlight"><code data-language="c">
struct Event {

int what; //тип события

union

{

MouseEventType mouse;

KeyDownEvent keyDown;

MessageEvent message;

}

}; 
</code></pre>

<p>&#8226; На данном примере, объект <span class="lead">Event</span> состоит из двух частей. Первая <span class="lead">(what)</span> задает тип события, определяющий источник данного события. Вторая задает информацию, передаваемую событием. Для разных типов событий содержание информации различно. Поле <span class="lead">what</span> может принимать два значения:  </p>
<ol>
    <li><span class="lead">evNothing – это пустое событие</span>, которое означает, что ничего делать не требуется. EvNothing присваивается полю what, когда событие обработано каким-либо объектом;</li>
    <li><span class="lead">evMouse – событие от мыши.</span></li>

<p>&#8226;Пример структуры события от мыши на алгоритмическом языке С++</p>
<pre class="highlight"><code data-language="c">
struct MouseEventType

{

int buttons;

int doubleClick;

Tpoint where;

};
</code></pre>
<p>&#8226; где 

<ul>
    <li><b>buttons</b> указывает нажатую клавишу;</li>
    <li><b>doubleClick</b> указывает был ли двойной щелчок;</li>
     <li><b>where</b> указывает координаты мыши;</li>
</ul>

</p>
</ol><ol start = "3">
<!-- упорядоченный список -->
    <li><span class="lead">evKeyDown – событие от клавиатуры. </span></li>
    <p>&#8226;Пример структуры события от клавиатуры на алгоритмическом языке С++ </p>
    <pre class="highlight"><code data-language="c">
    struct KeyDownEvent

{

union

{

int keyCode;

union

{

char charCode;

char scanCode;

} ;

};

};
</code></pre>
<li><span class="lead">evMessage – событие - сообщение от объекта.</span></li>
<p>&#8226; Для события от объекта задают два параметра: </p>
<ol>
    <li>command – код команды, которую необходимо выполнить при появлении данного события;</li>
    <li>infoPtr – передоваемая с событием информация</li>
</ol>
<p>&#8226; Пример структуры события - сообщения от объекта на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">
struct MessageEvent

{

int command;

void *infoPtr;

} ;
</code></pre>
</ol>

<h2 id="2">2. Методы обработки событий</h2>
<p>&#8226; Для организации обработки событий необходимы следующие методы: </p>
<ol>
    <li><span class="lead">GetEvent – формирование события; </span></li>
    <li><span class="lead">Execute – реализация главного цикла обработки событий.</span> Данный метод постоянно получает событие путем вызова GetEvent и обрабатывает их с помощью HandleEvent. Этот цикл завершается, когда поступит событие «конец». </li>
    <p>&#8226; Пример структуры цикла обработки событий на алгоритмическом языке С++ </p>
    <pre class="highlight"><code data-language="c">
            int MyApp::Execute(void){

        do {

        endState = 0;

        GeEvent(event);//получаем событие

        HandleEvent(event);//обрабатываем событие вызовом HandleEvent

        if(event.what != evNothing)//если событие осталось необработанным

        EventError(event);

        }

        while(!Valid());

        endState;

        } 
        </code></pre>
        <li> <span class="lead">HandleEvent – обработчик событий.</span> Обрабатывает каждое сообщение нужным для этого сообщения образом.</li>
        <p>&#8226; Пример работы обработчика для класса DerivedClass на алгоритмическом языке С++  </p>
    <pre class="highlight"><code data-language="c">
    void DerivedClass::HandleEvent(Event &ampevent) {

        BaseClass::handleEvent(event);//Вызвали обработчик событий базового класса

        if(event.what==evCommand)//Если обработчик событий событие не обработал

        {

        switch(event.message.command)

        {//Обработка команд cmCommand1, cmCommand2, cmCommandN

        case cmCommand1:

        ClearEvent(event);

        break;

        case cmCommand2:

        ClearEvent(event);

        break;

        /*…….. */

        case cmCommandN:

        ClearEvent(event);

        break;

        default:

        //событие не обработано

        break;
        }
     }
    };
        </code></pre>
        <li> <span class="lead">ClearEvent – очистка события </span>, когда это событие уже обработано, чтобы избежать повторной обработки.</li>
</ol>

<h2 id="3">Список литературы</h2>

<ol>
    <li>Прасид Пай, Питер Абрахам . Событийно-ориентированная модель программирования, 2018. – 18 стр.</li>
    <li>Программы, управляемые событиями.[Электронный ресурс], 2019. URL:<a href="https://ravesli.com/wp-content/uploads/2019/07/probnik_uroki_cpp_ravesli.pdf"> https://ravesli.com/wp-content/uploads/2019/07/probnik_uroki_cpp_ravesli.pdf </a>(дата обращения 03.04.2020) </li>
</ol>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>