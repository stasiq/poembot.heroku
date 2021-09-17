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
            'Травка зеленеет, солнышко блестит',
            'Травка зеленеет,
Солнышко блестит;
Ласточка с весною
В сени к нам летит.
С нею солнце краше
И весна милей…
Прощебечь с дороги
Нам привет скорей!
Дам тебе я зерен,
А ты песню спой,
Что из стран далеких
Принесла с собой…',
            'https://cdn.pnp.ru/upload/entities/2018/02/20/article/detailPicture/83/81/99/0a/071bf60962228836a6757d938fec08c3.jpg'
        ];
        $poems['sad'] = [
            'Бородино',
            '— Скажи-ка, дядя, ведь не даром
Москва, спаленная пожаром,
Французу отдана?
Ведь были ж схватки боевые,
Да, говорят, еще какие!
Недаром помнит вся Россия
Про день Бородина!',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLOXzqFMAQYZ4Iclanud_lff-N80VnhHd3jg&usqp=CAU'
        ];
        $poems['soul'] = [
            'Так оно и есть…',
            'Так оно и есть —
Словно встарь, словно встарь:
Если шел вразрез —
На фонарь, на фонарь,
Если воровал —
Значит, сел, значит, сел,
Если много знал —
Под расстрел, под расстрел!',
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