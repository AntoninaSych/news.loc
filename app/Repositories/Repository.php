<?php

namespace News\Repositories;

use Config;

abstract class Repository
{

    protected $model = FALSE;

    public function get($select = "*", $take = FALSE, $pagination = FALSE)
    {
//       dd( $this->model);
        $builder = $this->model->select($select);

        if ($take) {
            $builder->take($take);
        }

        if ($pagination) {
            return $this->check($builder->paginate(Config::get('settings.paginate')));
        }

        return $this->check($builder->get());
    }


    protected function check($result)
    {

        if ($result->isEmpty()) {
            return FALSE;
        }

        $result->transform(function ($item, $key) {

            if (is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)) {
                $item->img = json_decode($item->img);
            }


            return $item;

        });

        return $result;

    }

    public function one($alias)
    {

        $res = $this->model->where('alias', $alias)->first();

        if (is_string($res->img) && is_object(json_decode($res->img)) && (json_last_error() == JSON_ERROR_NONE)) {
            $res->img = json_decode($res->img);
        }
        return $res;
    }

    public function theone($alias,$attr = array()) {
        $result = $this->model->where('alias',$alias)->first();

        return $result;
    }



    public function transliterate($string)
    {
        $str = mb_strtolower($string, 'UTF-8');

        $leter_array = array(
            'a' => 'а',
            'b' => 'б',
            'v' => 'в',
            'g' => 'г,ґ',
            'd' => 'д',
            'e' => 'е,є,э',
            'jo' => 'ё',
            'zh' => 'ж',
            'z' => 'з',
            'i' => 'и,і',
            'ji' => 'ї',
            'j' => 'й',
            'k' => 'к',
            'l' => 'л',
            'm' => 'м',
            'n' => 'н',
            'o' => 'о',
            'p' => 'п',
            'r' => 'р',
            's' => 'с',
            't' => 'т',
            'u' => 'у',
            'f' => 'ф',
            'kh' => 'х',
            'ts' => 'ц',
            'ch' => 'ч',
            'sh' => 'ш',
            'shch' => 'щ',
            '' => 'ъ',
            'y' => 'ы',
            '' => 'ь',
            'yu' => 'ю',
            'ya' => 'я',
        );

        foreach ($leter_array as $leter => $kyr) {
            $kyr = explode(',', $kyr);

            $str = str_replace($kyr, $leter, $str);

        }

        //  A-Za-z0-9-
        $str = preg_replace('/(\s|[^A-Za-z0-9\-])+/', '-', $str);

        $str = trim($str, '-');

        return $str;
    }
}
