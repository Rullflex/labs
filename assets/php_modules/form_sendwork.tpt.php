<?php
if ($sendwork_off == false) {
    if (isset($_SESSION['user'])) { ?> 

        <form autocomplete="on" enctype="multipart/form-data" method="post" id="form-sendlab">
            <div class="form-group">
                <label for="lr">Выберите Лабораторную работу</label>
                <select name="lr" id="lr"  class="form-control" required>
                    <option value="6">6 - Динамические массивы</option>
                    <option value="7">7 - Функции и массивы</option>
                    <option value="8">8 - Структуры</option>
                    <option value="9">9 - Нелинейные уравнения (4-й столбец ЛР7э)</option>
                    <option value="10">10 - Работа с функциями (1–3-й столбцы ЛР7э)</option>
                    <option value="11">11 - Методы сортировки</option>
                    <option value="12">12 - Задача о восьми ферзях</option>
                    <option value="13">13 - Рекурсия</option>
                    <option value="14.1">14.1 - Одно- и двунаправленные списки через структуры (1-2 столбцы)</option>
                    <option value="14.2">14.2 - Стеки и очереди через структуры (1-2 столбцы)</option>
                    <option value="15">15 - Сортировка стека через stl-контейнеры</option>
                    <option value="16">16 - Поиск Бойера-Мура и интерполяция</option>
                    <option value="17">17 - Сортировка подсчётом и быстрая сортировка</option>
                    <option value="18">18 - Поиск данных с помощью хэш-таблиц</option>
                    <option value="19">19 - Бинарные деревья</option>
                    <option value="20">20 - Классы и объекты. Инкапсуляция, конструкторы</option>
                    <option value="21">21 - Простое наследование. Принцип подстановки</option>
                    <option value="22">22 - Наследование. Виртуальные функции. Полиморфизм</option>
                </select>
            </div>
            <div class="form-group"><!--  id="droparea" -->
                <label for="file">Загрузите файл <span class="alert-warning">&#8194;один .zip/.rar архив со всеми документами внутри&#8194;</span> </label>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                <input type="file" name="userfile" class="form-control-file" id="file" multiple required>
            </div>
            <div class="form-group">
                <label for="tutor">Кому отправлять работу</label> 
                <select name="tutor" id=""  class="form-control" required>
                    <option value="Деменев Андрей">Деменев Андрей</option>
                    <option value="Миннахметов Эльдар">Миннахметов Эльдар</option>
                    <option value="Зиятдинов Расиль">Зиятдинов Расиль</option>
                    <option value="Неволин Сергей">Неволин Сергей</option>
                    <option value="Филатова Анна">Филатова Анна</option>
                    <option value="Пепеляев Николай">Пепеляев Николай</option>
                    <option value="Ваганов Илья">Ваганов Илья</option>
                    <option value="Шеретов Марк">Шеретов Марк</option>
                    <option value="Горшков Дмитрий">Горшков Дмитрий</option>
                    <option value="Куликов Максим">Куликов Максим</option>
                </select>
            </div>
            <div class="form-group">
                <label for="other">Дополнительные методы связи <span class="alert-warning">&#8194;vk, discord, telegram, whatsapp ...&#8194;</span></label>
                <input type="text" name="other" id="other" class="form-control" placeholder="https://vk.com/MyID">
                    <span class="" style="color: rgb(122, 122, 122)">&#8194;Проверяющий свяжется с вами при возникновении вопросов&#8194;</span>
            </div>
            <div class="form-group">
                <label for="add_info">Дополнительное сообщение куратору</label>
                <textarea name="add_info" id="add_info"  rows="4" class="form-control" placeholder="Если возникнут вопросы свяжитесь со мной через ВКонтакте, мне так будет удобнее, спасибо!"></textarea>
            </div>
                
            
            <button type="submit" class="btn btn-primary" id="btnSubmit"><span id="btnSubmit__spiner" class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Отправить</button>
            
        
            <div id="form-success-hidden" class="hidden">
                <hr class="allert-hr">
                <div class="alert alert-success">Отправлено!</div>
            </div>
            <div id="form-danger-hidden" class="hidden">
                <hr class="allert-hr">
                <div class="alert alert-danger"><span id="error_num"></span></div>
            </div>
            
        </form>
        <?php } else {?>
            <a href="/auth" class="btn btn-warning" style="">Авторизуйтесь, что бы отправить работу</a>  
        <?php }
}?>


