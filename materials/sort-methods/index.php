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
<h2 id="1">1. Анализ сложности алгоритмов</h2>
<p class="">&#8226; С увеличения размера входных данных обычно растет и сложность алгоритма, а следовательно, и время его выполнения. Сложность алгоритма принято называть порядком роста, который чаще всего представляется в виде нотации O-большое (от немецкого <code class="highlight">«Ordnung»</code> — порядок). </p>
<p class="">&#8226; Нотация <b>О - большое</b> – это всего лишь математический признак, который дает представление о ресурсах, потребляемых алгоритмом. Практически результаты могут быть разными. Но, как правило, это хорошая практика – пытаться снизить сложность алгоритмов.</p>
<h3>1.1	Константный — O(1)</h3>
<p class="">&#8226; Порядок роста O(1) означает, что вычислительная сложность алгоритма не зависит от размера входных данных. Следует помнить, однако, что единица в формуле не значит, что алгоритм выполняется за одну операцию или требует очень мало времени. Важно то, что это время не зависит от входных данных. </p>
<h3>1.2	Линейный — O(n)</h3>
<p class="">&#8226; Порядок роста O(n) означает, что сложность алгоритма линейно растет с увеличением входного массива данных. Если алгоритм обрабатывает один элемент пять миллисекунд, то можно ожидать, что тысяча элементов обрабатываются за пять секунд. Такие алгоритмы легко узнать по наличию цикла по каждому элементу входного массива. </p>
<p class="">&#8226; Фрагмент алгоритма вычисления сложности О(n) на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">long GetSum(int items[])
{
    long sum = 0;
    for (int i = 0; i &#60; items.Length; i++)
    {
        sum += i;
    }   

return sum;
}</code></pre>
<h3>1.3	Логарифмический – O( log n)</h3>
<p class="">&#8226; Порядок роста O( log n) означает, что время выполнения алгоритма растет логарифмически с увеличением размера входного массива данных, при этом в анализе алгоритмов по умолчанию используется логарифм по основанию 2. Большинство алгоритмов, работающих по принципу «деления пополам», имеют логарифмическую сложность. Например, метод Contains - бинарного дерева поиска (binary search tree) также имеет порядок роста O(log n). </p>
<h3>1.4	Линеарифметический — O(n · log n))</h3>
<p class="">&#8226; Линеарифметический (или линейно-логарифмический) алгоритм имеет порядок роста O(n ∙ log n). Некоторые алгоритмы, типа «разделяй и властвуй», например, сортировка слиянием и быстрая сортировка, попадают в эту категорию. </p>
<h3>1.5	Квадратичный — O(n<sup>2</sup>)</h3>
<p class="">&#8226; Время работы алгоритма с порядком роста O(n<sup>2</sup>) зависит от квадрата размера входного массива. Несмотря на то, что такой ситуации иногда не избежать, квадратичная сложность — повод пересмотреть используемые алгоритмы или структуры данных. </p>
<p class="">&#8226; Например, если массив из тысячи элементов потребует 1 000 000 операций, массив из миллиона элементов потребует 1 000 000 000 000 операций. Если одна операция требует миллисекунду для выполнения, то квадратичный алгоритм будет обрабатывать миллион элементов 32 года. </p>
<p class="">&#8226; Таким образом, при измерении сложности алгоритмов учитываются: количество операций, требуемых для завершения работы - вычислительная сложность, и объем ресурсов, в частности, памяти, который необходим алгоритму - пространственная сложность. </p>
<p class="">&#8226; Алгоритм, который выполняется в десять раз быстрее, но использует в десять раз больше памяти, может вполне подходить для серверной машины с большим объемом памяти. Но на встроенных системах, где количество памяти ограничено, такой алгоритм использовать нельзя [2].</p>

<h2 id="2">2. Методы сортировки</h2>
<p class="">&#8226; Массивы часто используются для хранения и быстрого поиска данных. Но чтобы затрачивать на поиск наименьшее время, необходимо, чтобы массив был отсортирован. </p>
<h3>2.1 Сортировка слиянием</h3>
<table>
    <thead>
        <tr>
            <th>Сложность</td>
            <th>Наилучший случай</td>
            <th>В среднем</td>
            <th>Наихудший случай</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Время</td>
            <td>O(n·log&thinsp;n)</td>
            <td>O(n·log&thinsp;n)</td>
            <td>O(n·log&thinsp;n)</td>
        </tr>
        <tr>
            <td>Память</td>
            <td>O(n)</td>
            <td>O(n)</td>
            <td>O(n)</td>
        </tr>
    </tbody>
</table>
<p class="">&#8226; Алгоритмы этого типа работают, разделяя крупную задачу на более мелкие, решаемые проще. Так, поиск фамилии в телефонной книге — один из примеров такого алгоритма. </p>
<p class="">&#8226; Предположим, что в телефонной книге 1000 страниц. Если открывать ее на середине, отбрасывается 500 страниц, в которых нет искомого человека. Если не попали на нужную страницу, выбирается правая или левая сторона телефонной книги, и снова остается половина доступных вариантов. Теперь необходимо просмотреть 250 страниц. Таким образом, задача делится пополам снова и снова, до тех пор, пока не найден нужный человек. В этом случае телефон искомого человека в книге найден всего за 10 просмотров. Это составляет 1% от всего количества страниц, которые пришлось бы просмотреть при линейном поиске. </p>
<p class="">&#8226; При сортировке слиянием, массив разделяется пополам до тех пор, пока каждый участок не станет длиной в один элемент. Затем эти участки возвращаются на место (сливаются) в правильном порядке. Алгоритм сортировки слиянием представлен на рисунке 1.</p>
<img src="<?php echo $folder_name ?>img/1arr.jpg" alt="Рисунок 1">
<img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 2">
<p style="text-align: center;">Рисунок 1 - Алгоритм сортировки слиянием</p>
<p class="">&#8226; В итоге работы алгоритма, исходный массив данных преобразуется в отсортированный, путем сравнивания разделенных элементов между собой. </p>
<p class="">&#8226; Для работы алгоритма следует реализовать следующие операции: </p>
<ul>
    <li>Операцию для рекурсивного разделения массива на группы (метод Sort);</li>
    <li>Слияние в правильном порядке (метод Merge);</li>
</ul>
<p class="">&#8226; Стоит отметить, что в отличие от линейных алгоритмов сортировки, сортировка слиянием будет делить и склеивать массив вне зависимости от того, был он отсортирован изначально или нет. Поэтому, несмотря на то, что в худшем случае алгоритм отработает быстрее, чем линейный, в лучшем случае, производительность алгоритма будет ниже, чем у линейного. Поэтому сортировка слиянием — не самое лучшее решение, когда необходимо отсортировать частично упорядоченный массив. </p>
<p class="">&#8226; Недостатки метода заключаются в том, что требуется дополнительная память по объему, равной объему сортируемого файла. Поэтому для больших файлов проблематично организовать сортировку слиянием в оперативной памяти. </p>
<p class="">&#8226; В случаях, когда гарантированное время сортировки важно и размещение в оперативной памяти возможно, то следует предпочесть метод сортировки слиянием. </p>
<p class="">&#8226; Фрагмент алгоритма сортировки Слиянием (Merge Sort) на алгоритмическом языке С++</p>
<pre class="highlight"><code data-language="c">void merge(int *a, int n)
{
    int mid = n / 2; // находим середину сортируемой последовательности
    if (n % 2 == 1)
    mid++;
    int h = 1; // шаг
    // выделяем память под формируемую последовательность
    int c = (int)malloc(n * sizeof(int));
    int step;
    while (h &#60; n) 
    {
    step = h;
    int i = 0;   // индекс первого пути
    int j = mid; // индекс второго пути
    int k = 0;   // индекс элемента в результирующей последовательности
    while (step <= mid) 
    {
        while ((i &#60; step) && (j &#60; n) && (j &#60; (mid + step))) 
        { // пока не дошли до конца пути
        // заполняем следующий элемент формируемой последовательности
        // меньшим из двух просматриваемых
        if (a[i] &#60; a[j])
        {
            c[k] = a[i];
            i++; k++;
        }
        else {
            c[k] = a[j];
            j++; k++;
        }
        }
        while (i &#60; step) 
        { // переписываем оставшиеся элементы первого пути (если второй кончился раньше)
        c[k] = a[i];
        i++; k++;
        }
        while ((j < (mid + step)) && (j &#60; n))
        {  // переписываем оставшиеся элементы второго пути (если первый кончился раньше)
        c[k] = a[j];
        j++; k++;
        }
        step = step + h; // переходим к следующему этапу
    }
    h = h * 2;
    // Переносим упорядоченную последовательность (промежуточный вариант) в исходный массив
    for (i = 0; i &#60; n; i++)
        a[i] = c[i];
    }
}</code></pre>
<h3>2.2 Быстрая сортировка</h3>
<table>
    <thead>
        <tr>
            <th>Сложность</th>
            <th>Наилучший случай</th>
            <th>В среднем</th>
            <th>Наихудший случай</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Время</td>
            <td>O(n·log&thinsp;n)</td>
            <td>O(n·log&thinsp;n)</td>
            <td>O(n<sup>2</sup>)</td>
        </tr>
        <tr>
            <td>Память</td>
            <td>O(n)</td>
            <td>O(n)</td>
            <td>O(n)</td>
        </tr>
    </tbody>
</table>
<p class="">&#8226; Быстрая сортировка — это еще один алгоритм типа «разделяй и властвуй». Который работает, рекурсивно повторяя следующие шаги: </p>
<ol>
    <li>Выбрать ключевой индекс и разделить по нему массив на две части. Это можно реализовать разными способами;</li>
    <li>Переместить все элементы больше ключевого в правую часть массива, а все элементы меньше ключевого — в левую. Таким образом, ключевой элемент находится в правильной позиции — ключевой элемент больше любого элемента слева и меньше любого элемента справа; </li>
    <li>Первые два шага повторяются, пока массив не будет полностью отсортирован;</li>
</ol>
<p class="">&#8226; В начале, случайным образом выбирается ключевой элемент, на рисунке 2 случайным числом является элемент с индексом 4 (нумерация индексов начинается с 0).</p>
<img src="<?php echo $folder_name ?>img/data_structures_053.webp" alt="Рисунок 2">
<p style="text-align: center;">Рисунок 2 - Алгоритм быстрой сортировки</p>
<p class="">&#8226; Из ключевого индекса берется значение, находящееся по этому индексу, равное  6, которое  переносится в массиве так, чтобы все числа больше или равные этому значению были в правой части, а все числа меньше — в левой. Следует обратить внимание, что в процессе переноса значений индекс ключевого элемента может измениться. Перемещение значений осуществляется методом <code class="highlight">partition</code>.</p>
<img src="<?php echo $folder_name ?>img/data_structures_054.jpg" alt="Рисунок 3">
<p style="text-align: center;">Рисунок 3 - Алгоритм быстрой сортировки</p>
<p class="">&#8226; На рисунке 4 видно, что значение 6 находится на правильной позиции. Затем тот же процесс повторяется для правой и левой частей массива. 
Таким образом, рекурсивно вызывается метод <code class="highlight">quicksort</code> для каждой из частей. Ключевым элементом в левой части становится элемент с индексом 1, как показано на рисунке 4. При перемещении значений индекс будет изменен. Главное — помнить, что важно именно ключевое значение, а не его индекс.
</p>
<img src="<?php echo $folder_name ?>img/data_structures_055.webp" alt="Рисунок 4">
<p style="text-align: center;">Рисунок 4 - Алгоритм быстрой сортировки</p>
<p class="">&#8226; Используя алгоритм быстрой сортировки (рисунок 5), получаем следующий массив данных: </p>
<img src="<?php echo $folder_name ?>img/data_structures_056.webp" alt="Рисунок 5">
<p style="text-align: center;">Рисунок 5 - Алгоритм быстрой сортировки</p>
<p class="">&#8226; И еще раз:</p>
<img src="<?php echo $folder_name ?>img/data_structures_057.jpg" alt="Рисунок 6">
<p style="text-align: center;">Рисунок 6 - Алгоритм быстрой сортировки</p>
<p class="">&#8226; Таким образом, осталось одно неотсортированное значение, и поскольку, все остальные элементы уже отсортированы, алгоритм завершает работу [3].</p>
<p class="">&#8226; Фрагмент алгоритма Быстрой Сортировки (Quick Sort) на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">void quickSort(int *numbers, int left, int right)
{
    int pivot; // разрешающий элемент
    int l_hold = left; //левая граница
    int r_hold = right; // правая граница
    pivot = numbers[left];
    while (left < right) // пока границы не сомкнутся
    {
    while ((numbers[right] >= pivot) && (left < right))
        right--; // сдвигаем правую границу пока элемент [right] больше [pivot]
    if (left != right) // если границы не сомкнулись
    {
        numbers[left] = numbers[right]; // перемещаем элемент [right] на место разрешающего
        left++; // сдвигаем левую границу вправо
    }
    while ((numbers[left] <= pivot) && (left < right))
        left++; // сдвигаем левую границу пока элемент [left] меньше [pivot]
    if (left != right) // если границы не сомкнулись
    {
        numbers[right] = numbers[left]; // перемещаем элемент [left] на место [right]
        right--; // сдвигаем правую границу вправо
    }
    }
    numbers[left] = pivot; // ставим разрешающий элемент на место
    pivot = left;
    left = l_hold;
    right = r_hold;
    if (left < pivot) // Рекурсивно вызываем сортировку для левой и правой части массива
    quickSort(numbers, left, pivot - 1);
    if (right > pivot)
    quickSort(numbers, pivot + 1, right);

}</code></pre>
<h3>2.3 Сортировка подсчетом</h3>
<p class="">&#8226; Метод удобно использовать в том случае, если сортировать приходится целые числа, лежащие в относительно небольшом диапазоне. Например, необходимо упорядочить 
1 000 000 целых чисел от 0 до 1000. Идея алгоритма состоит в предварительном подсчете количества элементов с различными ключами в исходном массиве и разделении результирующего массива на части соответствующей длины (блоки). Затем при повторном проходе исходного массива каждый его элемент копируется в специально отведенный его ключу блок, в первую свободную ячейку. Таким образом после завершения алгоритма в результирующем массиве содержится исходная последовательность в отсортированном виде, так как блоки расположены по возрастанию соответствующих ключей. 
</p>
<a href="https://docs.google.com/presentation/d/18ZmVyGaXUrMVwtm0iRmTnPIAKcwFPtOy/present?ueb=true&slide=id.p1" title="docs.google.com/" target="_blank">Визуализация сортировки (презентация)</a> 
<p class="">&#8226; Фрагмент алгоритма Сортировки Подсчетом (Counting Sort) на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">void CountingSort(int *a, int *c, int n, int k)
{
    for (int i = 0; i < k; i++) {
        c[i] = 0;
    }
    for (int i = 0; i < n; i++) {
        c[a[i]] = c[a[i]] + 1;
    }
    int i = 0;
    for (int j = 0; j < k; j++) {
        while (c[j] != 0) {
            a[i] = j;
            c[j]--;
            i++;
        }
    }
}</code></pre>
<p class="">&#8226; На практике для тестового массива с 1 000 000 элементов и диапазоном значений от 0 до 1000, быстрая сортировка заняла 4,29 секунд, а сортировка подсчетом — всего 
0,03 секунды. Следует отметить, что для быстрой сортировки выбранный пример оказался не самым лучшим, поскольку среди значений было множество равных друг другу (приблизительно 1000), а данный алгоритм справляется с ними плохо. </p>

<h3>2.4 Блочная сортировка</h3>
<p class="">&#8226; Алгоритм блочной (корзинной) сортировки разделяет элементы массива входных данных на некоторое количество блоков – k, количество блоков зависит от количества исходного множества данных. Далее каждый из таких блоков сортируется либо другой сортировкой, либо рекурсивно тем же методом разбиения. После сортировок внутри каждых блоков данные записываются в исходный массив в порядке разбиения на блоки. </p>
<p class="">&#8226; Фрагмент алгоритма Блочной Сортировки (Bucket Sort) на алгоритмическом языке С++</p>
<pre class="highlight"><code data-language="c">void _newbucketsort(int* l, int* r, int* temp) {
    if (r - l <= 64) {
        insertionsort(l, r);
        return;
    }
    int minz = *l, maxz = *l;
    bool is_sorted = true;
    for (int *i = l + 1; i < r; i++) {
        minz = min(minz, *i);
        maxz = max(maxz, i);
        if (i < (i - 1)) is_sorted = false;
    }
    if (is_sorted) return;
    int diff = maxz - minz + 1;
    int numbuckets;
    if (r - l <= 1e7) numbuckets = 1500;
    else numbuckets = 3000;
    int range = (diff + numbuckets - 1) / numbuckets;
    int cnt = new int[numbuckets + 1];
    for (int i = 0; i <= numbuckets; i++)
        cnt[i] = 0;
    int cur = 0;
    for (int* i = l; i < r; i++) {
        temp[cur++] = i;
        int ind = (i - minz) / range;
        cnt[ind + 1]++;
    }
    int sz = 0;
    for (int i = 1; i <= numbuckets; i++)
        if (cnt[i]) sz++;
    int* run = new int[sz];
    cur = 0;
    for (int i = 1; i <= numbuckets; i++)
        if (cnt[i]) run[cur++] = i - 1;
    for (int i = 1; i <= numbuckets; i++)
        cnt[i] += cnt[i - 1];
    cur = 0;
    for (int *i = l; i < r; i++) {
        int ind = (temp[cur] - minz) / range;
        (l + cnt[ind]) = temp[cur];
        cur++; 
        cnt[ind]++;
    }
    for (int i = 0; i < sz; i++) {
        int r = run[i];
        if (r != 0) _newbucketsort(l + cnt[r - 1], l + cnt[r], temp);
        else _newbucketsort(l, l + cnt[r], temp);
    }
    delete run;
    delete cnt;
}
void newbucketsort(int l, int* r) {
    int *temp = new int[r - l];
    _newbucketsort(l, r, temp);
    delete temp;
}</code></pre>
<h2 id="3">3. Сравнительный анализ времени работы алгоритмов</h3>
<p class="">&#8226; Алгоритмы сортировки, описанные в текущей главе, используют разные методы и обладают различными характеристиками. Сведены в таблицу:</p>

<table>
    <thead>
        <tr>
            <th>Сортировка</th>
            <th>Время работы</th>
            <th>Метод</th>
            <th>Область использования</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Вставкой</td>
            <td>O(n<sup>2</sup>)</td>
            <td>Вставка</td>
            <td>Очень малые массивы</td>
        </tr>
        <tr>
            <td>Выбором</td>
            <td>O(n<sup>2</sup>)</td>
            <td>Выбор</td>
            <td>Очень малые массивы</td>
        </tr>
        <tr>
            <td>Пузырьковая</td>
            <td>O(n<sup>2</sup>)</td>
            <td>Двусторонние прохождения,<br> ограничения рассматриваемых пределов</td>
            <td>Очень малые и частично<br> сортированные массивы</td>
        </tr>
        <tr>
            <td>Пирамидальная</td>
            <td>O(n·log&thinsp;n)</td>
            <td>Кучи, хранение полных<br> деревьев в массиве</td>
            <td>Крупные массивы с неизвестным<br> распределением</td>
        </tr>
        <tr>
            <td>Быстрая</td>
            <td>O(n·log&thinsp;n)<br>O(n<sup>2</sup>)-худший</td>
            <td>«Разделяй и властвуй», перемещение<br> элементов в позицию, рандомизация<br> во избежание худшего случая</td>
            <td>Крупные массивы без большого количества<br> дубликатов, параллельная сортировка</td>
        </tr>
        <tr>
            <td>Слиянием</td>
            <td>O(n·log&thinsp;n)</td>
            <td>«Разделяй и властвуй», объединение,<br> внешняя сортировка</td>
            <td>Крупные массивы с неиз- вестным<br> распределением, большие объемы данных,<br> параллельная сортировка</td>
        </tr>
        <tr>
            <td>Подсчетом</td>
            <td>O(n + m)</td>
            <td>Счет</td>
            <td>Крупные массивы с достаточно<br> единообразным распределением значений</td>
        </tr>
    </tbody>
</table>

<h2  id="4">4. Блок-схемы сортировок</h2>
<div class="block__gallery gallery-block gallery">
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme01.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme01.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme02.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme02.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme03.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme03.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme04.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme04.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme05.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme05.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme06.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme06.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme07.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme07.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme08.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme08.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme09.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme09.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme10.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme10.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme11.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme11.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme12.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme12.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme13.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme13.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme14.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme14.jpg" alt=""></a>
    <a href="<?php echo $folder_name ?>img/block_schemes/block_scheme15.jpg" class="gallery-block__item">
        <img src="<?php echo $folder_name ?>img/block_schemes/block_scheme15.jpg" alt=""></a>
</div>

<h2  id="5">5. Список литературы</h2>
<ol>
    <li>Стивенс Род. Алгоритмы теория и практическое применение, 2016. –126 с.</li>
    <li>Robert Horvick. Алгоритмы сортировки данных. [Электронный ресурс], 2020. URL: <a href="https://tproger.ru/translations/sorting-for-beginners/" target="_blank">https://tproger.ru/translations/sorting-for-beginners/</a> (дата обращения 08.03.2020).</li>
    <li>Кен Браунси. Структура данных и реализация в С++, 2016. –138с. </li>
    <li>Никлаус Вирт. Алгоритмы и структуры данных, 2017. –124с. </li>
</ol>

<!--
<p class="">&#8226; </p>
<code class="highlight"></code>
<p class="">&#8226; </p>
<pre class="highlight"><code data-language="c"></code></pre>
&#60; &#62;
-->


</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>