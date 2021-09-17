<?php

namespace App\models;

use App\classes\Db as Db;
use PDO;

class PoemModel
{

    public static function getItem($theme)
    {
        $poems = [];
        $poems['fun'] = [
            'Травка зеленеет, солнышко блестит <br>',
            'Травка зеленеет <br>,
Солнышко блестит <br>;
Ласточка с весною <br>
В сени к нам летит. <br>
С нею солнце краше <br>
И весна милей… <br>
Прощебечь с дороги <br>
Нам привет скорей! <br>
Дам тебе я зерен, <br>
А ты песню спой, <br>
Что из стран далеких <br>
Принесла с собой… <br>',
            'https://cdn.pnp.ru/upload/entities/2018/02/20/article/detailPicture/83/81/99/0a/071bf60962228836a6757d938fec08c3.jpg'
        ];
        $poems['sad'] = [
            'Бородино <br>',
            '— Скажи-ка, дядя, ведь не даром <br>
Москва, спаленная пожаром, <br>
Французу отдана? <br>
Ведь были ж схватки боевые, <br>
Да, говорят, еще какие! <br>
Недаром помнит вся Россия <br>
Про день Бородина! <br>',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLOXzqFMAQYZ4Iclanud_lff-N80VnhHd3jg&usqp=CAU'
        ];
        $poems['soul'] = [
            'Так оно и есть… <br>',
            'Так оно и есть — <br>
Словно встарь, словно встарь: <br>
Если шел вразрез — <br>
На фонарь, на фонарь, <br>
Если воровал — <br>
Значит, сел, значит, сел, <br>
Если много знал — <br>
Под расстрел, под расстрел! <br>',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmx2cqqVen3wdDxKPdPsNg7OTlBsoiPYfKKw&usqp=CAU'
        ];
        return $poems[$theme];
//     $db = Db::getConnect();
//     $query = $db->query("SELECT * FROM poems WHERE theme_id = $theme");
//     $row = $query->fetch(PDO::FETCH_OBJ);
//     return $row;
    }
    public static function getList()
    {
        $db = Db::getConnect();
        $query = $db->query("SELECT * FROM poems");
        $rows = [];
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $rows[] = $row;
        }
        return $rows;
    }

}