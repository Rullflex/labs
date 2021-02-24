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

<h2 id="1">1. Постановка задачи</h2>
<p>&#8226;Реализовать класс Вектор. Размер вектора ограничен значением MAX_SIZE=30. Перегрузить для него операции: </p>
<ul>
    <li>доступ по индексу([int i]);</li>
    <li>добавление элемента (+ int);</li>
    <li>удаление элемента из начала вектора (--).</li>
</ul>
<p>&#8226;Предусмотреть генерацию исключительных ситуаций.
<br>
Исключительные ситуации генерируются: </p>
<ol>
    <li>в конструкторе с параметром при попытке создать вектор больше максимального размера; </li>
    <li> в операции [] – при попытке обратиться к элементу с номером меньше 0 или больше текущего размера вектора;</li>
    <li>в операции + – при попытке добавить элемент с номером больше максимального размера;</li>
    <li>в операции – при попытке удалить элемент из пустого вектора.</li>
</ol>

<p><span class="lead">ВАРИАНТ РЕАЛИЗАЦИИ 1. </span></p>

<p>&#8226;Информация об исключительных ситуациях передается с помощью стандартного типа данных.</p>
<ol>
    <li>Создать пустой проект; </li>
    <li> Добавить в него класс Vector;</li>
    <li>В файл Vector.h добавить описание класса Vector:</li>
    <div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
#pragma once

#include &#60;iostream&#62;

using namespace std;

const int MAX_SIZE=30;//максимальный размер вектора

class Vector

{

int size;//текущий размер

int *beg;//указатель на начало динамического массива public:

Vector(){size=0;beg=0;}//конструктор без параметров

Vector(int s);//конструктор с параметром

Vector(int s,int* mas);//конструктор с параметром

Vector(const Vector&v);//конструктор копирования

~Vector();//деструктор

const Vector& operator=(const Vector&v);// операция присваивания int operator[](int i);//доступ по индексу

Vector operator+(int a);//добавление элемента Vector operator--();//удаление элемента

//дружественные функции ввода-вывода

friend ostream& operator&#60;&#60;(ostream&out, const Vector&v); friend istream& operator&#62;&#62;(istream& in, Vector&v);

}; 
</code></pre>
				</div>
			</div>
<li>В файл Vector.cpp добавить определение методов класса Vector:</li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
Vector::Vector(int s)

{

//если текущий размер больше максимального, то генерируется исключение

if(s&#62;MAX_SIZE) throw 1;

size=s;

beg=new int [s];

for(int i=0;i&#60;size;i++)

beg[i]=0;

}

Vector::Vector(const Vector &v)

{

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

}

Vector::~Vector()

{

if (beg!=0) delete[]beg;

}

Vector::Vector(int s,int *mas)

{

//если текущий размер больше максимального, то генерируется исключение if(s>MAX_SIZE) throw 1;

size=s;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=mas[i];

}

const Vector& Vector::operator =(const Vector &v)

{

if(this==&v)return *this;

if(beg!=0) delete []beg;

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

return*this;

}

ostream& operator<<(ostream&out, const Vector&v)

{

if(v.size==0) out<<"Empty\n";

else

{

for (int i=0;i&#60;v.size;i++)

out&#60;&#60;v.beg[i]&#60;&#60;" ";

out&#60;&#60;endl;

}

return out;

}

istream& operator &#62;&#62;(istream&in, Vector&v)

{

for(int i=0;i&#60;v.size;i++)

{

cout<<">";

in&#62;&#62;v.beg[i];

}

return in;

}

int Vector::operator [](int i)

{

if(i&#60;0)throw 2;//если индекс отрицательный, то генерируется исключение //если индекс больше размер вектора, то генерируется исключение

if(i>=size) throw error("Vector length more than MAXSIZE\n"); return beg[i];

}

Vector Vector::operator +(int a)

{

//если при добавлении элемента размер вектора станет больше максимального, //то генерируется исключение

if(size+1==MAX_SIZE) throw 4;

Vector temp(size+1,beg);

temp.beg[size]=a;

return temp;

}

Vector Vector::operator --()

{

//если вектор пустой, то удалить элемент нельзи и генерируется исключение if(size==0) throw 5;

if (size==1)//если в вектор один элемент {

size=0;

delete[]beg;

beg=0;

return *this;

};

Vector temp(size,beg);

delete[]beg;

size--;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=temp.beg[i];

return*this;

}
</code></pre>
				</div>
            </div>
            
<li>Добавить в проект файл lab9_main.cpp. В файл записать функцию main(), создающую объекты класса Vector и позволяющую генерировать исключительные ситуации.  </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #include "Vector.h"

#include &#60;iostream&#62;

using namespace std;

int main()

{

//контролируемый блок

try

{

Vector x(2);//вектор из двух элементов

Vector y;//пустой вектор

cout&#60;&#60;x;//печать вектора х

cout&#60;&#60;"Nomer?";

int i;

cin&#62;&#62;i;

//вывод элемента с номером i, если номер больше 2 или меньше 0, то //генерируется исключительная ситуация

cout&#60;&#60;x[i]&#60;&#60;endl;

//добавление элемента в вектор, если MAX_SIZE=2, то генерируется //исключительная ситуация

y=x+3;

cout&#60;&#60;y;

//удалить один элемент из вектора

--x;

cout&#60;&#60;x;

//удалить один элемент из вектора

--x;

cout&#60;&#60;x;//вектор пустой

//удалить один элемент из вектора

//генерируется исключительная ситуация

--x;

}

//обработчик исключения

catch(int)

{cout<< "ERROR!!!"&#60;&#60;endl;}//сообщение об ошибке return 0;

}
</code></pre>
				</div>
            </div>
            <li>Выполнить тестирование программы с генерацией различных исключительных ситуаций.</li>
</ol>

<p><span class="lead">ВАРИАНТ РЕАЛИЗАЦИИ 2. </span></p>

<p>&#8226;Информация об исключительных ситуациях передается с помощью пользовательского класса.</p>
<ol>
    <li>Создать пустой проект; </li>
    <li> Добавить в него файл error.h;</li>
    <li>В файл error.h добавить описание класса error:</li>
    <div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #pragma once

#include <string>

#include <iostream>

using namespace std;

class error //класс ошибка

{

string str;

public:

//конструктор, инициирует атрибут str сообщением об ошибке error(string s){str=s;}

void what(){cout<&#60;str<&#60;endl;} //выводит значение атрибута str

};
			</code></pre>
				</div>
			</div>
<li>Добавить класс Vector. В файл Vector.h добавить описание класса Vector: </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #pragma once

#include &#60;iostream&#62;

using namespace std;

const int MAX_SIZE=20;

class Vector

{

int size;

int *beg;

public:

Vector(){size=0;beg=0;}

Vector(int s);

Vector(int s,int* mas);

Vector(const Vector&v);

~Vector();

const Vector& operator=(const Vector&v); int operator[](int i); Vector operator+(int a);

Vector operator--();

friend ostream& operator<<(ostream&out, const Vector&v); friend istream& operator>>(istream& in, Vector&v);

};
			</code></pre>
				</div>
			</div>

<li>В файл Vector.cpp добавить определение методов класса Vector:  </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            include "Vector.h"

#include "Error.h"

#include <iostream>

using namespace std;

Vector::Vector(int s)

{

if(s>MAX_SIZE) throw error("Vector length more than MAXSIZE\n"); size=s;

beg=new int [s];

for(int i=0;i&#60;size;i++)

beg[i]=0;

}

Vector::Vector(const Vector &v)

{

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

}

Vector::~Vector()

{

if (beg!=0) delete[]beg;

}

Vector::Vector(int s,int *mas)

{

if(s>MAX_SIZE) throw error("Vector length more than MAXSIZE\n"); size=s;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=mas[i];

}

const Vector& Vector::operator =(const Vector &v)

{

if(this==&v)return *this;

if(beg!=0) delete []beg;

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

return*this;

}

ostream& operator<<(ostream&out, const Vector&v)

{

if(v.size==0) out<<"Empty\n";

else

{

for (int i=0;i&#60;v.size;i++)

out<&#60;v.beg[i]<<" ";

out<&#60;endl;

}

return out;

}

istream& operator >>(istream&in, Vector&v)

{

for(int i=0;i&#60;v.size;i++)

{

cout<<">";

in>>v.beg[i];

}

return in;

}

int Vector::operator [](int i)

{

if(i&#60;0) throw error("index &#60;0");

if(i>=size) throw error("index>size"); return beg[i];

}

Vector Vector::operator +(int a)

{

if(size+1==MAX_SIZE) throw 4;

Vector temp(size+1,beg);

temp.beg[size]=a;

return temp;

}

Vector Vector::operator --()

{

if(size==0) throw error("Vector is empty");

if (size==1)

{

size=0;

delete[]beg;

beg=0;

return *this;

};

Vector temp(size,beg);

delete[]beg;

size--;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=temp.beg[i];

return*this;

}
			</code></pre>
				</div>
			</div>

 <li> Добавить в проект файл lab9_main.cpp. В файл записать функцию main(), создающую объекты класса Vector и позволяющую генерировать исключительные ситуации. </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #include "Vector.h"

#include "Error.h"

#include &#60;iostream>

using namespace std;

int main()

{

try

{

Vector x(2);

Vector y;

cout<&#60;x;

cout<<"Nomer?";

int i;

cin>>i;

cout<&#60;x[i]<&#60;endl;

y=x+3;

cout<&#60;y;

--x;

cout<&#60;x;

--x;

cout<&#60;x;

--x;

}

catch(error e)

{e.what();}

return 0;

}
			</code></pre>
				</div>
			</div>

<li>Выполнить тестирование программы с генерацией различных исключительных ситуаций. </li> 
</ol>

<p><span class="lead">ВАРИАНТ РЕАЛИЗАЦИИ 3. </span></p>

<p>&#8226;Информация об исключительных ситуациях передается с помощью иерархии пользовательских классов. </p>
<ol>
    <li>Создать пустой проект; </li>
    <li> Добавить в него файл error.h;</li>
    <li>В файл error.h добавить описание иерархии пользовательских классов для определения исключительных ситуаций.</li>
    <div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #pragma once

#include &#60;string>

#include &#60;iostream>

using namespace std;

class Error//базовый класс

{

public:

virtual void what(){};

};

class IndexError:public Error //ошибка в индексе вектора

{

protected:

string msg;

public:

IndexError(){msg="Index Error\n";}

virtual void what(){cout<&#60;msg;}

};

class SizeError:public Error //ошибка в размере вектора

{

protected:

string msg;

public:

SizeError(){msg="size error\n";}

virtual void what(){cout<&#60;msg;}

};

class MaxSizeError:public SizeError //превышение максимального размера

{

protected:

string msg_;

public:

MaxSizeError(){SizeError();msg_="size>MAXSIZE\n";} virtual void what(){cout<&#60;msg<&#60;msg_;}

};

class EmptySizeError:public SizeError //удаление из пустого вектора

{

protected:

string msg_;

public:

EmptySizeError(){SizeError();msg_="Vector is empty\n";} virtual void what(){cout<&#60;msg<&#60;msg_;}

};

class IndexError1:public IndexError //индекс меньше нуля

{

protected:

string msg_;

public:

IndexError1(){IndexError();msg_="index &#60;0\n";} virtual void what(){cout<&#60;msg<&#60;msg_;}

};

class IndexError2:public IndexError //индекс больше текущего размера вектора

{

protected:

string msg_;

public:

IndexError2(){IndexError();msg_="index>size\n";} virtual void what(){cout<&#60;msg<&#60;msg_;}

};
			</code></pre>
				</div>
			</div>
<li>Добавить класс Vector. В файл Vector.h добавить описание класса Vector: </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
const int MAX_SIZE=20;
class Vector
{
int size;
int *beg;
public:
Vector(){size=0;beg=0;}
Vector(int s);
Vector(int s,int* mas);
Vector(const Vector&v);
~Vector();
const Vector& operator=(const Vector&v); int operator[](int i); Vector operator+(int a);
Vector operator--();
friend ostream& operator<<(ostream&out, const Vector&v); friend istream& operator>>(istream& in, Vector&v);
};
			</code></pre>
				</div>
			</div>

<li>В файл Vector.cpp добавить определение методов класса Vector:  </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
            #include "Vector.h"

#include "Error.h"

#include &#60;iostream>

using namespace std;

Vector::Vector(int s)

{

if(s>MAX_SIZE) throw MaxSizeError();

size=s;

beg=new int [s];

for(int i=0;i&#60;size;i++)

beg[i]=0;

}

Vector::Vector(const Vector &v)

{

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

}

Vector::~Vector()

{

if (beg!=0) delete[]beg;

}

Vector::Vector(int s,int *mas)

{

size=s;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=mas[i];

}

const Vector& Vector::operator =(const Vector &v)

{

if(this==&v)return *this;

if(beg!=0) delete []beg;

size=v.size;

beg=new int [size];

for(int i=0;i&#60;size;i++)

beg[i]=v.beg[i];

return*this;

}

ostream& operator<<(ostream&out, const Vector&v)

{

if(v.size==0) out<<"Empty\n";

else

{

for (int i=0;i&#60;v.size;i++)

out<&#60;v.beg[i]<<" ";

out<&#60;endl;

}

return out;

}

istream& operator &#62;&#62;(istream&in, Vector&v)

{

for(int i=0;i&#60;v.size;i++)

{

cout<<">";

in>>v.beg[i];

}

return in;

}

int Vector::operator [](int i)

{

if(i&#60;0)throw IndexError1();

if(i>=size) throw IndexError2();

return beg[i];

}

Vector Vector::operator +(int a)

{

if(size+1==MAX_SIZE) throw MaxSizeError(); Vector temp(size+1,beg); temp.beg[size]=a;

return temp;

}

Vector Vector::operator --()

{

if(size==0) throw EmptySizeError();

if (size==1)

{

size=0;

delete[]beg;

beg=0;

return *this;

};

Vector temp(size,beg);

delete[]beg;

size--;

beg=new int[size];

for(int i=0;i&#60;size;i++)

beg[i]=temp.beg[i];

return*this;

} 
			</code></pre>
				</div>
			</div>

 <li> Добавить в проект файл lab9_main.cpp. В файл записать функцию main(), создающую объекты класса Vector и позволяющую генерировать исключительные ситуации. </li>
<div class="spollers__item">
				<div class="spollers__title spoller">Код (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
#include "Vector.h"
#include "Error.h"
#include &#60;iostream>
using namespace std;
int main()
{
    try
    {
    Vector x(2);
    Vector y;
    cout<&#60;x;
    cout<<"Nomer?";
    int i;
    cin>>i;
    cout<&#60;x[i]<&#60;endl;
    y=x+3;
    cout<&#60;y;
    --x;
    cout<&#60;x;
    --x;
    cout<&#60;x;
    --x;
    }
        catch(Error &e)
        {
        e.what();
        }
    return 0;
} 
			</code></pre>
				</div>
			</div>

<li>Выполнить тестирование программы с генерацией различных исключительных ситуаций. </li> 
</ol>

<h2 id="2">2. Варианты заданий</h2>
<table class="">
<thead>
    <tr>
        <th>
            №
        </th>
        <th>
            Задание:
        </th>
        <th>
            Вариант реализации:
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции:
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера вектора;</li>
<li>+ число – добавляет константу ко всем элементам вектора;</li>
<li>- n- удаляет n элементов из конца вектора</li>
</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции:
<ul><li>[] – доступа по индексу;</li>
<li>int() – определение размера вектора;</li>

<li>- n- удаляет n элементов из конца вектора</li>
<li>+ n - добавляет n элементов в конец вектора.</li>
</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>3</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>+ +– добавляет элемент в вектор (постфиксная операция
добавляет элемент в конец, префиксная в начало)</li>
</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>4</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера вектора; </li>
<li><b>- -</b> – удаляет элемент из вектора (постфиксная операция
удаляет элемент в конец вектора, префиксная – в начало) </li>

</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>5</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера вектора; </li>
<li>* вектор – умножение элементов векторов a[i]*b[i]; </li>
<li>+ n – переход вправо к элементу с номером n .</li>

</ul></td>
        <td>2 , 3</td>
    </tr>

       <tr>
        <td>6</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера множества; </li>
<li>+ – объединение множеств; </li>
<li>++ - добавление элемента в множество .</li>

</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>7</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера множеств; </li>
<li>* – пересечение множеств; </li>
<li><b>--</b> - удаление элемента из множества. </li>

</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>8</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>== - проверка на равенство; </li>
<li>> число – принадлежность числа множеству;  </li>
<li><b>--</b> - n - переход влево к элементу с номером n.  </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>9</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>!= - проверка на неравенство; </li>
<li>< число – принадлежность числа множеству; </li>
<li><b>--</b> + n – переход вправо к элементу с номером n .  </li>

</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>10</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера множеств; </li>
<li><b>-</b> – разность множеств;  </li>
<li><b>--</b> – удаление элемента из множества.  </li>

</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>11</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>int() – определение размера списка; </li>
<li> + вектор – сложение элементов списков a[i]+b[i];   </li>
<li><b>-</b> n - переход влево к элементу c номером n.  </li>

</ul></td>
        <td>2 , 3</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>int() – определение размера списка; </li>
<li> + число – добавляет константу ко всем элементам списка;   </li>
<li> ++ - добавление элемента в конец списка.  </li>

</ul></td>
        <td>1 , 3</td>
    </tr>

    <tr>
        <td>13</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>+ вектор – добавление списка b к списку a (a+b) </li>
<li> + число – добавляет элемент в начало списка;  </li>


</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>14</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li> * число – умножает все элементы списка на число;   </li>
<li> - n – переход влево к элементу с номером n.  </li>

</ul></td>
        <td>2 , 3</td>
    </tr>
    
    <tr>
        <td>15</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>* вектор – умножение элементов списков a[i]*b[i];   </li>
<li> +n - переход вправо к элементу с номером n. </li>

</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>16</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>+ вектор – добавление списка b к списку a (a+b) </li>
<li> + число – добавляет элемент в начало списка;  </li>

</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>17</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>* число – умножает все элементы списка на число; </li>
<li> - n – переход влево к элементу с номером n.  </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>18</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>* вектор – умножение элементов списков a[i]*b[i];</li>
<li> +n - переход вправо к элементу с номером n.  </li>

</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>19</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>+ число – добавляет константу ко всем элементам вектора; </li>
<li> ++ - добавление элемента в конец списка.  </li>

</ul></td>
        <td>1 , 3</td>
    </tr>

    <tr>
        <td>20</td>
        <td>Класс- контейнер СПИСОК с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера списка;  </li>
<li>+ вектор – сложение элементов списков a[i]+b[i]; </li>
<li> - n - переход влево к элементу c номером n.   </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>21</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>() – определение размера множества;  </li>
<li><b>-</b> – разность множеств;  </li>
<li> <b>--</b> – удаление элемента из множества.   </li>

</ul></td>
        <td>1 , 2</td>
    </tr>

    <tr>
        <td>22</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>!= - проверка на неравенство;</li>
<li>< число – принадлежность числа множеству;</li>
<li> + n – переход вправо к элементу с номером n .</li>

</ul></td>
        <td>3 , 1</td>
    </tr>

    <tr>
        <td>23</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>== - проверка на равенство; </li>
<li>> число – принадлежность числа множеству; </li>
<li> <b>- </b> n - переход влево к элементу с номером n. </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>24</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>int() – определение размера вектора;  </li>
<li>* вектор – умножение элементов векторов a[i]*b[i]; </li>
<li>  + n – переход вправо к элементу с номером n . </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

    <tr>
        <td>25</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.<br>
Реализовать операции: 
<ul><li>[] – доступа по индексу;</li>
<li>int() – определение размера вектора;  </li>
<li><b>- </b> n – удаляет n элементов из конца вектора; </li>
<li> + n - добавляет n элементов в конец вектора. </li>

</ul></td>
        <td>2 , 3</td>
    </tr>

</tbody>
</table>

<h2 id="3">3. Содержание отчета</h2>
<ol>
    <li>Постановка задачи (общая и конкретного варианта).</li>
    <li>Словесное описание исключительных ситуаций.</li>
    <li>Определение класса error или иерархии пользовательских классов для определения исключительных ситуаций (если есть необходимость).</li>
    <li>Описание класса-контейнера. </li>
    <li>Определение компонентных функций для класса-конетейнера. </li>
    <li>Функция main(). </li>
    <li>Объяснение результатов работы программы.</li>
    <li>Ответы на контрольные вопросы.</li>
</ol>
<!-- У отправки поменять только id и номер -->
<?php
if ($sendwork_off == false) { ?>
    <h2 id="4">4. Отправить результат работы</h2>
    <?php include ($r_base."assets/php_modules/form_sendwork.tpt.php"); 
}
?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>