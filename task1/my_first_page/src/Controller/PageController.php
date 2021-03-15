<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class PageController
{
    public function page(): Response
    {
        return new Response
        (
    '
           <html lang="en">
           <head>
           <meta charset="UTF-8"/>
           <meta name="description" content="Страница обо мне, моих увлечениях, о том почему постипил на ПС и чем хочу знаиматься"/>
           <meta name="author" content="Федосеев Евгений ПС-13"/>
           <meta name="keywords" content="My page, истории людей, студенты ПС"/>
           <title>Page about me</title>
           </head>
           <body>
               <h1>Cтраница обо мне</h1> 
               <img src="https://github.com/EvGeN1s/web-development/blob/main/lw4/img/1.jpg" alt="Титульное фото"/>
               <h2>Мои увлечения</h2>
               <ul>
                 <li>Баскетбол</li>           
                 <li>Программирование</li>
                 <li>Компьюьерные игры</li>
               </ul>    
               <p>В баскетбол играю уже 4 года. За это время много чему научился. Принимал участие в различных соревнованиях. В школьные годы был капитаном команды</p>
               <p>С программирование познакомился ещё в начальной школе на робототехнике, но на более осознаном уровне начал заниматься только в 10 классе</p>
               <p>В компьютер начал играть с 1 класса. В классе 5 начал игарть в мултиплеерные игры. Было очень интересно получать новый опыт, становится лучше. Сейчас появился новый взгляд на игры: их устройство</p>
               <h2>Поступление на ПС</h2>
               <p>На ПС я поступил, чтобы получить фундаментальные зания о строение, архитектуре и разработке программ. Огромным плюсом этого направления является то, что большинство преподавателей программирования непосредственно разрабатывают программы в компаниях города</p>
               <h2>Зачем мне нужна весеняя практика</h2>
               <p>Я хочу получить новые знания и самое главное на основе этой базы решить реальную задачу</p>
           </body>
           </html>'
        );
    }
}